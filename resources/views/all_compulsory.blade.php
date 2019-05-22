<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Compulsory Leave</title>
    <!-- Favicon-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
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
<div>
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
                        <li class="breadcrumb-item active">Active Force Leave</li>
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
                            <strong>Active Force Leave</strong></h2>
                        <div class="body">
                            @if(Session::has('message'))
                                <p class="alert alert-info">{{ Session::get('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </p>

                            @endif
                            @if(Session::has('danger'))
                                <p class="alert alert-danger">{{ Session::get('danger') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </p>

                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="manage_employee">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Employee Number</th>
                                        <th>Department</th>
                                        <th>Reason</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($forcedLeaves as $value)
                                        <tr>
                                            <td class="table-img">
                                                {{$loop->iteration}}
                                            </td>
                                            <td>{{ $value->user->name }}</td>
                                            <td>{{ $value->user->employee_no }}</td>
                                            <td>{{ $value->user->department['name']}}</td>
                                            <td>{{$value->reason}}</td>
                                            <td>
                                                <a href="{{route('deactivate',$value->id)}}"
                                                   onclick="event.preventDefault(); document.getElementById('ddform').submit();">
                                                    <i class="os-icon os-icon-signs-11"></i>
                                                    <span><button type="button" class="btn-hover bg-danger " id="terminated" name="status">deactivate</button></span>
                                                </a>
                                                <form id="ddform" action="{{route('deactivate',$value->id)}}" method="POST"
                                                      style="display: none;">
                                                    <input type="hidden" name="_method" value="POST">
                                                    {{ csrf_field() }}
                                                </form>
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="7"></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
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
