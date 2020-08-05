

@extends('layouts.AdminMaster')
@section('title')
    ثبت دسته محصول جدید
@endsection

@section('styles')
    <link href="/assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    <link href="/assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/css/form.min.css" rel="stylesheet">


@section('content')


    <section class="content" id="app">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">فرم پیشرفته</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فرم ها</a>
                            </li>
                            <li class="breadcrumb-item active">دسته محصول جدید</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>فرم ثبت </strong>  دسته محصول جدید</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">اقدام</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">اقدامی دیگر</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">چیز دیگری اینجا</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" required v-model="NameCat" name="name" required="">
                                            <label class="form-label">نام دسته مورد نظر را وارد کنید</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">


                                            <label>زیر دسته</label>
                                            <select class="browser-default" v-model="parent_id">
                                                <option value="0" >دسته اصلی</option>
                                                <option v-for="cate in CateList" :value="cate.id">
                                                    @{{cate.name}}
                                                </option>
                                            </select>



                                     {{-- <select class="form-group" v-model="parent_id">
                                            <option value="" disabled selected>دسته مورد نظر خود را انتخاب کنید</option>
                                            <option v-for="category in CateList" :value="category.id">
                                               @{{category.name}}
                                            </option>

                                        </select>
                                        <label>
                                           زیر دسته
                                        </label>--}}
                                    </div>
                                </div>

                                <button  v-on:click="AddCategory()" class="btn btn-outline-warning waves-effect" type="submit">ثبت دسته </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


@section('script')


    <script src="/assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
    <script src="/assets/js/form.min.js"></script>
    <script src="/assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <script src="/assets/js/pages/forms/advanced-form-elements.js"></script>
    <script src="/assets/js/pages/ui/dialogs.js"></script>



@endsection
