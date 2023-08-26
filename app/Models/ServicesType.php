<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesType extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'services_type_id');
    }
}
