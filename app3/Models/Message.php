<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['appointment_id', 'provider_id', 'user_id', 'content'];

    public function session()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
