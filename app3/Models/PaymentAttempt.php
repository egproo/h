<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'total',
        'is_successful',
        'notes',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
