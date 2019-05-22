<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian ||</title>
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
                                        <p class="text-muted">{{$leave->user['name']}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Email Address</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leave->user['email']}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Leave Type</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leave->type}}</p>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <strong><b>Leave Days</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leave->leave_days}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Starting Date</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leave->startDate}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>End Date</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leave->endDate}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Reliever</b></strong>
                                        <br>
                                        <p class="text-muted">{{$reliever['name']}}</p>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <strong><b>Reliever Email</b></strong>
                                        <br>
                                        <p class="text-muted">{{$reliever['email']}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Remaining Leave Days</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leaveDays['daysRemaining']}}</p>
                                    </div>
                                    <div class="col-md-3 col-6 b-r">
                                        <strong><b>Completed Leave Days</b></strong>
                                        <br>
                                        <p class="text-muted">{{$leaveDays['daysGone']}}</p>
                                    </div>
                                </div>
                                <br>
                                <center>
                                    <div class="form-group ">

                                        <a href="{{route('reliever-app',$leave->id)}}"
                                           onclick="event.preventDefault(); document.getElementById('dform').submit();">
                                            <span><button type="submit" class="btn btn-hover bg-success" >Approve</button></span>
                                        </a>
                                        <form id="dform" action="{{route('reliever-app',$leave->id)}}" method="POST"
                                              style="display: none;">
                                            <input type="hidden" name="_method" value="POST">
                                            <input type="hidden" name="reason" value="willing to reliever co-worker">
                                            <input type="hidden" value="approved" name="reliever">
                                            {{ csrf_field() }}
                                        </form>
                                        <span><button type="button" class="btn btn-hover bg-danger" data-toggle="modal" data-target="#examplCenter">Deny</button></span>
                                    </div>

                                </center>
                                {{--modal for approval or denial--}}
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="modal fade" id="examplCenter" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-cente red" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Reject Leave Request</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('reliever-rej',$leave->id)}}" method="POST">

                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Reason</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"></textarea>
                                                        </div>
                                                        <input type="submit" class="btn btn-hover btn-danger" value="Deny">
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

