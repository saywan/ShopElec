<?php

use App\Models\category;

$cate=category::where('parentId',0)->get();

?>
<!doctype html>
<html class="no-js" lang="fa">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="/Content/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="/Content/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/Content/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="/Content/css/vendor/helper.css">
    <link rel="stylesheet" href="/Content/css/plugins/plugins.css">
    <link rel="stylesheet" href="/Content/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Modernizr JS -->
    <script src="/Content/js/vendor/modernizr-2.8.3.min.js"></script>

    @yield('styles')
</head>

<body >

<div id="main-wrapper">

    <div id="app">



    <!--Header section start-->
    <header class="header header-transparent header-center header-sticky d-none d-lg-block" >
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">

                    <!--Links start-->
                    <div class="header-top-contact col-lg-12 col-md-12">
                        <ul>
                            <li>راه آسان برای صرفه جویی در هنگام خرید</li>
                        </ul>
                    </div>
                    <!--Links end-->
                </div>

            </div>
        </div>
        <div class="header-bottom menu-right">
            <div class="container-fluid pl-30 pr-30">
                <div class="row align-items-center">

                    <!--Logo start-->
                    <div class="col-xl-1 col-12 text-center mt-20 mb-20">
                        <div class="logo">
                            <a href="/"><img src="/Content/images/arm.png" alt=""></a>
                        </div>
                    </div>
                    <!--Logo end-->

                    <!--Menu start-->
                    <div class="col-xl-7 col-12">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="/">صفحه  اصلی
                                    </a>
                                </li>
                                <li><a href="/">محصولات فروشگاه <span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="sub-menu">

                                        @foreach($cate as $itemCat)
                                            <li>
                                                <a href="{{url('Category/'.$itemCat->id)}}">

                                                    {{$itemCat->name}}
                                                </a>
                                            </li>
                                         @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{url('blog')}}">وبلاگ</a></li>
                                <li><a href="{{url('AboutUs')}}">درباره ما</a></li>
                                <li><a href="{{url('ContactUs')}}">تماس با ما</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Menu end-->

                    <!-- Cart & Search Area Start -->
                    <div class="col-xl-4 col-12 d-flex justify-content-xl-end justify-content-center">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form action="#">
                                    <button><span class="lnr lnr-magnifier"></span></button>
                                    <input type="text" placeholder="جستجوی محصول ...">
                                </form>
                            </div>
                        </div>
                        <ul class="ht-us-menu">
                            <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                        </ul>
                        <div class="header-cart">
                            <a href="cart"><span class="lnr lnr-cart"></span><span class="count">@{{badge}}</span></a>
                            <!--Mini Cart Dropdown Start-->
                            <div class="header-cart-dropdown">
                                <ul class="cart-items">

                                   <li class="single-cart-item" v-for="(cart,n) in carts" v-bind:key="cart.id">
                                        <div class="cart-img">
                                            <a :href="'Product/' + cart.id">
                                                <img :src="'/upload/Product/'+ cart.pimage" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-content">
                                            <h5 class="product-name">
                                                <a :href="'Product/' + cart.id">@{{cart.title}} </a>
                                            </h5>
                                            <span class="product-quantity">@{{cart.amount}} ×</span>
                                            <span class="product-price">@{{cart.price}} تومان</span>
                                        </div>
                                        <div class="cart-item-remove">
                                            <a title="برداشتن" @click="removeCart(n)"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cart-total">
                                    <h5>مجموع سبد: <span class="float-right">@{{totalprice}} تومان</span></h5>
                                    <h5>کل: <span class="float-right">@{{totalprice}} تومان</span></h5>
                                </div>
                                <div class="cart-btn">
                                    <a href="{{url('User/Cart')}}">مشاهده سبد  </a>
                                    <a href="/">پرداخت </a>
                                </div>
                            </div>
                            <!--Mini Cart Dropdown End-->
                        </div>
                        <ul class="ht-us-menu">
                            <li>
                             @if(Auth::check())

                                    <a href="#"><span class="lnr lnr-menu-circle"></span></a>
                                    <ul class="ht-dropdown right">
                                        <li><a href="{{url('User/Profile')}}">پروفایل من</a></li>
                                        <li><a href="{{url('user/Profile')}}"> سفارشات من</a></li>
                                        <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                خروج از فروشگاه</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                 @else

                                    <a href="#"><span class="lnr lnr-menu-circle"></span></a>
                                    <ul class="ht-dropdown right">
                                        <li><a href="{{route('login')}}">ورود</a></li>
                                    </ul>
                                 @endif
                            </li>
                        </ul>
                    </div>
                    <!-- Cart & Search Area End -->
                </div>

            </div>
        </div>
    </header>
    <!--Header section end-->

    <!--Header Mobile section start-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-bottom menu-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-mobile-navigation d-block d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 col-md-6">
                                    <div class="header-logo">
                                        <a href="index.html">
                                            <img src="/Content/images/arm.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mobile-navigation text-right">
                                        <div class="header-icon-wrapper">
                                            <ul class="icon-list justify-content-end">
                                                <li>
                                                    <div class="header-cart-icon">
                                                        <a href="cart.html"><i class="lnr lnr-cart"></i><span>2</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="lnr lnr-menu"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Mobile Menu start-->
                <div class="row">
                    <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <!--Mobile Menu end-->

            </div>
        </div>
    </header>
    <!--Header Mobile section end-->


       @yield('content')

    </div>
