@extends('layouts.app')
@section('title', 'حريص')
@section('keywords', 'حريص هو مستشفى افتراضي يوفر رعاية صحية شاملة وفعالة للمرضى ., نقدم لك خدمات استشارات طبیة عن بعد و رعایة منزلیة عالیة الجودة')
@section('description', 'مستشفى رقمية بها جميع التخصصات
حريص يعمل مع مجموعة متنوعة من مقدمي الرعاية الصحية ، مما يضمن أن المرضى يحصلون على أفضل رعاية ممكنة.
نقدم في المنزل خدمات شاملة للرعاية الأولية.')
@section('content')
  <link rel="stylesheet" href="{{ url('/')}}/css/Home.css?ver=10.10.10.09" media="screen">
  <section class="skrollable u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-image u-parallax u-shading u-section-1"
    id="sec-863c" data-image-width="4357" data-image-height="3229">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-container-style u-custom-color-2 u-expanded-width u-group u-opacity u-opacity-80 u-radius-15 u-shape-round u-group-1"
        data-animation-name="pulse" data-animation-duration="1000" data-animation-direction="">
        <div
          class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <h2 class="u-align-center u-custom-font u-text u-text-white u-text-1" style="direction: rtl;"> حريص هو مستشفى افتراضي يوفر رعاية صحية
            شاملة وفعالة للمرضى .</h2>
        </div>
      </div>
      <div class="u-container-style u-custom-color-1 u-group u-radius-20 u-shape-round u-group-2"
        data-animation-name="pulse" data-animation-duration="4000" data-animation-direction="">
        <div class="u-container-layout u-valign-middle u-container-layout-2">
          <h2 class="u-align-center u-custom-font u-text u-text-white u-text-2"  style="direction: rtl;"> نقدم لك خدمات استشارات طبیة عن بعد و
            رعایة منزلیة عالیة الجودة&nbsp;</h2>
        </div>
      </div>
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
            data-href="{{ url('/')}}/intravenous-solution" title="محلول وريدي">
            <div class="u-container-layout u-container-layout-8"><span class="u-file-icon u-icon u-icon-5"><img
                  src="{{ url('/')}}/images/3003312.png" alt=""></span>
              <h4 class="u-custom-font u-text u-text-7">محلول وريدي</h4>
            </div>
          </div>
          <div class="u-container-style u-group u-radius-15 u-shape-round u-white u-group-9"
            data-href="{{ url('/')}}/covid-check" title="فحص كورونا">
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
        <div class="u-container-layout u-valign-middle u-container-layout-14">
          <h5 class="u-custom-font u-text u-text-13"  style="direction: rtl;"> حريص هي شركة مرخصة من قبل وزارة الصحة السعودية و تحمل الترخيص رقم
            654365436</h5>
        </div>
      </div>
      <div
        class="u-container-style u-expanded-width u-group u-opacity u-opacity-70 u-radius-25 u-shape-round u-white u-group-15">
        <div class="u-container-layout u-container-layout-15">
          <h4 class="u-align-right u-custom-font u-text u-text-custom-color-3 u-text-14"><span
              class="u-file-icon u-icon"><img src="{{ url('/')}}/images/10490235.png" alt=""></span>&nbsp;​مستشفى رقمية بها جميع
            التخصصات
          </h4>
          <img
            class="u-border-6 u-border-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-image u-image-round u-radius-15 u-image-1"
            src="{{ url('/')}}/images/wallpaperflare.com_wallpaper1.jpg" alt="" data-image-width="2500" data-image-height="1478">
          <h4 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-15"  style="direction: rtl;"> حريص يعمل مع مجموعة متنوعة من
            مقدمي الرعاية الصحية ، مما يضمن أن المرضى يحصلون على أفضل رعاية ممكنة.</h4>
          <h4 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-16"  style="direction: rtl;"> نقدم في المنزل خدمات شاملة
            للرعاية الأولية.<br><i></i>عدد زيارات المستشفى أقل.<br><i></i>رعاية افتراضية على مدار الساعة، دون الحاجة
            للانتظار لفترات طويلة.<br><i></i>لا يقتصر على المنطقة الجغرافية ( موجودون في جميع مناطق المملكة)
          </h4>
        </div>
      </div>
    </div>
  </section>
  <section
    class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-white u-section-2"
    id="sec-2e83">
    <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
      <h4 class="u-align-left-xl u-custom-font u-text u-text-custom-color-1 u-text-default u-text-1" > مجموعة خدمات طبية
        متنوعة&nbsp;<span class="u-file-icon u-icon"><img src="{{ url('/')}}/images/11496723.png" alt=""></span>
      </h4>
      <img class="u-image u-image-round u-radius-15 u-image-1" alt="" data-image-width="2754" data-image-height="2496"
        src="{{ url('/')}}/images/wallpaperflare.com_wallpaper2.jpg">
      <h4 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-2" style="direction: rtl;"> يوفر موقع حريص مجموعة متنوعة من
        الخدمات الطبية الحديثة والمتقدمة للمرضى في العالم العربي وتشمل هذه الخدمات ما يلي:<br><i></i>تقديم خدمات الرعاية
        من قبل فرق مدربة بشكل جيد ووفقاً لأعلى معايير الصحة والسلامة.<br><i></i>فريق طبي ذو خبرة ومهنية
        عالية<br><i></i>تزامن مع جدول مواعيدك
      </h4>
    </div>
  </section>
  <section
    class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-border-no-top u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-white u-section-3"
    id="sec-18a5">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1"><span
          class="u-file-icon u-icon"><img src="{{ url('/')}}/images/2371329.png" alt=""></span>&nbsp;ماذا يقدم حريــــص
      </h4>
      <div class="u-container-align-center u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-align-center u-file-icon u-icon u-icon-2"><img src="{{ url('/')}}/images/11126148.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2" style="direction: rtl;">كن حريصا علي
            نفسك وعلي عائلتك</h3>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-3" style="direction: rtl;"> نحن نتعاون مع
            مجموعة متنوعة من مقدمي الرعاية الصحية، مما يضمن أنك تحصل على أفضل رعاية ممكنة.</h3>
          <a href="{{ url('/')}}/#sec-863c"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-1">أحصل
            علي الرعاية</a>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-white u-section-4" id="carousel_ea26">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1"><span
          class="u-file-icon u-icon"><img src="{{ url('/')}}/images/2257282.png" alt=""></span>&nbsp;أنضم الي موفري الخدمات في حريص
      </h4>
      <div class="u-align-center u-container-style u-group u-radius-25 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-align-center u-file-icon u-icon u-icon-2"><img src="{{ url('/')}}/images/4326508.png" alt=""></span>
          <h3 class="u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">فرد</h3>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-3" style="direction: rtl;">يمكنك الانضمام
            الي مقدمي الخدمات في <span style="font-weight: 700;" class="u-text-custom-color-1">حريص</span> فقط بضع خطوات
            تفصلك عن الانضمام سواء كنت طبيب او ممرض او مرافق او غير ذلك..
          </h3>
          <!--هنا ربط فحة تسجيل الافراد والمؤسسات-->
          <a href="{{ url('/')}}/panel/login"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-1">سجل
            كفرد</a>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2"><span
            class="u-align-center u-file-icon u-icon u-icon-3"><img src="{{ url('/')}}/images/609116.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-4">مؤسسة (أعمال)؟
          </h3>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5" style="direction: rtl;">يمكنك الانضمام
            الي قسم المؤسسات في حريص لتتمكن من توفير كل خدمات مؤسستك ومتابعة الطلبات..</h3>
            <!--هنا ربط فحة تسجيل الافراد والمؤسسات-->
          <a href="{{ url('/')}}/panel/login"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-2">سجل
            كمؤسسة</a>
        </div>
      </div>
      <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-6">أو</h3>
    </div>
  </section>
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
  <section class="u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-white u-section-6" id="sec-f61f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1"><span
          class="u-file-icon u-icon"><img src="{{ url('/')}}/images/2645725.png" alt=""></span>&nbsp;تحميل تطبيق حريص
      </h4>
      <div
        class="u-border-1 u-border-black u-container-style u-group u-hover-feature u-radius-12 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-align-center u-file-icon u-icon u-icon-2"><img src="{{ url('/')}}/images/888857.png" alt=""></span>
          <a href="{{ url('/')}}/page/app"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-4 u-custom-font u-hover-custom-color-2 u-radius-6 u-btn-1">أحصل
            علية الان</a>
        </div>
      </div>
      <div
        class="u-black u-border-5 u-border-white u-container-style u-group u-hover-feature u-radius-12 u-shape-round u-group-2">
        <div class="u-container-layout u-container-layout-2"><span
            class="u-align-center u-file-icon u-icon u-text-white u-icon-3"><img src="{{ url('/')}}/images/747-e7c1157e.png"
              alt=""></span>
          <a href="{{ url('/')}}/page/app"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-font u-hover-custom-color-2 u-radius-6 u-white u-btn-2">أحصل
            علية الان</a>
        </div>
      </div>
    </div>


  </section>
  <section class="u-clearfix u-hidden-lg u-hidden-xl u-white u-section-7" id="sec-7b5e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-gradient u-group u-radius-15 u-shape-round u-group-1">
        <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <h4 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-white u-text-1">
            حريص</h4>
        </div>
      </div>
      <div
        class="u-align-right-sm u-align-right-xs u-border-1 u-border-grey-30 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-12 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-icon-1"><img
              src="{{ url('/')}}/images/7212799.png" alt=""></span>
          <h4 class="u-custom-font u-text u-text-default-md u-text-2" style="direction: rtl;">سجل الدخول كي تتمكن من متابعة سجلك الصحي , يتم حفظ
            بياناتك في قواعد بيانات مشفرة , لا يمكن سوي للك والطبيب الاطلاع عليها</h4>
        </div>
      </div>
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
  <section
    class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-clearfix u-hidden-lg u-hidden-xl u-white u-section-8"
    id="carousel_a1d0">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-gradient u-group u-radius-15 u-shape-round u-group-1">
        <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
          <h4 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-white u-text-1">
            خريطة الموقع</h4>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-12 u-shape-round u-white u-group-2" data-href="{{ url('/')}}/#sec-7b5e">
        <div class="u-container-layout"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-1"><img
              src="{{ url('/')}}/images/179571.png" alt=""></span>
          <h5 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-2">خدماتنا</h5>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-12 u-shape-round u-white u-group-3" data-href="{{ url('/')}}/page/app"
        title="app">
        <div class="u-container-layout u-container-layout-3"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-2"><img
              src="{{ url('/')}}/images/6187807.png" alt=""></span>
          <h5 class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-3">تطبيقاتنا</h5>
        </div>
      </div>
      <div class="u-align-left-md u-container-style u-group u-radius-12 u-shape-round u-white u-group-4"
        data-href="#" title="تسجيل الدخول">
        <div class="u-container-layout"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-3"><img
              src="{{ url('/')}}/images/6460789.png" alt=""></span>
          <h5 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-4">سجل الدخول
          </h5>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-12 u-shape-round u-white u-group-5" data-href="#"
        title="اسئلة متكررة">
        <div class="u-container-layout"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-4"><img
              src="{{ url('/')}}/images/942751.png" alt=""></span>
          <h5
            class="u-align-center-sm u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-5">
            اسئلة متكررة</h5>
        </div>
      </div>
      <div class="u-align-left-md u-container-style u-group u-radius-12 u-shape-round u-white u-group-6"
        data-href="#" title="انضم كموفر خدمة">
        <div class="u-container-layout u-container-layout-6"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-5"><img
              src="{{ url('/')}}/images/2448634.png" alt=""></span>
          <h5
            class="u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-6">
            انضم كموفر خدمة</h5>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-12 u-shape-round u-white u-group-7" data-href="{{ url('/')}}/page/policy"
        title="سياسة الخصوصية">
        <div class="u-container-layout"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-6"><img
              src="{{ url('/')}}/images/10348844.png" alt=""></span>
          <h5
            class="u-align-center-xs u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-7">
            سياسة الخصوصية</h5>
        </div>
      </div>
      <div class="u-align-left-md u-container-style u-group u-radius-12 u-shape-round u-white u-group-8"
        data-href="{{ url('/')}}/page/about" title="من نحن">
        <div class="u-container-layout u-container-layout-8"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-7"><img
              src="{{ url('/')}}/images/4890237.png" alt=""></span>
          <h5 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-8">من نحن</h5>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-12 u-shape-round u-white u-group-9" data-href="{{ url('/')}}/contact.php"
        title="تواصل معنا">
        <div class="u-container-layout"><span
            class="u-align-center-md u-align-center-sm u-align-center-xs u-file-icon u-icon u-icon-8"><img
              src="{{ url('/')}}/images/2487861.png" alt=""></span>
          <h5 class="u-custom-font u-text u-text-default-md u-text-default-sm u-text-default-xs u-text-9">تواصل معنا
          </h5>
        </div>
      </div>
    </div>
  </section>
@endsection