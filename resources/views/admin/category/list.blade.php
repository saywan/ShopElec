<?php
use App\Helper;
?>
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
                                <h4 class="page-title">جدول خروجی</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فهرست</a>
                            </li>
                            <li class="breadcrumb-item active"> محصولات</li>
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
                                <strong>فهرست</strong> محصولات سایت </h2>
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

                                        <th>نام دسته بندی</th>
                                        <th>زیر دسته بندی</th>
                                        <th>اقدام</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($listcate as $listcates)
                                        <tr>

                                            <td>
                                                {{$listcates->name}}
                                            </td>
                                            <td>
                                                {{Helper::getParentCategory($listcates->id)}}

                                            </td>


                                            <td>
                                                <button class="btn tblActnBtn" data-toggle="modal"  :data-target="'#exampleModal'+{{$listcates->id}}">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn" @click="deletecat({{$listcates->id}})">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>@endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>نام دسته بندی</th>
                                        <th>زیر دسته بندی</th>
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

        @foreach($listcate as $listcates)
        <div class="modal fade" id="exampleModal{{$listcates->id}}" tabindex="-1" role="dialog"
             aria-labelledby="formModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">   ویرایش دسته {{$listcates->name}}   </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <label for="email_address1">عنوان دسته</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address1" value="{{$listcates->id}}" v-model="NameCat" class="form-control"
                                          >
                                </div>
                            </div>
                            <label for="password">زیر دسته</label>
                            <div class="form-group">
                                <select class="browser-default" v-model="parent_id">
                                    <option value="0" >دسته اصلی</option>
                                    <option v-for="cate in CateList" :value="cate.id">
                                        @{{cate.name}}
                                    </option>
                                </select>
                            </div>

                            <br>
                            <button v-on:click="Editcate({{$listcates->id}})" type="button" class="btn btn-primary m-t-15 waves-effect">ویرایش</button>

                    </div>

                </div>
            </div>
        </div>
            @endforeach
    </section>


@section('script')

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
