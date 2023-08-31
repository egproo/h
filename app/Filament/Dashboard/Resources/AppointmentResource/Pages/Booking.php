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
    public $appointment_id;	
    public $notes;    
    public $desiredDate;
    public $sDate;	
    public $sessions = [];
    public $maxDate;
    public $today;

    protected static string $resource = AppointmentResource::class;
    protected $listeners = ['bookService' => 'bookService', 'savePayment' => 'savePayment'];

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
	if (empty($this->desiredDate)) {
		$message = 'يجب اختيار تاريخ الحجز.';

		Notification::make()
			->title($message)
			->sendToDatabase($user);
		Notification::make()
			->title($message)	
						->danger()
						->send();	
	  return;
	}
    // 3. Check session availability
    $existingAppointment = Appointment::where('services_session_id', $this->session_id)
        ->whereDate('appointment_date', $this->desiredDate)
        ->first();

    if ($existingAppointment) {
        session()->flash('error', 'Session is not available');
        return;
    }

    // 4. Create a preliminary appointment
    $appointment = new Appointment();
    $appointment->user_id = $userId;
    $appointment->service_id = $this->services_id;
    $appointment->services_session_id  = $this->session_id;
    $appointment->notes = $this->notes;
    $appointment->appointment_date = $this->desiredDate;
    $appointment->status = 'pending';
    $appointment->save();
	
	$this->appointment_id = $appointment->save();

    session()->flash('message', 'Please complete the payment process.');
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
			$dates = collect(range(0, 6))->map(function ($days) {
				return now()->addDays($days)->format('Y-m-d');
			});	
			
            return [
                'service' => $service,
                'provider' => $provider,
                'sessionxs' => $sessionxs,
                'fullServiceName' => $fullServiceName,
                'servicePrice' => $servicePrice,
                'today' => $this->today,
                'maxDate' => $this->maxDate,
				'dates' => $dates,				
            ];
        } else {
            $today = now()->addDays(0)->format('Y-m-d');
            $this->today = $today;    
            $this->maxDate = $today->addMonths(3)->endOfMonth()->toDateString()->format('Y-m-d');
			$dates = collect(range(0, 6))->map(function ($days) {
				return now()->addDays($days)->format('Y-m-d');
			});	
            return [
                'service' => [],
                'provider' => [],
                'sessionxs' => [],
                'fullServiceName' => '',
                'servicePrice' => '',
                'today' => $this->today,
                'maxDate' => $this->maxDate,
				'dates' => $dates,
            ];    
        }
    }
	public function selectDate($selectedDate)
	{
		$this->desiredDate = $selectedDate;
		$this->sDate = $selectedDate;
		$this->updateSessions();
	}	

	public function savePayment($payment)
	{
		// اختيار اذا ما تم الدفع بنجاح
		// تغيير الحالة في جدول payment_attempts is_successful => 1 
		// يتم ارسال اشعار لموفر الخدمة بوجود حجز جديد + يتم ارسال رسالة sms
		// اذا تعذر الدفع او اي شيء اخر يتم حذف الموعد من جدول appointments عن طريق $this->appointment_id
		// يتم ارسال اشعار مثل (empty($this->desiredDate)) حيث يتم ارسال اشعارين سواء في حالة الدفع الناجح او الفاشل
		// التدقيق هل نحتاج شيء اخر
	}
	
}
