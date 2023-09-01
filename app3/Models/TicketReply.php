<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'content',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

public function client()
{
    $clientType = $this->ticket->getClientType();
    
    if ($clientType === 'admin') {
        return $this->belongsTo(Admin::class, 'user_id');
    } elseif ($clientType === 'provider') {
        return $this->belongsTo(Provider::class, 'user_id');
    } else {
        return $this->belongsTo(User::class, 'user_id');
    }
}

}
