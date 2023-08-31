  <section class="u-clearfix u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-valign-middle-md u-sheet-1">
      <div
        class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-group u-radius-10 u-shape-round u-white u-group-1"
        data-animation-name="pulse" data-animation-duration="3500" data-animation-direction="">
        <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1">{{ $service->name }}</h3>
        </div>
      </div>
	   @if(count($providers) > 0) 
      <div class="u-align-center u-clearfix u-custom-html u-expanded-width u-custom-html-1" style="direction: rtl;">
        <select class="select" id="dropdown1" wire:model.live="order">
		<option value="asc">السعر الأقل</option>
		<option value="desc">السعر الأعلى</option>
        </select>
        <select class="select" id="dropdown2" wire:model.live="city">
          <option value="">أختر المدينة</option>
			@foreach($service->services_zones as $zone)
				<option wire:key="{{ $zone->id }}" value="{{$zone->id}}">{{$zone->name}}</option>
			@endforeach
        </select>
        <br><br>
        <input wire:model.live.debounce.300ms="searchTerm" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" type="text" id="inputBox" class="input-box" placeholder="بحث بالاسم">
      </div>
	  @endif
      <!-- بيانات الطبيب هنا-->
@foreach($providers as $provider)
      <div  wire:key="{{$provider->id}}"  class="u-align-left u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <div class="u-border-2 u-border-grey-40 u-hover-feature u-image u-image-circle u-radius-10 u-image-1" alt=""
            data-image-width="512" data-image-height="512"></div>
          <h5 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2"
            style="direction: rtl;">د.
            <span>
              {{ $provider->name }}
            </span>
          </h5>
          <h5 class="u-align-center u-custom-font u-text u-text-default u-text-3" style="direction: rtl;">{{ $provider->title }}</h5>
          <h5 class="u-align-center u-custom-font u-text u-text-default u-text-4" style="direction: rtl;"> السعر</h5>
          <h5 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5"
            style="direction: rtl;">  {{ $provider->pivot->price }} ريال</h5>
          <h5 class="u-align-center u-custom-font u-text u-text-default u-text-6" style="direction: rtl;"> &nbsp;الخبرة :&nbsp;{{ $provider->eyears }} سنوات</h5>
          <h5 class="u-align-center u-custom-font u-text u-text-default u-text-7" style="direction: rtl;">  تقدم الخدمة خلال&nbsp;: {{$provider->pivot->duration_in_minutes}} دقيقة
          </h5>
          <a href="#" wire:click="redirectToBookingOrLogin({{ $provider->id }}, {{ $service->id }})"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">حجز</a>
        </div>
      </div>
		@endforeach	  
@if(count($providers) == 0)
          <h5 style="direction: rtl;text-align: center;
    margin: 30px 50px;"class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">لا يوجد موفري خدمات متاحين في الوقت الحالي لهذة الخدمة</h5>
@endif


    </div>

  </section>