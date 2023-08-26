@if($page->slug == 'about' )
<!--Ur PHP code for connecting to the database is here-->
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-SA">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="{{$page->kewwords}}">
  <meta name="description" content="حريص هو مستشفى رقمية بها جميع التخصصات
 يعمل مع مجموعة متنوعة من مقدمي الرعاية الصحية ، مما يضمن أن المرضى يحصلون على أفضل رعاية ممكنة.
">
  <title>{{$page->title}} | حريص</title>
     <base href="{{ url('/') }}" />
 
  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/About.css" media="screen">
  <link rel="stylesheet" href="css/nav.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/nav.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
  <meta name="generator" content="abdelwhab anwr">
  <meta property="og:title" content="{{$page->title}} | حريص">
  <meta property="og:description" content="حريص هو مستشفى رقمية بها جميع التخصصات
 يعمل مع مجموعة متنوعة من مقدمي الرعاية الصحية ، مما يضمن أن المرضى يحصلون على أفضل رعاية ممكنة.
">
  <meta property="og:image" content="images/fe2febed-3fc6-410a-fd78-ab6f769b4ace.png">
  <link rel="canonical" href="{{ url('/') }}">
  <link rel="icon" href="images/favicon.png">

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

<body class="u-body u-xl-mode" data-lang="ar" style="max-width:100%">
  <header class="u-clearfix u-header u-sticky u-sticky-bad1 u-white u-header" id="sec-e836">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <span class="u-align-left-xl u-file-icon u-icon u-icon-1"><img src="images/11496762.png" alt=""></span>
      <h3 class="u-custom-font u-text u-text-black u-text-default u-text-1">حريص</h3>
      <a href="{{ url('/dashboard/login') }}"
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-palette-1-light-1 u-radius-6 u-btn-1">تسجيل
        الدخول</a>
      <nav class="u-hidden-md u-hidden-sm u-hidden-xs u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1"
        data-responsive-from="MD">
        <div class="menu-collapse u-custom-font" style="font-family: Almarai; font-weight: 800; font-size: 0.875rem;">
          <a class="u-button-style u-file-icon u-nav-link u-file-icon-2" href="#">
            <img src="images/10985613.png" alt="">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">انضم كموفر خدمة</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                  <!--Replace the link with the registration pages-->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="https://elwhab.com/">فرد</a>
                  </li>
                  <!--Replace the link with the registration pages-->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="https://elwhab.com/">(مؤسسة
                      (أعمال</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="terms.html"
                style="padding: 10px 24px;">سياسة الخصوصية</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 24px;">من
                نحن</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html"
                style="padding: 10px 24px;">الرئيسية</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-custom-color-2 u-inner-container-layout u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link">انضم كموفر خدمة</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                      <!--Replace the link with the registration pages-->
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://elwhab.com/">فرد</a>
                      </li>
                      <!--Replace the link with the registration pages-->
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://elwhab.com/">(مؤسسة
                          (أعمال</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="terms.html">سياسة الخصوصية</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">من نحن</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">الرئيسية</a>
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
      <!--===========================================-->
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
            class="u-file-icon u-icon u-text-custom-color-2 u-icon-1"><img src="images/5251379-93a42545.png"
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
              src="images/3165466.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-default u-text-5"> رسالتنا</h3>
          <h1 style="direction: rtl;"
            class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-custom-font u-text u-text-6">
            نحن شركة مرخصة من وزارة الصحة السعودية، نقدم خدمة متكاملة لعملائنا المحترمين، ونتميز بفريق من الأخصائيين
            والاستشاريين ذوي الخبرة والكفاءة العالية، حيث نوفر خدمات الاستشارات الطبية المتخصصة، الإجابة على الأسئلة
            الصحية، وتوصيل الأدوية للمنزل بأسعار مناسبة ومنافسة.<br>
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-39d5">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1" style="direction: rtl;"> من نخدم</h4>
      <div
        class="u-align-left-lg u-align-left-xl u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-1">
        <div
          class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-1">
          <span class="u-file-icon u-icon u-icon-1"><img src="images/10184706.png" alt=""></span>
          <h3 style="direction: rtl;"
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-2">
            المرضى و عائلاتهم</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-3" style="direction: rtl;"> -حريص أول منصة صحية باللغة العربية تستخدم تكنولوجيا
            حديثة لتحسين وتسهيل الاستشارات الطبية ورعاية المرضى وعائلاتهم، ونعمل على تحقيق رؤيتنا في تحسين الصحة وتوصيل
            الخدمات الطبية اللازمة للمرضى وعائلاتهم.</h1><span
            class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-2"
            data-href="Home.html#sec-863c"><img src="images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div class="u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-2">
        <div
          class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-2">
          <span class="u-file-icon u-icon u-icon-3"><img src="images/11498793.png" alt=""></span>
          <h3
            class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-custom-font u-text u-text-default u-text-4">
            الشركات و الموظفين</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-5" style="direction: rtl;"> نساعد عملائنا على تعزيز الولاء للعمل داخل فريق
            الإدارة وبين العاملين، ونحن نضمن أن يكون بيئة العمل الخاصة بكم آمنة ومستقرة بشكل يساعدكم على تحقيق أهدافكم
            العملية.</h1>
          <!--Replace the link with the registration pages-->
          <span class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-4"
            data-href="https://elwhab.com/"><img src="images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div
        class="u-align-left-lg u-align-left-xl u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-3">
        <div class="u-container-layout u-container-layout-3"><span class="u-file-icon u-icon u-icon-5"><img
              src="images/4807695.png" alt=""></span>
          <h3 class="u-align-left u-custom-font u-text u-text-default u-text-6"> الأطباء والمتخصصين</h3>
          <h1 class="u-align-right u-custom-font u-text u-text-7" style="direction: rtl;"> -يمكن للأطباء والمتخصصين استخدام منصتنا لتقديم
            الاستشارات الطبية للمرضى في جميع أنحاء العالم بسهولة وأمان.</h1>
          <!--Replace the link with the registration pages-->
          <span class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-6"
            data-href="https://elwhab.com/"><img src="images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
      <div
        class="u-align-right u-container-style u-expanded-width-xs u-group u-radius-15 u-shape-round u-white u-group-4">
        <div class="u-container-layout u-container-layout-4"><span class="u-file-icon u-icon u-icon-7"><img
              src="images/6201151.png" alt=""></span>
          <h3 class="u-custom-font u-text u-text-8"style="direction: rtl;"> المستشفيات ومراكز الرعاية الصحية</h3>
          <h1 class="u-custom-font u-text u-text-9"style="direction: rtl;"> قدم فرصة للأطباء والمراكز الطبية لتقديم خدماتهم عبر منصتنا
            الإلكترونية، وذلك لتسهيل الوصول للرعاية الصحية المناسبة وتوفير الوقت والجهد.</h1>
          <!--Replace the link with the registration pages-->
          <span class="u-file-icon u-flip-horizontal u-icon u-text-custom-color-2 u-icon-8"
            data-href="https://elwhab.com/"><img src="images/8806467-d02c5a93.png" alt=""></span>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-hidden-md u-hidden-sm u-hidden-xs u-section-3" id="sec-876d">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1041898.png"
          alt=""></span>
      <h4 class="u-align-center u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1" style="direction: rtl;">أنضم الي موفري
        الخدمات في حريص</h4>
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1"><span
            class="u-align-center u-file-icon u-icon u-icon-2"><img src="images/4326508.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-2">فرد</h3>
          <h3 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-default u-text-3" style="direction: rtl;">يمكنك الانضمام
            الي مقدمي الخدمات في <span style="font-weight: 700;" class="u-text-custom-color-1">حريص</span> فقط بضع خطوات
            تفصلك عن الانضمام سواء كنت طبيب او ممرض او مرافق او غير ذلك..
          </h3>
          <!--Replace the link with the registration pages-->
          <a href="https://elwhab.com/"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-1">سجل
            كفرد</a>
        </div>
      </div>
      <div class="u-container-style u-group u-radius-25 u-shape-round u-white u-group-2">
        <div class="u-container-layout u-container-layout-2"><span
            class="u-align-center u-file-icon u-icon u-icon-3"><img src="images/609116.png" alt=""></span>
          <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-4" style="direction: rtl;">مؤسسة (أعمال)؟
          </h3>
          <h3 class="u-align-right u-custom-font u-text u-text-custom-color-2 u-text-default u-text-5" style="direction: rtl;">يمكنك الانضمام
            الي قسم المؤسسات في حريص لتتمكن من توفير كل خدمات مؤسستك ومتابعة الطلبات..</h3>
          <!--Replace the link with the registration pages-->
          <a href="https://elwhab.com/"
            class="u-align-center u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-custom-color-1 u-radius-6 u-btn-2">سجل
            كمؤسسة</a>
        </div>
      </div>
      <h3 class="u-align-center u-custom-font u-text u-text-custom-color-2 u-text-default u-text-6">أو</h3>
    </div>
  </section>


  <div class="nav-bot">
    <footer class="u-align-center u-clearfix u-custom-color-7 u-footer u-footer" id="sec-dafd">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1"><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-text-white u-icon-1" data-href="notifications.html"
          title="notifications"><img src="images/10950520-bf79d9e0.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-2" data-href="Home.html" title="Home"><img
            src="images/6997164-89ff8112.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-3" data-href="https://elwhab.com/"><img
            src="images/6974466-e47ca945.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-4" data-href="orders.html" title="orders"><img
            src="images/6619116-9c3f2e77.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-5" data-href="https://elwhab.com/"><img
            src="images/8042444-972ca745.png" alt=""></span>
      </div>
    </footer>
  </div>

</body>

</html>
@endif
@if($page->slug == 'policy' )
<!DOCTYPE html>
<html style="font-size: 16px;" lang="ar-SA">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="سياسة الخصوصية،
حماية المعلومات،
خصوصية المستخدمين،
جمع المعلومات الشخصية،
استخدام المعلومات،
البيانات الشخصية،
سرية المعلومات،
حقوق الخصوصية،
مشاركة المعلومات،
التواصل الإلكتروني،
الإجراءات الأمنية،
ملفات تعريف الارتباط،
معلومات غير شخصية،
موافقة المستخدم،
تحديثات الخصوصية،
الشروط والأحكام،
سياسة التعامل مع البيانات،
معالجة البيانات الشخصية،
مراجعة سياسة الخصوصية،
حقوق الوصول والتصحيح.">
  <meta name="description"
    content="صفحة سياسة الخصوصية على موقعنا تضع خصوصيتك أمام الأولوية. نقدم لك فهمًا واضحًا لكيفية جمع واستخدام المعلومات الشخصية، مع التأكيد على التزامنا بحماية بياناتك وسرية معلوماتك على المنصة.">
  <title>سياسة الخصوصية</title>
       <base href="https://haris.egproo.com/" />

  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/terms.css" media="screen">
  <link rel="stylesheet" href="css/nav.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/nav.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
  <meta name="generator" content="abdelwhab anwr">
  <meta property="og:title" content="سياسة الخصوصية | حريص">
  <meta property="og:description"
    content="صفحة سياسة الخصوصية على موقعنا تضع خصوصيتك أمام الأولوية. نقدم لك فهمًا واضحًا لكيفية جمع واستخدام المعلومات الشخصية، مع التأكيد على التزامنا بحماية بياناتك وسرية معلوماتك على المنصة.">
  <meta property="og:image" content="images/fe2febed-3fc6-410a-fd78-ab6f769b4ace.png">
  <link rel="canonical" href="سياسة الخصوصية | حريص">
  <link rel="icon" href="images/favicon.png">

  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Almarai:300,400,700,800">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "haris",
		"url": "سياسة الخصوصية | حريص"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:url" content="سياسة الخصوصية | حريص">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="ar" style="max-width:100%">
  <header class="u-clearfix u-header u-sticky u-sticky-bad1 u-white u-header" id="sec-e836">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
      <span class="u-align-left-xl u-file-icon u-icon u-icon-1"><img src="images/11496762.png" alt=""></span>
      <h3 class="u-custom-font u-text u-text-black u-text-default u-text-1">حريص</h3>
      <a href="https://elwhab.com/"
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hover-palette-1-light-1 u-radius-6 u-btn-1">تسجيل
        الدخول</a>
      <nav class="u-hidden-md u-hidden-sm u-hidden-xs u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1"
        data-responsive-from="MD">
        <div class="menu-collapse u-custom-font" style="font-family: Almarai; font-weight: 800; font-size: 0.875rem;">
          <a class="u-button-style u-file-icon u-nav-link u-file-icon-2" href="#">
            <img src="images/10985613.png" alt="">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">انضم كموفر خدمة</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="https://elwhab.com/">فرد</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="https://elwhab.com/">(مؤسسة
                      (أعمال</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="terms.html"
                style="padding: 10px 24px;">سياسة الخصوصية</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 24px;">من
                نحن</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html"
                style="padding: 10px 24px;">الرئيسية</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-custom-color-2 u-inner-container-layout u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-custom-font u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link">انضم كموفر خدمة</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://elwhab.com/">فرد</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://elwhab.com/">(مؤسسة
                          (أعمال</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="terms.html">سياسة الخصوصية</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">من نحن</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">الرئيسية</a>
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
      <!--===========================================-->
  <section class="u-clearfix u-white u-section-1" id="sec-7014">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h3 class="u-custom-font u-text u-text-default u-text-1">سياسات الخصوصية الخاصة بنا</h3>
      <h6 class="u-align-right u-custom-font u-text u-text-default u-text-2" style="direction: rtl;">
        <span style="font-weight: 700;"> سياسة الخصوصية&nbsp;<br>
        </span>نحن في مؤسسة حريص ملتزمون بحماية خصوصية مستخدمي موقعنا الإلكتروني. تمثل سياسة الخصوصية هذه توضيحًا لكيفية
        جمعنا واستخدامنا وحفظنا للمعلومات الشخصية. من خلال استخدامك لهذا الموقع، فإنك توافق على ممارسات الخصوصية المبينة
        في هذا البيان<br>
        <span style="font-weight: 700;">.جمع المعلومات:&nbsp;<br>
        </span>قد نقوم بجمع مجموعة متنوعة من المعلومات الشخصية عندما تقوم بتقديمها بنفسك، مثل الاسم وعنوان البريد
        الإلكتروني. قد نستخدم أدوات تحليلية لجمع معلومات غير شخصية تخص استخدام المستخدمين للموقع، مثل عناوين IP ونوع
        المتصفح والصفحات التي تمت زيارتها.استخدام المعلومات:
        نستخدم المعلومات الشخصية لتحسين تجربتك على الموقع وتقديم المحتوى والخدمات التي تهمك. قد نستخدم معلوماتك للتواصل
        معك بخصوص تحديثات أو عروض أو خدمات جديدة. لا نبيع أو نشارك معلوماتك الشخصية مع أطراف ثالثة دون موافقتك.<br>
        <span style="font-weight: 700;">حماية المعلومات:&nbsp;<br>
        </span>نحن نتخذ إجراءات أمنية مناسبة لحماية معلوماتك الشخصية من الوصول غير المصرح به أو الاستخدام أو التغيير أو
        الكشف. ومع ذلك، يجب مراعاة أنه لا يمكننا ضمان أمان المعلومات عبر الإنترنت بشكل كامل.<br>
        <span style="font-weight: 700;">الموافقة والتغييرات:&nbsp;<br>
        </span>باستخدامك لهذا الموقع، فإنك توافق على سياسة الخصوصية هذه. قد نقوم بتحديث هذه السياسة من وقت لآخر، وسيتم
        نشر أي تغييرات هنا. يُنصح بمراجعة سياسة الخصوصية بشكل دوري للبقاء على دراية بكيفية حماية معلوماتك.<br>
        <span style="font-weight: 700;">الاتصال بنا:<br>
        </span>
        <br>&nbsp;إذا كان لديك أي استفسارات أو تساؤلات بشأن سياسة الخصوصية، يرجى الاتصال بنا عبر [عنوان البريد
        الإلكتروني] أو [رقم الهاتف].<br>
        <span style="font-weight: 700;">تاريخ النسخة: [تاريخ اليوم]</span>
      </h6>
    </div>
  </section>


  <div class="nav-bot">
    <footer class="u-align-center u-clearfix u-custom-color-7 u-footer u-footer" id="sec-dafd">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1"><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-text-white u-icon-1" data-href="notifications.html"
          title="notifications"><img src="images/10950520-bf79d9e0.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-2" data-href="Home.html" title="Home"><img
            src="images/6997164-89ff8112.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-3" data-href="https://elwhab.com/"><img
            src="images/6974466-e47ca945.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-4" data-href="orders.html" title="orders"><img
            src="images/6619116-9c3f2e77.png" alt=""></span><span
          class="u-custom-color-2 u-file-icon u-icon u-icon-circle u-icon-5" data-href="https://elwhab.com/"><img
            src="images/8042444-972ca745.png" alt=""></span>
      </div>
    </footer>
  </div>
</body>

</html>
@endif

