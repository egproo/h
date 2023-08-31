@extends('layouts.app')
@section('title', '{{$page->title}}')
@section('keywords', '{{$page->keywords}}')
@section('description', '{{$page->meta_description}}')
@section('content')
@if($page->slug == 'about' )
  <link rel="stylesheet" href="{{ url('css/About.css?ver=10.10.10.09') }}" media="screen">
  <section class="skrollable u-clearfix u-image u-parallax u-section-1" id="sec-7066" data-image-width="4000"
    data-image-height="2667">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-align-center u-custom-font u-text u-text-1" style="direction: rtl;"> يمكنك الحصول على الرعاية الصحية عن بعد في أي مكان وزمان.
      </h1>
      <h1 class="u-align-center u-custom-font u-text u-text-2" style="direction: rtl;"> تقديم رعاية آمنة وموثوقة للمرضى عن طريق استشارات طبية في
        المنزل أو عن بعد</h1>
      <div
        class="u-align-left-xl u-container-style u-expanded-width-xs u-group u-opacity u-opacity-70 u-radius-15 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-file-icon u-icon u-text-custom-color-2 u-icon-1"><img src="{{ url('/')}}/images/5251379-93a42545.png"
              alt=""></span>
          <h3
            class="u-align-center-xl u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-text u-text-default u-text-3">
            رؤيتنا</h3>
          <h1 style="direction: rtl;"
            class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-4">
            نحن نسعى جاهدين لنكون أفضل مقدمي الخدمات الطبية في المملكة العربية السعودية، ونهدف إلى تقديم رعاية صحية
            عالية الجودة وذات قيمة معقولة لجميع المرضى.</h1>
        </div>
      </div>
      <div
        class="u-container-style u-expanded-width-xs u-group u-opacity u-opacity-70 u-radius-15 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img
              src="{{ url('/')}}/images/3165466.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-default u-text-5"> رسالتنا</h3>
          <h1 style="direction: rtl;"
            class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-6">
            نحن شركة مرخصة من وزارة الصحة السعودية، نقدم خدمة متكاملة لعملائنا المحترمين، ونتميز بفريق من الأخصائيين
            والاستشاريين ذوي الخبرة والكفاءة العالية، حيث نوفر خدمات الاستشارات الطبية المتخصصة، الإجابة على الأسئلة
            الصحية، وتوصيل الأدوية للمنزل بأسعار مناسبة ومنافسة.<br>
          </h1>
        </div>
      </div>
      <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="{{ url('/')}}/images/3003312.png"
        alt="" data-image-width="128" data-image-height="128">
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-39d5">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1"> من نخدم</h4>
      <div
        class="u-align-left-lg u-align-left-xl u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-1">
        <div
          class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-1">
          <span class="u-file-icon u-icon u-icon-1"><img src="{{ url('/')}}/images/10184706.png" alt=""></span>
          <h3
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-2">
            المرضى و عائلاتهم</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-3" style="direction: rtl;"> -حريص أول منصة صحية باللغة العربية تستخدم تكنولوجيا
            حديثة لتحسين وتسهيل الاستشارات الطبية ورعاية المرضى وعائلاتهم، ونعمل على تحقيق رؤيتنا في تحسين الصحة وتوصيل
            الخدمات الطبية اللازمة للمرضى وعائلاتهم.</h1><span
            class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-2"
            data-href="{{ url('/')}}/#sec-863c"><img src="{{ url('/')}}/images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div class="u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-2">
        <div
          class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-2">
          <span class="u-file-icon u-icon u-icon-3"><img src="{{ url('/')}}/images/11498793.png" alt=""></span>

          <h3
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-4">
            الشركات و الموظفين</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-5" style="direction: rtl;"> نساعد عملائنا على تعزيز الولاء للعمل داخل فريق
            الإدارة وبين العاملين، ونحن نضمن أن يكون بيئة العمل الخاصة بكم آمنة ومستقرة بشكل يساعدكم على تحقيق أهدافكم
            العملية.</h1><span class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-4"
            data-href="{{ url('/')}}/#sec-863c"><img src="{{ url('/')}}/images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-xl u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-3">
        <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-5"><img
              src="{{ url('/')}}/images/4807695.png" alt=""></span>
          <h3 class="u-align-left u-custom-font u-text u-text-default u-text-6"> الأطباء والمتخصصين</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-7" style="direction: rtl;"> -يمكن للأطباء والمتخصصين استخدام منصتنا لتقديم
            الاستشارات الطبية للمرضى في جميع أنحاء العالم بسهولة وأمان.</h1><span
            class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-6"
            data-href="{{ url('/')}}/panel/login"><img src="{{ url('/')}}/images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div
        class="u-align-right u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-4">
        <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-icon-7"><img
              src="{{ url('/')}}/images/6201151.png" alt=""></span>
          <h3 class="u-custom-font u-text u-text-8"> المستشفيات ومراكز الرعاية الصحية</h3>
          <h1 class="u-custom-font u-text u-text-9" style="direction: rtl;"> قدم فرصة للأطباء والمراكز الطبية لتقديم خدماتهم عبر منصتنا
            الإلكترونية، وذلك لتسهيل الوصول للرعاية الصحية المناسبة وتوفير الوقت والجهد.</h1><span
            class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-8"
            data-href="{{ url('/')}}/panel/login"><img src="{{ url('/')}}/images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-section-3" id="sec-876d">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img src="{{ url('/')}}/images/1041898.png"
          alt=""></span>
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">أنضم الي موفري
        الخدمات في حريص</h4>
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-align-center u-file-icon u-icon u-icon-2"><img src="{{ url('/')}}/images/4326508.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">فرد</h3>
          <h3 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-default u-text-3" style="direction: rtl;">يمكنك الانضمام
            الي مقدمي الخدمات في <span style="font-weight: 700;" class="u-text-custom-color-1">حريص</span> فقط بضع خطوات
            تفصلك عن الانضمام سواء كنت طبيب او ممرض او مرافق او غير ذلك..
          </h3>
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
          <h3 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5" style="direction: rtl;">يمكنك الانضمام
            الي قسم المؤسسات في حريص لتتمكن من توفير كل خدمات مؤسستك ومتابعة الطلبات..</h3>
          <a href="{{ url('/')}}/panel/register"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-2">سجل
            كمؤسسة</a>
        </div>
      </div>
      <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-6">أو</h3>
    </div>
  </section>	
