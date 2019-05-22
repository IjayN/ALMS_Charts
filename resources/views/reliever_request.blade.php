<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian ||</title>
    <!-- Favicon-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="{{ asset('assets/images/LOGO.PNG') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
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
                                    <i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Leave History</li>
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
                                <strong>Reliever Request</strong></h2>

                        </div>
                        <div class="body">

                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Leave Type</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Leave Days</th>
                                            <th>View Details</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($leave as $value)
                                            <tr>
                                                <td>{{ $value->user['name'] }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->startDate }}</td>
                                                <td>{{ $value->endDate }}</td>
                                                <td>{{$value->leave_days}}</td>
                                                <td>
                                                    <a href="{{route('re-details',$value->id )}}">
                                                        <button class="btn tblActnBtn">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    {{--end--}}

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
                <a href="/home">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Dashboard</h3>
                        </div>
                        <i class="fab fa-accusoft fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('apply-leave')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Apply Leave</h3>
                        </div>
                        <i class="fas fa-object-group fa-3x col-dark-gray"></i>
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
    </section>

    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/table.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <!-- Demo Js -->
</body>

</html>


{{--test--}}

