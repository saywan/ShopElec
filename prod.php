


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
