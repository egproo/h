<x-filament-panels::page>
@livewire('notifications')
<div class="p-6">
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
            <h3 class="text-lg font-semibold mb-2">Available Sessions</h3>
            <div class="flex flex-wrap">
                @foreach($sessions as $session)
                    <button wire:model="session_id" value="{{ $session->id }}" class="bg-info-500 text-white px-4 py-2 m-1 rounded hover:bg-info-600">
                        {{ $session->time }}
                    </button>
                @endforeach
            </div>
        </div>

        <div class="bg-white p-4 rounded shadow-md mb-6">
            <h3 class="text-lg font-semibold mb-2">Payment Details</h3>
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <span class="heroicon-o-credit-card w-6 h-6"></span>
                    <input type="text" wire:model="credit_card.number" placeholder="Card Number" class="border p-2 rounded w-full">
                </div>
                <div class="flex items-center space-x-2">
                    <span class="heroicon-o-calendar w-6 h-6"></span>
                    <input type="text" wire:model="credit_card.expiry" placeholder="Expiry Date (MM/YY)" class="border p-2 rounded w-1/2">
                    <input type="text" wire:model="credit_card.cvv" placeholder="CVV" class="border p-2 rounded w-1/4">
                </div>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-primary-500 text-white px-6 py-2 rounded hover:bg-primary-600">
                <span class="heroicon-o-arrow-right w-5 h-5 inline-block mr-1"></span> Book Now
            </button>
        </div>
    </form>
</div>
</x-filament-panels::page>
