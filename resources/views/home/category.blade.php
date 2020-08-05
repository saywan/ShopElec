@extends('layouts.HomeMaster')

@section('title','دسته بندی فروشگاه')

@section('content')




    <div id="app">

        <div class="page-banner-section section bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>دسته بندی</h2>

                            <ul class="page-breadcrumb">
                                <li><a href="">صفحه اصلی</a></li>
                                <li>دسته بندی محصولات
                                    {{\App\Helper::GetNamecategory($cateId)}}
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div
            class="shop-section section sb-border pt-100 pt-lg-80 pt-md-60 pt-sm-50 pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Grid & List View Start -->
                                            <div
                                                class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                                <div class="grid-list-option d-flex">
                                                    <ul class="nav">
                                                        <li>
                                                            <a class="active show" data-toggle="tab" href="#grid"><i
                                                                    class="fa fa-th"></i></a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#list" class=""><i
                                                                    class="fa fa-th-list"></i></a>
                                                        </li>
                                                    </ul>
                                                    <p>نمایش 1-9 از 41 نتیجه</p>
                                                </div>
                                                <!--Toolbar Short Area Start-->
                                                <div class="toolbar-short-area d-md-flex align-items-center">
                                                    <div class="toolbar-shorter ">
                                                        <label>مرتب سازی بر اساس:</label>
                                                        <select class="wide">
                                                            <option data-display=""> قیمت</option>
                                                            <option value="Relevance">تاریخ</option>
                                                            <option value="Name, A to Z">نام</option>
                                                            <option value="Name, Z to A">جدید</option>
                                                            <option value="Price, low to high">قیمت ، پایین تا بالا
                                                            </option>
                                                            <option value="Price, high to low">قیمت ، پایین تا پایین
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--Toolbar Short Area End-->
                                            </div>
                                            <!-- Grid & List View End -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">
                                                <div id="myTabContent-2" class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show">
                                                        <div class="product-grid-view">
                                                            <div class="row">
                                                                @foreach($cate as $itemcate)
                                                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                                                        <!--  Single Grid product Start -->
                                                                        <div class="single-grid-product mb-40">
                                                                            <div class="product-image">
                                                                                <div class="product-label">
                                                                                    <span class="sale">-20٪ </span>
                                                                                    <span class="new">جدید</span>
                                                                                </div>
                                                                                <a href="{{url('Product/'.$itemcate->id)}}">
                                                                                    <img
                                                                                        src="/upload/Product/{{$itemcate->pimage}}"
                                                                                        class="img-fluid" alt="">
                                                                                    <img
                                                                                        src="/upload/Product/{{$itemcate->pimage}}"
                                                                                        class="img-fluid" alt="">
                                                                                </a>

                                                                                <div
                                                                                    class="product-action d-flex justify-content-between">
                                                                                    <a class="product-btn"
                                                                                       href="cart.html">افزودن به سبد
                                                                                        خرید</a>
                                                                                    <ul class="d-flex">
                                                                                        <li><a href="wishlist.html"><i
                                                                                                    class="lnr lnr-heart"></i></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#quick-view-modal-container"
                                                                                               data-toggle="modal"
                                                                                               title="مشاهده سریع"><i
                                                                                                    class="lnr lnr-eye"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <h3 class="title"><a
                                                                                        href="single-product.html">
                                                                                        {{$itemcate->title}}
                                                                                    </a></h3>
                                                                                <div class="product-category-rating">
                                                                                    <p class="product-price rtl">
                                                                                        {{number_format($itemcate->price)}}
                                                                                        تومان</p>
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
                                                                        <!--  Single Grid product End -->
                                                                    </div>

                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="list" class="tab-pane fade">
                                                        <div class="product-list-view">


                                                            @foreach($cate as $itemcate)
                                                                <div class="product-list-item mb-40">
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <div class="single-grid-product">
                                                                                <div class="product-image">
                                                                                    <div class="product-label">
                                                                                        <span class="sale">-20٪ </span>
                                                                                        <span class="new">جدید</span>
                                                                                    </div>
                                                                                    <a href="{{url('Product/'.$itemcate->id)}}">
                                                                                        <img
                                                                                            src="/Product/{{$itemcate->pimage}}"
                                                                                            class="img-fluid" alt="">
                                                                                        <img
                                                                                            src="/Product/{{$itemcate->pimage}}"
                                                                                            class="img-fluid" alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-sm-6">
                                                                            <div class="product-content-shop-list">
                                                                                <div class="product-content">
                                                                                    <h3 class="title"><a
                                                                                            href="{{url('Product/'.$itemcate->id)}}">
                                                                                            {{$itemcate->title}}
                                                                                        </a></h3>
                                                                                    <div class="price-rating">
                                                                                        <p class="product-price"><span
                                                                                                class="discounted-price">
                                                                                            {{number_format($itemcate->price)}}
                                                                                            تومان</span> <span
                                                                                                class="main-price discounted">{{number_format($itemcate->price)}} تومان</span>
                                                                                        </p>
                                                                                        <div
                                                                                            class="product-category-rating">
                                                                                        <span class="rating">
                                                                                        <span
                                                                                            class="lnr lnr-star"></span>
                                                                                        <span
                                                                                            class="lnr lnr-star"></span>
                                                                                        <span
                                                                                            class="lnr lnr-star"></span>
                                                                                        <span
                                                                                            class="lnr lnr-star"></span>
                                                                                        <span
                                                                                            class="lnr lnr-star"></span>
                                                                                        </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="product-desc">  {{$itemcate->disc}}
                                                                                    </p>
                                                                                    <div
                                                                                        class="product-action-list d-flex">
                                                                                        <a class="ht-btn black-btn"
                                                                                           href="cart.html">افزودن به
                                                                                            سبد خرید</a>
                                                                                        <a class="ht-btn black-btn width-50 mlr-5"
                                                                                           href="wishlist.html"><i
                                                                                                class="lnr lnr-heart"></i></a>
                                                                                        <a class="ht-btn black-btn width-50"
                                                                                           href="cart.html"><i
                                                                                                class="lnr lnr-eye"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-0 mb-xs-35 mb-sm-35">
                                         <div class="col">
                                             <ul class="page-pagination">
                                                 <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                 <li class="active"><a href="#">01</a></li>
                                                 <li><a href="#">02</a></li>
                                                 <li><a href="#">03</a></li>
                                                 <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                             </ul>
                                         </div>
                                     </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection

