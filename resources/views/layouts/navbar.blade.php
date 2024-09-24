<!-- nav.blade.php -->
<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="28">
                    </span>
                </a>

                <a href="{{ route('index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30">
                    </span>
                </a>
            </div>

            <button type="button"
                class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <!-- Start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">@yield('title', 'Admin & Dashboard Template')</h4>
            </div>
            <!-- End page title -->
        </div>

        <div class="d-flex">

            <!-- Language Switch -->
            <div class="dropdown d-inline-block language-switch ms-2">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="header-lang-img" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language"
                        height="18">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- Item -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">English</span>
                    </a>
                    <!-- Item -->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="qa">
                        <img src="{{ asset('assets/images/flags/qatar.jpg') }}" alt="user-image" class="me-1" height="12">
                        <span class="align-middle">Arabic</span>
                    </a>
                </div>
            </div>

            <!-- Search -->
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

            <!-- Notifications -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon"
                    id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-bell icon-sm align-middle"></i>
                    <span class="noti-dot bg-danger rounded-pill">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown-v">
                    <!-- Notifications content -->
                    <!-- You can add your notifications here -->
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
                @if(Auth::check())
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->email }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Help</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                            class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle me-3">Settings</span></a>

                    <div class="dropdown-divider"></div>
                    <!-- Logout -->
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @else
                <!-- Login and Register Links -->
                <a href="{{ route('login') }}" class="btn header-item">Login</a>
                <a href="{{ route('register') }}" class="btn header-item">Register</a>
                @endif
            </div>
            <!-- End User Dropdown -->
        </div>
    </div>
</header>
