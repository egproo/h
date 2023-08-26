<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'parent_id',
        'services_type_id',
        'name',
        'slug',
        'description',
        'position',
        'is_visible',
        'seo_title',
        'seo_description',
    ];

    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    public function type()
    {
        return $this->belongsTo(ServicesType::class, 'services_type_id');
    }
    public function types()
    {
        return $this->belongsTo(ServicesType::class, 'services_type_id');
    }
    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'services_providers');
    }

    public function zones()
    {
        return $this->belongsToMany(Zone::class, 'services_zones');
    }

    public function sessions()
    {
        return $this->hasMany(ServiceSession::class, 'services_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'service_id');
    }
}
