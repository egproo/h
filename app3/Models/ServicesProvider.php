<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_id',
        'provider_id',
        'price',
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
