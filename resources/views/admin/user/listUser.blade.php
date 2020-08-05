<?php
use App\Helper;
?>
@extends('layouts.AdminMaster')
@section('title')
   مدیریت کاربران
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
                                <h4 class="page-title">لیست مشتریان </h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">مشتریان</a>
                            </li>
                            <li class="breadcrumb-item active"> فهرست</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>فهرست</strong> مشتریان سایت </h2>
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
                            <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                    <thead>
                                    <tr>

                                        <th>ردیف</th>
                                        <th>نام کاربری</th>
                                        <th>ایمیل</th>
                                        <th>موبایل</th>
                                        <th>سطح کاربری</th>
                                        <th>وضعیت</th>
                                        <th>اقدام</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1; @endphp
                                    @foreach($listuser as $listusers)
                                       <tr>

                                           <td>
                                               {{$i++}}
                                           </td>
                                        <td>
                                            {{$listusers->fullname}}
                                        </td>
                                           <td>
                                               {{$listusers->mobile}}
                                           </td>
                                           <td>
                                               {{$listusers->role}}
                                           </td>
                                           <td>
                                               @if($listusers->role=='User')
                                                   <span class="label l-bg-orange shadow-style">کاربر عادی </span>
                                                   @elseif($listusers->role=='Admin')
                                                   <span class="label l-bg-purple shadow-style">مدیریت </span>
                                               @endif

                                           </td>

                                           <td>
                                              @if($listusers->status=='active')
                                                   <span class="label l-bg-orange shadow-style">فعال </span>
                                                  @endif
                                           </td>

                                        <td>
                                            <button class="btn tblActnBtn" data-toggle="modal"  :data-target="'#exampleModal'+{{$listusers->id}}">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn" @click="deletepro({{$listusers->id}})">>
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>@endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام کاربری</th>
                                        <th>ایمیل</th>
                                        <th>موبایل</th>
                                        <th>سطح کاربری</th>
                                        <th>وضعیت</th>
                                        <th>اقدام</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>

        @foreach($listuser as $listusers)
            <div class="modal fade" id="exampleModal{{$listusers->id}}" tabindex="-1" role="dialog"
                 aria-labelledby="formModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModal">   ویرایش محصول {{$listusers->fullname}}   </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <label for="email_address1">عنوان محصول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address1" value="{{$listusers->title}}" v-model="titlePro" class="form-control"
                                    >
                                </div>
                            </div>
                            <label for="email_address2">قیمت محصول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address2" value="{{$listusers->fullname}}" v-model="PricePro" class="form-control"
                                    >
                                </div>
                            </div>
                            <label for="email_address3">تعداد محصول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address3" value="{{$listusers->fullname}}" v-model="CountPro" class="form-control"
                                    >
                                </div>
                            </div>
                            <label for="password">زیر دسته</label>
                            <div class="form-group">
                                <select class="browser-default" v-model="prodCat">
                                    <option value="0" >دسته اصلی</option>
                                    <option v-for="cate in CateList" :value="cate.id">
                                        @{{cate.name}}
                                    </option>
                                </select>
                            </div>
                            <label for="email_address5">توضیحات محصول</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="لطفا آنچه را که میخواهید تایپ کنید..." v-model="descriptionPro">
                                    </textarea>

                                </div>
                            </div>
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
                                            <form action="{{url('admin/ProductImage')}}" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
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
                                            <input type="text" id="imagefile" v-model="imageurl"/>
                                        </div>

                                    </div>

                                </div>


                            </div>
                            <br>
                            <button v-on:click="EditProduct({{$listusers->id}})" type="button" class="btn btn-primary m-t-15 waves-effect">ویرایش</button>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </section>


@section('script')

    <script src="/assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
    <script src="/assets/js/form.min.js"></script>

    <script src="/assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    <script src="/assets/js/pages/forms/advanced-form-elements.js"></script>


    <script src="/assets/js/table.min.js"></script>
    <script src="/assets/js/bundles/export-tables/dataTables.buttons.min.js"></script>
    <script src="/assets/js/bundles/export-tables/buttons.flash.min.js"></script>
    <script src="/assets/js/bundles/export-tables/jszip.min.js"></script>
    <script src="/assets/js/bundles/export-tables/pdfmake.min.js"></script>
    <script src="/assets/js/bundles/export-tables/vfs_fonts.js"></script>
    <script src="/assets/js/bundles/export-tables/buttons.html5.min.js"></script>
    <script src="/assets/js/bundles/export-tables/buttons.print.min.js"></script>
    <script src="/assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="/assets/js/pages/ui/dialogs.js"></script>
    <script>
        Dropzone.options.frmFileUpload={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#imagefile").val(file.name);





            }


        };
    </script>
@endsection
