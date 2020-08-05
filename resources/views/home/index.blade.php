<?php

use App\Models\category;

$cate=category::where('parentId',0)->get();

?>
@extends('layouts.HomeMaster')

@section('title','فروشگاه')

@section('content')

   {{-- <main class="page-content" id="app">

        <!-- Features Area -->

        <!--// Features Area -->

        <!-- Banners Area -->

        <!--// Banners Area -->

        <!-- Deal Of The Day Area -->
        <div class="ho-section deal-of-the-day-area bg-white ptb-30">
            <div class="container">
                <div class="section-title">
                    <h3>فروش ویژه</h3>
                </div>
                <div class="product-slider deal-of-the-day-slider-2 slider-navigation-2 slider-dots">



                    @foreach($product as $products)

                    <div class="product-slider-col">
                        <article class="hoproduct hoproduct-2">
                            <div class="hoproduct-image">
                                <a class="hoproduct-thumb" href="product-details.html">
                                    <img class="hoproduct-frontimage" src="/upload/Product/{{$products->pimage}}" alt="product image">
                                    <img class="hoproduct-backimage" src="/upload/Product/{{$products->pimage}}" alt="product image">
                                </a>
                                <ul class="hoproduct-actionbox">
                                    <li>
                                        <a href="{{route('Cart',['id'=>$products->id])}}"><i class="lnr lnr-cart"></i></a>
                                    </li>

                                </ul>
                                <ul class="hoproduct-flags">
                                    <li class="flag-pack">جدید</li>

                                </ul>
                            </div>

                            <div class="hoproduct-content">
                                <h5 class="hoproduct-title">
                                    <a href="Product/{{$products->id}}">

                                        {{$products->title}}

                                    </a>
                                </h5>

                                <div class="hoproduct-pricebox">
                                    <div class="pricebox">

                                        <span class="price">{{$products->price}} تومان</span>
                                    </div>

                                </div>

                            </div>
                        </article>
                    </div>

                        @endforeach

                </div>
            </div>
        </div>
        <!--// Deal Of The Day Area -->

        <!-- Our Products Area -->

        <!--// Latest Products -->

        <!-- Banner Area -->


        <!-- Brand Logo Area -->

        <!--// Brand Logo Area -->

        <!-- Latest Blog Area -->

        <!--// Latest Blog Area -->

        <!-- Newsletter Area -->
        <div class="ho-section newsletter-area bg-grey ptb-50">
            <div class="container">
                <div class="newsletter">
                    <div class="newsletter-title">
                        <h2>مشترک شدن در <span>خبر نامه</span></h2>

                    </div>
                    <div class="newsletter-content">
                        <form id="mc-form" class="newsletter-form">
                            <input id="mc-email" type="email" autocomplete="off" placeholder="آدرس ایمیل">
                            <button id="mc-submit" type="submit">ثبت</button>
                        </form>
                        <!-- mailchimp-alerts start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                    <div class="newsletter-socialicons socialicons socialicons-radial">
                        <ul>
                            <li><a href="#"><i class="ion ion-logo-facebook"></i></a></li>
                            <li><a href="#"><i class="ion ion-logo-twitter"></i></a></li>
                            <li><a href="#"><i class="ion ion-logo-youtube"></i></a></li>
                            <li><a href="#"><i class="ion ion-logo-google"></i></a></li>
                            <li><a href="#"><i class="ion ion-logo-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// Newsletter Area -->

    </main>--}}




        <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="lnr lnr-cross"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="جستجو کردن ...">
                            <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li  class="menu-item-has-children">
                                <a href="/">صفحه  اصلی
                                </a>
                            </li>
                            <li class="menu-item-has-children"><a href="/">محصولات فروشگاه <span class="lnr lnr-chevron-down"></span></a>
                                <ul class="sub-menu">

                                    @foreach($cate as $itemCat)
                                        <li class="menu-item-has-children">
                                            <a href="{{url('Category/'.$itemCat->id)}}">

                                                {{$itemCat->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{url('blog')}}">وبلاگ</a></li>
                            <li class="menu-item-has-children"><a href="{{url('AboutUs')}}">درباره ما</a></li>
                            <li class="menu-item-has-children"><a href="{{url('ContactUs')}}">تماس با ما</a></li>

                         {{--   <li class="menu-item-has-children">
                                <a href="about.html">درباره ما</a>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.html">با ما تماس بگیرید</a>
                            </li>--}}

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">حساب من </a>
                                    <ul class="submenu2">
                                        <li><a href="">ثبت نام</a></li>
                                        <li><a href="">ورود</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">09122345678</a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="فیس بوک"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="توییتر"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="لینکدین"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="یوتیوب"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" title="ویمئو"><i class="fa fa-vimeo-square"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End -->

        <!--slider section start-->
        <div class="hero-section section position-relative">
            <div class="hero-slider section">

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="/Content/images/hero/hero-111.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">
                                    <h1>
                                        آباژور رومیزی سناتور
                                    </h1>
                                    <h5>محصولات جدید  آباژور</h5>
                                    <a href="{{url('Category/1')}}" class="ht-btn white-btn">محصولات بیشتر </a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

                <!--Hero Item start-->
              {{--  <div class="hero-item bg-image" data-bg="/Content/images/hero/hero-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">
                                    <h1>صندلی اسپانیایی</h1>
                                    <h5>مجموعه جدید 30٪ تخفیف فقط در این ماه</h5>
                                    <a href="shop.html" class="ht-btn white-btn">اکنون خرید کنید</a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>--}}
                <!--Hero Item end-->

                <!--Hero Item start-->
                <div class="hero-item bg-image" data-bg="/Content/images/hero/hero-31.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">

                                <!--Hero Content start-->
                                <div class="hero-content-2 center">
                                    <h1>لوستری دیواری </h1>
                                    <h5>محصولات لوستر دیواری</h5>
                                    <a href="{{url('Category/1')}}" class="ht-btn white-btn">محصولات بیشتر </a>

                                </div>
                                <!--Hero Content end-->

                            </div>
                        </div>
                    </div>
                </div>
                <!--Hero Item end-->

            </div>
        </div>
        <!--slider section end-->
   <div class="categories-section section bg_color--3 pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-95 pb-lg-75 pb-md-70 pb-sm-60 pb-xs-50">
       <div class="container-fluid">
           <div class="row row-7">

               <!-- Single Categories Banner Start  -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="single-categories-banner mb-15">
                       <div class="banner-image">
                           <img src="/Content/images/categories/banner-51.jpg" alt="">
                       </div>
                       <div class="banner-content">
                           <h5>لوستر های دیواری</h5>
                           <a href="{{url('Category/2')}}">   مشاهده محصولات  بیشتر </a>
                       </div>
                   </div>
               </div>
               <!-- Single Categories Banner End  -->

               <!-- Single Categories Banner Start  -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="single-categories-banner mb-15">
                       <div class="banner-image">
                           <img src="/Content/images/categories/banner-52.jpg" alt="">
                       </div>
                       <div class="banner-content">
                           <h5>محصولات آباژور</h5>
                           <a href="{{url('Category/1')}}">   مشاهده محصولات  بیشتر </a>
                       </div>
                   </div>
               </div>
               <!-- Single Categories Banner End  -->

               <!-- Single Categories Banner Start  -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="single-categories-banner mb-15">
                       <div class="banner-image">
                           <img src="/Content/images/categories/banner-53.jpg" alt="">
                       </div>
                       <div class="banner-content">
                           <h5>لوستر های بزرگ </h5>
                           <a href="{{url('Category/3')}}">   مشاهده محصولات  بیشتر </a>
                       </div>
                   </div>
               </div>
               <!-- Single Categories Banner End  -->

               <!-- Single Categories Banner Start  -->
               <div class="col-lg-3 col-md-6 col-sm-6">
                   <div class="single-categories-banner mb-15">
                       <div class="banner-image">
                           <img src="/Content/images/categories/banner-54.jpg" alt="">
                       </div>
                       <div class="banner-content">
                           <h5>لوستر های اتاق خواب </h5>
                           <a href="{{url('Category/4')}}">   مشاهده محصولات  بیشتر </a>
                       </div>
                   </div>
               </div>
               <!-- Single Categories Banner End  -->


           </div>
       </div>
   </div>
        <!--Categories section start-->
      {{--  <div class="categories-section section bg_color--3 pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-95 pb-lg-75 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <!-- Categories Action Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="categories-action">
                            <h4 class="title">دسته های برتر <br>این هفته</h4>
                            <p>برخی هیدروژن نیاز زندگی می کردند.</p>
                            <a href="#" class="ht-btn mt-40">همه دسته بندی ها</a>
                        </div>
                    </div>
                    <!-- Categories Action End -->

                    <!-- Single Categories Item Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="single-categories-item">
                            <div class="cate-icon">
                                <img src="/Content/images/icons/cat1.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <a href="#"> بازی ها و کنسول ها </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Categories Item Start -->

                    <!-- Single Categories Item Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="single-categories-item">
                            <div class="cate-icon">
                                <img src="/Content/images/icons/cat2.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <a href="#"> مجموعه حمام </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Categories Item Start -->

                    <!-- Single Categories Item Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="single-categories-item">
                            <div class="cate-icon">
                                <img src="/Content/images/icons/cat3.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <a href="#"> صندلی های مبل و عشق </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Categories Item Start -->

                    <!-- Single Categories Item Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="single-categories-item">
                            <div class="cate-icon">
                                <img src="/Content/images/icons/cat4.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <a href="#"> چراغ رومیزی </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Categories Item Start -->

                    <!-- Single Categories Item Start -->
                    <div class="col-xl-2 col-md-4 col-sm-6 mt-30">
                        <div class="single-categories-item">
                            <div class="cate-icon">
                                <img src="/Content/images/icons/cat5.jpg" alt="">
                            </div>
                            <div class="cate-content">
                                <a href="#">  تختخواب </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Categories Item Start -->


                </div>
            </div>
        </div>--}}
        <!--Categories section end-->
        <div class="product-section section pt-75 pt-lg-55 pt-md-45 pt-sm-35 pt-xs-20"  >
            <a @click="saiwan()">
                Test
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-40 pt-20">
                            <h1>محصولات آباژور </h1>

                        </div>
                    </div>
                </div>
                <div class="row product-slider-two">
                    @foreach($product1 as $itemProduct)

                        <div class="col-lg-12">

                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale">-20٪ </span>
                                        <span class="new">جدید</span>
                                    </div>
                                    <a href="">
                                        <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                                        <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action d-flex justify-content-between">
                                       <a class="product-btn" @click="AddCart({{$itemProduct}})">افزودن به سبد خرید</a>

                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="lnr lnr-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quick-view-modal-container" data-toggle="modal" title="مشاهده سریع">
                                                    <i class="lnr lnr-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="">{{$itemProduct->title}} </a></h3>
                                    <div class="product-category-rating">
                                        <p class="product-price rtl">{{number_format($itemProduct->price)}}  تومان</p>
                                        <span class="rating">
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    </span>
                                    </div>

                                </div>
                            </div>

                        </div>


                     @endforeach
                </div>

            </div>
        </div>
        <!--Product section start-->

      <div class="product-section section pt-75 pt-lg-55 pt-md-45 pt-sm-35 pt-xs-20"  >

       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section-title text-center mb-40 pt-20">
                       <h1>محصولات دیوار کوب </h1>

                   </div>
               </div>
           </div>
           <div class="row product-slider-two">
               @foreach($product2 as $itemProduct)

                   <div class="col-lg-12">

                       <div class="single-grid-product mb-40">
                           <div class="product-image">
                               <div class="product-label">
                                   <span class="sale">-20٪ </span>
                                   <span class="new">جدید</span>
                               </div>
                               <a href="">
                                   <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                                   <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                               </a>

                               <div class="product-action d-flex justify-content-between">
                                   <a class="product-btn" @click="AddCart({{$itemProduct}})">افزودن به سبد خرید</a>

                                   <ul class="d-flex">
                                       <li>
                                           <a href="wishlist.html">
                                               <i class="lnr lnr-heart"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#quick-view-modal-container" data-toggle="modal" title="مشاهده سریع">
                                               <i class="lnr lnr-eye"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="product-content">
                               <h3 class="title"> <a href="">{{$itemProduct->title}} </a></h3>
                               <div class="product-category-rating">
                                   <p class="product-price rtl">{{number_format($itemProduct->price)}}  تومان</p>
                                   <span class="rating">
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    </span>
                               </div>

                           </div>
                       </div>

                   </div>


               @endforeach
           </div>

       </div>
   </div>





   <div class="product-section section pt-75 pt-lg-55 pt-md-45 pt-sm-35 pt-xs-20"  >

       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section-title text-center mb-40 pt-20">
                       <h1>محصولات پر بازدید فروشگاه </h1>

                   </div>
               </div>
           </div>
           <div class="row product-slider-two">
               @foreach($product8 as $itemProduct)

                   <div class="col-lg-12">

                       <div class="single-grid-product mb-40">
                           <div class="product-image">
                               <div class="product-label">
                                   <span class="sale">-20٪ </span>
                                   <span class="new">جدید</span>
                               </div>
                               <a href="">
                                   <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                                   <img src="/upload/Product/{{$itemProduct->pimage}}" class="img-fluid" alt="">
                               </a>

                               <div class="product-action d-flex justify-content-between">
                                   <a class="product-btn" @click="AddCart({{$itemProduct}})">افزودن به سبد خرید</a>

                                   <ul class="d-flex">
                                       <li>
                                           <a href="wishlist.html">
                                               <i class="lnr lnr-heart"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#quick-view-modal-container" data-toggle="modal" title="مشاهده سریع">
                                               <i class="lnr lnr-eye"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="product-content">
                               <h3 class="title"> <a href="">{{$itemProduct->title}} </a></h3>
                               <div class="product-category-rating">
                                   <p class="product-price rtl">{{number_format($itemProduct->price)}}  تومان</p>
                                   <span class="rating">
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    <span class="lnr lnr-star"></span>
                                    </span>
                               </div>

                           </div>
                       </div>

                   </div>


               @endforeach
           </div>

       </div>
   </div>
        <!--Product section end-->

        <!--Blog section start-->
        {{--<div class="blog-section section pt-30 pt-lg-10 pt-md-0 pt-sm-0 pt-xs-0">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-40 pt-20 pt-sm-10 pt-xs-0">
                            <h1> وبلاگ ما</h1>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                </div>

                <div class="row blog-slider">
                    <!-- Single Blog Start -->
                    <div class="blog col">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image"><img src="/Content/images/blog/blog-1.jpg" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">عنوان مطلب</a></h3>
                                <ul class="meta">
                                    <li>توسط <a href="#" tabindex="0">مدیر</a></li>
                                    <li>20 دی 1398</li>
                                </ul>
                                <p>متاسفانه، تاریخچه مختصری از زندگی محتوانحوه ، نشسته آمت . فردا در قیمت تعظیم. اینیاس مجموعه فوتبال سس پرتقال تبلیغات رایگان. حاضر</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="blog col">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image"><img src="/Content/images/blog/blog-2.jpg" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">پست تصویری وبلاگ</a></h3>
                                <ul class="meta">
                                    <li>توسط <a href="#" tabindex="0">مدیر</a></li>
                                    <li>20 دی 1398</li>
                                </ul>
                                <p>به WordPress خوش آمدید. این اولین پست شماست ویرایش یا حذف آن ، سپس شروع به نوشتن کنید</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="blog col">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image"><img src="/Content/images/blog/blog-3.jpg" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">پست صوتی وبلاگ</a></h3>
                                <ul class="meta">
                                    <li>توسط <a href="#" tabindex="0">مدیر</a></li>
                                    <li>20 دی 1398</li>
                                </ul>
                                <p>متاسفانه، تاریخچه مختصری از زندگی محتوانحوه ، نشسته آمت . فردا در قیمت تعظیم. اینیاس مجموعه فوتبال سس پرتقال تبلیغات رایگان. حاضر</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <!-- Single Blog Start -->
                    <div class="blog col">
                        <div class="blog-inner">
                            <div class="media"><a href="blog-details.html" class="image"><img src="/Content/images/blog/blog-4.jpg" alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">پست ویدیوی وبلاگ</a></h3>
                                <ul class="meta">
                                    <li>توسط <a href="#" tabindex="0">مدیر</a></li>
                                    <li>20 دی 1398</li>
                                </ul>
                                <p>متاسفانه، تاریخچه مختصری از زندگی محتوانحوه ، نشسته آمت . فردا در قیمت تعظیم. اینیاس مجموعه فوتبال سس پرتقال تبلیغات رایگان. حاضر</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                </div>
            </div>
        </div>--}}
        <!--Blog section end-->

        <!-- Newsletter Section Start -->
        <div class="newslatter-section section pt-60 pt-lg-40 pt-md-30 pt-sm-30 pt-xs-20 pb-100 pb-lg-80 pb-md-65 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="newslatter-content">
                            <p>پیشنهادهای ویژه برای مشترکین</p>
                            <h3>ده درصد تخفیف عضو</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newslatter-form">
                            <form action="#">
                                <input type="text" name="email" placeholder="آدرس ایمیل شما ...">
                                <button class="ht-btn lg-btn dark-btn" type="submit">اشتراک </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Section End -->

        <!-- Instagram Area Start -->
        <div class="instagram-area section">
            <div class="instagram-block-4 fix">
                <ul id="Instafeed"></ul>
            </div>
        </div>
        <!-- Instagram Area End -->




@endsection

