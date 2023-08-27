<div>
    <h3>{{ $service->name }}</h3>
    <input type="text" wire:model="searchTerm" placeholder="بحث عن مزود الخدمة...">
    <ul>
        @foreach($providers as $provider)
            <li>{{ $provider->name }} - {{ $provider->pivot->price }} ريال</li>
        @endforeach
    </ul>
</div>
