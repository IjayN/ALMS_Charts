<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/home">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                <span class="logo-name">Adrian</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="javascript:void(0);" class="sidemenu-collapse">
                        <i class="material-icons">reorder</i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <!-- #START# Notifications-->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="far fa-bell"></i>
                        <span class="label-count bg-orange"></span>
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="table-img msg-user">
                                            <img src="{{ asset('assets/images/usr.png') }}" alt="">
                                        </span>
                                        <span class="menu-info">
                                            <span class="menu-title">Adrian Group</span>
                                            <span class="menu-desc">
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </span>
                                            <span class="menu-desc">Welcome To Adrian</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications-->
                <li class="dropdown user_profile">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <img src="{{ asset('assets/images/usr.png') }}" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="{{route('profile')}}">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">help</i>Help
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}">
                                        <i class="material-icons">power_settings_new</i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
            </ul>
        </div>
    </div>
</nav>
