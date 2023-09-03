<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TicketReply;
use Filament\Facades\Filament;
use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\Service;
use App\Models\Provider;
use App\Models\ServicesSession;
use App\Models\Ticket;
use App\Models\Admin;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Session;
use Filament\Notifications\Events\DatabaseNotificationsSent;

class TicketChat extends Component
{
    protected $userId;
    public $ticketId;
    public $replies = [];
    public $newReply;
    public $ticket;
    public function mount($ticketId)
    {
        $this->ticketId = $ticketId;
        $this->userId = Filament::auth('dashboard')->user()->id;
    	$ticket = Ticket::find($this->ticketId);
        $this->ticket = $ticket;
		
    }

    public function render()
    {
        $this->replies = TicketReply::where('ticket_id', $this->ticketId)->latest()->get();
		
		$ticket = Ticket::find($this->ticketId);
        $this->ticket = $ticket;	
		return view('livewire.ticket-chat', ['replies' => $this->replies,'ticket' =>  $this->ticket]);

    }

    public function sendMessage()
    {
		$userIdx = Filament::auth('dashboard')->user()->id;
        // التحقق من وجود رسالة جديدة قبل حفظها
        if(trim($this->newReply) !== '') {
            TicketReply::create([
                'ticket_id' => $this->ticketId,
                'client_type' => 'user',
				'reply' => $this->newReply,
                'user_id' => $userIdx,
            ]);
		$message = 'تم ارسال رسالتك الى إدارة حريص بنجاح';
		$user = User::find($userIdx);
		$userfullname = $user->name;
		Notification::make()
			->title($message)
			->sendToDatabase($user);
		Notification::make()
			->title($message)	
						->danger()
						->send();			
		$admins = Admin::all();//$this->ticket->provider;

		foreach($admins as $admin){
		$messagep = 'رسالة جديدة من العميل '.$userfullname.' في تذكرة الدعم رقم '.$this->ticketId;

		// إشعار للمزود
		Notification::make()
			->title($messagep)
			->danger()
			->sendToDatabase($admin); // إرسال الإشعار إلى المزود

		event(new DatabaseNotificationsSent($admin));
		}
            $this->newReply = ''; // لإعادة تعيين حقل الإدخال
        }
    }
}
