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
	public function sessions()
	{
			return $this->hasMany(ServicesSession::class, 'services_id');
	}
	public function zones()
	{
			return $this->hasMany(ServicesZone::class, 'services_id');
	}	
	public function zone()
	{
			return $this->hasMany(ServicesZone::class, 'services_id');
	}		
}