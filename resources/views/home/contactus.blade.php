
@extends('layouts.HomeMaster')

@section('title','محصول')

@section('content')

    <main class="page-content">

        <!-- Contact Us Area -->
        <div class="contact-us-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="commentbox">
                            <h5>پیامی بگذارید</h5>
                            <form id="contact-form" action="#" method="POST" class="ho-form contact-form">
                                <div class="ho-form-inner">
                                    <div class="single-input single-input-half">
                                        <label for="new-review-name">نام*</label>
                                        <input type="text" name="name" id="new-review-name">
                                    </div>
                                    <div class="single-input single-input-half">
                                        <label for="new-review-email">ایمیل*</label>
                                        <input type="email" name="email" id="new-review-email">
                                    </div>
                                    <div class="single-input">
                                        <label for="new-review-subject">موضوع*</label>
                                        <input type="text" name="subject" id="new-review-subject">
                                    </div>
                                    <div class="single-input">
                                        <label for="new-review-textbox">پیام شما</label>
                                        <textarea id="new-review-textbox" name="message" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="single-input">
                                        <button class="ho-button ho-button-dark" type="submit"><span>ارسال پیام</span></button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-50 pt-lg-0">
                        <h2>تماس با ما</h2>
                        <div class="contact-content">
                            <div class="single-content">
                                    <span class="single-content-icon">
                                        <i class="lnr lnr-map-marker"></i>
                                    </span>
                                ایران، تهران، رباط کریم، خیابان ملکی، ساختمان سهند، پلاک 12، واحد 5
                            </div>
                            <div class="single-content">
                                    <span class="single-content-icon">
                                        <i class="lnr lnr-phone-handset"></i>
                                    </span>
                                <b>شماره تماس:</b><br>
                                <a href="#">09212430949</a>
                            </div>
                            <div class="single-content">
                                    <span class="single-content-icon">
                                        <i class="lnr lnr-printer"></i>
                                    </span>
                                <b>فکس: </b><br>
                                +(1234)4081234
                            </div>
                            <div class="single-content">
                                    <span class="single-content-icon">
                                        <i class="lnr lnr-envelope"></i>
                                    </span>
                                <b>ایمیل: </b><br>
                                <a href="#">reza1880z2@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Contact Us Area -->

        <!-- Google Map -->
        <div class="google-map-wrapper">
            <div class="google-map" id="google-map"></div>
        </div>
        <!--// Google Map -->

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

