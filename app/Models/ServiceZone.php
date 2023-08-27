<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceZone extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'zone_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }
}
