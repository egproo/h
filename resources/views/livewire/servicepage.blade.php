<div>
<div  data-animation-name="pulse" style="width: auto;margin: 0 auto;text-align: center;margin-top: 10px;margin-bottom: 10px;"

        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
<input style="height:50px;width: 180px;text-align: center;" type="text" wire:model.live.debounce.300ms="searchTerm" placeholder="بحث بالاسم...">
<select  style="height:50px;width: 180px;text-align: center;" wire:model.live="city">
    <option value="">اختر المدينة</option>
@foreach($service->services_zones as $zone)
    <option wire:key="{{ $zone->id }}" value="{{$zone->id}}">{{$zone->name}}</option>
@endforeach
</select>
<select  style="height:50px;width: 180px;text-align: center;" wire:model.live="order">
    <option value="asc">السعر الأقل</option>
    <option value="desc">السعر الأعلى</option>
</select>

</div>	
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
        <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1"> {{ $service->name }} </h3>
        </div>
      </div>
		@foreach($providers as $provider)
      <div wire:key="{{$provider->id}}" class="u-align-left u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <div class="u-border-2 u-border-grey-40 u-hover-feature u-image u-image-circle u-radius-10 u-image-1" alt="{{$provider->name}}"
            data-image-width="128" data-image-height="128" style="background-image: url({{$provider->image}});"></div>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">{{ $provider->name }}</h5>
          <h5 style="direction: rtl;width:auto" class="u-align-center u-custom-font u-text u-text-default u-text-3">{{ $provider->title }}</h5>
          <h5 style="direction: rtl;margin-left: 55px;"class="u-align-center u-custom-font u-text u-text-default u-text-4"> السعر</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5"> {{ $provider->pivot->price }} ريال</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-default u-text-6"> &nbsp;الخبرة :&nbsp;{{ $provider->eyears }} سنوات</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-default u-text-7" >   تقدم الخدمة خلال&nbsp;: {{$provider->pivot->duration_in_minutes}} دقيقة
          </h5>
<a wire:click="redirectToBookingOrLogin({{ $provider->id }}, {{ $service->id }})" style="margin-top: -10px;margin-left: 15px;"
   class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">حجز</a>


        </div>
      </div>
		@endforeach

</div>