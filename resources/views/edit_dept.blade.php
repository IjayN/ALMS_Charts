<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Edit Department</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}') }}" type="image/x-icon">
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
    @extends('layouts.navbar')
    <div>
    @extends('layouts.sidebar')
    <!-- #END# Overlay For Sidebars -->
    </div>

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
                            <li class="breadcrumb-item active">Edit Member Data</li>
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
                              <strong>Edit Member</strong></h2>
                      </div>
                      <div class="body">

                          <form method="POST" action="{{route('edit-member',$employee->id)}}">
                              {{ csrf_field() }}
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input style="color:black;" type="text" name="employee_no" id="employee_no" class="form-control" value="{{$employee->employee_no}}" disabled>
                                      <label class="form-label">Employee Number</label>
                                  </div>
                              </div>

                              {{-- <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" name="name" id="name" class="form-control" value="{{$employee->department['name']}}">
                                      <label class="form-label">Department</label>
                                  </div>
                              </div> --}}
                              <div class="form-group form-float">
                                  <label class="form-label">Select Department</label>
                                  <div class="form-line">
                                      <select class="form-group col-12" name="department" id="department">
                                          @foreach ($department as $dpt)
                                              <option value="{{ $dpt->id }}">{{ $dpt->name }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="form-label">Select MemberType</label>
                                  <select class="form-group col-12" id="reliever" name="type">
                                      @foreach ($type as $tpy)
                                          <option value="{{ $tpy->id }}">{{ $tpy->name }}</option>
                                      @endforeach
                                  </select>
                              </div>

                              {{-- <div class="form-group form-float">
                                  <div class="form-line disabled">
                                      <input style="color:black;" type="text" name="category" id="category" class="form-control" value="{{$employee->category}}" disabled>
                                      <label class="form-label">Current Department Category</label>
                                  </div>
                              </div> --}}

                              <div class="form-group">
                                  <label class="form-label">Department Category</label>
                                  <input name="category" class="form-control col-12"  list="category">
                                  <datalist id="category">
                                    <option value="Business Development">
                                    <option value="Administration">
                                    <option value="Finance">
                                    <option value="Health & Safety">
                                    <option value="Logistics">
                                    <option value="Sales">
                                    <option value="Procurement">
                                    <option value="Warehouse">
                                    <option value="Workshop">
                                    <option value="HR">
                                    <option value="MS Division">
                                    <option value="Construction Division">
                                    <option value="Fiber Division">
                                  </datalist>
                              </div>

                         <br>






                              <button type="submit" class="btn btn-outline-primary col-lg-12 waves-effect">Submit</button>
                          </form>

                          {{--end--}}
                      </div>
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
                    <a href="{{route('home')}}">
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
                    <a href="{{route('logout')}}">
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
