<x-filament-panels::page>
@livewire('notifications')
@if($fullServiceName != '')
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
            <h3 class="text-lg font-semibold mb-2">تحديد الموعد المناسب :</h3>
            <div class="flex flex-wrap">
                @foreach($sessions as $session)
                    <button wire:model="session_id" value="{{ $session->id }}" class="bg-red-800 text-white px-4 py-2 m-1 rounded hover:bg-info-600">
                        {{ $session->start_time }}
                    </button>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow-md mb-6">
            <h3 class="text-lg font-semibold mb-2">بيانات البطاقة</h3>
            <div class="space-y-4 flex flex-wrap gap-3 w-full p-3">
  <label class="relative w-full flex flex-col">
    <span class="font-bold mb-3">رقم البطاقة</span>
    <input style="height: 50px;" wire:model="credit_card.number" class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="card_number" placeholder="0000 0000 0000" />
    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="
    position: absolute;
    left: 10px;
    margin-top: -15px;
    height: 50px;
">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
    </svg>
  </label>

  <label class="relative flex-1 flex flex-col">
    <span class="font-bold mb-3">تاريخ الانتهاء</span>
    <input style="height: 50px;" wire:model="credit_card.expiry" class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="expire_date" placeholder="MM/YY" />
    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="
    position: absolute;
    left: 10px;
    margin-top: -15px;
    height: 50px;
">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
    </svg>
  </label>

  <label class="relative flex-1 flex flex-col">
    <span class="font-bold flex items-center gap-3 mb-3">
      CVC/CVV
      <span class="relative group">
        <span class="hidden group-hover:flex justify-center items-center px-2 py-1 text-xs absolute -right-2 transform translate-x-full -translate-y-1/2 w-max top-1/2 bg-black text-white"> Hey ceci est une infobulle !</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </span>
    </span>
    <input style="height: 50px;" wire:model="credit_card.cvv" class="rounded-md peer pl-12 pr-2 py-2 border-2 border-gray-200 placeholder-gray-300" type="text" name="card_cvc" placeholder="&bull;&bull;&bull;" />
    <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 text-black peer-placeholder-shown:text-gray-300 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="
    position: absolute;
    left: 10px;
    margin-top: -15px;
    height: 50px;
">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
    </svg>
  </label>			
			

            </div>
        </div>

        <div class="text-right">
            <button style="height:50px" type="submit" class="bg-primary-500 w-full text-white px-6 py-2 rounded hover:bg-primary-600">
                <span class="heroicon-o-arrow-right w-5 h-5 inline-block mr-1"></span> إتمام الحجز
            </button>
        </div>
    </form>
</div>
@endif
</x-filament-panels::page>
