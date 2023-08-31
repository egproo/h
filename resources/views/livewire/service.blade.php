@if (count($service->childServices) > 1)
@extends('layouts.app')
@section('title', '{{$service->title}}')
@section('content')
 <link rel="stylesheet" href="{{url('/')}}/css/analysis.css?ver=10.10.10.09" media="screen">	


  <section class="u-clearfix u-white u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-sheet-1">
	
      <div class="u-container-style u-group u-radius-7 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="">
        <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1">  {{ $service->name }} </h3>
        </div>
      </div>
@foreach($service->childServices as $servicex)	  
      <div class="u-align-left-xl u-container-style u-group u-radius-10 u-shape-round u-white u-group-{{ $loop->index + 2}}"
        data-href="{{url('/')}}/service/{{ $servicex->slug }}" title="{{ $servicex->name }}">
        <div class="u-container-layout u-container-layout-{{ $loop->index + 2 }}"><span class="u-file-icon u-icon u-icon-{{ $loop->index + 1}}"><img
              src="{{url('/')}}/storage/{{ $servicex->image }}" alt="{{ $servicex->name }}"></span>
          <h5 class="u-align-center u-custom-font u-text u-text-default u-text-2">  {{ $servicex->name }} </h5>
        </div>
      </div>
@endforeach	  
 
    </div>
  </section>
@endsection
@else
@section('content')	


  <link rel="stylesheet" href="{{url('/')}}/css/search-result.css?ver=10.10.10.09" media="screen">	

  <section class="u-clearfix u-custom-color-5 u-section-1" id="sec-3e49">

    <div  class="u-clearfix u-sheet u-sheet-1">
@livewire('servicepage', ['slug' => $slug,'service' => $service])

    </div>
  </section>

 @endsection

@endif
