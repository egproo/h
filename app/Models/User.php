<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Filament\Pages\Page;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'phone',
		'image',
		'identification',
        'email',
        'password',
		'phone_verified_at',
        'verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }	
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }	
}
