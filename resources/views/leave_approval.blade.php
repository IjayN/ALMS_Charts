
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Leave Approval</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/form.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/js/bundles/multiselect/css/multi-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet" />


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
      @extends('layouts.navbar')
    <!-- #Top Bar -->

        <!-- Left Sidebar -->
      @extends('layouts.sidebar')
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
                                    <i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Leave Approval</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Leave</strong> Approval</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Leave Type</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Leave Days</th>
                                            <th>HOD</th>
                                            <th>HR</th>
                                            <th>MD</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($leave as $value)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{ $value->user['name'] }}</td>
                                            <td>{{ $value->type }}</td>
                                            <td>{{ $value->startDate }}</td>
                                            <td>{{ $value->endDate }}</td>
                                            <td>{{ $value->leave_days }}</td>
                                            <td>{{ $value->HOD }}</td>
                                            <td>{{ $value->HR }}</td>
                                            <td>{{ $value->MD }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-success" onclick="approve({{ "'$value->created_at'" }}, 1)" >Approve</button>
                                                <button class="btn btn-sm btn-danger" onclick="approve( {{ "'$value->created_at'" }}, 0)" >Deny</button>
                                            </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="11"></th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- #START# Table With State Save -->
            <!-- #END# Table With State Save -->
            <!-- #START# Add Rows -->
            <!-- #END# Add Rows -->
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
    <script src="{{ asset('assets/js/table.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <!-- Demo Js -->
    <script>
        function approve(employeeId, dateRequested, option){
             $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')
                }
            });

            $.ajax({
                url: '/leaveApproval', // point to server-side PHP script
                data: { employeeId : employeeId, dateRequested : dateRequested, option : option  } ,
                type: 'POST',
                success: function(data) {
                        // alert(Updated Successfully);
                        window.location.reload();
                },
                error: function (error, data) {
                    console.log('Error:', data);
                }
            });
        }
    </script>
</body>

