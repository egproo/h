<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-SA">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>{{$service->name}} | حريص</title>
     <base href="{{ url('/') }}" />
 
  <link rel="stylesheet" href="{{ url('/css/style.css') }}" media="screen">
  <link rel="stylesheet" href="{{ url('/css/nav.css') }}" media="screen">
  <script class="u-script" type="text/javascript" src="js/nav.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
  <meta name="generator" content="abdelwhab anwr">
  <meta property="og:title" content="{{$service->name}} | حريص">
  <meta property="og:description" content="">
  <meta property="og:image" content="images/fe2febed-3fc6-410a-fd78-ab6f769b4ace.png">
  <link rel="canonical" href="{{ url('/') }}">
  <link rel="icon" href="{{ url('/images/favicon.png') }}">

  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Almarai:300,400,700,800">




  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "haris",
		"url": "حريص"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:url" content="حريص">
  <meta property="og:type" content="website">
  @livewireStyles
  @livewireScripts

</head>

<body class="u-body u-xl-mode" data-lang="ar" style="max-width:100%;font-family: 'Tajawal-Bold';">
  <header class="u-clearfix u-header u-sticky u-sticky-bad1 u-white u-header" id="sec-e836">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <span class="u-align-left-xl u-file-icon u-icon u-icon-1"><a href="{{ url('/dashboard/login') }}"><img src="{{ url('/images/11496762.png') }}" alt="حريص"></a></span>
      <a href="{{ url('/') }}/"<h3 class="u-custom-font u-text u-text-black u-text-default u-text-1">حريص</h3></a>
      <a href="{{ url('/dashboard/login') }}"
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-palette-1-light-1 u-radius-6 u-btn-1">تسجيل
        الدخول</a>
      <nav class="u-hidden-md u-hidden-sm u-hidden-xs u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1"
        data-responsive-from="MD">
        <div class="menu-collapse u-custom-font" style="font-family: Almarai; font-weight: 800; font-size: 0.875rem;">
          <a class="u-button-style u-file-icon u-nav-link u-file-icon-2" href="#">
            <img src="{{ url('/images/10985613.png') }}" alt="حريص">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/panel/register') }}"
                style="padding: 10px 24px;">انضم كموفر خدمة</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/page/policy') }}"
                style="padding: 10px 24px;">سياسة الخصوصية</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/page/about') }}" style="padding: 10px 24px;">من
                نحن</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/"
                style="padding: 10px 24px;">الرئيسية</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-custom-color-2 u-inner-container-layout u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/panel/register') }}"
                style="padding: 10px 24px;">انضم كموفر خدمة</a>
            </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/page/policy') }}">سياسة الخصوصية</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/page/about') }}">من نحن</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/">الرئيسية</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
      <!--===========================================-->
      <div class="overlay" id="overlay">
        <div class="loader">
          <div class="loading">
            <svg width="64px" height="48px">
              <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
              <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
            </svg>
          </div>
        </div>
      </div>
 
  <link rel="stylesheet" href="{{url('/')}}/css/profile.css?ver=1.0.50" media="screen">	

   <form action="{{ route('process.booking') }}" method="post">
        @csrf
  <section class="u-clearfix u-section-1" id="sec-02fb">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div
        class="u-border-1 u-border-grey-40 u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-35 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <img class="u-border-7 u-border-custom-color-2 u-image u-image-circle u-image-1"
            src="images/343f90259c9341978540c29fc6c0ee390aa62182b1f943a0443b22f42b89cfa9527c533785ef3fdbc4856fb4190545a6de6e7b6a6949c1fa4efa80_1280.jpg"
            alt="" data-image-width="1280" data-image-height="850">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-1" style="direction: rtl;">د. عبدالوهاب
            أنور عبدالمنعم</h3><span
            class="u-custom-color-2 u-file-icon u-hover-feature u-icon u-icon-circle u-text-white u-icon-1"
            data-href="https://elwhab.com/"><img src="images/6974466-e47ca945.png" alt=""></span>
          <h3 class="u-align-right u-custom-font u-text u-text-default u-text-2" style="direction: rtl;"> طبيب أخصائي, نفسي </h3>
          <h3 class="u-align-right u-custom-font u-text u-text-default u-text-3"> السعر </h3>
          <h3
            class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-default u-text-4">
            الخبرة : 15 سنوات </h3>
          <h3 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-5" style="direction: rtl;">200 ريال سعودي</h3>
          <h3 class="u-align-right u-custom-font u-text u-text-default u-text-6" style="direction: rtl;"> استشارة طبية فيديو : 30 دقيقة </h3>
          <h3 class="u-align-right u-custom-font u-text u-text-custom-color-3 u-text-default u-text-7" style="direction: rtl;">المواعيد</h3>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-1">&nbsp;7:00&nbsp;
            ص</a>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-2">&nbsp;7:00&nbsp;
            ص</a>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-3">&nbsp;7:00&nbsp;
            ص</a>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-4">&nbsp;7:00&nbsp;
            ص</a>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-5">&nbsp;7:00&nbsp;
            ص</a>
          <a  style="direction: rtl;"
            class="u-border-none u-btn u-btn-round u-button-style u-custom-font u-font-roboto-slab u-hover-palette-3-light-2 u-palette-3-base u-radius-50 u-btn-6">&nbsp;7:00&nbsp;
            ص</a>
          <div
            class="u-border-2 u-border-grey-40 u-container-style u-expanded-width u-group u-radius-25 u-shape-round u-white u-group-2">
            <div class="u-container-layout u-container-layout-2">
              <h5 class="u-custom-font u-text u-text-default u-text-8">ملاحظات</h5><span
                class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-2"><img
                  src="images/4265172-ee43a09d.png" alt=""></span>
              <h5 class="u-align-right u-custom-font u-text u-text-default u-text-9" style="direction: rtl;"> هنا ملاحظات .&nbsp;هنا ملاحظات
                .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات
                .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات
                .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات
                .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp;هنا ملاحظات .&nbsp; </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

        <!-- يمكنك إضافة المزيد من حقول النموذج هنا حسب الحاجة -->

        <button type="submit" class="btn btn-primary">بدء عملية الدفع</button>
    </form>
  <div class="nav-bot">
    <footer class="u-align-center u-clearfix u-custom-color-7 u-footer u-footer" id="sec-dafd">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1"><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-text-white u-icon-1" data-href="{{url('/')}}/dashboard"
          title="التنبيهات"><img src="images/10950520-bf79d9e0.png" alt="التنبيهات"></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-2" data-href="{{url('/')}}/" title="الرئيسية"><img
            src="images/6997164-89ff8112.png" alt="الرئيسية"></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-3" data-href="{{url('/')}}/dashboard/messages/"><img
            src="images/6974466-e47ca945.png" alt="الرسائل"></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-4" data-href="{{url('/')}}/dashboard/appointments" title="الطلبات"><img
            src="images/6619116-9c3f2e77.png" alt="الطلبات"></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-5" title="الملف الشخصي" data-href="{{url('/')}}/dashboard/profile/"><img
            src="images/8042444-972ca745.png" alt="الملف الشخصي"></span>
      </div>
    </footer>
  </div>

</body>

</html>
