<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
