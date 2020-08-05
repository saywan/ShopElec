
@extends('layouts.HomeMaster')

@section('title','ورود به سیستم')

@section('content')

    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h2>ورود / ثبت نام</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">خانه</a></li>
                            <li>ورود / ثبت نام</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!--Login Register section start-->
    <div class="login-register-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="/Content/images/user/login.png">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register">
                        <div class="form-login-title">
                            <h2>ورود به سیستم</h2>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}" class="ho-form ho-form-boxed">
                                @csrf
                                @csrf
                                <div class="form-fild">
                                    <p>
                                        <label>
                                           آدرس ایمیل
                                            <span class="required">*</span>
                                        </label>
                                    </p>
                                    <input placeholder="آدرس ایمیل خود را وارد کنید" name="email" type="text" value="{{ old('email') }}" id="login-form-email" required >
                                </div>
                                <div class="form-fild">
                                    <p><label>رمز عبور <span class="required">*</span></label></p>
                                    <input placeholder="رمز عبور خود را وارد کنید" type="password" name="password" id="login-form-password" required  autocomplete="current-password">
                                </div>
                                <div class="login-submit">

                                    <button type="submit" class="ht-btn black-btn">
                                        <span>ورود</span>
                                    </button>
                                    <label>
                                        <input class="checkbox" name="rememberme" value="" type="checkbox">
                                        <span>مرا به خاطر بسپار</span>
                                    </label>
                                </div>
                                <div class="lost-password">
                                    <a href="#">رمزعبور خود را گم کردید؟</a>
                                    <a href="{{route('register')}}">حساب کاربری ندارید ؟</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

