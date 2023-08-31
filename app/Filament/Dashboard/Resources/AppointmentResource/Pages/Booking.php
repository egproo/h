<?php

namespace App\Filament\Dashboard\Resources\AppointmentResource\Pages;

use App\Filament\Dashboard\Resources\AppointmentResource;
use Filament\Resources\Pages\Page;
use Filament\Facades\Filament;
use Livewire\Component;
use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\Service;
use App\Models\Provider;
use App\Models\ServicesSession;
use App\Models\Appointment;
use App\Models\Admin;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Session;

class Booking extends Page
{
    public $services_id;
    public $session_id;
    public $provider_id;
    public $notes;    
    public $desiredDate; // تاريخ الموعد المطلوب
    public $sessions = []; // الجلسات المتاحة بناءً على التاريخ المختار
    public $maxDate;
    public $today;

    protected static string $resource = AppointmentResource::class;

    public function getBreadcrumb(): ?string
    {
        return false;
    }

    protected static string $view = 'filament.dashboard.resources.appointment-resource.pages.booking';

    protected static ?string $title = null;

    protected ?string $heading = "";

    protected ?string $subheading = "";

    public function updatedDesiredDate()
    {
        $this->updateSessions();
    }

    public function updateSessions()
    {
        $dayOfWeek = date('N', strtotime($this->desiredDate));

        $this->sessions = ServicesSession::where('day_of_week', $dayOfWeek)
            ->where('services_id', $this->services_id)
            ->where('provider_id', $this->provider_id)
            ->whereDoesntHave('appointments', function ($query) {
                $query->whereDate('appointment_date', $this->desiredDate);
            })
            ->get();
    }

    public function bookService()
    {
        // 1. Validate the input data
        $validatedData = $this->validate([
            'services_id' => 'required|exists:services,id',
            'session_id' => 'required|exists:services_sessions,id',
            'notes' => 'nullable|string',
        ]);

        // 2. Get the current user
        $userId = Filament::auth()->user()->id;
        $user = User::find($userId);

        // 3. Fetch service and provider details
        $service = Service::find($this->services_id);
        $provider = Provider::find($service->provider_id);

        // 4. Check session availability
        $session = ServicesSession::find($this->session_id);

        $existingAppointment = Appointment::where('services_session_id', $this->session_id)
            ->whereDate('appointment_date', $this->desiredDate)
            ->first();

        if ($existingAppointment) {
            session()->flash('error', 'Session is not available');
            return;
        }

        // 5. Create a preliminary appointment
        $appointment = new Appointment();
        $appointment->user_id = $userId;
        $appointment->service_id = $this->services_id;
        $appointment->services_session_id  = $this->session_id;
        $appointment->notes = $this->notes;
        $appointment->appointment_date = $this->desiredDate;
        $appointment->status = 'pending';
        $appointment->save();

        // 6. Redirect to payment gateway (this should be handled in the blade using JavaScript as you mentioned)
        // After payment, the callback function will handle the payment status and update the appointment status accordingly.

        // 7. Notify user, provider, and all admins
        $this->sendNotification($user, 'Your booking is confirmed.');
        $this->sendNotification($provider, 'A new booking has been made for your service.');
        $admins = Admin::all();
        foreach ($admins as $admin) {
            $this->sendNotification($admin, 'A new booking has been made.');
        }

        session()->flash('message', 'Booking confirmed and payment successful');
    }

    protected function getViewData(): array
    {
        $bookingDetails = Session::get('booking_details', []);
        if(!empty($bookingDetails)){
            $this->services_id = $bookingDetails['service_id'] ?? null;
            $this->provider_id = $bookingDetails['provider_id'] ?? null;

            $today = now();
            $this->today = $today;    
            $this->maxDate = $today->addMonths(3)->endOfMonth()->toDateString();

            $service = Service::find($this->services_id);
            $provider = Provider::find($this->provider_id);

            // تحقق إذا كانت الخدمة هي خدمة فرعية
            if ($service->parent_id) {
                $parentService = Service::find($service->parent_id);
                $fullServiceName = "{$parentService->name} ({$service->name})";
            } else {
                $fullServiceName = $service->name;
            }

            // جلب سعر الخدمة للمقدم المعني
            $servicePrice = $service->activeProviders()->where('provider_id', $this->provider_id)->first()->pivot->price ?? null;
            $sessionxs = ServicesSession::where('services_id', $this->services_id)->where('provider_id', $this->provider_id)->get(); 

            return [
                'service' => $service,
                'provider' => $provider,
                'sessionxs' => $sessionxs,
                'fullServiceName' => $fullServiceName,
                'servicePrice' => $servicePrice,
                'today' => $this->today,
                'maxDate' => $this->maxDate,        
            ];
        } else {
            $today = now();
            $this->today = $today;    
            $this->maxDate = $today->addMonths(3)->endOfMonth()->toDateString();
            return [
                'service' => [],
                'provider' => [],
                'sessionxs' => [],
                'fullServiceName' => '',
                'servicePrice' => '',
                'today' => $this->today,
                'maxDate' => $this->maxDate,            
            ];    
        }
    }

    private function sendNotification($user, $message)
    {
        // Using Filament's broadcast notifications
        Notification::send($user, new BroadcastMessage(['message' => $message]));
    }
}
