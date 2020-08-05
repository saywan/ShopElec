<template>

    <div id="app">
        <div class="page-banner-section section bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>سبد خرید</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="">خانه</a></li>
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
                                    <th class="pro-thumbnail">تصویر</th>
                                    <th class="pro-title">نام محصول</th>
                                    <th class="pro-price">قیمت</th>
                                    <th class="pro-quantity">تعداد</th>
                                    <th class="pro-subtotal">جمع</th>
                                    <th class="pro-remove">حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(cart,n) in carts">
                                    <td class="pro-thumbnail"><a href="#"><img :src="'/upload/Product/'+ cart.pimage" alt="تولید - محصول"></a></td>
                                    <td class="pro-title"><a href="#">
                                        {{cart.title}}
                                    </a></td>
                                    <td class="pro-price"><span> {{cart.price}} تومان</span></td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty"><input type="number" :value="cart.amount"></div>
                                    </td>
                                    <td class="pro-subtotal"><span>{{cart.price * cart.amount}} تومان</span></td>
                                    <td class="pro-remove"><a @click="removeCart(n)"><i class="fa fa-trash-o"></i></a></td>
                                </tr>

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
                                                    <option>ایران</option>

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
                                        <p>زیر مجموع <span>{{totalprice}} تومان</span></p>

                                        <h2> جمع کل<span>{{totalprice}} تومان</span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <a href="Checkout" class="ht-btn black-btn">تسویه حساب</a>
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
    </div>


</template>




<script>
    export default {

        data(){
            return {

                carts:[],
                total: 0
            }
        },
        created() {
            this.ViewCart();

        },
        methods:{
            ViewCart(){
                if(localStorage.getItem('carts')){
                    this.carts=JSON.parse(localStorage.getItem('carts'));
                    this.total=this.carts.reduce((total,item)=>{
                        return total + item.amount * item.price;
                    },0);
                }
            },
            removeCart(pro)
            {

                this.carts.splice(pro,1);
                this.storeCart();
            },
            storeCart(){
                let parsed=JSON.stringify(this.carts);
                localStorage.setItem('carts',parsed);
                this.ViewCart();
            },
        },
        mounted() {


            console.log('Component mounted.')
        }
    }
</script>
