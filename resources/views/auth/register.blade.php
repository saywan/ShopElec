@extends('layouts.HomeMaster')

@section('title','ثبت نام در فروشگاه اینترنتی ')

@section('content')

    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h2>  ثبت نام</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">خانه</a></li>
                            <li>  ثبت نام</li>
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
                    <img src="/Content/images/user/regs.jpg" />
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="customer-login-register">
                        <div class="form-login-title">
                            <h2> ثبت نام در فروشگاه </h2>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-fild">
                                    <p>
                                        <label>
                                          نام و نام خانوادگی
                                            <span class="required">*</span>
                                        </label>
                                    </p>
                                    <input type="text" name="fullname" id="register-form-name" value="{{ old('fullname') }}" required autocomplete="name" autofocus placeholder="نام و نام خانوادگی را وارد کنید">

                                    @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="form-fild">
                                    <p>
                                        <label>
                                            آدرس ایمیل
                                            <span class="required">*</span>
                                        </label>
                                    </p>
                                    <input type="email" id="register-form-email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="آدرس ایمیل خود را وارد کنید">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-fild">
                                    <p><label>رمز عبور <span class="required">*</span></label></p>
                                    <input type="password"  id="register-form-password" name="password" required placeholder="رمز عبور خود را وارد کنید">
                                </div>
                                <div class="login-submit">

                                    <button type="submit" class="ht-btn black-btn">
                                        <span>ثبت نام</span>
                                    </button>

                                </div>
                                <div class="lost-password">
                                    <a href="{{route('register')}}">حساب کابری دارید ؟</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection




