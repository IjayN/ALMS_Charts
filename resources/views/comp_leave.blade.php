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
                        <li class="breadcrumb-item active">Compulsory Leave</li>
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
                            <strong>Compulsory Leave</strong></h2>

                    </div>
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
                                    <th>National ID</th>
                                    <th>Department</th>
                                    <th>View More</th>
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
                                        <td>{{$value->nat_id}}</td>
                                        <td>{{ $value->department['name']}}</td>
                                        <td>
                                            <a href="{{route('com-details',$value->id )}}">
                                                <button class="btn tblActnBtn">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>
                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>

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
                    <div class="modal-content">endforeach
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Employee Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body">
                                <form action="{{route('force-leave',$value->id)}}" method="POST">

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Reason</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason" required></textarea>
                                        <input type="hidden" name="id" class="modal_hiddenid">
                                    </div>
                                    <input type="submit" class="btn btn-hover btn-danger force_leave" value="Force Leave">
                                    @csrf
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
        $(document).on('click','.fleave',function () {
            id = $('.modal_hiddenid').val($(this).data('id'));
            $('#reason').val($(this).data('attribute'));
            alert($('#reason').val());
            $('#examplCenter').modal('show');
        });
        $('.modal-body').on('click','.force_leave',function () {
            $.ajax({
                type : 'POST',
                url : 'create/forced/leave/'+id,
                data : {
                    'id':$('.modal_hiddenid ').val(),
                    'attribute' : $('#reason').val()
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
