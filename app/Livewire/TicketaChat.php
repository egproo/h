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

class TicketaChat extends Component
{
    protected $adminId;
    public $ticketId;
    public $replies = [];
    public $newReply;
    public $ticket;
    public function mount($ticketId)
    {
        $this->ticketId = $ticketId;
        $this->adminId = Filament::auth('admincp')->user()->id;
    	$ticket = Ticket::find($this->ticketId);
        $this->ticket = $ticket;
		
    }

    public function render()
    {
        $this->replies = TicketReply::where('ticket_id', $this->ticketId)->orderBy('id', 'asc')->latest()->get();
		
		$ticket = Ticket::find($this->ticketId);
        $this->ticket = $ticket;	
		return view('livewire.ticketa-chat', ['replies' => $this->replies,'ticket' =>  $this->ticket]);

    }

    public function sendMessage()
    {
		$adminIdx = Filament::auth('admincp')->user()->id;
        // التحقق من وجود رسالة جديدة قبل حفظها
        if(trim($this->newReply) !== '') {
            TicketReply::create([
                'ticket_id' => $this->ticketId,
                'client_type' => 'admin',
				'reply' => $this->newReply,
                'user_id' => $adminIdx,
            ]);
		$message = 'تم ارسال رسالتك الى العميل بنجاح';
		$admin = Admin::find($adminIdx);
		Notification::make()
			->title($message)
			->sendToDatabase($admin);
		event(new DatabaseNotificationsSent($admin));
			
		Notification::make()
			->title($message)	
						->danger()
						->send();			
		$userT = Ticket::where('client_type','user')->where('id',$this->ticketId)->first();
		$user = User::find($userT->id);
		//$this->ticket->provider;
		$messagep = 'رسالة جديدة من إدارة حريص في تذكرة الدعم رقم '.$this->ticketId;
		Notification::make()
			->title($message)
			->sendToDatabase($user);
		event(new DatabaseNotificationsSent($user));
	

            $this->newReply = ''; // لإعادة تعيين حقل الإدخال
        }
    }
}