</html>

        {{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=Edge">--}}
    {{--<meta content="width=device-width, initial-scale=1" name="viewport" />--}}
    {{--<title>Adrian ||</title>--}}
    {{--<!-- Favicon-->--}}
    {{--<link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">--}}
    {{--<!-- Plugins Core Css -->--}}
    {{--<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">--}}
    {{--<!-- Custom Css -->--}}
    {{--<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />--}}
    {{--<!-- Theme style. You can choose a theme from css/themes instead of get all themes -->--}}
    {{--<link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />--}}
{{--</head>--}}
{{--<body class="light">--}}
{{--<!-- Page Loader -->--}}
{{--<div class="page-loader-wrapper">--}}
    {{--<div class="loader">--}}
        {{--<div class="m-t-30">--}}
            {{--<img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">--}}
        {{--</div>--}}
        {{--<p>Please wait...</p>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- #END# Page Loader -->--}}
{{--<!-- Overlay For Sidebars -->--}}
{{--<div class="overlay"></div>--}}
{{--<!-- #END# Overlay For Sidebars -->--}}
{{--<!-- Top Bar -->--}}
{{--<nav class="navbar">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"--}}
               {{--aria-expanded="false"></a>--}}
            {{--<a href="javascript:void(0);" class="bars"></a>--}}
            {{--<a class="navbar-brand" href="{{route('home')}}">--}}
                {{--<img src="assets/images/logo.png" alt="" />--}}
                {{--<span class="logo-name">Adrian</span>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse" id="navbar-collapse">--}}
            {{--<ul class="pull-left">--}}
                {{--<li>--}}
                    {{--<a href="javascript:void(0);" class="sidemenu-collapse">--}}
                        {{--<i class="material-icons">reorder</i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Full Screen Button -->--}}
                {{--<li class="fullscreen">--}}
                    {{--<a href="javascript:;" class="fullscreen-btn">--}}
                        {{--<i class="fas fa-expand"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<!-- #END# Full Screen Button -->--}}
                {{--<!-- #START# Notifications-->--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
                        {{--<i class="far fa-bell"></i>--}}
                        {{--<span class="label-count bg-orange"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu pullDown">--}}
                        {{--<li class="header">NOTIFICATIONS</li>--}}
                        {{--<li class="body">--}}
                            {{--<ul class="menu">--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                            {{--<span class="table-img msg-user">--}}
                                                {{--<img src="assets/images/user/user1.jpg" alt="">--}}
                                            {{--</span>--}}
                                        {{--<span class="menu-info">--}}
                                                {{--<span class="menu-title">Adrian Group</span>--}}
                                                {{--<span class="menu-desc">--}}
                                                    {{--<i class="material-icons">access_time</i> 14 mins ago--}}
                                                {{--</span>--}}
                                                {{--<span class="menu-desc">Welcome To Adrian</span>--}}
                                            {{--</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="footer">--}}
                            {{--<a href="javascript:void(0);">View All Notifications</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- #END# Notifications-->--}}
                {{--<li class="dropdown user_profile">--}}
                    {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">--}}
                        {{--<img src="assets/images/user.jpg" width="32" height="32" alt="User">--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu pullDown">--}}
                        {{--<li class="body">--}}
                            {{--<ul class="user_dw_menu">--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<i class="material-icons">person</i>Profile--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<i class="material-icons">help</i>Help--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="javascript:void(0);">--}}
                                        {{--<i class="material-icons">power_settings_new</i>Logout--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<!-- #END# Tasks -->--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<!-- #Top Bar -->--}}
{{--<div>--}}
    {{--<!-- Left Sidebar -->--}}
    {{--<aside id="leftsidebar" class="sidebar">--}}
        {{--<!-- Menu -->--}}
        {{--<div class="menu">--}}
            {{--<ul class="list">--}}
                {{--<li class="sidebar-user-panel active">--}}
                    {{--<div class="user-panel">--}}
                        {{--<div class=" image">--}}
                            {{--<img src="assets/images/usrbig.jpg" class="img-circle user-img-circle" alt="User Image" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="profile-usertitle">--}}
                        {{--<div class="sidebar-userpic-name"> Emily Smith </div>--}}
                        {{--<div class="profile-usertitle-job ">Manager </div>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                        {{--<i class="fas fa-tachometer-alt"></i>--}}
                        {{--<span>Home</span>--}}
                    {{--</a>--}}

                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="pagesapps/calendar.html">--}}
                        {{--<i class="far fa-calendar"></i>--}}
                        {{--<span>Events</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

            {{--</ul>--}}
        {{--</div>--}}
        {{--<!-- #Menu -->--}}
    {{--</aside>--}}
    {{--<!-- #END# Left Sidebar -->--}}
    {{--<!-- Right Sidebar -->--}}
    {{--<!-- #END# Right Sidebar -->--}}
{{--</div>--}}
{{--<section class="content">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="block-header">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
                    {{--<ul class="breadcrumb breadcrumb-style ">--}}
                        {{--<li class="breadcrumb-item">--}}
                            {{--<h4 class="page-title">Dashboard</h4>--}}
                        {{--</li>--}}
                        {{--<li class="breadcrumb-item bcrumb-1">--}}
                            {{--<a href="{{route('home')}}">--}}
                                {{--<i class="fas fa-home"></i> Home</a>--}}
                        {{--</li>--}}
                        {{--<li class="breadcrumb-item active">Dashboard</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Widgets -->--}}
        {{--<!-- #END# Widgets -->--}}
        {{--<!-- Task Info -->--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
            {{--<div class="card">--}}
                {{--<div class="header">--}}
                    {{--<h2>--}}
                        {{--<strong>Leave Applicants</strong></h2>--}}

                {{--</div>--}}
                {{--<div class="tableBody">--}}
                    {{--<div class="table-responsive">--}}
                        {{--<table class="table table-hover dashboard-task-infos">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>#</th>--}}
                                {{--<th>Name</th>--}}
                                {{--<th>Leave Type</th>--}}
                                {{--<th>Start Date</th>--}}
                                {{--<th>End Date</th>--}}
                                {{--<th>Leave Status</th>--}}
                                {{--<th>Reliever</th>--}}
                                {{--<th>HOD</th>--}}
                                {{--<th>HR</th>--}}
                                {{--<th>MD</th>--}}
                                {{--<th>Action</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach ($leave as $value)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $value->id }}</td>--}}
                                {{--<td>{{ $value->name }}</td>--}}
                                {{--<td>{{ $value->type }}</td>--}}
                                {{--<td>{{ $value->startDate }}</td>--}}
                                {{--<td>{{ $value->endDate }}</td>--}}
                                {{--<td></td>--}}
                                {{--<td>{{$value->reliever}}</td>--}}
                                {{--<td>{{ $value->HOD }}</td>--}}
                                {{--<td>{{ $value->HR }}</td>--}}
                                {{--<td>{{ $value->MD }}</td>--}}
                                {{--<td>--}}
                                {{--<button class="btn btn-sm btn-success" onclick="approve({{ "'$value->created_at'" }}, 1)" >Approve</button>--}}
                                {{--<button class="btn btn-sm btn-danger" onclick="approve( {{ "'$value->created_at'" }}, 0)" >Deny</button>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}


                            {{--<tr>--}}
                                {{--<td class="table-img">--}}
                                    {{--<img src="assets/images/user/user5.jpg" alt="">--}}
                                {{--</td>--}}
                                {{--<td>Ashton Cox</td>--}}
                                {{--<td>xyz@email.com</td>--}}
                                {{--<td>--}}
                                    {{--<button type="button" class="label bg-blue shadow-style" data-toggle="modal" data-target="#exampleModalCenter">Pending</button>--}}
                                {{--</td>--}}
                                {{--<td>Java Website</td>--}}
                                {{--<td>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">mode_edit</i>--}}
                                    {{--</button>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">delete</i>--}}
                                    {{--</button>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="table-img">--}}
                                    {{--<img src="assets/images/user/user5.jpg" alt="">--}}
                                {{--</td>--}}
                                {{--<td>Ashton Cox</td>--}}
                                {{--<td>xyz@email.com</td>--}}
                                {{--<td>--}}
                                    {{--<button type="button" class="label bg-red shadow-style" data-toggle="modal" data-target="#exampleModalCenter">Declined</button>--}}
                                {{--</td>--}}
                                {{--<td>Java Website</td>--}}
                                {{--<td>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">mode_edit</i>--}}
                                    {{--</button>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">delete</i>--}}
                                    {{--</button>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="table-img">--}}
                                    {{--<img src="assets/images/user/user5.jpg" alt="">--}}
                                {{--</td>--}}
                                {{--<td>Ashton Cox</td>--}}
                                {{--<td>xyz@email.com</td>--}}
                                {{--<td>--}}
                                    {{--<button type="button" class="label bg-green shadow-style" data-toggle="modal" data-target="#exampleModalCenter">Approved</button>--}}
                                {{--</td>--}}
                                {{--<td>Java Website</td>--}}
                                {{--<td>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">mode_edit</i>--}}
                                    {{--</button>--}}
                                    {{--<button class="btn tblActnBtn">--}}
                                        {{--<i class="material-icons">delete</i>--}}
                                    {{--</button>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- #START# Modal Vertically Centered -->--}}
    {{--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">--}}
        {{--<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"--}}
             {{--aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
            {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<h5 class="modal-title" id="exampleModalCenterTitle">Leave Status</h5>--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<button type="button" class="btn-hover color-5">Approve</button>--}}
                        {{--<button type="button" class="btn-hover color-2">Decline</button>--}}

                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- #END# Modal Vertically Centered -->--}}
    {{--<div class="row clearfix">--}}
        {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
            {{--<div class="box-part text-center">--}}
                {{--<div class="title p-t-15">--}}
                    {{--<h3>Dashboard</h3>--}}
                {{--</div>--}}
                {{--<div class="text p-b-10">--}}
                    {{--<span>Back to Home</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
            {{--<div class="box-part text-center">--}}
                {{--<div class="title p-t-15">--}}
                    {{--<h3>Leave History</h3>--}}
                {{--</div>--}}
                {{--<div class="text p-b-10">--}}
                    {{--<span>View past leave applications</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
            {{--<div class="box-part text-center">--}}
                {{--<div class="title p-t-15">--}}
                    {{--<h3>Request Status</h3>--}}
                {{--</div>--}}
                {{--<div class="text p-b-10">--}}
                    {{--<span>View pending leave requests.</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</section>--}}
{{--<!-- Plugins Js -->--}}
{{--<script src="{{asset('assets/js/app.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/chart.min.js')}}"></script>--}}
{{--<!-- Custom Js -->--}}
{{--<script src="{{asset('assets/js/admin.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/index.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/pages/medias/carousel.js')}}"></script>--}}
{{--</body>--}}
{{--</html>--}}
