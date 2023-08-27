<div>
    @foreach($services as $service)
        <a href="{{ route('service.show', $service->slug) }}">
            {{ $service->name }}
        </a>
    @endforeach
</div>
