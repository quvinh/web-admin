<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->

    <a href="{{ route('admin') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('admins/images/logo.png') }}" alt="" height="32">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('admins/images/logo_sm.png') }}" alt="" height="16">
        </span>
    </a>
    <br><br>

    <!-- LOGO -->
    {{-- <a href="{{ route('admin.dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
        </span>
    </a> --}}

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">
            <!-- <li class="side-nav-title side-nav-item">Navigation</li> -->
            <li class="side-nav-item">
                <a href="{{ route('admin') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> @lang('leftside.dashboard') </span>
                </a>
            </li>

            {{-- <li class="side-nav-title side-nav-item"></li> --}}

            <li class="side-nav-item">
                <a href="{{ route('admin.calendar') }}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> @lang('leftside.calendar') </span>
                </a>
            </li>
        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{ asset('admins/images/help-icon.svg') }}" height="90" alt="Helper Icon Image">
            <h5 class="mt-3"></h5>
            <p class="mb-3"></p>
            <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
