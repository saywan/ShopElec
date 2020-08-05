
@extends('layouts.HomeMaster')

@section('title','حساب کاربری')

@section('content')


    <div class="page-banner-section section bg_image--3">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-center">
                        <h2>حساب من</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="/">خانه</a></li>
                            <li>حساب من</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="my-account-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    داشبورد
                                </a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> سفارشات</a>

                                <a href="#download" data-toggle="tab"><i class="fa fa-cloud-download"></i> دانلود</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> روش پرداخت</a>

                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> نشانی</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> جزئیات حساب</a>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> خروج</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>داشبورد</h3>

                                        <div class="welcome mb-20">
                                            <p>سلام ، <strong>  مشتری گرامی    {{Auth::user()->fullname}}
                                                   </p>
                                        </div>

                                        <p class="mb-0">از داشبورد حساب شما. می توانید سفارشات اخیر خود را به راحتی بررسی کرده و مشاهده کنید ، آدرس حمل و نقل و صورتحساب خود را مدیریت کرده و رمز عبور و جزئیات حساب خود را ویرایش کنید.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>سفارشات</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>تاریخ</th>
                                                    <th>وضعیت</th>
                                                    <th>جمع</th>
                                                    <th>عمل</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>  نام محصول</td>
                                                    <td>1398/12/15</td>
                                                    <td>در انتظار</td>
                                                    <td>20000 تومان</td>
                                                    <td><a href="cart.html" class="ht-btn black-btn">چشم انداز</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>  نام محصول</td>
                                                    <td>1398/12/15</td>
                                                    <td>تایید شده</td>
                                                    <td>20000 تومان</td>
                                                    <td><a href="cart.html" class="ht-btn black-btn">چشم انداز</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>  نام محصول</td>
                                                    <td>1398/12/15</td>
                                                    <td>در انتظار</td>
                                                    <td>20000 تومان</td>
                                                    <td><a href="cart.html" class="ht-btn black-btn">چشم انداز</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>بارگیری ها</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>تولید - محصول</th>
                                                    <th>تاریخ</th>
                                                    <th>اراضی</th>
                                                    <th>دانلود</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>  نام محصول</td>
                                                    <td>1398/12/15</td>
                                                    <td>آره</td>
                                                    <td><a href="#" class="ht-btn black-btn">دریافت فایل</a></td>
                                                </tr>
                                                <tr>
                                                    <td>  نام محصول</td>
                                                    <td>1398/12/15</td>
                                                    <td>هرگز</td>
                                                    <td><a href="#" class="ht-btn black-btn">دریافت فایل</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>روش پرداخت</h3>

                                        <p class="saved-message">شما هنوز نمی توانید روش پرداخت خود را ذخیره کنید.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>آدرس قبض</h3>

                                        <address>
                                            <p><strong> نام کاربر</strong></p>
                                            <p>تهران - ونک <br></p>
                                            <p>موبایل: 09122345678</p>
                                        </address>

                                        <a href="#" class="ht-btn black-btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>ویرایش آدرس</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>جزئیات حساب</h3>

                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="first-name" placeholder="نام " type="text">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="last-name" placeholder="نام خانوادگی" type="text">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="display-name" placeholder="نام کاربری" type="text">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="email" placeholder="آدرس ایمیل" type="email">
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <h4>تغییر رمز عبور</h4>
                                                    </div>

                                                    <div class="col-12 mb-30">
                                                        <input id="current-pwd" placeholder="گذرواژه فعلی" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="new-pwd" placeholder="رمز عبور جدید" type="password">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="confirm-pwd" placeholder="رمز عبور را تأیید کنید" type="password">
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="save-change-btn">ذخیره تغییرات</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--My Account section end-->

@endsection

