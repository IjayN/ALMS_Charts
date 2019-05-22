<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Comulsory Leave Details</title>
    <!-- Favicon-->
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
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card project_widget">
                            <div class="header">
                                <h2>Pending Request Details</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Full Name</b></strong>
                                        <br>
                                        <p class="text-muted">{{$employee->name}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Email Address</b></strong>
                                        <br>
                                        <p class="text-muted">{{$employee->email}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Employee Type</b></strong>
                                        <br>
                                        <p class="text-muted">{{$employee->type['name']}}</p>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <strong><b>Department</b></strong>
                                        <br>
                                        <p class="text-muted">{{$employee->department['name']}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>National iD</b></strong>
                                        <br>
                                        <p class="text-muted">{{$employee->nat_id}}</p>
                                    </div>
                                </div>
                                <p class="m-t-30"></p>
                                <br>
                                        <form id="dform" action="{{route('force-leave',$employee->id)}}" method="POST"
                                              style="display: none;">
                                            <input type="hidden" name="_method" value="POST">
                                            {{ csrf_field() }}
                                        </form>
                                        <span><button type="button" class="btn btn-outline-danger col-lg-12 waves-effect" data-toggle="modal" data-target="#examplCenter">Grant Compulsory Leave</button></span>
                                    </div>

                                </center>
                                {{--modal for approval or denial--}}
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="modal fade" id="examplCenter" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-cente red" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Grant Compulsory Leave</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('force-leave',$employee->id)}}" method="POST">

                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Reason</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"></textarea>
                                                            <input type="hidden" name="reliver" value="rejected">
                                                        </div>
                                                        <input type="submit" class="btn btn-outline-danger col-lg-12" value="Grant Compulsory Leave">
                                                        {{ csrf_field() }}
                                                    </form>


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/table.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/admin.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<!-- Demo Js -->
</body>

</html>
