@extends('layouts.app')
@section('title', 'أسئلة متكررة')
@section('content')
  <link rel="stylesheet" href="{{ url('/')}}/css/Home.css?ver=10.10.10.09" media="screen">
  <section class="u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-white u-section-5" id="carousel_de2e">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-1"><span
          class="u-file-icon u-icon"><img src="{{ url('/')}}/images/10792960.png" alt=""></span>&nbsp;​أسئلة متكررة
      </h4>
      <div class="u-accordion u-collapsed-by-default u-spacing-2 u-accordion-1">
		 @foreach(App\Models\Faq::where('status', 1)->get() as $faq)
			<div class="u-accordion-item">
			  <a class="u-accordion-link u-active-palette-3-base u-border-2 u-border-active-white u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-light-1 u-button-style u-custom-font u-hover-grey-5 u-text-active-custom-color-2 u-text-black u-text-hover-grey-75 u-white u-accordion-link-2"
				id="link-accordion-60fa" aria-controls="accordion-60fa" aria-selected="false">
				<span class="u-accordion-link-text">{{ $faq->question }}</span><span
				  class="u-accordion-link-icon u-file-icon u-icon u-icon-3"><img src="{{ url('/')}}/images/10949014.png" alt=""></span>
			  </a>
			  <div class="u-accordion-pane u-align-right u-container-style u-accordion-pane-2" id="accordion-60fa"
				aria-labelledby="link-accordion-60fa">
				<div class="u-container-layout u-valign-top u-container-layout-2">
				  <p class="u-custom-font u-text u-text-black u-text-default u-text-3" style="direction: rtl;"><span
					  style="font-weight: 700;">{!! $faq->answer !!}</span>
				  </p>
				</div>
			  </div>
			</div>
		@endforeach
      </div>
      <div class="u-shape u-shape-svg u-text-custom-color-2 u-shape-1">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" >
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c347"></use>
        </svg>
        <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-c347"
          style="enable-background:new 0 0 160 160;">
          <path d="M10.3,39.9c-18.2,24.9-9.2,62.5,4,87.4c8.2,15.4,23,36.1,48.6,32.2c5.8-0.9,11.1-3.2,16.9-4.3c17.8-3.4,37.9,4.7,54.5-1.5
	c6.6-2.5,11.6-6.9,15.5-11.8c12.2-15.3,13.7-35.6,3.8-51.9c-6.9-11.5-19-20.9-23.6-33.1c-4.5-11.9-1.4-24.9-4.7-37.1
	C121.1,5,103.7-5.6,85.7,3.1c-6.8,3.3-12.6,7.7-20,10.2C58,15.9,49.5,16.6,41.6,19C26.8,23.6,16.7,31,10.3,39.9z"></path>
        </svg>
      </div>
      <div class="u-border-1 u-border-grey-75 u-container-style u-group u-radius-15 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-icon-6"><img
              src="{{ url('/')}}/images/1321638.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-6"> لمزيد من
            الإستفسارات</h3>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-7" style="direction: rtl;">نحن في خدمتكم علي مدار 24 ساعة
          </h3>
          <a href="{{ url('/')}}/page/contact"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-2">تواصل
            معنا</a>
        </div>
      </div>
    </div>
  </section>
  
  @endsection
