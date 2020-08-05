
@extends('layouts.AdminMaster')
@section('title')
    ثبت محصول جدید
@endsection

@section('styles')
    <link href="/assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="/assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
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
                            <li class="breadcrumb-item active">پیشرفته</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a class="btn btn-danger" href="{{url('admin/AddProduct')}}">

                        ثبت محصول جدید
                    </a>
                    <div class="card">
                        <div class="header">

                            <h2>
                                <strong>فرم ثبت </strong>  محصول جدید</h2>
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
                                            <input type="text" v-model="titlePro" class="form-control" name="name" required="">
                                            <label class="form-label">نام محصول خود را وارد کنید</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" v-model="PricePro"  class="form-control" name="name" required="">
                                            <label class="form-label">قیمت محصول خود را وارد کنید</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" v-model="CountPro" name="name" required="">
                                            <label class="form-label">تعداد موجودی محصول را وارد کنید</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>
                                        دسته کالا
                                    </label>

                                        <select  class="browser-default"   v-model="prodCat">
                                            <option value="0"  >دسته مورد نظر خود را انتخاب کنید</option>
                                            <option v-for="cate in CateList"  :value="cate.id">
                                                @{{cate.name}}
                                            </option>
                                        </select>


                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea v-model="descriptionPro" id="editor" name="description" cols="30" rows="5" class="form-control no-resize" required="">

                                            </textarea>
                                            <label class="form-label">توضیحات</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->
            <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>آپلود</strong> فایل</h2>
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
                            <input type="file" id="files" class="form-control-file" name="files[]" multiple="" accept="image/*" v-on:change="ImageAvatar">



                        {{--    <form action="{{url('admin/ProductImage')}}" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                {{ csrf_field()  }}
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>فایل ها را اینجا بندازید یا برای آپلود کلیک کنید.</h3>

                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                            </form>
                            <input type="text" id="imagefile" v-model="imageurl"/>--}}
                        </div>
                        <button v-on:click="AddProduct()" class="btn btn-danger waves-effect" type="submit">ثبت محصول</button>
                    </div>

                </div>


            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
            <!-- Masked Input -->

            <!-- #END# Masked Input -->
            <!-- Input Group -->

        </div>
    </section>


 @section('script')


     <script src="/assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
     <script src="/assets/js/form.min.js"></script>

     <script src="/assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
     <script src="/assets/js/pages/forms/advanced-form-elements.js"></script>
     <script src="/assets/js/pages/ui/dialogs.js"></script>
   <script>
       Dropzone.options.frmFileUpload={

           paramName:"file",
           maxFilesize:20,

           success:function(file,response){
               $("#imagefile").val(file.name);





           }


       };
   </script>
@endsection
