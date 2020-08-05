


<header class="header header-2">

    <!-- Header Top Area -->

    <!--// Header Top Area -->

    <!-- Header Middle Area -->
    <div class="header-middle bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 order-1 order-lg-1">
                    <a href="index.html" class="header-logo">
                        <img src="{{URL::to('images/logo/logo-dark.png')}}" alt="logo">
                    </a>
                </div>
                <div class="col-lg-6 col-12 order-3 order-lg-2">
                    <form action="#" class="header-searchbox">

                        <input type="text" placeholder="جستجو کنید...">
                        <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 order-2 order-lg-3">
                    <div class="header-icons">
                        <div class="header-account">
                            @if(!Auth::check())
                                <button class="header-accountbox-trigger"><span class="lnr lnr-user"></span>

                                    ورود
                                    <i class="ion ion-ios-arrow-down"></i></button>
                                <ul class="header-accountbox dropdown-list">
                                    <li>
                                        <a href="{{route('register')}}">ثبت نام</a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}">ورود به حساب کاربری</a>
                                    </li>

                                </ul>
                                @else
                                <button class="header-accountbox-trigger"><span class="lnr lnr-user"></span>

                                    رضا
                                    <i class="ion ion-ios-arrow-down"></i></button>
                                <ul class="header-accountbox dropdown-list">
                                    <li>
                                        <a href="#">حساب من</a>
                                    </li>
                                    <li>
                                        <a href="#">علاقه مندی من</a>
                                    </li>
                                    <li>
                                        <a href="#">تسویه حساب</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                                @endif
                        </div>
                        <div class="header-cart">
                            <a class="header-carticon" href="#"><i class="lnr lnr-cart"></i><span class="count">
                                    {{Session::has('cart') ? Session::get('cart')->totalQty : '0'}}
                                </span></a>

                            <!-- Minicart -->
                            <div class="header-minicart minicart">
                                <div class="minicart-header">

                                <div class="minicart-footer">
                                    <a href="{{route('product.shoppingCart')}}" class="ho-button ho-button-fullwidth">
                                        <span>

                                            مشاهده سبد خرید
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <!--// Minicart -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Middle Area -->

    <!-- Header Bottom Area -->
    <div class="header-bottom bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-5 col-sm-5">

                    <!-- Category Menu -->

                    <!--// Category Menu -->

                    <!-- Navigation -->
                    <nav class="ho-navigation ho-navigation-2">
                        <ul>
                            <li class="active">
                                <a href="/">خانه</a>

                            </li>
                            <li >
                                <a href="shop-rightsidebar.html">فروشگاه</a>

                            </li>
                            <li>
                                <a href="/request">
                                    درخواست سفارش
                                </a>

                            </li>

                            <li>
                                <a href="/AboutUs">درباره</a>
                            </li>
                            <li>
                                <a href="/ContactUs"> تماس</a>
                            </li>
                        </ul>
                    </nav>
                    <!--// Navigation -->

                </div>
                <div class="col-lg-2 col-md-5 col-sm-5">
                    <div class="header-contactinfo">
                        <i class="flaticon-support"></i>
                        <span>تماس با ما :</span>
                        <b>09212430949</b>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Bottom Area -->

    <!-- Header Hot Tags -->

    <!--// Header Hot Tags -->

</header>
