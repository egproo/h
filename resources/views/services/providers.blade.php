@extends('layouts.app')

@section('content')
    @livewire('providers-list', ['service' => $service])
@endsection
