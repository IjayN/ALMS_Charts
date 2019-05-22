<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Manage Members</title>
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
                        <li class="breadcrumb-item active">Manage Member</li>
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
                            <strong>My Visitors</strong></h2>

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
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="manage_employee">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Employee Number</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Reset Password</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($employee as $value)
                                <tr>
                                <td class="table-img">
                                {{$loop->iteration}}
                                </td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->employee_no }}</td>
                                <td>{{ $value->category}}</td>
                                <td>
                                @if ($value->status =='active')
                                <span class="label model bg-success shadow-style act"   data-id="{{ $value->id }}" data-attribute="{{$value->status}}"  >{{ $value->status }}</span>
                                @elseif($value->status =='suspended')
                                <span class="label model  bg-warning shadow-style pending "  data-id="{{ $value->id }}" data-attribute="{{$value->status}}" >{{ $value->status }}</span>
                                @elseif($value->status == 'terminated')
                                <span class="label model bg-danger shadow-style terminated"   data-id="{{ $value->id }}" data-attribute="{{$value->status}}">{{ $value->status }}</span>

                                @endif

                                </td>

                                <td>

                                <a href="member-edit/{{ $value->id }}">
                                <button class="btn tblActnBtn">
                                <i class="material-icons">mode_edit</i>
                                </button>
                                </a>

                                <form action="{{action('HomeController@delete_member', $value->id)}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn tblActnBtn" disabled>
                                <i class="material-icons">delete</i>
                                </button>
                                <!-- <button class="btn btn-danger">Delete</button> -->
                                </form>
                                <!-- </a> -->
                                </td>

                                    <td>
                                        <form action="{{action('HomeController@pw_reset', $value->id)}}" method="POST">
                                          @csrf
                                      <button class="btn btn-outline-warning">Reset Password
                                      </button>
                                    </form>
                                    </td>
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

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="modal fade" id="examplCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Employee Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group ">
                                {{--remove this if you can fix the problem in it--}}
                                    <a href="{{route('update-status',$value->id)}}"
                                       onclick="event.preventDefault(); document.getElementById('ddform').submit();">
                                        <i class="os-icon os-icon-signs-11"></i>
                                        {{--<span><button type="button" class="btn-hover bg-danger " id="terminated" name="status">teminate</button></span>--}}
                                    </a>
                                    <form id="ddform" action="{{route('update-status',$value->id)}}" method="POST"
                                          style="display: none;">
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="status" id="status" class="modal_status_inp"  value="terminated">
                                        <input type="hidden" name="id" class="modal_hiddenid">
                                        {{ csrf_field() }}
                                    </form>
                                {{--end--}}
                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('dform').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover bg-danger terminate" name="status">teminate</button></span>
                                </a>
                                <form id="dform" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp"  value="terminated">
                                    <input type="hidden" name="id" class="modal_hiddenid">
                                    {{ csrf_field() }}
                                </form>


                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('dm').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover color-2 suspend" >suspend</button></span>
                                </a>
                                <form id="dm" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp"  value="suspended">
                                    <input type="hidden" name="id" class="modal_hiddenid">
                                    {{ csrf_field() }}
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{--pending--}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="modal fade" id="exampleCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Employee Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group ">
                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('dform').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover bg-danger terminate" name="status">teminate</button></span>
                                </a>
                                <form id="dform" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp"  value="terminated">
                                    <input type="hidden" name="id" class="modal_hiddenid">
                                    {{ csrf_field() }}
                                </form>
                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('orm').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover color-5 activate" >activate</button></span>
                                </a>
                                <form id="orm" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp"  value="active">
                                    <input type="hidden" name="id" class="modal_hiddenid" >
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{--end--}}
        {{--terminated--}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Employee Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group ">
                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('pen').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover color-2 suspend">suspend</button></span>
                                </a>
                                <form id="pen" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp"  value="suspended">
                                    <input type="hidden" name="id" class="modal_hiddenid" value="1">
                                    {{ csrf_field() }}
                                </form>
                                <a href="{{route('update-status',$value->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('act').submit();">
                                    <i class="os-icon os-icon-signs-11"></i>
                                    <span><button type="button" class="btn-hover color-5 activate" name="status">activate</button></span>
                                </a>
                                <form id="act" action="{{route('update-status',$value->id)}}" method="POST"
                                      style="display: none;">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="status" id="status" class="modal_status_inp" value="active">
                                    <input type="hidden" name="id" class="modal_hiddenid" value="1">
                                    {{ csrf_field() }}
                                </form>
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
<script>
    $(document).ready(function(){
        //active modal
        $(document).on('click','.act',function () {
            id = $('.modal_hiddenid').val($(this).data('id'));
            $('#status').val($(this).data('attribute'));
            $('#examplCenter').modal('show');
        });

        $('.modal-body').on('click','.activate',function () {
            $.ajax({
                type : 'POST',
                url : 'update_status/'+id,
                data : {
                    'id':$('.modal_hiddenid').val(),
                    'attribute' : $('#status').val()
                },
                success: function (data) {

                }

            });
        });



    //    pending modal
        $(document).on('click','.pending',function () {
            id = $('.modal_hiddenid').val($(this).data('id'));
            $('#status').val($(this).data('attribute'));
            $('#exampleCenter').modal('show');
        });

        $('.modal-body').on('click','.suspend',function () {
            $.ajax({
                type : 'POST',
                url : 'update_status/'+id,
                data : {
                    'id':$('.modal_hiddenid').val(),
                    'attribute' : $('#status').val()
                },
                success: function (data) {

                }

            });

        });
    //    terminated
        $(document).on('click','.terminated',function () {
            id = $('.modal_hiddenid').val($(this).data('id'));
            $('#status').val($(this).data('attribute'));
            $('#exampleModal').modal('show');
        });

        $('.modal-body').on('click','.terminate',function () {
            $.ajax({
                type : 'POST',
                url : 'update_status/'+id,
                data : {
                    'id':$('.modal_hiddenid').val(),
                    'attribute' : $('#status').val()
                },
                success: function (data) {

                }

            });

        });
    });
</script>
<!-- Plugins Js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/table.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/js/admin.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<!-- Demo Js -->

</body>

</html>
