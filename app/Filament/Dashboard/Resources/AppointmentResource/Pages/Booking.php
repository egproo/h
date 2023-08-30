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
use Moyasar\Providers\PaymentService;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Session;
class Booking extends Page
{
    public $services_id;
    public $session_id;
    public $notes;	
    public $credit_card;
    protected static string $resource = AppointmentResource::class;
    public function getBreadcrumb(): ?string
    {
        return false;
    }
    protected static string $view = 'filament.dashboard.resources.appointment-resource.pages.booking';

    protected static ?string $title = null;

    protected ?string $heading = "";

    protected ?string $subheading = "";

protected function getViewData(): array
{

    $bookingDetails = Session::get('booking_details', []);
if(!empty($bookingDetails)){
    $this->services_id = $bookingDetails['service_id'] ?? null;
    $this->provider_id = $bookingDetails['provider_id'] ?? null;

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
	$sessionsx = ServicesSession::where('services_id', $this->services_id)->where('provider_id', $this->provider_id)->get(); 

 return [
        'service' => $service,
        'provider' => $provider,
        'sessions' => $sessionsx,
        'fullServiceName' => $fullServiceName,
        'servicePrice' => $servicePrice,
    ];
}else{
	
    return [
        'service' => [],
        'provider' => [],
        'sessions' => [],
        'fullServiceName' => '',
        'servicePrice' => '',
    ];	
}
}


    public function bookService()
    {
        // 1. Validate the input data
        $validatedData = $this->validate([
            'services_id' => 'required|exists:services,id',
            'session_id' => 'required|exists:services_sessions,id',
            'notes' => 'nullable|string',
            'credit_card' => 'required|array',
        ]);

        // 2. Get the current user
        $userId = Filament::auth()->user()->id;
        $user = User::find($userId);

        // 3. Fetch service and provider details
        $service = Service::find($this->services_id);
        $provider = Provider::find($service->provider_id);

        // 4. Check session availability
        $session = ServicesSession::find($this->session_id);
        if (!$session->isAvailable()) {
            session()->flash('error', 'Session is not available');
            return;
        }

        // 5. Create a preliminary appointment
        $appointment = new Appointment();
        $appointment->user_id = $userId;
        $appointment->services_id = $service->id;
        $appointment->session_id = $session->id;
        $appointment->notes = $this->notes;
        $appointment->status = 'pending';
        $appointment->save();

        // 6. Start a payment attempt with Moyasar
        $paymentService = new PaymentService();
        $payment = $paymentService->create([
            'amount' => $service->price,
            'currency' => 'SAR',
            'description' => 'Booking service: ' . $service->name,
            'source' => $this->credit_card,
            'reference_id' => $appointment->id,
        ]);

        // 7. Check payment status
        if ($payment->status == 'paid') {
            $appointment->status = 'confirmed';
            $appointment->save();

            // 8. Notify user, provider, and all admins
            $this->sendNotification($user, 'Your booking is confirmed.');
            $this->sendNotification($provider, 'A new booking has been made for your service.');
            $admins = Admin::all();
            foreach ($admins as $admin) {
                $this->sendNotification($admin, 'A new booking has been made.');
            }

            session()->flash('message', 'Booking confirmed and payment successful');
        } else {
            $appointment->delete();
            session()->flash('error', 'Payment failed');
        }
    }

    private function sendNotification($user, $message)
    {
        // Using Filament's broadcast notifications
        Notification::send($user, new BroadcastMessage(['message' => $message]));
    }
}
