
@extends('layouts.HomeMaster')

@section('title','تسویه حساب')

@section('content')



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
                            <li class="menu-item-has-children"><a href="#">خانه</a>
                                <ul class="submenu2">
                                    <li><a href="index.html">خانه 01</a></li>
                                    <li><a href="index-2.html">خانه 02</a></li>
                                    <li><a href="index-3.html">خانه 03</a></li>
                                    <li><a href="index-4.html">خانه 04</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">خرید</a>
                                <ul class="submenu2">
                                    <li class="menu-item-has-children"><a href="#">صفحات</a>
                                        <ul class="submenu2">
                                            <li><a href="compare.html">مقایسه محصول</a></li>
                                            <li></li>
                                            <li><a href="checkout.html">پرداخت</a></li>
                                            <li><a href="wishlist.html">لیست علاقه مندیها</a></li>
                                            <li><a href="my-account.html">حساب من</a></li>
                                            <li><a href="login-register.html">ثبت نام ورود</a></li>
                                            <li><a href="faq.html"> سوالات</a></li>
                                            <li><a href="404.html">خطای 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">چیدمان فروشگاه</a>
                                        <ul class="submenu2">
                                            <li><a href="shop.html">خرید</a></li>
                                            <li><a href="shop-three-column.html">خرید سه ستون</a></li>
                                            <li><a href="shop-four-column.html">فروشگاه چهار ستون</a></li>
                                            <li><a href="shop-right-sidebar.html">خرید سمت راست نوار</a></li>
                                            <li><a href="shop-list-nosidebar.html">لیست فروشگاه بدون نوار کناری</a></li>
                                            <li><a href="shop-list-left-sidebar.html">لیست فروشگاه نوار کناری سمت چپ</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.html">لیست فروشگاه سمت راست نوار</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">مشخصات کالا</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product.html">محصول سینگل</a></li>
                                            <li><a href="single-product-variable.html">محصول متغیر</a></li>
                                            <li><a href="single-product-affiliate.html">محصول وابسته</a>
                                            </li>
                                            <li><a href="single-product-group.html">محصولات گروهی</a></li>
                                            <li><a href="single-product-tabstyle-2.html">برگه سمت چپ محصول</a>
                                            </li>
                                            <li><a href="single-product-tabstyle-3.html">برگه سمت راست محصول</a>
                                            </li>
                                            <li><a href="single-product-gallery-left.html">گالری محصولات سمت چپ</a></li>
                                            <li><a href="single-product-gallery-right.html">گالری محصولات درست است</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">مشخصات کالا</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product-sticky-left.html">محصولات چسبنده  چپ</a></li>
                                            <li><a href="single-product-sticky-right.html">محصولات چسبنده  راست</a></li>
                                            <li><a href="single-product-slider-box.html">محصولات جعبه  اسلایدر</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">وبلاگ</a>
                                <ul class="submenu2">
                                    <li><a href="blog.html">وبلاگ</a></li>
                                    <li><a href="blog-right-sidebar.html">وبلاگ سمت راست نوار</a></li>
                                    <li><a href="blog-grid.html">شبکه وبلاگ</a></li>
                                    <li><a href="blog-large-image.html">تصویر بزرگ وبلاگ</a></li>
                                    <li><a href="blog-no-sidebar.html">وبلاگ بدون نوار کناری</a></li>
                                    <li><a href="blog-details.html">جزئیات وبلاگ</a></li>
                                    <li><a href="blog-details-gallery.html">گالری جزئیات وبلاگ</a></li>
                                    <li><a href="blog-details-audio.html">جزئیات وبلاگ صوتی</a></li>
                                    <li><a href="blog-details-video.html">ویدیوی جزئیات وبلاگ</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="about.html">درباره ما</a>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.html">با ما تماس بگیرید</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">حساب من </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.html">ثبت نام</a></li>
                                        <li><a href="login-register.html">ورود</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">واحد پولی: USD </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)">یورو</a></li>
                                        <li><a href="javascript:void(0)">دلار</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">زبان: EN-GB </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png" alt=""> انگلیسی</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png" alt=""> آلمان</a></li>
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

        <div class="page-banner-section section bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>تسویه حساب</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="/">خانه</a></li>
                                <li>تسویه حساب</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="checkout-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20" >
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Checkout Form Start-->
                        <form action="#" class="checkout-form">
                            <div class="row row-40">

                                <div class="col-lg-7">

                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">آدرس قبض</h4>

                                        <div class="row">

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>نام کوچک*</label>
                                                <input type="text" placeholder="نام کوچک">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>نام خانوادگی*</label>
                                                <input type="text" placeholder="نام خانوادگی">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>آدرس ایمیل*</label>
                                                <input type="email" placeholder="آدرس ایمیل">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>شماره تلفن *</label>
                                                <input type="text" placeholder="شماره تلفن">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>نام شرکت</label>
                                                <input type="text" placeholder="نام شرکت">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>نشانی*</label>
                                                <input type="text" placeholder="آدرس شماره 1">
                                                <input type="text" placeholder="آدرس آدرس 2">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>کشور*</label>
                                                <select class="nice-select">
                                                    <option>بنگلادش</option>
                                                    <option>چین</option>
                                                    <option>کشور</option>
                                                    <option>هند</option>
                                                    <option>ژاپن</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>شهر / شهر *</label>
                                                <input type="text" placeholder="شهر / شهر">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>منطقه</label>
                                                <input type="text" placeholder="منطقه">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>کد پستی*</label>
                                                <input type="text" placeholder="کد پستی">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <div class="check-box">
                                                    <input type="checkbox" id="create_account">
                                                    <label for="create_account">ایجاد یک حساب کاربری؟</label>
                                                </div>
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping="">
                                                    <label for="shiping_address">حمل به آدرس های مختلف</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Shipping Address -->
                                    <div id="shipping-form">
                                        <h4 class="checkout-title">آدرس حمل و نقل</h4>

                                        <div class="row">

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>نام کوچک*</label>
                                                <input type="text" placeholder="نام کوچک">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>نام خانوادگی*</label>
                                                <input type="text" placeholder="نام خانوادگی">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>آدرس ایمیل*</label>
                                                <input type="email" placeholder="آدرس ایمیل">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>شماره تلفن *</label>
                                                <input type="text" placeholder="شماره تلفن">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>نام شرکت</label>
                                                <input type="text" placeholder="نام شرکت">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>نشانی*</label>
                                                <input type="text" placeholder="آدرس شماره 1">
                                                <input type="text" placeholder="آدرس آدرس 2">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>کشور*</label>
                                                <select class="nice-select">
                                                    <option>بنگلادش</option>
                                                    <option>چین</option>
                                                    <option>کشور</option>
                                                    <option>هند</option>
                                                    <option>ژاپن</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>شهر / شهر *</label>
                                                <input type="text" placeholder="شهر / شهر">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>منطقه</label>
                                                <input type="text" placeholder="منطقه">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>کد پستی*</label>
                                                <input type="text" placeholder="کد پستی">
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-5">
                                    <div class="row">

                                        <!-- Cart Total -->
                                        <div class="col-12 mb-60">

                                            <h4 class="checkout-title">تعداد سبد خرید</h4>

                                            <div class="checkout-cart-total">

                                                <h4><span>تعداد کل</span> محصولات<span></span></h4>


                                                <ul v-for="(cart,n) in carts" v-bind:key="cart.id">
                                                    <li>@{{cart.title}}<span>@{{cart.price}} تومان</span></li>

                                                </ul>

                                                <p>زیر مجموع <span>@{{totalprice}} تومان</span></p>


                                                <h4>مبلغ کل <span>@{{totalprice}} تومان</span></h4>

                                            </div>

                                        </div>

                                        <!-- Payment Method -->
                                        <div class="col-12 mb-30">

                                            <h4 class="checkout-title">روش پرداخت</h4>

                                            <div class="checkout-payment-method">

                                                <div class="single-method">
                                                    <input type="radio" id="payment_check" name="payment-method" value="check">
                                                    <label for="payment_check">پرداخت را بررسی کنید</label>
                                                    <p data-method="check">لطفاً یک فروشگاه را به نام فروشگاه با خیابان ، خیابان شهر ، فروشگاه دولت ، کدپستی فروشگاه ، کشور فروشگاه ارسال کنید.</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                                    <label for="payment_bank">انتقال مستقیم بانکی</label>
                                                    <p data-method="bank">لطفاً یک فروشگاه را به نام فروشگاه با خیابان ، خیابان شهر ، فروشگاه دولت ، کدپستی فروشگاه ، کشور فروشگاه ارسال کنید.</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                                    <label for="payment_cash">پرداخت نقدی هنگام تحویل</label>
                                                    <p data-method="cash">لطفاً یک فروشگاه را به نام فروشگاه با خیابان ، خیابان شهر ، فروشگاه دولت ، کدپستی فروشگاه ، کشور فروشگاه ارسال کنید.</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                                    <label for="payment_paypal">پی پال</label>
                                                    <p data-method="paypal">لطفاً یک فروشگاه را به نام فروشگاه با خیابان ، خیابان شهر ، فروشگاه دولت ، کدپستی فروشگاه ، کشور فروشگاه ارسال کنید.</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                                    <label for="payment_payoneer">پرداخت کننده</label>
                                                    <p data-method="payoneer">لطفاً یک فروشگاه را به نام فروشگاه با خیابان ، خیابان شهر ، فروشگاه دولت ، کدپستی فروشگاه ، کشور فروشگاه ارسال کنید.</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="checkbox" id="accept_terms">
                                                    <label for="accept_terms">من شرایط و ضوابط را خوانده ام و می پذیرم</label>
                                                </div>

                                            </div>

                                            <button class="ht-btn black-btn mt-40"> پرداخت</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--Checkout section end-->



@section('script')

    <script>
        export default {

            data(){
            /*    return {

                    carts:[],
                    total: 0
                }*/
            },
            created() {
                //this.ViewCart();

            },
            methods:{
            /*    ViewCart(){
                    if(localStorage.getItem('carts')){
                        this.carts=JSON.parse(localStorage.getItem('carts'));
                        this.total=this.carts.reduce((total,item)=>{
                            return total + item.amount * item.price;
                        },0);
                    }
                }*/
            },
            mounted() {

                console.log('Component mounted.')
            }
        }
        function Func() {

            var city = document.getElementById('city');

            var state=document.getElementById('customer-country');
            var val=state.options[state.selectedIndex].getAttribute('data_city');
            var arr=val.split(',');
            city.options.length = 0;
            for(i = 0; i < arr.length; i++)
            {
                if(arr[i] != "")
                {
                    city.options[city.options.length]=new Option(arr[i],arr[i]);
                }
            }
        }
    </script>
@endsection
@endsection


