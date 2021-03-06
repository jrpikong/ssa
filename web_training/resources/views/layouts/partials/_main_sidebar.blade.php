<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset('images/avatar.png')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Admin
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('start_quiz') }}" class="nav-link">
                        <i class="icon-lab"></i>
                        <span>Test Kepribadian</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('trainings') }}" class="nav-link">
                        <i class="icon-stack"></i>
                        <span>Training</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('history_training') }}" class="nav-link">
                        <i class="icon-accessibility"></i>
                        <span>History Training</span>
                    </a>
                </li>
                @if(Auth::user()->id == 10)
                    <li class="nav-item">
                        <a href="{{ route('list_quiz') }}" class="nav-link">
                            <i class="icon-traffic-lights"></i>
                            <span>All Quiz</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin_members') }}" class="nav-link">
                            <i class="icon-traffic-lights"></i>
                            <span>All Member</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin_sliders') }}" class="nav-link">
                            <i class="icon-traffic-lights"></i>
                            <span>Sliders</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('list_product') }}" class="nav-link">
                            <i class="icon-package"></i>
                            <span>Products</span>
                        </a>
                    </li>
                @endif
                <!-- /main -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>