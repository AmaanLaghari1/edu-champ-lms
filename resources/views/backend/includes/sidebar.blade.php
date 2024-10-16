<!-- Left sidebar menu start -->
<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="{{route('dashboard')}}"><img alt="" src="{{asset('admin')}}/assets/images/logo.png" width="122" height="27"></a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
                <i class="material-icons ttr-fixed-icon">gps_fixed</i>
                <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
            </div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="{{route('dashboard')}}" class="ttr-material-button {{request()->is('dashboard') ? 'bg-warning' : '' }}">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashborad</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('users')}}" class="ttr-material-button {{request()->is('user*') ? 'bg-warning' : '' }}">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('courses_all')}}" class="ttr-material-button {{request()->is('course*') ? 'bg-warning' : '' }}">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('categories')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Categories</span>
                    </a>
                </li>
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
<!-- Left sidebar menu end -->
