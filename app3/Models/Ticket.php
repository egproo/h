<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_type', // حقل نوع العميل
        'title',
        'description',
        'status',
    ];

    public function client()
    {
        if ($this->client_type === 'admin') {
            return $this->belongsTo(Admin::class, 'user_id');
			
        } elseif ($this->client_type === 'provider') {
            return $this->belongsTo(Provider::class, 'user_id');
        } else {
            return $this->belongsTo(User::class, 'user_id');
        }
    }
    public function replies()
    {
        return $this->hasMany(TicketReply::class);
    }
    public function getClientType()
    {
        return $this->client_type;
    }	
}