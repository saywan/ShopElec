


<div class="page-banner-section section bg_image--3">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h2>سبد خرید</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="/">خانه</a></li>
                        <li>سبد خرید</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->

<!--Cart section start-->
<div class="cart-section section sb-border pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- Cart Table -->
                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="cart-column-productname" scope="col">تصویر محصول</th>
                            <th class="cart-column-productname" scope="col">محصول</th>
                            <th class="cart-column-price" scope="col">قیمت</th>
                            <th class="cart-column-quantity" scope="col">تعداد</th>
                            <th class="cart-column-total" scope="col">جمع</th>
                            <th class="cart-column-remove" scope="col">حذف</th>


                        </thead>
                        <tbody>
                        @if(Session::has('cart'))
                        @foreach($ListCart as $listcart)

                        <tr>
                            <td class="pro-thumbnail"
                            ><a href="#">
                                    <img src="/upload/Product/{{$pimage}}" alt="تولید - محصول"></a>
                            </td>
                            <td class="pro-title"><a href="#">
                                    {{$listcart['item']['title']}}
                                </a>
                            </td>
                            <td class="pro-price"><span>{{$listcart['price']}} تومان</span></td>
                            <td class="pro-quantity">
                                <div class="pro-qty">
                                    <input type="number" value="{{$listcart['qty']}}">
                                </div>
                            </td>
                            <td class="pro-subtotal">
                                <span>{{ $listcart['price'] * $listcart['qty'] }}  تومان</span>
                            </td>
                            <td class="pro-remove">
                                <a href="#">
                                    <i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        @endforeach
                        <tr>
                            سبد خرید شما خالی هست
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-12 mb-5">
                        <!-- Calculate Shipping -->
                        <div class="calculate-shipping">
                            <h4>حمل و نقل را محاسبه کنید</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <select class="nice-select">
                                            <option>بنگلادش</option>
                                            <option>چین</option>
                                            <option>کشور</option>
                                            <option>هند</option>
                                            <option>ژاپن</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <select class="nice-select">
                                            <option>داکا</option>
                                            <option>باریسال</option>
                                            <option>کولنا</option>
                                            <option>کاملا</option>
                                            <option>چیتاگونگ</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="text" placeholder="کد پستی / پستی">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <button class="ht-btn black-btn"> ارزیابی</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Discount Coupon -->
                        <div class="discount-coupon">
                            <h4>کد کوپن تخفیف</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <input type="text" placeholder="کد کوپن">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <button class="ht-btn black-btn">کد را اعمال کنید</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="col-lg-6 col-12 mb-30 d-flex">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>خلاصه سبد خرید</h4>
                                <p>زیر مجموع <span>75000 تومان</span></p>
                                <p>هزینه حمل و نقل <span>25000 تومان</span></p>
                                <h2> جمع کل<span>75،00 تومان</span></h2>
                            </div>
                            <div class="cart-summary-button">
                                <button class="ht-btn black-btn">پرداخت</button>
                                <button class="ht-btn black-btn">به روز رسانی </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!--Cart section end-->
