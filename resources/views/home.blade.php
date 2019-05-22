<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Dashboard</title>
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
    @extends('layouts.navbar')
    <!-- #Top Bar -->
    <div>
      @extends('layouts.sidebar')
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
        @if(Session::has('danger'))
            <p class="alert alert-danger">{{ Session::get('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </p>

        @endif

        @if(auth()->user()->type->name == 'MD')

            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('apply-leave')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Apply Leave</h3>
                            </div>
                            <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('leave-history')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Leave History</h3>
                            </div>
                            <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('pending')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Pending Requests</h3>
                            </div>
                            <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row clearfix">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('all_request')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3><h3 class="col-dark-gray">All Requests</h3>
                          </div>
                          <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('com-leave')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3 class="col-dark-gray">Compulsory Leave</h3>
                          </div>
                          <i class="fas fa-dice-five fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('all-active')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3 class="col-dark-gray">Active Compulsory</h3>
                          </div>
                          <i class="fas fa-dice-four fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>
            </div>
            <div class="row clearfix">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('all-comp_leave')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3 class="col-dark-gray">All Compulsory Leaves</h3>
                          </div>
                          <i class="fas fa-dice fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('visitors')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3><h3 class="col-dark-gray">My Visitors</h3>
                          </div>
                          <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('profile')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3><h3 class="col-dark-gray">My Profile</h3>
                          </div>
                          <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>

            </div>
            </div>
              <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('manage-members')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3 class="col-dark-gray">Manage Members</h3>
                            </div>
                            <i class="fas fa-user-edit fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <a href="{{route('logout')}}">
                          <div class="box-part text-center">
                              <div class="title p-t-15">
                                  <h3><h3 class="col-dark-gray">Logout</h3>
                              </div>
                              <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                          </div>
                      </a>
                  </div>
              </div>
              <!--admin-->
            @elseif(auth()->user()->type->name == 'Admin')
              <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('add-member')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Add Member</h3>
                            </div>
                            <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('manage-members')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3 class="col-dark-gray">Manage Members</h3>
                            </div>
                            <i class="fas fa-user-edit fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Communications</h3>
                            </div>
                            <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

              </div>
              <div class="row clearfix">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('all_request')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">All Requests</h3>
                            </div>
                            <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <a href="{{route('leave-history')}}">
                          <div class="box-part text-center">
                              <div class="title p-t-15">
                                  <h3><h3 class="col-dark-gray">Leave History</h3>
                              </div>
                              <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                          </div>
                      </a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <a href="{{route('pending')}}">
                          <div class="box-part text-center">
                              <div class="title p-t-15">
                                  <h3><h3 class="col-dark-gray">Pending Requests</h3>
                              </div>
                              <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                          </div>
                      </a>
                  </div>
              </div>
              <div class="row clearfix">
            
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('com-leave')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3 class="col-dark-gray">Compulsory Leave</h3>
                            </div>
                            <i class="fas fa-dice-five fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('all-active')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3 class="col-dark-gray">Active Compulsory</h3>
                            </div>
                            <i class="fas fa-dice-four fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('all-comp_leave')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3 class="col-dark-gray">All Compulsory Leaves</h3>
                            </div>
                            <i class="fas fa-dice fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
              </div>
              <div class="row clearfix">
            
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('visitors')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">My Visitors</h3>
                            </div>
                            <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('profile')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">My Profile</h3>
                            </div>
                            <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                
                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a href="{{route('logout')}}">
                            <div class="box-part text-center">
                                <div class="title p-t-15">
                                    <h3><h3 class="col-dark-gray">Logout</h3>
                                </div>
                                <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                            </div>
                        </a>
                    </div>
              </div>
              </div>
        
            @elseif(auth()->user()->type->name == 'HOD')
                      <!--Row 2-->

            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('apply-leave')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Apply Leave</h3>
                            </div>
                            <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('leave-history')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Leave History</h3>
                            </div>
                            <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('reliever_request')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Reliever Requests</h3>
                            </div>
                            <i class="fas fa-swatchbook fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!--Row 2-->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('pending')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Pending Requests</h3>
                            </div>
                            <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('all_request')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">All Requests</h3>
                            </div>
                            <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('visitors')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">My Visitors</h3>
                            </div>
                            <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

            </div>
            <!--Row 2 end-->
            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('profile')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">My Profile</h3>
                            </div>
                            <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Communications</h3>
                            </div>
                            <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="/logout">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Logout</h3>
                            </div>
                            <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
            </div>
          <!--HR dash-->
        @elseif(auth()->user()->type->name == 'PM')
                  <!--Row 2-->

        <div class="row clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('apply-leave')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Apply Leave</h3>
                        </div>
                        <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('leave-history')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Leave History</h3>
                        </div>
                        <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('reliever_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Reliever Requests</h3>
                        </div>
                        <i class="fas fa-swatchbook fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--Row 2-->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('pending')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Pending Requests</h3>
                        </div>
                        <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('all_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">All Requests</h3>
                        </div>
                        <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('visitors')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">My Visitors</h3>
                        </div>
                        <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

        </div>
        <!--Row 2 end-->
        <div class="row clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('profile')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">My Profile</h3>
                        </div>
                        <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Communications</h3>
                        </div>
                        <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="/logout">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Logout</h3>
                        </div>
                        <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
      <!--HR dash-->
        @elseif(auth()->user()->type->name == 'HOD')
                  <!--Row 2-->

        <div class="row clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="/apply-leave">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Apply Leave</h3>
                        </div>
                        <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="/leave-history">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Leave History</h3>
                        </div>
                        <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('reliever_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Reliever Requests</h3>
                        </div>
                        <i class="fas fa-swatchbook fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--Row 2-->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('pending')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Pending Requests</h3>
                        </div>
                        <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('all_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">All Requests</h3>
                        </div>
                        <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('visitors')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">My Visitors</h3>
                        </div>
                        <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

        </div>
        <!--Row 2 end-->
        <div class="row clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('profile')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">My Profile</h3>
                        </div>
                        <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Communications</h3>
                        </div>
                        <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('logout')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Logout</h3>
                        </div>
                        <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>

          <!--HR dash-->
        @elseif(auth()->user()->type->name == 'HR')
                  <!--Row 2-->

        <div class="row clearfix">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('apply-leave')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Apply Leave</h3>
                        </div>
                        <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('leave-history')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Leave History</h3>
                        </div>
                        <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('reliever_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Reliever Requests</h3>
                        </div>
                        <i class="fas fa-swatchbook fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--Row 2-->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('pending')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Pending Requests</h3>
                        </div>
                        <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('all_request')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">All Requests</h3>
                        </div>
                        <i class="fas fa-boxes fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('com-leave')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3 class="col-dark-gray">Compulsory Leave</h3>
                        </div>
                        <i class="fas fa-dice-five fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
        <!--Row 2 end-->
        <div class="row clearfix">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="{{route('all-active')}}">
                  <div class="box-part text-center">
                      <div class="title p-t-15">
                          <h3 class="col-dark-gray">Active Compulsory</h3>
                      </div>
                      <i class="fas fa-dice-four fa-3x col-dark-gray"></i>
                  </div>
              </a>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="{{route('all-comp_leave')}}">
                  <div class="box-part text-center">
                      <div class="title p-t-15">
                          <h3 class="col-dark-gray">All Compulsory Leaves</h3>
                      </div>
                      <i class="fas fa-dice fa-3x col-dark-gray"></i>
                  </div>
              </a>
          </div>


                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <a href="{{route('visitors')}}">
                              <div class="box-part text-center">
                                  <div class="title p-t-15">
                                      <h3><h3 class="col-dark-gray">My Visitors</h3>
                                  </div>
                                  <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                              </div>
                          </a>
                      </div>

                    </div>
      <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('profile')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">My Profile</h3>
                        </div>
                        <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Communications</h3>
                        </div>
                        <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="{{route('logout')}}">
                    <div class="box-part text-center">
                        <div class="title p-t-15">
                            <h3><h3 class="col-dark-gray">Logout</h3>
                        </div>
                        <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                    </div>
                </a>
            </div>
        </div>
        @else
            <!--Row -->

            <div class="row clearfix">


                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('apply-leave')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Apply Leave</h3>
                            </div>
                            <i class="fas fa-object-group fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('leave-history')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Leave History</h3>
                            </div>
                            <i class="fas fa-object-ungroup fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('reliever_request')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Reliever Requests</h3>
                            </div>
                            <i class="fas fa-swatchbook fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
            </div>


            <div class="row clearfix">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="{{route('visitors')}}">
                      <div class="box-part text-center">
                          <div class="title p-t-15">
                              <h3><h3 class="col-dark-gray">My Visitors</h3>
                          </div>
                          <i class="fas fa-diagnoses fa-3x col-dark-gray"></i>
                      </div>
                  </a>
              </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="#">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Communications</h3>
                            </div>
                            <i class="fas fa-envelope fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('profile')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">My Profile</h3>
                            </div>
                            <i class="fas fa-id-card fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{{route('logout')}}">
                        <div class="box-part text-center">
                            <div class="title p-t-15">
                                <h3><h3 class="col-dark-gray">Logout</h3>
                            </div>
                            <i class="fas fa-sign-out-alt fa-3x col-dark-gray"></i>
                        </div>
                    </a>
                </div>
            </div>
            </div>

            @endif

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
