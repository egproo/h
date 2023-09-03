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
class AppointmentChat extends Component
{
    protected $userId;
    public $appointmentId;
    public $messages = [];
    public $newMessage;
public $appointment;
    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->userId = Filament::auth('dashboard')->user()->id;
	$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;
		
    }
    public function render()
    {
        $this->messages = Message::where('appointment_id', $this->appointmentId)->latest()->get();
		
		$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;	
		return view('livewire.appointment-chat', ['messages' => $this->messages,'appointment' =>  $this->appointment]);

    }

    public function sendMessage()
    {
	$userIdx = Filament::auth('dashboard')->user()->id;
	
        // التحقق من وجود رسالة جديدة قبل حفظها
        if(trim($this->newMessage) !== '') {
            Message::create([
                'appointment_id' => $this->appointmentId,
                'content' => $this->newMessage,
                'user_id' => $userIdx,
            ]);

$message = 'تم ارسال رسالتك الى موفر الخدمة بنجاح';

    $user = User::find($userIdx);
	$userfullname = $user->name;
	
		Notification::make()
			->title($message)
			->sendToDatabase($user);
		Notification::make()
			->title($message)	
						->danger()
						->send();			
$provider = Provider::find($this->appointment->provider->id);//$this->appointment->provider;

$messagep = 'رسالة جديدة من العميل '.$userfullname.' بخصوص الحجز رقم '.$this->appointmentId;

// إشعار للمزود
Notification::make()
    ->title($messagep)
    ->danger()
    ->sendToDatabase($provider); // إرسال الإشعار إلى المزود

event(new DatabaseNotificationsSent($provider));
		$admins = Admin::all();//$this->ticket->provider;

		foreach($admins as $admin){
$messagep = 'رسالة جديدة من العميل '.$userfullname.' بخصوص الحجز رقم '.$this->appointmentId;

		// إشعار للمزود
		Notification::make()
			->title($messagep)
			->danger()
			->sendToDatabase($admin); // إرسال الإشعار إلى المزود

		event(new DatabaseNotificationsSent($admin));
		}	
            $this->newMessage = ''; // لإعادة تعيين حقل الإدخال
        }
    }
}
