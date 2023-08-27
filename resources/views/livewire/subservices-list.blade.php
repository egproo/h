<div>
    <h3>{{ $service->name }}</h3>
    <ul>
        @foreach($service->childServices as $subservice)
            <li><a href="{{ route('service.show', $subservice->slug) }}">{{ $subservice->name }}</a></li>
        @endforeach
    </ul>
</div>
