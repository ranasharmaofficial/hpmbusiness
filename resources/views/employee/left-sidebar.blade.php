<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu userbackcolor">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Employee Menu</li>
                 <li>
                    <a href="{{url('employee/home')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-slideshow-fill"></i>
                        <span>Project</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('employee/ongoing-project')}}">Ongoing Project</a></li>
                        <li><a href="{{url('employee/completed-project')}}">Completed Project</a></li>
                     </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-slideshow-fill"></i>
                        <span>Wallet</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('employee/my-wallet')}}">Wallet</a></li>
                        <li><a href="{{url('employee/wallet-history')}}">Wallet History</a></li>
                     </ul>
                </li>
                {{-- <li>
                    <a href="{{url('user/my-project')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>My Project</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{url('user/work-list')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Work List</span>
                    </a>
                </li> 
                <li>
                    <a href="{{url('user/work-details')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Work Details</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('user/applied-project')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Applied Project</span>
                    </a>
                </li>--}}
               
                <li>
                    <a href="{{url('employee/view-profile')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>View Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('employee/update-profile')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Update Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('employee/change-password')}}" class="waves-effect">
                        <i class="ri-file-user-fill"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <!--User Menu End-->

                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->