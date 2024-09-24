<!-- sidebar.blade.php -->
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

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

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <!-- Check if user is authenticated -->
                @if(Auth::check())
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Home</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Applications</li>

                <!-- Real Estate Menu -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-building-house icon nav-icon"></i>
                        <span class="menu-item" data-key="t-realestate">Real Estate</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('properties.index') }}" data-key="t-properties">Properties</a></li>
                        <li><a href="{{ route('property-types.index') }}" data-key="t-proprety-types">Property Types</a></li>
                        <li><a href="{{ route('property-features.index') }}" data-key="t-property-features">Property Features</a></li>
                        <li><a href="{{ route('property-status.index') }}" data-key="t-states">Property Status</a></li>
                        <li><a href="{{ route('agencies.index') }}" data-key="t-agencies">Agencies</a></li>
                        <li><a href="{{ route('agents.index') }}" data-key="t-agents">Agents</a></li>
                        <li><a href="{{ route('cities.index') }}" data-key="t-cities">Cities</a></li>
                        <li><a href="{{ route('states.index') }}" data-key="t-states">States</a></li>
                        <li><a href="{{ route('reviews.index') }}" data-key="t-reviews">Reviews</a></li>
                    </ul>
                </li>

                <!-- Corporate Listings Menu -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-folder-open icon nav-icon"></i>
                        <span class="menu-item" data-key="t-corporate">Corporate Listings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('companies.indexcorporate') }}" data-key="t-companies">Companies</a></li>
                        <li><a href="{{ route('categories.indexcorporate') }}" data-key="t-categories">Categories</a></li>
                        <!-- <li><a href="{{ route('reviews.indexcorporate') }}" data-key="t-reviews">Reviews</a></li> -->
                    </ul>
                </li>

                <!-- Notifications -->
                <li>
                    <a href="{{ route('notifications.index') }}">
                        <i class="bx bx-mail-send icon nav-icon"></i>
                        <span class="menu-item" data-key="t-notifications">Notifications</span>
                    </a>
                </li>

                <!-- Users Menu -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-users">Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('users.index') }}" data-key="t-user">All Users</a></li>
                        <li><a href="{{ route('profile.edit') }}" data-key="t-user-profile">Profile</a></li>
                    </ul>
                </li>

                <!-- Monetization Menu -->
                <li class="menu-title" data-key="t-monetization">Monetization</li>

                <li>
                    <a href="{{ route('ads.index') }}">
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
                    <a href="{{ route('partners.index') }}">
                        <i class="bx bx-receipt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-partners">Partners</span>
                    </a>
                </li>

                <!-- Blog Menu -->
                <li class="menu-title" data-key="t-blog">Blog</li>

                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class="bx bx-menu-alt-left icon nav-icon"></i>
                        <span class="menu-item" data-key="t-blog-categories">Categories</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('posts.index') }}">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-blog-posts">Posts</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('comments.index') }}">
                        <i class="bx bx-message-dots icon nav-icon"></i>
                        <span class="menu-item" data-key="t-blog-comments">Comments</span>
                    </a>
                </li>

                <!-- Settings Menu -->
                <li class="menu-title" data-key="t-settings">Settings</li>

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
                @else
                <!-- Menu items for guests -->
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-home">Home</span>
                    </a>
                </li>

                <!-- You can add more menu items for guests here -->
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
