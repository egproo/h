<header class="u-clearfix u-custom-color-7 u-header u-sticky u-sticky-bad1 u-header" id="sec-e836">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
     @auth('dashboard')
	 <a href="{{ url('/')}}/logout"
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hidden-xs u-hover-palette-1-light-1 u-radius-6 u-btn-1">تسجيل
        الخروج</a>
	 @else
      <a href="{{ url('/')}}/"
        class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-2 u-custom-font u-hidden-xs u-hover-palette-1-light-1 u-radius-6 u-btn-1">تسجيل
        الدخول</a>
		@endauth
      <img class="u-image u-image-circle u-image-1" src="{{ url('/')}}/images/Harees-Final.png" alt="حريص" data-image-width="2104"
        data-image-height="2121" data-href="{{ url('/')}}/" title="حريص | الرئيسية">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse u-custom-font" style="font-family: Almarai; font-weight: 800; font-size: 0.875rem;">
          <a class="u-button-style u-file-icon u-nav-link u-file-icon-1" href="{{ url('/')}}/">
            <img src="{{ url('/')}}/images/10985613.png" alt="حريص">
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-nav u-unstyled u-nav-1">
            <!--انضم كموفر خدمات-->
            <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 24px;">انضم كموفر خدمة</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                  <!--الأفراد-->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ url('/')}}/dashboard/login">فرد</a>
                  </li>
                  <!--الجهات-->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ url('/')}}/dashboard/login">(مؤسسة
                      (أعمال</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/page/policy"
                style="padding: 10px 24px;">سياسة الخصوصية</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/page/about" style="padding: 10px 24px;">من
                نحن</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/"
                style="padding: 10px 26px 10px 24px;">الرئيسية</a>
            </li>
          </ul>
        </div>
        <!--القائمة الجانبية في أجهزة الايباد / الموبايل في الوضع الافقي / الموبايل في الوضع الأفقي-->
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-container-style u-custom-color-2 u-inner-container-layout u-sidenav u-sidenav-1"
            data-offcanvas-width="180">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close u-menu-close-1"></div>
              <ul
                class="u-align-center u-custom-font u-nav u-popupmenu-items u-spacing-46 u-text-active-palette-3-base u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/"
                    style="padding-top: 0px; padding-bottom: 0px;">الرئيسية</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/page/policy"
                    style="padding-top: 0px; padding-bottom: 0px;">سياسة الخصوصية</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/page/about"
                    style="padding-top: 0px; padding-bottom: 0px;">من نحن</a>
                </li>
				<!--  موفر الخدمات مسجل او لا-->
              @auth('panel')
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/profile"
						style="padding-top: 0px; padding-bottom: 0px;">حسابي</a>
					</li>			  
	    	  @else
					<li class="u-nav-item"><a class="u-button-style u-nav-link"
						style="padding-top: 0px; padding-bottom: 0px;">انضم كموفر خدمة</a>
					  <div class="u-nav-popup">
						<ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
						  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/login">فرد</a>
						  </li>
						  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/login">(مؤسسة
							  (أعمال</a>
						  </li>
						</ul>
					  </div>
					</li>				  
			  @endauth			  

				@auth('dashboard')
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/profile"
						style="padding-top: 0px; padding-bottom: 0px;">حسابي</a>
					</li>
				
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/appointments"
						style="padding-top: 0px; padding-bottom: 0px;">حجوزاتي</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/messages"
						style="padding-top: 0px; padding-bottom: 0px;">الرسائل</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/tickets"
						style="padding-top: 0px; padding-bottom: 0px;">تذاكر الدعم</a>
					</li>				
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/dashboard/invoices"
						style="padding-top: 0px; padding-bottom: 0px;">مدفوعاتي</a>
					</li>
					<li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ url('/') }}/logout"
						style="padding-top: 0px; padding-bottom: 0px;">تسجيل الخروج</a>
					</li>
				@endauth
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <h3 class="u-custom-font u-hidden-md u-hidden-sm u-hidden-xs u-text u-text-black u-text-default u-text-1">حريص
      </h3>
    </div>
  </header>