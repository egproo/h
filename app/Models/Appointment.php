<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
		'provider_id',
        'services_session_id',
        'appointment_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
	public function provider()
	{
		return $this->belongsTo(Provider::class, 'provider_id');
	}
public function messages()
{
    return $this->hasMany(Message::class, 'appointment_id');
}


    public function session()
    {
        return $this->belongsTo(ServicesSession::class, 'services_session_id');
    }
  public function paymentAttempt()
{
    return $this->hasOne(PaymentAttempt::class);
}

}