@endif   
@if($page->slug == 'contact' )
  <link rel="stylesheet" href="{{ url('css/contact.css?ver=10.10.10.09') }}" media="screen">	
  <section class="u-clearfix u-section-1" id="sec-6608">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
      <div class="u-container-style u-expanded-width-xs u-group u-radius-25 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img
              src="{{ url('/')}}/images/870175.png" alt=""></span>
          <h3
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-1">
            عنوان شركة حريص</h3><span class="u-file-icon u-icon u-icon-2"><img src="{{ url('/')}}/images/11511743.png" alt=""></span>
          <h3 class="u-custom-font u-text u-text-default u-text-2"> Riyadh</h3>
          <h3
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-3">
            رقم الجوال<i></i>
          </h3>
          <h3 class="u-custom-font u-text u-text-default u-text-4">واتساب<i></i>
          </h3>
          <h3
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-right-xs u-custom-font u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-5">
            <span class="u-file-icon u-icon u-text-custom-color-2"><img src="{{ url('/')}}/images/597177-ba18a868.png"
                alt=""></span>&nbsp;+966 00000000
          </h3>
          <h3 class="u-custom-font u-text u-text-default u-text-6"><span
              class="u-file-icon u-icon u-text-custom-color-2"><img src="{{ url('/')}}/images/597177-ba18a868.png"
                alt=""></span>&nbsp;+966 00000000
          </h3>
          <h3 style="direction: rtl;"
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-7">
            استفسارات متلقي الرعاية:<i></i>
          </h3>
          <h3
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-8">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-1"
              href="#"><i></i>customercare@hareescare.sa
            </a>
          </h3>
          <h3 class="u-align-center-xs u-custom-font u-text u-text-default u-text-9" style="direction: rtl;">دعم فني تقني<i></i>
          </h3>
          <h3 style="direction: rtl;"
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-10">
            للمستشفيات وللأطباء<i></i>
          </h3>
          <h3
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-11">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-2"
              href="#"><i></i>services@hareescare.sa
            </a>
          </h3>
          <h3 class="u-custom-font u-text u-text-default u-text-12">
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-3"
              href="#"><i></i>Technicalsupport@hareescare.sa
            </a>
          </h3><span class="u-file-icon u-hover-feature u-icon u-text-custom-color-2 u-icon-5"
            data-href="#"><img src="{{ url('/')}}/images/1384162-cd331e92.png" alt=""></span>
        </div>
      </div>
    </div>

  </section>
