f<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Apply Leave</title>
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
                            <li class="breadcrumb-item active">Apply Leave</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widgets -->
            <!-- #END# Widgets -->
                <!-- Task Info -->
                <!-- #END# Task Info -->
                <!-- Vertical Layout | With Floating Label -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              <strong>Apply Leave</strong></h2>

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
                          <form method="POST" action="/applied-leave">
                            {{ csrf_field() }}

                              {{-- <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" name="type" id="type" class="form-control" required>
                                      <label class="form-label">Leave Type</label>
                                  </div>
                              </div> --}}

                              <div class="form-group form-float">
                                  <label class="form-label">Leave Type</label>
                                  <input name="type" class="form-control col-12"  list="type" required>
                                  <datalist id="type">
                                    <option value="Annual">
                                    <option value="Bereavement">
                                    <option value="Emergency">
                                    <option value="Maternity">
                                    <option value="Paternity">
                                    <option value="Sick">
                                    <option value="Study">
                                    <option value="Time Off Without Pay">
                                    <option value="Others">
                                  </datalist>
                              </div>

                                  {{-- start date --}}
                                  <div class="input-group">
                                      <div class="form-line">
                                        <label class="form-label">Start Date</label>
                                          <input type="text" name="startDate" class="datepicker form-control" placeholder="Please choose Start Date" required>
                                      </div>
                                  </div>

                                  {{-- end date --}}

                                  <div class="input-group">
                                      <div class="form-line">
                                        <label class="form-label">End Date</label>
                                          <input type="text" name="endDate" class="datepicker form-control" placeholder="Please choose End Date" required>
                                      </div>
                                  </div>

{{--
                                    <div class="form-group">
                                      <label class="form-label">Select Reliever</label>
                                      <select class="form-group col-10" id="reliever" name="reliever">
                                          @foreach ($employee as $value)
                                                  <option value="{{$value->id }}">{{ $value->name }}</option>
                                          @endforeach
                                      </select>
                                    </div> --}}
                                    <div class="input-group">
                                        <div class="form-line">
                                          <label class="form-label">Choose the number of Relievers you need</label>
                                    <div class="row">
                                         <div class="col-sm-6 col-lg-3">
                                             <div class="form-check form-check-radio">
                                                 <label>
                                                     <input name="no_of_relievers" type="radio" value="1"/>
                                                     <span>1</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-sm-6 col-lg-3">
                                             <div class="form-check form-check-radio">
                                                 <label>
                                                     <input name="no_of_relievers" type="radio"  value="2"/>
                                                     <span>2</span>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-sm-6 col-lg-3">
                                             <div class="form-check form-check-radio">
                                                 <label>
                                                     <input name="no_of_relievers" type="radio"  value="3"/>
                                                     <span>3</span>
                                                 </label>
                                             </div>
                                         </div>
                                     </div>
                                   </div>
                               </div>




{{--

                             <div class="form-group">
                                 <!-- <input type="text" name="" id=""> -->
                                 <select name="reliever" id="reliever" class="form-control">
                                     <!-- <option value="">Select Reliever</option> -->
                                     @foreach ($employee as $value)
                                     <option value="{{ $value->id }}">{{ $value->name }}</option>
                                     @endforeach
                                 </select>
                                 <label class="form-label">Reliever</label>
                             </div> --}}

                      </div>
                              <button type="submit" class="btn btn-primary m-t-15 waves-effect">Continue to Choose Relievers</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Vertical Layout | With Floating Label -->

                <!-- Browser Usage -->
                <!-- #END# Browser Usage -->
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
                <a href="{{route('pending')}}">
                  <div class="box-part text-center">
                      <div class="title p-t-15">
                          <h3 class="col-dark-gray">Pending Requests</h3>
                      </div>
                      <i class="fas fa-bookmark fa-3x col-dark-gray"></i>
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
        </div>
    </section>
    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/form.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
    <script src="{{ asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/js/pages/sparkline/sparkline-data.js') }}"></script>
    <script src="{{ asset('assets/js/pages/medias/carousel.js') }}"></script>
</body>
</html>
