@extends('layouts.app')

@section('content')
    @livewire('subservices-list', ['service' => $service])
@endsection