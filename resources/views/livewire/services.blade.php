@extends('layouts.app')
@section('title', 'خدمات حريص')
@section('content')
  <link rel="stylesheet" href="{{ url('/')}}/css/Home.css?ver=10.10.10.09" media="screen">

  <section class="skrollable u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-image u-parallax u-shading u-section-1"
    id="sec-863c" data-image-width="4357" data-image-height="3229">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-container-style u-custom-color-2 u-expanded-width u-group u-opacity u-opacity-30 u-radius-20 u-shape-round u-group-3">
        <div class="u-container-layout u-container-layout-3">
          <div class="u-align-left u-container-style u-group u-radius-15 u-shape-round u-white u-group-4"
            data-href="{{ url('/')}}/service/e-clinics" title="استشارات عن بعد">
            <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-icon-1"><img
                  src="{{ url('/')}}/images/10845964.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-default u-text-3">استشارات عن بعد</h4>
            </div>
          </div>
          <div class="u-align-left u-container-style u-group u-radius-15 u-shape-round u-white u-group-5"
            data-href="{{ url('/')}}/service/medical" title="التحاليل">
            <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-icon-2"><img
                  src="{{ url('/')}}/images/6401477.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-default u-text-4">خدمات التحليل</h4>
            </div>
          </div>
          <div class="u-align-center-xl u-container-style u-group u-radius-15 u-shape-round u-white u-group-6"
            data-href="{{ url('/')}}/service/medical-visit" title="زيارة الطبيب">
            <div class="u-container-layout u-container-layout-6"><span class="u-file-icon u-icon u-icon-3"><img
                  src="{{ url('/')}}/images/6260300.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-5">زيارة طبيب</h4>
            </div>
          </div>
          <div class="u-align-center-xl u-container-style u-group u-radius-15 u-shape-round u-white u-group-7"
            data-href="{{ url('/')}}/service/nurse-visit" title="خدمات التمريض">
            <div class="u-container-layout u-container-layout-7"><span class="u-file-icon u-icon u-icon-4"><img
                  src="{{ url('/')}}/images/5872821.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-6">زيارة ممرض</h4>
            </div>
          </div>
          <div class="u-align-center-xl u-container-style u-group u-radius-15 u-shape-round u-white u-group-8"
            data-href="{{ url('/')}}/service/intravenous-solution" title="محلول وريدي">
            <div class="u-container-layout u-container-layout-8"><span class="u-file-icon u-icon u-icon-5"><img
                  src="{{ url('/')}}/images/3003312.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-7">محلول وريدي</h4>
            </div>
          </div>
          <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-9"
            data-href="{{ url('/')}}/service/covid-check" title="فحص كورونا">
            <div class="u-container-layout"><span class="u-file-icon u-icon u-icon-6"><img src="{{ url('/')}}/images/4190707.png"
                  alt=""></span>
              <h4 class="u-custom-font u-text u-text-default u-text-8">فحص كروونا</h4>
            </div>
          </div>
          <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-10"
            data-href="{{ url('/')}}/service/radiology" title="قسم الأشعة">
            <div class="u-container-layout"><span class="u-file-icon u-icon u-icon-7"><img src="{{ url('/')}}/images/9098623.png"
                  alt=""></span>
              <h4 class="u-custom-font u-text u-text-default u-text-9">أشعة</h4>
            </div>
          </div>
          <div class="u-align-center u-container-style u-group u-radius-15 u-shape-round u-white u-group-11"
            data-href="{{ url('/')}}/service/vaccinations" title="تطعيم طفل">
            <div class="u-container-layout u-container-layout-11"><span class="u-file-icon u-icon u-icon-8"><img
                  src="{{ url('/')}}/images/2621722.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-10">تطعيم طفل</h4>
            </div>
          </div>
          <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-12"
            data-href="{{ url('/')}}/service/physiotherapist" title="قسم العلاج الطبيعي">
            <div class="u-container-layout u-container-layout-12"><span class="u-file-icon u-icon u-icon-9"><img
                  src="{{ url('/')}}/images/8123360.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-default u-text-11">العلاج الطبيعي</h4>
            </div>
          </div>
          <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-13"
            data-href="{{ url('/')}}/service/attendant" title="مرافق صحي">
            <div class="u-container-layout u-container-layout-13"><span class="u-file-icon u-icon u-icon-10"><img
                  src="{{ url('/')}}/images/4200528.png" alt=""></span>
              <h4 class="u-align-left u-custom-font u-text u-text-default u-text-12">مرافق صحي</h4>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-right u-container-style u-custom-color-2 u-expanded-width u-group u-opacity u-opacity-90 u-radius-11 u-shape-round u-group-14">
      </div>
  </section>
  
  <section class="u-clearfix u-hidden-lg u-hidden-xl u-white u-section-7" id="sec-7b5e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h5
        class="u-align-left-md u-align-left-sm u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-3">
        الخدمات الطبية الافتراضية</h5>
      <h5 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-4"> الخدمات المنزلية
      </h5>
      <div
        class="u-align-left-md u-align-left-sm u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-15 u-shape-round u-group-3"
        data-href="{{ url('/')}}/service/e-clinics" title="خدمات افتراضية">
        <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-2"><img
              src="{{ url('/')}}/images/9553959.png" alt=""></span>
          <h6 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-5">استشارات عن
            بعد</h6>
        </div>
      </div>
      <div
        class="u-align-left-md u-align-left-sm u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-4"
        data-href="{{ url('/')}}/service/e-clinics" title="استشارات افتراضية">
        <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-icon-3"><img
              src="{{ url('/')}}/images/9553959.png" alt=""></span>
          <h6 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-6">استشارات افتراضية</h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-5"
        data-href="{{ url('/')}}/service/attendant" title="search-result">
        <div class="u-container-layout u-container-layout-5"><span class="u-file-icon u-icon u-icon-4"><img
              src="{{ url('/')}}/images/3567474.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-7">
            مرافق صحي</h6>
        </div>
      </div>
      <div
        class="u-align-left-md u-align-left-sm u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-6"
        data-href="{{ url('/')}}/service/medical" title="التحاليل">
        <div class="u-container-layout u-container-layout-6"><span class="u-file-icon u-icon u-icon-5"><img
              src="{{ url('/')}}/images/7918332.png" alt=""></span>
          <h6 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-8">خدمات التحليل
          </h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-7"
        data-href="{{ url('/')}}/service/physiotherapist" title="قسم العلاج الطبيعي">
        <div class="u-container-layout u-container-layout-7"><span class="u-file-icon u-icon u-icon-6"><img
              src="{{ url('/')}}/images/9442145.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-9">
            علاج طبيعي</h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-8"
        data-href="{{ url('/')}}/service/vaccinations" title="تطعيم طفل">
        <div class="u-container-layout u-container-layout-8"><span class="u-file-icon u-icon u-icon-7"><img
              src="{{ url('/')}}/images/2621722.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-10">
            التطعيمات</h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-9"
        data-href="{{ url('/')}}/service/radiology" title="قسم الأشعة">
        <div class="u-container-layout u-container-layout-9"><span class="u-file-icon u-icon u-icon-8"><img
              src="{{ url('/')}}/images/10476427.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-11">
            الأشعة</h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-10"
        data-href="{{ url('/')}}/service/covid-check" title="فحص كورونا">
        <div class="u-container-layout u-container-layout-10"><span class="u-file-icon u-icon u-icon-9"><img
              src="{{ url('/')}}/images/4190707.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-12">
            فحص كوفيد 19</h6>
        </div>
      </div>
      <div
        class="u-align-left-md u-align-left-sm u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-11"
        data-href="{{ url('/')}}/service/medical-visit" title="زيارة الطبيب المنزلية">
        <div class="u-container-layout u-container-layout-11"><span class="u-file-icon u-icon u-icon-10"><img
              src="{{ url('/')}}/images/6401060.png" alt=""></span>
          <h6
            class="u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-13">
            زيارة الطبيب</h6>
        </div>
      </div>
      <div
        class="u-align-left-md u-align-left-sm u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-12"
        data-href="{{ url('/')}}/service/nurse-visit" title="قسم خدمات التمريض">
        <div class="u-container-layout u-container-layout-12"><span class="u-file-icon u-icon u-icon-11"><img
              src="{{ url('/')}}/images/9842273.png" alt=""></span>
          <h6 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-14">زيارة ممرض
          </h6>
        </div>
      </div>
      <div
        class="u-border-2 u-border-grey-75 u-border-no-bottom u-border-no-left u-border-no-top u-container-style u-custom-color-7 u-group u-radius-15 u-shape-round u-group-13"
        data-href="{{ url('/')}}/service/intravenous-solution" title="محلول وريدي">
        <div class="u-container-layout u-container-layout-13"><span class="u-file-icon u-icon u-icon-12"><img
              src="{{ url('/')}}/images/3974935.png" alt=""></span>
          <h6
            class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-15">
            محلول وريدي</h6>
        </div>
      </div>
    </div>
  </section>
  
  @endsection
