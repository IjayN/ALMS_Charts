
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class=" image">
                        <img src="{{ asset('assets/images/usr.png') }}" class="img-circle user-img-circle" alt="u" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name">{{auth()->user()->name}} </div>
                    <div class="profile-usertitle-job ">{{auth()->user()->category}}</div>
                </div>
            </li>
            @if( auth()->user()->type->name == 'MD')
                <li>
                    <a href="{{route('home')}}">
                        <i class="fab fa-accusoft"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('apply-leave')}}">
                        <i class="fas c"></i>
                        <span>Apply Leave</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('leave-history')}}">
                        <i class="fas fa-object-ungroup"></i>
                        <span>Leave History</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pending')}}">
                        <i class="fas fa-bookmark"></i>
                        <span>Pending Requests</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all_request')}}">
                        <i class="fas fa-swatchbook"></i>
                        <span>All Requests</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('com-leave')}}">
                        <i class="fas fa-dice-five"></i>
                        <span>Compulsory Leave</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all-active')}}">
                        <i class="fas fa-dice-four"></i>
                        <span>Active Compulsory Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all-comp_leave')}}">
                        <i class="fas fa-dice"></i>
                        <span>All Compulsory Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('visitors')}}">
                        <i class="fas fa-boxes "></i>
                        <span>My Visitors</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage-members')}}">
                        <i class="fas fa-user-edit"></i>
                        <span>Manage Members</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}">
                        <i class="fas fa-id-card"></i>
                        <span>My Profile</span>
                    </a>
                </li>  <li>
                    <a href="{{route('home')}}">
                        <i class="fas fa-users-cog"></i>
                        <span>User Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="fas fa-mail-bulk"></i>
                        <span>Email</span>
                    </a>
                </li>
            @elseif( auth()->user()->type->name == 'Admin')
                <li>
                    <a href="{{route('home')}}">
                        <i class="fab fa-accusoft"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('add-member')}}">
                        <i class="fas fa-user-plus"></i>
                        <span>Add Member</span>
                    </a>
                </li>
        
                <li>
                    <a href="{{route('leave-history')}}">
                        <i class="fas fa-object-ungroup"></i>
                        <span>Leave History</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pending')}}">
                        <i class="fas fa-bookmark"></i>
                        <span>Pending Requests</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all_request')}}">
                        <i class="fas fa-swatchbook"></i>
                        <span>All Requests</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('com-leave')}}">
                        <i class="fas fa-dice-five"></i>
                        <span>Compulsory Leave</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all-active')}}">
                        <i class="fas fa-dice-four"></i>
                        <span>Active Compulsory Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all-comp_leave')}}">
                        <i class="fas fa-dice"></i>
                        <span>All Compulsory Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('visitors')}}">
                        <i class="fas fa-boxes "></i>
                        <span>My Visitors</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage-members')}}">
                        <i class="fas fa-user-edit"></i>
                        <span>Manage Members</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}">
                        <i class="fas fa-id-card"></i>
                        <span>My Profile</span>
                    </a>
                </li>

            @elseif(auth()->user()->type->name == 'HOD' | auth()->user()->type->name == 'HR' | auth()->user()->type->name == 'PM')
                <li>
                    <a href="{{route('home')}}">
                        <i class="fab fa-accusoft"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('apply-leave')}}">
                        <i class="fas fa-object-group"></i>
                        <span>Apply Leave</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('leave-history')}}">
                        <i class="fas fa-object-ungroup"></i>
                        <span>Leave History</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('reliever_request')}}">
                        <i class="fas fa-swatchbook"></i>
                        <span>Reliever Request</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all_request')}}">
                        <i class="fas fa-boxes"></i>
                        <span>All Request</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pending')}}">
                        <i class="fas fa-bookmark"></i>
                        <span>Pending Request</span>
                    </a>
                </li>
                <li>
                @if(auth()->user()->type->name == 'HR')

                    <li>
                        <a href="{{route('com-leave')}}">
                            <i class="fas fa-dice-five"></i>
                            <span>Compulsory Leave</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('all-active')}}">
                            <i class="fas fa-dice-four"></i>
                            <span>Active Compulsory Leaves</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('all-comp_leave')}}">
                            <i class="fas fa-dice"></i>
                            <span>All Compulsory Leaves</span>
                        </a>
                    </li>

                @endif

                <a href="{{route('visitors')}}">
                    <i class="fas fa-diagnoses "></i>
                    <span>My Visitors</span>
                </a>
                </li>
                <li>
                    <a href="{{route('profile')}}">
                        <i class="fas fa-id-card"></i>
                        <span>My Profile</span>
                    </a>
                </li>

            @else
                <li>
                    <a href="{{route('home')}}">
                        <i class="fab fa-accusoft"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('apply-leave')}}"fas fa-user-edit>
                        <i class="fas fa-object-group"></i>
                        <span>Apply Leave</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('leave-history')}}">
                        <i class="fas fa-object-ungroup"></i>
                        <span>Leave History</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('reliever_request')}}">
                        <i class="fas fa-swatchbook"></i>
                        <span>Reliever Request</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('visitors')}}">
                        <i class="fas fa-diagnoses "></i>
                        <span>My Visitors</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}">
                        <i class="fas fa-id-card"></i>
                        <span>My Profile</span>
                    </a>
                </li>


            @endif


        </ul>
    </div>
    <!-- #Menu -->
</aside>
<!-- #END# Left Sidebar -->
