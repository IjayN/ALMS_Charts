<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Adrian || Profile</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
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
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Profile</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">{{ Auth::user()->name }}</div>
                                    <div class="name-center">{{ Auth::user()->user_type }}</div>
                                </div>
                                <img src="{{ asset('assets/images/usr.png') }}" class="user-img" alt="">
                                <p>
                                {{ Auth::user()->department['name']}}
                                </p>
                                <div>
                                    <span class="email">Email: </i>{{ Auth::user()->email }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--header-->
            </div>

            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                     <div class="header">
                         <h2>
                             <strong>My Data</strong> </h2>
                     </div>
                     <div class="body table-responsive">
                         <table class="table">
                             <thead>
                                 <tr>
                                    <th>Employee Number</>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>National Id</th>
                                     <th>Phone Id</th>
                                     <th>NSSF</th>
                                     <th>NHIF</th>
                                     <th>KRA PIN</th>
                                     <th>DEPARTMENT</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>{{$employee->employee_no}}</td>
                                     <td>{{$employee->name}}</td>
                                     <td>{{$employee->email}}</td>
                                     <td>{{$employee->nat_id}}</td>
                                     <td>{{$employee->phone_no}}</td>
                                     <td>{{$employee->NSSF}}</td>
                                     <td>{{$employee->NHIF}}</td>
                                     <td>{{$employee->KRA_Pin}}</td>
                                     <td>{{$employee->category}}</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
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
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>
</body>

</html>
