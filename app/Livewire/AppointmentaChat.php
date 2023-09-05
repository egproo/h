<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\Service;
use App\Models\Provider;
use App\Models\ServicesSession;
use App\Models\Appointment;
use App\Models\Admin;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Session;
use Filament\Notifications\Events\DatabaseNotificationsSent;
class AppointmentaChat extends Component
{
    protected $adminId;
    public $appointmentId;
    public $messages = [];
    public $newMessage;
public $appointment;
    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->adminId = Filament::auth('admincp')->user()->id;
	$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;
		
    }
    public function render()
    {
        $this->messages = Message::where('appointment_id', $this->appointmentId)->orderBy('id', 'asc')->latest()->orderBy('created_at', 'asc')->get();
		
		$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;	
		return view('livewire.appointmenta-chat', ['messages' => $this->messages,'appointment' =>  $this->appointment]);

    }

    public function sendMessage()
    {
	$adminIdx = Filament::auth('admincp')->user()->id;
	
        // التحقق من وجود رسالة جديدة قبل حفظها
        if(trim($this->newMessage) !== '') {
            Message::create([
                'appointment_id' => $this->appointmentId,
                'content' => $this->newMessage,
                'admin_id' => $adminIdx,
            ]);

$message = 'تم ارسال رسالتك الى العميل بنجاح';

    $admin = Admin::find($adminIdx);

		Notification::make()
			->title($message)
			->sendToDatabase($admin);
		Notification::make()
			->title($message)	
						->danger()
						->send();			
$user = User::find($this->appointment->user->id);//$this->appointment->provider;

$messagep = 'رسالة جديدة من  إدارة حريص بخصوص الحجز رقم '.$this->appointmentId;

// إشعار للعميل
Notification::make()
    ->title($messagep)
    ->danger()
    ->sendToDatabase($user); // إرسال الإشعار إلى المزود

event(new DatabaseNotificationsSent($user));


$provider = Provider::find($this->appointment->provider->id);//$this->appointment->provider;

$messagep = 'رسالة جديدة من  إدارة حريص بخصوص الحجز رقم '.$this->appointmentId;

// إشعار للعميل
Notification::make()
    ->title($messagep)
    ->danger()
    ->sendToDatabase($provider); // إرسال الإشعار إلى المزود

event(new DatabaseNotificationsSent($provider));
	
	
            $this->newMessage = ''; // لإعادة تعيين حقل الإدخال
        }
    }
}
