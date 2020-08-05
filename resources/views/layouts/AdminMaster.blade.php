<!DOCTYPE html>
<html lang="fa">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        @yield('title')
    </title>
    <!-- Favicon-->

    <!-- Favicon-->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="/assets/css/app.min.css" rel="stylesheet">
    <link href="/assets/js/bundles/materialize-rtl/materialize-rtl.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="/assets/css/styles/all-themes.css" rel="stylesheet" />
    @yield('styles')
</head>

<body class="light rtl">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="/assets/images/loading.png" alt="admin">
        </div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
@include('admin.header')

<!-- #Top Bar -->
@include('admin.Tobbar')
<section class="content">
    <div class="container-fluid">


        @yield('content')

    </div>
</section>
<script src="/js/app.js" ></script>
<script src="/assets/js/app.min.js"></script>

<script src="/assets/js/chart.min.js"></script>
<!-- Custom Js -->
<script src="/assets/js/admin.js"></script>
<script src="/assets/js/bundles/apexcharts/apexcharts.min.js"></script>
<script src="/assets/js/pages/index.js"></script>

@yield('script')
</body>
