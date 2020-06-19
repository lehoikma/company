<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-TOP</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header" style="text-align: center">MENU</li>
                <li class="active treeview">
                    <a href="{{route('admin_top')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang Chủ</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Giới Thiệu</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('index_history')}}"><i class="fa fa-circle-o"></i> Lịch Sử</a></li>
                        <li><a href="{{route('index_mission')}}"><i class="fa fa-circle-o"></i> Sứ mệnh</a></li>
                        <li><a href="{{route('index_vision')}}"><i class="fa fa-circle-o"></i> Tầm nhìn</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Sản Phẩm</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('category_prd_index')}}"><i class="fa fa-circle-o"></i> Tạo Danh Mục Sản Phẩm</a></li>
                        <li><a href="{{route('prd_index')}}"><i class="fa fa-circle-o"></i> Tạo Sản Phẩm</a></li>
                        <li><a href="{{route('prd_listPrd')}}"><i class="fa fa-circle-o"></i> Danh Sách Sản Phẩm</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>Tin Tức</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('form_create_news')}}"><i class="fa fa-circle-o"></i> Tạo Tin</a></li>
                        <li><a href="{{route('list_news')}}"><i class="fa fa-circle-o"></i> Danh Sách Tin</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Videos</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('register_videos')}}"><i class="fa fa-circle-o"></i> Tạo Videos</a></li>
                        <li><a href="{{route('list_videos')}}"><i class="fa fa-circle-o"></i> Tất cả Videos</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Sliders</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('register_slider')}}"><i class="fa fa-circle-o"></i> Tạo Sliders</a></li>
                        <li><a href="{{route('list_slider')}}"><i class="fa fa-circle-o"></i> Tất cả Sliders</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-laptop"></i>
                        <span>Hình Ảnh</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('create_category_image')}}"><i class="fa fa-circle-o"></i> Tạo Danh Mục Hình Ảnh</a></li>
                        <li><a href="{{route('register_image')}}"><i class="fa fa-circle-o"></i> Tạo Hình Ảnh</a></li>
                        <li><a href="{{route('list_images')}}"><i class="fa fa-circle-o"></i> Tất cả Hình Ảnh</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-laptop"></i>
                        <span>Liên Hệ</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('list_contacts')}}"><i class="fa fa-circle-o"></i> Danh Sách Liên Hệ</a></li>
                    </ul>
                </li>
                <li class="header"> </li>
                <li>
                    <a href="{{route('admin_logout')}}">
                        <i class="fa fa-circle-o text-red"></i>
                        <span>Đăng Xuất</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('title-content')
            </h1>
        </section>
        <section class="content">
            <div style="border-top: 1px solid #ffffff;"></div>
            <div class="row" style="margin-top: 20px">
                @yield('content')
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2017-2018 <a href="#">Hoi Le</a>.</strong> All rights
        reserved.
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/dist/js/adminlte.min.js"></script>

@yield('script')
</body>
</html>
