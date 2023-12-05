<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ZNG TOPLANTI</title>


    @if (config('app.env') == 'prod' )
        <link rel="stylesheet" href="{{asset(mix('css/app.css'), true)}}">
    @else
        <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
    @endif



    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Z</b>N<b>G</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"></b><b>ZNG </b>Toplantı</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->


                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                        </a>
                           <ul class="dropdown-menu " data-widget="tree">

                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Çıkış</a>
                                </div>
                         </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">


            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENULER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="{{route('nedmin.Index')}}"><i class="fa fa-link"></i> <span>AnaSayfa</span></a></li>
                <li class="active"><a href=""><i class="fa-regular fa-calendar"></i> <span>Toplantılar</span></a></li>
                <li class="active"><a href="{{route('meetings.create')}}"><i class="fa-duotone fa-plus"></i> <span>Toplantı Oluştur</span></a></li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @yield('content')

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            ZNG Toplantı Uygulaması
        </div>
        <!-- Default to the left -->
        <strong>TelifHakkı&copy; 2023 <a href="#">ZNG TOPLANTI</a>.</strong> Tüm Haklar Saklıdır.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
@if (config('app.env') == 'prod')
    <script src="{{asset(mix('js/app.js'), true)}}"></script>
@else
    <script src="{{asset(mix('js/app.js'))}}"></script>

@endif
</body>
</html>
