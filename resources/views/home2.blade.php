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
                                <a href="/home">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="/add-member">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Add Member</h3>
                        </div>
                        <i class="fas fa-address-card fa-3x col-dark-gray"></i>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="/manage-members">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Manage Members</h3>
                        </div>
                        <i class="fas fa-address-book fa-3x col-dark-gray"></i>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="#">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Communications</h3>
                        </div>
                          <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                    </div>
                  </a>
                </div>
            </div>
              <!--Row 2-->

             <div class="row clearfix">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <a href="/apply-leave">
                            <div class="box-part text-center">
                                <div class="title p-t-15">
                                    <h3 class="col-dark-gray">Apply Leave</h3>
                                </div>
                                <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                            </div>
                            </a>
                          </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <a href="/leave-history">
                            <div class="box-part text-center">
                                <div class="title p-t-15">
                                    <h3 class="col-dark-gray">Leave History</h3>
                                </div>
                                  <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                            </div>
                          </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <a href="/visitors">
                            <div class="box-part text-center">
                                <div class="title p-t-15">
                                    <h3 class="col-dark-gray">My Visitors</h3>
                                </div>
                                  <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                            </div>
                          </a>
                        </div>
                    </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="/profile">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">My Profile</h3>
                        </div>
                        <i class="fas fa-hotel fa-3x col-dark-gray"></i>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="#">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">User Accounts</h3>
                        </div>
                        <i class="fas fa-users-cog fa-3x col-dark-gray"></i>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="/logout">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Logout</h3>
                        </div>
                          <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                    </div>
                  </a>
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
