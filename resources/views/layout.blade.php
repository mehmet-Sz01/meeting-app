<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ZNG TOPLANTI UYGULAMASI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    @if (config('app.env') == 'prod' )
        <link rel="stylesheet" href="{{asset(mix('css/app.css'), true)}}">
    @else
        <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
    @endif
    <link rel="stylesheet" href="{{ asset(mix('css/app.css'))}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->



        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <a href="#" class="d-block">ZNG Toplantı</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('dashboard.Index')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                AnaSayfa
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('meetings.meetingCalender')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                               Planlanmış Toplantılar
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('meetings.create')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Toplantı Oluştur
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('meetings.show')}}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Toplantı Bilgileri
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <div class="content">

                <div class="row">
                    <div class="col-lg-10">


                            @yield('content')



                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
        <strong>TelifHakkı&copy; 2023 <a href="#">ZNG TOPLANTI</a>.</strong> Tüm Haklar Saklıdır.
    </footer>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

@if (config('app.env') == 'prod')
    <script src="{{asset(mix('js/app.js'), true)}}"></script>
@else
    <script src="{{asset(mix('js/app.js'))}}"></script>

@endif
<script src="{{ asset(mix('js/app.js')) }}" defer></script>


</body>
</html>
