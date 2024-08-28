 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

<!-- LOGO -->
<div class="navbar-brand-box">
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="assets/images/logo-dark-sm.png" alt="" height="26">
        </span>
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="28">
        </span>
    </a>

    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo-light.png" alt="" height="30">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-light-sm.png" alt="" height="26">
        </span>
    </a>
</div>

<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
    <i class="bx bx-menu align-middle"></i>
</button>

<div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu">Dashboard</li>

            <li>
                <a href="javascript: void(0);">
                    <i class="bx bx-home-alt icon nav-icon"></i>
                    <span class="menu-item" data-key="t-dashboard">Home</span>
                </a>
            </li>

            <li class="menu-title" data-key="t-applications">Applications</li>



            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i class="bx bx-building-house icon nav-icon"></i>
                    <span class="menu-item" data-key="t-realestate">Real Estate</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('properties.index') }}" data-key="t-properties">Properties</a>
                    </li>
                    <li><a href="#" data-key="t-proprety-types">Property Types</a></li>
                    <li><a href="#" data-key="t-property-features">Property Features</a></li>
                    <li><a href="#" data-key="t-states">Property Status</a></li>
                    <li><a href="#" data-key="t-agencies">Agencies</a></li>
                    <li><a href="#" data-key="t-agents">Agents</a></li>
                    <li><a href="#" data-key="t-cities">Cities</a></li>
                    <li><a href="#" data-key="t-states">States</a></li>
                    <li><a href="#" data-key="t-reviews">Reviews</a></li>

                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-mail-send icon nav-icon"></i>
                    <span class="menu-item" data-key="t-notifactions">Notifications</span>
                </a>
            </li>



            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i class="bx bx-user-circle icon nav-icon"></i>
                    <span class="menu-item" data-key="t-users">Users</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('users.index') }}" data-key="t-user">All Users</a></li>
                    <li><a href="#" data-key="t-user-profile">Profile</a></li>
                </ul>
            </li>

            <li class="menu-title" data-key="t-monetization">Monetization</li>

            <li>
                <a href="#">
                    <i class="bx bx-layout icon nav-icon"></i>
                    <span class="menu-item" data-key="t-ads">Ads</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-list-ol icon nav-icon"></i>
                    <span class="menu-item" data-key="t-packages">Packages</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-receipt icon nav-icon"></i>
                    <span class="menu-item" data-key="t-parteners">Parteners</span>
                </a>
            </li>


            <li class="menu-title" data-key="t-blog">Blog</li>

            <li>
                <a href="#">
                    <i class="bx bx-menu-alt-left icon nav-icon"></i>
                    <span class="menu-item" data-key="t-ads">Categories</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-file icon nav-icon"></i>
                    <span class="menu-item" data-key="t-packages">Posts</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-message-dots icon nav-icon"></i>
                    <span class="menu-item" data-key="t-packages">Comments</span>
                </a>
            </li>


            <li class="menu-title" data-key="t-pages">Settings</li>

            <li>
                <a href="#">
                    <i class="bx bx-slider-alt icon nav-icon"></i>
                    <span class="menu-item" data-key="t-general">General</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bx bx-code icon nav-icon"></i>
                    <span class="menu-item" data-key="t-code-snippets">Code Snippets</span>
                </a>
            </li>




        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
<header class="ishorizontal-topbar">
<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="28">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-light-sm.png" alt="" height="26">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="30">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item"
            data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="bx bx-menu align-middle"></i>
        </button>

        <!-- start page title -->
        <div class="page-title-box align-self-center d-none d-md-block">
            <h4 class="page-title mb-0">User List</h4>
        </div>
        <!-- end page title -->

    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block language-switch ms-2 ms-xl-3">
            <button type="button" class="btn header-item" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language"
                    height="18">
            </button>
            <div class="dropdown-menu dropdown-menu-end">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1"
                        height="12"> <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                    <img src="assets/images/flags/qatar.jpg" alt="user-image" class="me-1"
                        height="12"> <span class="align-middle">Arabic</span>
                </a>


            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-search icon-sm align-middle"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                <form class="p-2">
                    <div class="search-box">
                        <div class="position-relative">
                            <input type="text" class="form-control rounded bg-light border-0"
                                placeholder="Search...">
                            <i class="bx bx-search search-icon"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon"
                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-bell icon-sm align-middle"></i>
                <span class="noti-dot bg-danger rounded-pill">4</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="m-0 font-size-15"> Notifications </h5>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small fw-semibold text-decoration-underline"> Mark
                                all as read</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 250px;">
                    <a href="#!" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img src="assets/images/users/avatar-3.jpg"
                                    class="rounded-circle avatar-sm" alt="user-pic">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">James Lemire</h6>
                                <div class="font-size-13 text-muted">
                                    <p class="mb-1">It will seem like simplified English.</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                            ago</span></p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="p-2 border-top d-grid">
                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                        href="javascript:void(0)">
                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item user text-start d-flex align-items-center"
                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                    alt="Header Avatar">
                <span
                    class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->name }}</span>
            </button>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="p-3 border-bottom">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->email }}</p>
                </div>
                <a class="dropdown-item" href="contacts-profile.html"><i
                        class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span
                        class="align-middle">Profile</span></a>
                <a class="dropdown-item" href="apps-chat.html"><i
                        class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i>
                    <span class="align-middle">Messages</span></a>
                <a class="dropdown-item" href="pages-faqs.html"><i
                        class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span
                        class="align-middle">Help</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i
                        class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span
                        class="align-middle me-3">Settings</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="auth-logout.html"><i
                        class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span
                        class="align-middle">Logout</span></a>
            </div>
        </div>
    </div>
</div>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
        </nav>
    </div>
</div>
</header>


 <!-- ========== Left Sidebar End ========== -->
