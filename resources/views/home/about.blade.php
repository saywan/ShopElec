
@extends('layouts.HomeMaster')

@section('title','محصول')

@section('content')


    <main class="page-content">

        <!-- About Page Area -->
        <div class="about-area pt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="about-image">
                            <img src="{{URL::to('images/others/about-image.jpg')}}" alt="beautiful girl">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-content">
                            <h2>درباره<span>  لوستر انلاین</span></h2>
                            <h5>فروشگاه لوستر انلاین</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان  گیرد.</p>
                            <h5>آدرس دفتر و فروشگاه</h5>
                            <p>ایران، تهران، رباط کریم، خیابان ملکی</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// About Page Area -->

        <!-- Team Area -->

        <!--// Team Area -->

        <!-- Skills Area -->

        <!--// Skills Area -->

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

