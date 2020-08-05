
@extends('layouts.HomeMaster')

@section('title','محصول')

@section('content')


    <div id="app">
        <div class="page-banner-section section bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>جزئیات محصول </h2>
                            <ul class="page-breadcrumb">
                                <li><a href="/">خانه</a></li>
                                <li>جزئیات محصول </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1">
                                            <div class="lg-image">
                                                <img src="/upload/Product/{{$product->pimage}}" alt="">
                                                <a href="/upload/Product/{{$product->pimage}}" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>

                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">
                                            <div class="sm-image">
                                                <img src="/upload/Product/{{$product->pimage}}" alt="{{$product->title}}">
                                            </div>


                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-lg-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>{{$product->title}} </h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 بررسی مشتری)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">{{number_format($product->price)}} تومان</span>
                                            <span class="regular-price">{{number_format($product->price)}} تومان</span>
                                        </div>
                                        <div class="product-description">
                                            <p>
                                                {{$product->disc}}
                                            </p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-variants">
                                                    {{-- <div class="product-variants-item">
                                                         <span class="control-label">اندازه</span>
                                                         <select name="size">
                                                             <option value="1">M</option>
                                                             <option value="2">X</option>
                                                             <option value="3">XX</option>
                                                             <option value="4">XL</option>
                                                         </select>
                                                     </div>--}}
                                                    <div class="product-variants-item">
                                                        <span class="control-label">رنگ</span>
                                                        <ul class="procuct-color">
                                                            <li><a href="#"><span class="color"></span></a></li>
                                                            <li class="active"><a href="#"><span class="color"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <a href="{{route('Cart',['id'=>$product->id])}}" class="ht-btn black-btn">
                                                        افزودن به سبد
                                                        خرید
                                                    </a>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="product-meta">
                                            <span class="posted-in">
                                                دسته بندی:
                                                 <a href="#">   {{\App\Helper::getCategory($product->catid)}} </a> ،

                                            </span>
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
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab section">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">شرح</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">نظرات (1)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                        <p>
                                            {{$product->disc}}
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment">
                                        <h2>1 نظر  </h2>
                                        <ul>
                                            <li>
                                                <div class="product-comment">
                                                    <img src="assets/images/icons/author.png" alt="">
                                                    <div class="product-comment-content">
                                                        <div class="product-reviews">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <p class="meta">
                                                            <strong>مدیر</strong> - <span>22 دی 1398 </span>
                                                        </p><div class="description">
                                                            <p>محصول خوب</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="review-form-wrapper">
                                            <div class="review-form">
                                                <span class="comment-reply-title">یک بررسی اضافه کنید </span>
                                                <form action="#">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">آدرس ایمیل شما منتشر نخواهد شد. </span>
                                                        قسمت های مورد نیاز علامت گذاری شده است
                                                        <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <label>امتیاز شما</label>
                                                        <div class="rating">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <label>اظهار نظر</label>
                                                            <textarea name="message" cols="40" rows="8"></textarea>
                                                        </div>
                                                        <div class="review-comment-form-author">
                                                            <label>نام </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="review-comment-form-email">
                                                            <label>پست الکترونیک </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="comment-submit">
                                                            <button type="submit" class="form-button">ارسال</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

