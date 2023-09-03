<div>

<div  data-animation-name="pulse" style="width: auto;margin: 0 auto;text-align: center;margin-top: 10px;margin-bottom: 10px;"

        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
<input style="color: #888;border-radius: 3px;height:50px;width: 180px;text-align: center;max-width: 30%;font-weight: 900;font-size: 11px;font-family: 'Almarai';border: 1px solid #58aac6;" type="text" wire:model.live.debounce.300ms="searchTerm" placeholder="بحث بالاسم...">
<select  style="color: #888;border-radius: 3px;height:50px;width: 180px;text-align: center;max-width: 30%;font-weight: 900;font-size: 11px;font-family: 'Almarai';border: 1px solid #58aac6;" wire:model.live="city">
    <option value="">اختر المدينة</option>
@foreach($service->services_zones as $zone)
    <option style="height:60px" wire:key="{{ $zone->id }}" value="{{$zone->id}}">{{$zone->name}}</option>
@endforeach
</select>
<select  style="color: #888;border-radius: 3px;height:50px;width: 180px;text-align: center;max-width: 30%;font-weight: 900;font-size: 11px;font-family: 'Almarai';border: 1px solid #58aac6;" wire:model.live="order">
    <option style="height:60px" value="asc">السعر الأقل</option>
    <option style="height:60px" value="desc">السعر الأعلى</option>
</select>

</div>	

      <div class="providerg u-container-style u-group u-radius-25 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
        <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
  <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1" style="
    margin: 15px;
"> {{ $service->name }} </h3>
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
<a wire:click="redirectToBookingOrLogin({{ $provider->id }}, {{ $service->id }})" style=";margin-left: 15px;"
   class="bhagz u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">حجز</a>


        </div>
      </div>
		@endforeach
@if(count($providers) == 0)

<div class="u-align-center u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white ">
        <div class="" style="
    padding: 30px;
    text-align: center;
    display: block;
    margin: 0 auto;
    font-size: 16px;
    font-family: 'Almarai';
">
              لا يوجد موفري خدمات متاحين في الوقت الحالي لهذة الخدمة

        </div>
      </div>

@endif
</div>