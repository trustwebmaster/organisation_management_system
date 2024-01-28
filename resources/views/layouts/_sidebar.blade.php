<aside class="left-sidebar">

    <div>

        <div class="brand-logo border-bottom d-flex align-items-center justify-content-between">
            <a href="" class="text-nowrap logo-img">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">

            <ul id="sidebarnav">

                <li class="nav-small-cap border-bottom mt-1">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-muted">Home</span>
                </li>

                <li class="sidebar-item mt-3">
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-device-desktop"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="nav-small-cap border-bottom">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-muted">Member Management</span>
                </li>

                <li class="sidebar-item mt-3">
                    <a class="sidebar-link" href="{{ route('memberManagement.register') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>

                <li class="sidebar-item mt-3">
                    <a class="sidebar-link" href="{{ route('memberManagement.members') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                        <span class="hide-menu">Members</span>
                    </a>
                </li>

                <li class="nav-small-cap border-bottom">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-muted">Finance Tracking</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-building"></i>
                </span>
                        <span class="hide-menu">Business Units</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-building-bank"></i>
                </span>
                        <span class="hide-menu">Add Templates</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="" aria-expanded="false">
                <span>
                  <i class="ti ti-building-bank"></i>
                </span>
                        <span class="hide-menu">View Templates</span>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->

    </div>
    <!-- End Sidebar scroll-->
</aside>
