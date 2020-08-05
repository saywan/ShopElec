<?php
use App\Helper;
?>
@extends('layouts.AdminMaster')
@section('title')
  مدیریت سفارشات
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
                                <h4 class="page-title">سفارشات</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فهرست</a>
                            </li>
                            <li class="breadcrumb-item active"> سفارشات</li>
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
                                <strong>فهرست</strong> سفارشات سایت </h2>
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
                                        <th>کد سفارش</th>
                                        <th>نام کاربر سفارش دهنده</th>
                                        <th> اطلاعات محصول</th>
                                        <th>وضعیت پرداختی</th>
                                        <th>جزئیات سفارش</th>
                                        <th>اقدام</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1; @endphp
                                    @foreach($orderlist as $listOrder)
                                       <tr>

                                           <td>
                                               {{$i++}}
                                           </td>
                                        <td>
                                            {{$listOrder->CodeOrder}}
                                        </td>
                                           <td>
                                               {{Helper::getInfoUser($listOrder->user_id)}}
                                           </td>
                                        <td>
                                         <?php
                                             $dataCart=json_decode($listOrder->cart);
                                          //   print_r($dataCart);
                                             foreach ($dataCart as $key=>$listCart)
                                                 {
                                                    $prodId=explode(' ',$listCart->item->id);
                                                    foreach ($prodId as $listProd)
                                                        {
                                                            echo "*".$listCart->qty.Helper::GetInfoProduct($listProd).'<br/>';

                                                        }
                                                 }
                                            /* foreach ($dataCart['items'] as $key=>$Carts)
                                                 {
                                                     print_r($Carts['qty']);
                                                 }*/
                                            ?>
                                        </td>
                                        <td>23 تومان</td>
                                        <td>12</td>
                                        <td>

                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn" data-toggle="modal"  :data-target="'#exampleModal'+{{$listOrder->id}}">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn" @click="deletepro({{$listOrder->id}})">>
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>@endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>کد سفارش</th>
                                        <th>نام کاربر سفارش دهنده</th>
                                        <th> اطلاعات محصول</th>
                                        <th>وضعیت پرداختی</th>
                                        <th>جزئیات سفارش</th>
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
