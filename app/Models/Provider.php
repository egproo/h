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
class Provider extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'phone',
		'email',
        'password',
        'identification',
		'regnumber',
        'type', // فرد أو مؤسسة
        'title', // إسم المؤسسة أو المسمى الوظيفي
        'image', // شعار المؤسسة أو الصورة الشخصية
        'register_number', // رقم السجل التجاري
        'tax_number', // الرقم الضريبي
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * العلاقة بين موفر الخدمة والوثائق المرفقة.
     */
    public function docs(): HasMany
    {
        return $this->hasMany(ProvidersDoc::class);
    }

    /**
     * العلاقة بين موفر الخدمة والخدمات التي يقدمها.
     */


   public function services()
    {
        return $this->belongsToMany(Service::class, 'services_providers', 'provider_id', 'services_id')
                    ->withPivot('price');
    }
    /**
     * العلاقة بين موفر الخدمة والجلسات.
     */
    public function sessions(): HasMany
    {
        return $this->hasMany(ServicesSession::class);
    }
    public function zones(): HasMany
    {
        return $this->hasMany(ServicesZone::class);
    }	
	
	public function services_zones()
	{
		return $this->belongsToMany(Zone::class, 'services_zones', 'services_id', 'zone_id')->where('services_id', $this->id);

	}	
public function sessionsForService($serviceId)
{
    return $this->hasMany(ServiceSession::class, 'provider_id')
                ->where('services_id', $serviceId);
}
    /**
     * العلاقة بين موفر الخدمة والرسائل.
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    /**
     * تحديد إذا كان موفر الخدمة يمكنه الوصول إلى اللوحة أم لا.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }	

    /**
     * تعيين كلمة المرور بشكل آمن باستخدام التشفير.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * الحصول على الصورة الشخصية أو شعار المؤسسة.
     */
    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }

    // ... أي علاقات أو وظائف إضافية تحتاجها
}
