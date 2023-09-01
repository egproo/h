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
		'is_home',
        'seo_title',
        'seo_description',
    ];

    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }
    public function isMainService()
    {
        return is_null($this->parent_id);
    }
public function activeProvidersInZone($zoneId)
{
    return $this->belongsToMany(Provider::class, 'services_providers', 'services_id', 'provider_id')
                ->whereHas('zones', function ($zoneQuery) use ($zoneId) {
                    $zoneQuery->where('zone_id', $zoneId);
                })
                ->withPivot(['price', 'duration_in_minutes']);
}


public function children()
{
    return $this->hasMany(Service::class, 'parent_id');
}
    public function childServices()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }
public function activeProviders()
{
	
    return $this->belongsToMany(Provider::class, 'services_providers', 'services_id', 'provider_id')
                ->whereHas('services', function ($query) {
                    $query->where('is_visible', 1);
                })
                ->withPivot(['price', 'duration_in_minutes']);
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
        return $this->belongsToMany(Zone::class, 'services_zones')->whereHas('services_zones', function ($query) {
                    $query->where('services_zones.services_id', $this->id);
                });
    }
	public function services_zones()
	{
		return $this->belongsToMany(Zone::class, 'services_zones', 'services_id', 'zone_id')->where('services_id', $this->id);

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
