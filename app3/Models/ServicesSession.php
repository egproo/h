<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class ServicesSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'provider_id',
        'day_of_week',
        'start_time',
        'end_time',
        'duration_in_minutes',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function isAvailable($desiredDate)
    {
        // تحقق من وجود حجز في نفس الوقت والتاريخ
        $existingAppointment = Appointment::where('services_session_id', $this->id)
            ->whereDate('appointment_date', $desiredDate)
            ->first();

        // إذا لم يتم العثور على حجز، فإن الجلسة متاحة
        return is_null($existingAppointment);
    }	
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'services_session_id', 'id');
    }
	
}
