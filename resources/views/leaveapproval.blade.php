<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian ||</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/css/styles/all-themes.css') }}" rel="stylesheet" />
</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ asset('assets/images/loading.png') }}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                    <span class="logo-name">Adrian</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="label-count bg-orange"></span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('assets/images/user/user1.jpg') }}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Adrian Group</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Welcome To Adrian</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{ asset('assets/images/user.jpg') }}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{ asset('assets/images/usrbig.jpg') }}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Emily Smith </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>

                    </li>
                    <li>
                        <a href="pagesapps/calendar.html">
                            <i class="far fa-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widgets -->
            <!-- #END# Widgets -->
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        @if(Session::has('message'))
                            <p class="alert alert-info">{{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </p>
                        @elseif(Session::has('danger'))
                            <p class="alert alert-danger">{{ Session::get('danger') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </p>

                        @endif
                        <div class="header">
                            <h2>
                                <strong>Leave Applicants</strong></h2>

                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Project Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user1.jpg') }}" alt="">
                                            </td>
                                            <td>John Doe</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>ERP System</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user2.jpg') }}" alt="">
                                            </td>
                                            <td>Sarah Smith</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-red shadow-style">Inactive</span>
                                            </td>
                                            <td>Abc Website</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user3.jpg') }}" alt="">
                                            </td>
                                            <td>Airi Satou</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Android App</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user4.jpg') }}" alt="">
                                            </td>
                                            <td>Angelica Ramos</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Ios App</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user5.jpg') }}" alt="">
                                            </td>
                                            <td>Ashton Cox</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-red shadow-style">Inactive</span>
                                            </td>
                                            <td>Java Website</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset('assets/images/user/user6.jpg') }}" alt="">
                                            </td>
                                            <td>Cara Stevens</td>
                                            <td>xyz@email.com</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Active</span>
                                            </td>
                                            <td>Desktop App</td>
                                            <td>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">mode_edit</i>
                                                </button>
                                                <button class="btn tblActnBtn">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>Back to Home</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3>Leave History</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>View past leave applications</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3>Request Status</h3>
                        </div>
                        <div class="text p-b-10">
                            <span>View pending leave requests.</span>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>
    <script src="{{ asset('assets/js/pages/medias/carousel.js') }}"></script>
</body>
</html>
