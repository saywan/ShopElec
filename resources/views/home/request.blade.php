
@extends('layouts.HomeMaster')

@section('title','محصول')

@section('content')


    <main class="page-content" id="app">
        <div class="breadcrumb-area bg-grey">
            <div class="container">
                <div class="ho-breadcrumb">
                    <ul>
                        <li><a href="/index">خانه</a></li>
                        <li>درخواست سفارش </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- My Account Page -->
        <div class="my-account-area ptb-30">
            <div class="container">
                <div class="row">

                    <!-- Login Form -->
                    <div class="col-lg-6">
                        <div class="login-form-wrapper">
                            <h2></h2>
                            <div class="ho-form ho-form-boxed">
                                <div class="ho-form-inner">
                                    <div class="single-input">
                                        <label for="login-form-email">نام و نام خانوادگی  </label>
                                        <input type="text"  v-model="namereq" required name="login-form-email" id="login-form-email">
                                    </div>
                                    <div class="single-input">
                                        <label for="login-form-password">شماره موبایل*</label>
                                        <input type="text" required v-model="mobilereq" name="login-form-password" id="login-form-password">
                                    </div>
                                    <div class="single-input">
                                        <label for="login-form-password">نام محصول مورد درخواست*</label>
                                        <input type="text" required  v-model="titleProreq" name="login-form-password" id="login-form-password">
                                    </div>
                                    <div class="single-input">
                                        <label for="login-form-password">تعداد سفارش*</label>
                                        <input type="text" required  v-model="counterq" name="login-form-password" id="login-form-password">
                                    </div>
                                    <div class="single-input">
                                        <button v-on:click="AddOrderOffer()"  type="submit" class="ho-button ho-button-dark">
                                            <span> درخواست سفارش</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Login Form -->

                    <!-- Register Form -->

                    <!--// Register Form -->

                </div>
            </div>
        </div>
        <!--// My Account Page -->

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

    </main>


@endsection