@endif
@if($page->slug == 'policy' )
  <link rel="stylesheet" href="{{ url('css/terms.css?ver=10.10.10.09') }}" media="screen">	
@endif
@if($page->slug == 'app' )
  <link rel="stylesheet" href="{{ url('css/app.css?ver=10.10.10.09') }}" media="screen">	
  <section class="u-clearfix u-section-1" id="sec-8e43">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-align-center u-custom-font u-text u-text-default u-text-1" data-animation-name="flash"
        data-animation-duration="3000" data-animation-direction="">سيكون متاح قريبا</h1>
      <div class="u-align-center u-clearfix u-custom-html u-custom-html-1">
        <div class="loader"></div>
      </div>
    </div>
  </section>
@endif
@if($page->slug == 'nursing' )
  <link rel="stylesheet" href="{{ url('css/nursing.css?ver=10.10.10.09') }}" media="screen">

  <section class="u-clearfix u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-group u-radius-5 u-shape-round u-white u-group-1"
        data-animation-name="pulse" data-animation-duration="3500" data-animation-direction="">
        <div
          class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1">مهام التمريض</h3>
        </div>
      </div>
      <div
        class="u-container-style u-expanded-width-xl u-expanded-width-xs u-group u-radius-12 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2"  style="direction: rtl;"> حقنة عضل أو حقنة
            تحت الجلد</h5>
          <img class="u-image u-image-round u-radius-15 u-image-1" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-3"  style="direction: rtl;">
            يقوم الممارس الصحي بحقن الدواء مباشرة في العضلات</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-3">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-3"
              style="direction: rtl;">
              <h5 class="u-custom-font u-text u-text-default u-text-4"  style="direction: rtl;"> تشمل سيتم احضار الإبرة والمسحات الكحولية , * لا
                يشمل المحاليل والأدوية المراد حقنها, يشترط تقديم وصفة طبية موضح بها نوع العلاج والجرعة*</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-xl u-container-style u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-4">
        <div class="u-container-layout u-container-layout-4">
          <h5  style="direction: rtl;"
            class="u-align-center-xl u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5">
            حقنة وريدية IV</h5>
          <img class="u-image u-image-round u-radius-15 u-image-2"
            src="{{ url('/')}}/images/343f90259c9341978540c29fc6c0ee390aa62182b1f943a0443b22f42b89cfa9527c533785ef3fdbc4856fb4190545a6de6e7b6a6949c1fa4efa80_1280.jpg"
            alt="" data-image-width="1280" data-image-height="850">
          <h5  style="direction: rtl;"
            class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-6">
            يقوم الممارس الصحي بحقن الدواء أو المحلول عن طريق الوريد بعد التأكد من عدم وجود الحساسيات</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-2">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-5">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-5">
              <h5 class="u-custom-font u-text u-text-default u-text-7"  style="direction: rtl;"> تشمل سيتم احضار حقنة وأنبوب الحقن الوريدي
                احتمالية اجراء اختبار التحسس من الدواء الموصوف , * لا يشمل المحاليل والأدوية المراد حقنها, *يشترط تقديم
                وصفة طبية موضح بها نوع العلاج والجرعة</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-6">
        <div class="u-container-layout u-container-layout-6">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-8"  style="direction: rtl;"> جلسة بخار</h5>
          <img class="u-image u-image-round u-radius-15 u-image-3" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-9"  style="direction: rtl;">  يقوم الممارس الصحي بعمل جلسة بخار لتوسعة الشعب
            الهوائية عن طريق استنشاق البخار</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-3">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-7">
            <div class="u-container-layout u-valign-middle u-container-layout-7">
              <h5 class="u-custom-font u-text u-text-default u-text-10"  style="direction: rtl;"> تشمل "سيتم احضار جهاز البخار وتوفير أنبوب مع
                ماسك بخار للاستعمال مرة واحدة ، كما سيتم توفير ادوية توسيع الشعب الهوائية التي يتم وضعها مع البخار",
                *يشترط تقديم وصفة طبية موضح بها نوع العلاج والجرعة</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-right-xs u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-8">
        <div class="u-container-layout u-container-layout-8">
          <h5  style="direction: rtl;"
            class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-custom-color-2 u-text-default u-text-11">
            تركيب و ازالة القسطرة البولية</h5>
          <img class="u-image u-image-round u-radius-15 u-image-4" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5  style="direction: rtl;"
            class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-custom-font u-text u-text-12">
            سيتم إحضار القسطرة مع الأنبوب والكيس الخاص بها ومسحات كحولية و قطن، وماء أنابيب ومطهر طبي وجل طبي</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-4">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-9">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-9">
              <h5 class="u-custom-font u-text u-text-default u-text-13"  style="direction: rtl;"> تشمل سيتم إحضار القسطرة مع الأنبوب والكيس الخاص
                بها ومسحات كحولية و قطن، وماء أنابيب ومطهر طبي وجل طبي</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-10">
        <div class="u-container-layout u-container-layout-10">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-14"  style="direction: rtl;"> العناية
            بالضمادات الجراحية</h5>
          <img class="u-image u-image-round u-radius-15 u-image-5" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-15"  style="direction: rtl;"> يقوم الممارس الصحي بتطهير وغيار ورعاية للضمادات
            الجراحية</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-5">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-11">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-11">
              <h5 class="u-custom-font u-text u-text-default u-text-16"  style="direction: rtl;"> تشمل سيتم احضار شريط لاصق طبي والمسحات
                الكحولية، شاش فزلين ومحلول ملح للتطهير اللازم لتطهير وتغيير الضماد</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-12">
        <div class="u-container-layout u-container-layout-12">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-17"  style="direction: rtl;"> أنبوب التغذية
            الأنفي المعوي</h5>
          <img class="u-image u-image-round u-radius-15 u-image-6" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-18"  style="direction: rtl;"> يقوم الممارس الصحي بالاجراءات كاملة ويتضمن أحد
            الاجراءات التالية: تركيب أو تغيير أو إزالة الأنبوب الأنفي المعوي</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-6">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-13">
            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-container-layout-13">
              <h5 class="u-custom-font u-text u-text-default u-text-19"  style="direction: rtl;"> تشمل سيتم احضار أنبوب تغذية معوي بقطر مناسب
                ومطهر​ طبي و قطن طبي وشريط لاصق</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="u-align-left u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-14">
        <div class="u-container-layout u-container-layout-14">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-20"  style="direction: rtl;"> العلاج بالأكسجين
          </h5>
          <img class="u-image u-image-round u-radius-15 u-image-7" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-21"  style="direction: rtl;"> يقوم الممارس الصحي بتقديم جلسة أكسجين واحدة لعلاج
            ضيق التنفس ونقص الأكسجين لمدة ١٥ الى ٣٠ دقيقة</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-7">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-15">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-15">
              <h5 class="u-custom-font u-text u-text-default u-text-22"  style="direction: rtl;">  تشمل سيتم احضار اسطوانة أكسجين وتوفير أنبوب مع
                ماسك أكسجين للاستعمال مرة</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-group u-radius-12 u-shape-round u-white u-group-16">
        <div class="u-container-layout u-container-layout-16">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-23"  style="direction: rtl;"> قياس العلامات
            الحيوية</h5>
          <img class="u-image u-image-round u-radius-15 u-image-8" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-24"  style="direction: rtl;"> يقوم الممارس الصحي بقياس درجة حرارة الجسم. معدل
            النبض. ضغط الدم. تحليل سكر الدم العشوائي, نسبة الأكسجين</h5>
          <a href="search-result.php"
            class="u-align-center-xs u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-8">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-17">
            <div class="u-container-layout u-valign-middle u-container-layout-17">
              <h5 class="u-custom-font u-text u-text-default u-text-25"  style="direction: rtl;"> تشمل تشمل: قفازات معقمة ومخصصة للاستخدام الواحد
                ، كمامات للتمريض، دراية التمريض للتعامل مع المسنين ، جهاز ضغط وسكر ، جهاز قياس الحرارة</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="carousel_1c7a">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-expanded-width-xs u-group u-radius-12 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-1"  style="direction: rtl;"> إزالة الغُرز</h5>
          <img class="u-image u-image-round u-radius-15 u-image-1" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-2"  style="direction: rtl;"> يقوم الممارس الصحي بإزالة غرز خياطة الجروح مثل جروح
            بعد العمليات أو الإصابات</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">أختيار</a>
          <div
            class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-2">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
              <h5 class="u-align-right u-custom-font u-text u-text-default u-text-3"  style="direction: rtl;"> تشمل سيتم احضار شريط لاصق طبي
                والمسحات الكحولية وشاش فزلين ومحلول ملح للتطهير</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-3">
        <div class="u-container-layout u-container-layout-3">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-4"  style="direction: rtl;"> ثقب الاذن او
            الانف</h5>
          <img class="u-image u-image-round u-radius-15 u-image-2" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-5"  style="direction: rtl;"> ثقب الأذن أو زمام الانف</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-2">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-4">
            <div
              class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-4">
              <h5 class="u-align-right u-custom-font u-text u-text-default u-text-6"  style="direction: rtl;"> تشمل يشمل الأقراط الطبية</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-5">
        <div class="u-container-layout u-container-layout-5">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-7"  style="direction: rtl;"> العناية بالجروح
          </h5>
          <img class="u-image u-image-round u-radius-15 u-image-3" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-8"  style="direction: rtl;"> يقوم الممارس الصحي بتطهير وغيار ورعاية للجروح ومن
            ضمنها قرح الفراش</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-3">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-6">
            <div class="u-container-layout u-valign-middle u-container-layout-6">
              <h5 class="u-align-right u-custom-font u-text u-text-default u-text-9"  style="direction: rtl;"> تشمل سيتم إحضار قفازات معقمة
                ومخصصة للاستخدام الواحد, مسحات كحولية, شاش، شريط لاصق طبي</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-xl u-align-right-sm u-align-right-xs u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-7">
        <div class="u-container-layout u-container-layout-7">
          <h5  style="direction: rtl;"
            class="u-align-left-lg u-align-left-md u-align-left-xl u-custom-font u-text u-text-custom-color-2 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-10">
            العناية بأنبوب التنفس عن طريق القصبة الهوائية</h5>
          <img class="u-image u-image-round u-radius-15 u-image-4" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right-lg u-align-right-md u-align-right-xl u-custom-font u-text u-text-11"  style="direction: rtl;"> يقوم الممارس
            الصحي بتنظيف أنبوب التنفس المثبت في القصبة الهوائية والعناية به (الخدمة لا تشمل تغيير أنبوب التنفس).</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-4">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-8">
            <div
              class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-8">
              <h5  style="direction: rtl;"
                class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-default u-text-12">
                تشمل سيتم توفير جهاز سحب البلغم, أنبوب سحب البلغم عبوة ماء معقم , مسحات كحولية، مطهر</h5>
            </div>
          </div>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-9">
        <div class="u-container-layout u-container-layout-9">
          <h5 class="u-align-left u-custom-font u-text u-text-custom-color-2 u-text-default u-text-13"  style="direction: rtl;"> العناية بالحروق
          </h5>
          <img class="u-image u-image-round u-radius-15 u-image-5" src="{{ url('/')}}/images/1c0cf4ea419118c7779800779f3c8e12.jpg"
            alt="" data-image-width="5184" data-image-height="3456">
          <h5 class="u-align-right u-custom-font u-text u-text-14"  style="direction: rtl;"> يقوم الممارس الصحي بتطهير وغيار ورعاية الحروق ، تشمل
            الخدمة توفير العلاجات والمراهم التي تساعد على تحفيز شفاء الحروق.</h5>
          <a href="search-result.php"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-5">أختيار</a>
          <div
            class="u-align-right u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-5-light-2 u-radius-15 u-shape-round u-group-10">
            <div
              class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-10">
              <h5 class="u-custom-font u-text u-text-default u-text-15"  style="direction: rtl;"> تشمل سيتم احضار شريط لاصق طبي والمسحات
                الكحولية، شاش فزلين ومحلول ملح للتطهير اللازم لتطهير وتغيير الضماد، كريمات ومراهم العناية بالحروق</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

	
@endif
  <section class="u-clearfix">
     <div class="u-clearfix u-sheet u-sheet-1" style="font-family: 'Almarai';">
 {!! $page->content !!}
    </div>
  </section>
@endsection
