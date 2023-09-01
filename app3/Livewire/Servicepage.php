<?php

namespace App\Livewire;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Filament\Facades\Filament;
use Livewire\Component;

class Servicepage extends Component
{
  public $service = [];
  public $searchTerm = '';
    public $city = '';
    public $order = '';
    public $providers = [];
    public $activezones = [];
    public $slug = '';

    public function mount($slug)
    {
        $this->service =  Service::where('slug', $slug)->firstOrFail();
         $this->loadProviders();
		$this->slug = $slug;

		 // تحميل المناطق المفعلة
    }

    public function updatedSearchTerm()
    {
        $this->loadProviders();
        $this->dispatch('refreshservicepage'); 
  
  }

    public function updatedCity()
    {
       $this->loadProviders();
        $this->dispatch('refreshservicepage'); 
   
   }

    public function updatedOrder()
    {
        $this->loadProviders();
        $this->dispatch('refreshservicepage'); 
		
    }
public function refreshservicepage()
{
    // هنا يمكنك إضافة الأوامر التي تريد تنفيذها عند تحديث المكون
    $this->loadProviders();
}


    public function loadProviders()
    {
        if ($this->city) {
			$query = $this->service->activeProvidersInZone($this->city);
        }else{
			$query = $this->service->activeProviders();
		}
        if ($this->searchTerm) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        if (!$this->order) {
            $this->order = 'asc';
        }
			
			
        $this->providers = $query->orderBy('price', $this->order)->get();
		
    }

    public function render()
    {
    return view('livewire.servicepage', [
        'service' =>  $this->service,
        'providers' =>  $this->providers,
        'slug' =>  $this->slug,
    ]);
    }
public function redirectToBookingOrLogin($providerId, $serviceId)
{
    if (empty(Filament::auth()->user()->id)) {
        // حفظ التفاصيل في الجلسة
        Session::put('booking_details', [
            'service_id' => $serviceId,
            'provider_id' => $providerId,
        ]);
        // توجيه المستخدم إلى صفحة تسجيل الدخول
        return redirect()->route('login');
    }else{
        Session::put('booking_details', [
            'service_id' => $serviceId,
            'provider_id' => $providerId,
        ]);

    // إذا كان المستخدم مسجلًا دخوله، قم بتوجيهه إلى صفحة الحجز
    return redirect()->route('booking');
	}
}
	
}
