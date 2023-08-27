
@if (count($service->childServices) > 1)

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
 
  <link rel="stylesheet" href="{{url('/')}}/css/analysis.css?ver=1.0.50" media="screen">	


  <section class="u-clearfix u-custom-color-5 u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
        <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1"> {{ $service->name }} </h3>
        </div>
      </div>
@foreach($service->childServices as $servicex)
      <div class="u-align-left-xl u-container-style u-group u-radius-10 u-shape-round u-white u-group-n" data-href="{{url('/')}}/service/{{ $servicex->slug }}" title="{{ $servicex->name }}">
        <div class="u-container-layout u-container-layout-15"><span class="u-file-icon u-icon u-icon-14"><img src="{{ asset('storage/' . $servicex->image) }}" alt="{{ $servicex->name }}"></span>
          <h5 class="u-align-center u-custom-font u-text u-text-15">{{ $servicex->name }}</h5>
        </div>
      </div>
@endforeach


    </div>
  </section>
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

@else
	

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
 
  <link rel="stylesheet" href="{{url('/')}}/css/search-result.css?ver=1.0.50" media="screen">	


  <section class="u-clearfix u-custom-color-5 u-section-1" id="sec-3e49">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1" data-animation-name="pulse"
        data-animation-duration="3500" data-animation-direction="" style="margin-bottom: 30px;">
        <div class="u-container-layout u-valign-middle-sm u-container-layout-1">
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-1"> {{ $service->name }} </h3>
        </div>
      </div>
		@foreach($service->activeProviders as $provider)
      <div class="u-align-left u-container-style u-expanded-width u-group u-radius-12 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <div class="u-border-2 u-border-grey-40 u-hover-feature u-image u-image-circle u-radius-10 u-image-1" alt="{{$provider->name}}"
            data-image-width="128" data-image-height="128" style="background-image: url({{$provider->image}});"></div>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">{{ $provider->name }}</h5>
          <h5 style="direction: rtl;" class="u-align-center u-custom-font u-text u-text-default u-text-3">{{ $provider->title }}</h5>
          <h5 style="direction: rtl;margin-left: 55px;"class="u-align-center u-custom-font u-text u-text-default u-text-4"> السعر</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5"> {{ $provider->pivot->price }} ريال</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-default u-text-6"> &nbsp;الخبرة :&nbsp;{{ $provider->eyears }} سنوات</h5>
          <h5 style="direction: rtl;"class="u-align-center u-custom-font u-text u-text-default u-text-7" >   تقدم الخدمة خلال&nbsp;: {{$provider->pivot->duration_in_minutes}} دقيقة
          </h5>
          <a href="profile.html" style="margin-top: -20px;margin-left: 15px;"
            class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-10 u-btn-1">حجز</a>
        </div>
      </div>
		@endforeach


    </div>
  </section>
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

@endif
