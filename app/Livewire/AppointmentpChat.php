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
class AppointmentpChat extends Component
{
    protected $userId;
    public $appointmentId;
    public $messages = [];
    public $newMessage;
public $appointment;
    public function mount($appointmentId)
    {
        $this->appointmentId = $appointmentId;
        $this->userId = Filament::auth('panel')->user()->id;
	$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;
		
    }
    public function render()
    {
        $this->messages = Message::where('appointment_id', $this->appointmentId)->orderBy('id', 'asc')->latest()->get();
		
		$appointment = Appointment::find($this->appointmentId);
        $this->appointment = $appointment;	
		return view('livewire.appointmentp-chat', ['messages' => $this->messages,'appointment' =>  $this->appointment]);

    }

    public function sendMessage()
    {
	$userIdx = Filament::auth('panel')->user()->id;
	
        // التحقق من وجود رسالة جديدة قبل حفظها
        if(trim($this->newMessage) !== '') {
            Message::create([
                'appointment_id' => $this->appointmentId,
                'content' => $this->newMessage,
                'provider_id' => $userIdx,
            ]);

$message = 'تم ارسال رسالتك الى العميل بنجاح';

    $provider = Provider::find($userIdx);
	$userfullname = $provider->name;
	
		Notification::make()
			->title($message)
			->sendToDatabase($provider);
		Notification::make()
			->title($message)	
						->danger()
						->send();			
$user = User::find($this->appointment->user->id);//$this->appointment->provider;

$messagep = 'رسالة جديدة من  موفر الخدمة '.$userfullname.' بخصوص الحجز رقم '.$this->appointmentId;

// إشعار للعميل
Notification::make()
    ->title($messagep)
    ->danger()
    ->sendToDatabase($user); // إرسال الإشعار إلى المزود

event(new DatabaseNotificationsSent($provider));
		$admins = Admin::all();//$this->ticket->provider;

		foreach($admins as $admin){
$messagep = 'رسالة جديدة من  موفر الخدمة '.$userfullname.' بخصوص الحجز رقم '.$this->appointmentId;

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