</div>

    <!--Footer section start-->
    <footer class="footer-section section bg-blue">

        <!-- Footer Top Start -->
        <div class="footer-top-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
            <div class="container-fluid max-width-100 sb-border ml-130 ml-lg-15 ml-md-15 ml-sm-15 ml-xs-15 mr-130 mr-lg-15 mr-md-15 mr-sm-15 mr-xs-15">
                <div class="row">
                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">حساب من</span></h4>
                        <ul class="ft-menu">
                            <li><a href="#">حساب من</a></li>
                            <li><a href="#">لیست علاقه مندیها</a></li>
                            <li><a href="#">رهگیری سفارش</a></li>
                            <li><a href="#">سیاست حفظ حریم خصوصی</a></li>

                        </ul>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">درباره ما</span></h4>
                        <ul class="ft-menu">
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">راهنمای خرید</a></li>
                            <li><a href="#">اطلاعات تحویل</a></li>
                            <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                            <li><a href="#">فروشگاه ما</a></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">در تماس باشید</span></h4>
                        <p class="mb-15">آدرس: تهران - ونک - خیابان بهار ،</p>
                        <p class="mb-15">تلفن:02636665796 </p>
                        <p class="mb-15">ایمیل: hello@sthemes.com</p>
                        <img class="mt-20" src="/Content/images/payment/paypal.png" alt="">
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget text-left col-lg-4 offset-xl-1 col-xl-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">اکنون به خبرنامه ما بپیوندید</span></h4>
                        <p class="mb-15 float-lg-left">کیفیت استثنایی. کارخانه های اخلاقی ثبت نام کنید تا از حمل و نقل رایگان ایالات متحده لذت ببرید و به سفارش اول خود بازگردید.</p>
                        <div class="newsletter-form-area">
                            <form id="mc-form" class="mc-form">
                                <input type="email" placeholder="آدرس ایمیل خود را اینجا وارد کنید..." required="">
                                <button class="ht-btn dark-btn float-lg-left" type="submit" value="submit">اشتراک </button>
                            </form>

                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                    <!--Footer Widget end-->
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!--Footer bottom start-->
        <div class="footer-bottom section">
            <div class="container-fluid pl-130 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-130 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="copyright text-lg-left text-center">
                            <p>کپی رایت ©1399 <a href=""></a><a href="https://hasthemes.com/" target="_blank">تمام حقوق برای فروشگاه اینترنتی  محفوظ است.</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer-social">
                            <a href="http://instagram.com/MadaLighting"><i class="fa fa-facebook"></i></a>
                            <a href="http://instagram.com/MadaLighting"><i class="fa fa-twitter"></i></a>
                            <a href="https://telegram.me/MadaLighting"><i class="fa fa-telegram"></i></a>
                            <a href="https://wa.me/09106968229"><i class="fa fa-whatsapp"></i></a>
                            <a href="http://instagram.com/MadaLighting"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->

    <!-- Modal Area Strat -->
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Product Details Left -->
                                <div class="product-details-left">
                                    <div class="product-details-images slider-lg-image-1">
                                        <div class="lg-image">
                                            <img src="/Content/images/product/large-product/l-product-1.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="/Content/images/product/large-product/l-product-2.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="/Content/images/product/large-product/l-product-3.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="/Content/images/product/large-product/l-product-4.jpg" alt="">
                                        </div>
                                        <div class="lg-image">
                                            <img src="/Content/images/product/large-product/l-product-5.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-details-thumbs slider-thumbs-1">
                                        <div class="sm-image"><img src="/Content/images/product/small-product/s-product-1.jpg" alt="شست تصویر محصول"></div>
                                        <div class="sm-image"><img src="/Content/images/product/small-product/s-product-2.jpg" alt="شست تصویر محصول"></div>
                                        <div class="sm-image"><img src="/Content/images/product/small-product/s-product-3.jpg" alt="شست تصویر محصول"></div>
                                        <div class="sm-image"><img src="/Content/images/product/small-product/s-product-4.jpg" alt="شست تصویر محصول"></div>
                                        <div class="sm-image"><img src="/Content/images/product/small-product/s-product-5.jpg" alt="شست تصویر محصول"></div>
                                    </div>
                                </div>
                                <!--Product Details Left -->
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <!--Product Details Content Start-->
                                <div class="product-details-content">
                                    <!--Product Nav Start-->
                                    <div class="product-nav">
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                    <!--Product Nav End-->
                                    <h2>نام محصول</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 بررسی مشتری)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">50000 تومان</span>
                                        <span class="regular-price">70000 تومان</span>
                                    </div>
                                    <div class="product-description">
                                        <p>و</p>
                                    </div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="#">
                                            <div class="product-quantity">
                                                <input value="1" type="number">
                                            </div>
                                            <div class="add-to-link">
                                                <button class="ht-btn black-btn">افزودن به سبد خرید</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wishlist-compare-btn">
                                        <a href="#" class="wishlist-btn">افزودن به لیست دلخواه </a>
                                        <a href="#" class="add-compare">مقایسه محصول</a>
                                    </div>
                                    <div class="product-meta">
                                            <span class="posted-in">
                                                دسته بندی:
                                                 <a href="#">لوازم جانبی</a> ،
                                                 <a href="#">الکترونیک</a>
                                            </span>
                                    </div>
                                    <div class="single-product-sharing">
                                        <h3>این محصول را به اشتراک بگذارید</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Product Details Content End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Area End -->


    <!-- Placed js at the end of the document so the pages load faster -->




<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->



<script src="/js/app.js"></script>
<script src="/Content/js/vendor/jquery-1.12.4.min.js"></script>


<script src="/Content/js/vendor/popper.min.js"></script>
<script src="/Content/js/vendor/bootstrap.min.js"></script>
<script src="/Content/js/plugins/plugins.js"></script>
<script src="/Content/js/main.js"></script>

@yield('scripts')


</body>


</html>
