<x-filament-panels::page>
@livewire('notifications')
@if($fullServiceName != '')
@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
	
<!-- Moyasar Styles -->
<link rel="stylesheet" href="https://cdn.moyasar.com/mpf/1.10.0/moyasar.css" />

<!-- Moyasar Scripts -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=fetch"></script>
<script src="https://cdn.moyasar.com/mpf/1.10.0/moyasar.js"></script>
<style>
input {
    text-align: center !important;
	font-family: 'Almarai' !important;
	min-height:50px !important;
	line-height:40px !important;
}
label,button{font-family: 'Almarai' !important;}
</style>	
<div style="margin-top:-50px">
    <div class="flex items-center space-x-4 mb-4">
        <div class="w-1/4">
            <img src="{{ $provider->image }}" alt="{{ $provider->name }}" class="rounded-full w-24 h-24">
        </div>
        <div class="w-3/4">
            <h2 class="text-xl font-bold" style="padding-right:10px"> {{ $provider->name }}</h2>
            <p class="text-gray-600"  style="padding-right:10px;text-align:center"> {{ $provider->title }}</p>
        </div>
    </div>

    <form wire:submit.prevent="bookService">
        <div class="bg-white p-4 rounded shadow-md mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-semibold mb-2">الخدمة المطلوبة</h3>
					 <p>{{$fullServiceName}}</p>
                </div>
                <div class="text-right">
                    <span class="text-lg font-bold"><span class="text-center" style="margin: 0 auto;padding-right: 15px;">السعر</span> <br> {{ $servicePrice }} ريال </span>
                </div>
            </div>
        </div>
<div class="bg-white p-4 rounded shadow-md mb-6">
    <h3 class="text-lg font-semibold mb-2">اختر التاريخ:</h3>
    <input type="date" wire:model="desiredDate" wire:change="updateSessions" min="{{ now()->toDateString() }}" max="{{ $maxDate }}" class="border rounded p-2">
</div>
<div class="bg-white p-4 rounded shadow-md mb-6">
            <h3 class="text-lg font-semibold mb-2">تحديد الموعد المناسب :</h3>
    <div class="flex flex-wrap">
        @foreach($sessionxs as $session)
		@php
			$myDateTime = $session->start_time;
			$formattedTime = \Carbon\Carbon::parse($myDateTime)->format('H:i');
		@endphp		
        <button 
            wire:click="$set('session_id', {{ $session->id }})" 
            class="bg-gray-100 text-black px-5 py-2 m-1 rounded hover:bg-gray-00 {{ $session_id == $session->id ? 'bg-gray-600 text-white' : '' }}" 
            style="margin-inline-end: 20px; padding: 5px; font-weight: 900; border-radius: 10px; font-size: 20px;">
            {{ $formattedTime }}
        </button>
        @endforeach
    </div>
</div>

<div class="mb-4">
    <label for="notes" class="block text-sm font-medium text-gray-700">رسالتك  لــ : {{ $provider->name }} </label>
    <textarea wire:model="notes" id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
</div>
        <div class="bg-white p-4 rounded shadow-md mb-6">
            <h3 class="text-lg font-semibold mb-2">الدفع الإلكتروني</h3>
<div class="mysr-form"></div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // استمع لحدث النقر على زر الدفع
    document.querySelector("#mysr-form-form-el > div:nth-child(2) > div > form > button").addEventListener("click", function(e) {
        e.preventDefault(); // منع الافتراضي

        // استدعاء دالة Livewire
        window.livewire.emit('bookService');


		var servicename = '{{$service->name}}';
		var servicePrice = '{{$servicePrice}}';
		var total = servicePrice * 100;
		  Moyasar.init({
			element: '.mysr-form',
			amount: total,
			currency: 'SAR',
			description: 'قيمة خدمة: ' + total,
			publishable_api_key: 'pk_test_SKXGyT96T35GUGyLNSnp3JuKk1ZZhXN68die24HD',
			callback_url: '{{url('/')}}/thanks',
			supported_networks: ['mada'],
			methods: ['creditcard']
		  });

    });
});

</script>

        </div>


    </form>
</div>
@endif
</x-filament-panels::page>
