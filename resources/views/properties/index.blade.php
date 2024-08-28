<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Properties List |  Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- gridjs css -->
    <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

    <!-- flatpickr css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar" class="isvertical-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark-sm.png" alt="" height="26">
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

                    <button type="button"
                        class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                        <i class="bx bx-menu align-middle"></i>
                    </button>

                    <!-- start page title -->
                    <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Properties List</h4>
                    </div>
                    <!-- end page title -->

                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block language-switch ms-2">
                        <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language"
                                height="18">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Russian</span>
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
                            id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell icon-sm align-middle"></i>
                            <span class="noti-dot bg-danger rounded-pill">4</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown-v">
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
                                            <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div>
                                                <p class="mb-0">It will seem like simplified English.</p>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-18">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted font-size-13 mb-0 float-end">3 min ago</p>
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div>
                                                <p class="mb-0">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-18">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted font-size-13 mb-0 float-end">8 min ago</p>
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div>
                                                <p class="mb-0">If several languages coalesce the grammar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-6.jpg"
                                                class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div>
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.
                                                </p>
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
                            id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="p-3 border-bottom">
                                <h6 class="mb-0">Martin Gurley</h6>
                                <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
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
                                    class="align-middle me-3">Settings</span><span
                                    class="badge bg-success-subtle text-success  ms-auto">New</span></a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i
                                    class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span
                                    class="align-middle">Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="auth-logout.html"><i
                                    class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span
                                    class="align-middle">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
                                <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                <span class="badge rounded-pill bg-primary">2</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html" data-key="t-ecommerce">Ecommerce</a></li>
                                <li><a href="dashboard-sales.html" data-key="t-sales">Sales</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-applications">Applications</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-envelope icon nav-icon"></i>
                                <span class="menu-item" data-key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="apps-calendar.html">
                                <i class="bx bx-calendar-event icon nav-icon"></i>
                                <span class="menu-item" data-key="t-calendar">Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-todo.html">
                                <i class="bx bx-check-square icon nav-icon"></i>
                                <span class="menu-item" data-key="t-todo">Todo</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-file-manager.html">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">File Manager</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat.html">
                                <i class="bx bx-chat icon nav-icon"></i>
                                <span class="menu-item" data-key="t-chat">Chat</span>
                                <span class="badge rounded-pill bg-danger" data-key="t-hot">Hot</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-store icon nav-icon"></i>
                                <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ecommerce-products.html" data-key="t-products">Products</a></li>
                                <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product
                                        Detail</a></li>
                                <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-receipt icon nav-icon"></i>
                                <span class="menu-item" data-key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html" data-key="t-invoice-list">Properties List</a></li>
                                <li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-user-circle icon nav-icon"></i>
                                <span class="menu-item" data-key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                <li><a href="contacts-profile.html" data-key="t-user-profile">Profile</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-layouts">Layouts</li>

                        <li>
                            <a href="layouts-horizontal.html">
                                <i class="bx bx-layout icon nav-icon"></i>
                                <span class="menu-item" data-key="t-horizontal">Horizontal</span>
                            </a>
                        </li>

                        <li class="menu-title" data-key="t-components">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-cube icon nav-icon"></i>
                                <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                <li><a href="ui-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                <li><a href="ui-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                <li><a href="ui-sweet-alert.html" data-key="t-sweet-alert">Sweet-Alert</a></li>
                                <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs &
                                        Accordions</a></li>
                                <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                <li><a href="ui-rating.html" data-key="t-rating">Rating</a></li>
                                <li><a href="ui-notifications.html" data-key="t-notifications">Notifications</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-layout icon nav-icon"></i>
                                <span class="menu-item" data-key="t-forms">Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" data-key="t-form-elements">Form Elements</a></li>
                                <li><a href="form-layouts.html" data-key="t-form-layouts">Form Layouts</a></li>
                                <li><a href="form-validation.html" data-key="t-form-validation">Form Validation</a>
                                </li>
                                <li><a href="form-advanced.html" data-key="t-form-advanced">Form Advanced</a></li>
                                <li><a href="form-editors.html" data-key="t-form-editors">Form Editors</a></li>
                                <li><a href="form-uploads.html" data-key="t-form-upload">Form File Upload</a></li>
                                <li><a href="form-wizard.html" data-key="t-form-wizard">Form Wizard</a></li>
                                <li><a href="form-mask.html" data-key="t-form-mask">Form Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-table icon nav-icon"></i>
                                <span class="menu-item" data-key="t-tables">Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" data-key="t-basic-tables">Basic Tables</a></li>
                                <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-pie-chart-alt-2 icon nav-icon"></i>
                                <span class="menu-item" data-key="t-charts">Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.html" data-key="t-apex-charts">Apex Charts</a></li>
                                <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs Charts</a></li>
                                <li><a href="charts-tui.html" data-key="t-ui-charts">Toast UI Charts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-cuboid icon nav-icon"></i>
                                <span class="menu-item" data-key="t-icons">Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-evaicons.html" data-key="t-evaicons">Eva Icons</a></li>
                                <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html" data-key="t-material-design">Material
                                        Design</a></li>
                                <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-map-alt icon nav-icon"></i>
                                <span class="menu-item" data-key="t-maps">Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" data-key="t-pages">Pages</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-user-pin icon nav-icon"></i>
                                <span class="menu-item" data-key="t-authentication">Authentication</span>
                                <span class="badge rounded-pill bg-info">8</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a>
                                </li>
                                <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                <li><a href="auth-logout.html" data-key="t-logout">Logout</a></li>
                                <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                <li><a href="auth-email-verification.html" data-key="t-email-verification">Email
                                        Verification</a></li>
                                <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two
                                        Step Verification</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-file icon nav-icon"></i>
                                <span class="menu-item" data-key="t-utility">Utility</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i class="bx bx-share-alt icon nav-icon"></i>
                                <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a>
                                </li>
                                <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level
                                        1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                        <h4 class="page-title mb-0">Properties List</h4>
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
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Russian</span>
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
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-6.jpg"
                                                class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.
                                                </p>
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
                            <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="p-3 border-bottom">
                                <h6 class="mb-0">Martin Gurley</h6>
                                <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
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
                                    class="align-middle me-3">Settings</span><span
                                    class="badge bg-success-subtle text-success  ms-auto">New</span></a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i
                                    class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span
                                    class="align-middle">Lock screen</span></a>
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

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#"
                                        id="topnav-dashboard" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-home-alt icon nav-icon"></i>
                                        <span data-key="t-dashboards">Dashboards</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                        <a href="index.html" class="dropdown-item"
                                            data-key="t-ecommerce">Ecommerce</a>
                                        <a href="dashboard-sales.html" class="dropdown-item"
                                            data-key="t-sales">Sales</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#"
                                        id="topnav-uielement" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-cube icon nav-icon"></i>
                                        <span data-key="t-elements">Elements</span>
                                        <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                                        aria-labelledby="topnav-uielement">
                                        <div class="ps-2 p-lg-0">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <div class="menu-title">Elements</div>
                                                        <div class="row g-0">
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <a href="ui-alerts.html" class="dropdown-item"
                                                                        data-key="t-alerts">Alerts</a>
                                                                    <a href="ui-buttons.html" class="dropdown-item"
                                                                        data-key="t-buttons">Buttons</a>
                                                                    <a href="ui-cards.html" class="dropdown-item"
                                                                        data-key="t-cards">Cards</a>
                                                                    <a href="ui-carousel.html" class="dropdown-item"
                                                                        data-key="t-carousel">Carousel</a>
                                                                    <a href="ui-dropdowns.html" class="dropdown-item"
                                                                        data-key="t-dropdowns">Dropdowns</a>
                                                                    <a href="ui-grid.html" class="dropdown-item"
                                                                        data-key="t-grid">Grid</a>
                                                                    <a href="ui-images.html" class="dropdown-item"
                                                                        data-key="t-images">Images</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <a href="ui-lightbox.html" class="dropdown-item"
                                                                        data-key="t-lightbox">Lightbox</a>
                                                                    <a href="ui-modals.html" class="dropdown-item"
                                                                        data-key="t-modals">Modals</a>
                                                                    <a href="ui-offcanvas.html" class="dropdown-item"
                                                                        data-key="t-offcanvas">Offcanvas</a>
                                                                    <a href="ui-rangeslider.html"
                                                                        class="dropdown-item"
                                                                        data-key="t-range-slider">Range Slider</a>
                                                                    <a href="ui-progressbars.html"
                                                                        class="dropdown-item"
                                                                        data-key="t-progress-bars">Progress Bars</a>
                                                                    <a href="ui-sweet-alert.html"
                                                                        class="dropdown-item"
                                                                        data-key="t-sweet-alert">Sweet-Alert</a>
                                                                    <a href="ui-tabs-accordions.html"
                                                                        class="dropdown-item"
                                                                        data-key="t-tabs-accordions">Tabs &
                                                                        Accordions</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <a href="ui-typography.html" class="dropdown-item"
                                                                        data-key="t-typography">Typography</a>
                                                                    <a href="ui-video.html" class="dropdown-item"
                                                                        data-key="t-video">Video</a>
                                                                    <a href="ui-general.html" class="dropdown-item"
                                                                        data-key="t-general">General</a>
                                                                    <a href="ui-colors.html" class="dropdown-item"
                                                                        data-key="t-colors">Colors</a>
                                                                    <a href="ui-rating.html" class="dropdown-item"
                                                                        data-key="t-rating">Rating</a>
                                                                    <a href="ui-notifications.html"
                                                                        class="dropdown-item"
                                                                        data-key="t-notifications">Notifications</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages"
                                        role="button">
                                        <i class="bx bx-store icon nav-icon"></i>
                                        <span data-key="t-apps">Apps</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <a href="apps-calendar.html" class="dropdown-item"
                                            data-key="t-calendar">Calendar</a>

                                        <a href="apps-todo.html" class="dropdown-item" data-key="t-todo">Todo</a>

                                        <a href="apps-file-manager.html" class="dropdown-item"
                                            data-key="t-filemanager">File Manager</a>

                                        <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>


                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-ecommerce" role="button">
                                                <span data-key="t-ecommerce">Ecommerce</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                <a href="ecommerce-products.html" class="dropdown-item"
                                                    data-key="t-products">Products</a>
                                                <a href="ecommerce-product-detail.html" class="dropdown-item"
                                                    data-key="t-product-detail">Product Detail</a>
                                                <a href="ecommerce-orders.html" class="dropdown-item"
                                                    data-key="t-orders">Orders</a>
                                                <a href="ecommerce-customers.html" class="dropdown-item"
                                                    data-key="t-customers">Customers</a>
                                                <a href="ecommerce-cart.html" class="dropdown-item"
                                                    data-key="t-cart">Cart</a>
                                                <a href="ecommerce-checkout.html" class="dropdown-item"
                                                    data-key="t-checkout">Checkout</a>
                                                <a href="ecommerce-shops.html" class="dropdown-item"
                                                    data-key="t-shops">Shops</a>
                                                <a href="ecommerce-add-product.html" class="dropdown-item"
                                                    data-key="t-add-product">Add Product</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-email" role="button">
                                                <span data-key="t-email">Email</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                <a href="email-inbox.html" class="dropdown-item"
                                                    data-key="t-inbox">Inbox</a>
                                                <a href="email-read.html" class="dropdown-item"
                                                    data-key="t-read-email">Read Email</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-invoices" role="button">
                                                <span data-key="t-invoices">Invoices</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                                <a href="invoices-list.html" class="dropdown-item"
                                                    data-key="t-invoice-list">Invoice List</a>
                                                <a href="invoices-detail.html" class="dropdown-item"
                                                    data-key="t-invoice-detail">Invoice Detail</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-contact" role="button">
                                                <span data-key="t-contacts">Contacts</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                <a href="contacts-grid.html" class="dropdown-item"
                                                    data-key="t-user-grid">User Grid</a>
                                                <a href="contacts-list.html" class="dropdown-item"
                                                    data-key="t-user-list">User List</a>
                                                <a href="contacts-profile.html" class="dropdown-item"
                                                    data-key="t-user-profile">Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#"
                                        id="topnav-components" role="button">
                                        <i class="bx bx-layer icon nav-icon"></i>
                                        <span data-key="t-components">Components</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-form" role="button">
                                                <span data-key="t-forms">Forms</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                <a href="form-elements.html" class="dropdown-item"
                                                    data-key="t-form-elements">Form Elements</a>
                                                <a href="form-layouts.html" class="dropdown-item"
                                                    data-key="t-form-layouts">Form Layouts</a>
                                                <a href="form-validation.html" class="dropdown-item"
                                                    data-key="t-form-validation">Form Validation</a>
                                                <a href="form-advanced.html" class="dropdown-item"
                                                    data-key="t-form-advanced">Form Advanced</a>
                                                <a href="form-editors.html" class="dropdown-item"
                                                    data-key="t-form-editors">Form Editors</a>
                                                <a href="form-uploads.html" class="dropdown-item"
                                                    data-key="t-form-upload">Form File Upload</a>
                                                <a href="form-wizard.html" class="dropdown-item"
                                                    data-key="t-form-wizard">Form Wizard</a>
                                                <a href="form-mask.html" class="dropdown-item"
                                                    data-key="t-form-mask">Form Mask</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-table" role="button">
                                                <span data-key="t-tables">Tables</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                <a href="tables-basic.html" class="dropdown-item"
                                                    data-key="t-basic-tables">Basic Tables</a>
                                                <a href="tables-advanced.html" class="dropdown-item"
                                                    data-key="t-advanced-tables">Advance Tables</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-charts" role="button">
                                                <span data-key="t-charts">Charts</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                <a href="charts-apex.html" class="dropdown-item"
                                                    data-key="t-apex-charts">Apex Charts</a>
                                                <a href="charts-chartjs.html" class="dropdown-item"
                                                    data-key="t-chartjs-charts">Chartjs Charts</a>
                                                <a href="charts-tui.html" class="dropdown-item"
                                                    data-key="t-ui-charts">Toast UI Charts</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-icons" role="button">
                                                <span data-key="t-icons">Icons</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                <a href="icons-evaicons.html" class="dropdown-item"
                                                    data-key="t-evaicons">Eva Icons</a>
                                                <a href="icons-boxicons.html" class="dropdown-item"
                                                    data-key="t-boxicons">Boxicons</a>
                                                <a href="icons-materialdesign.html" class="dropdown-item"
                                                    data-key="t-material-design">Material Design</a>
                                                <a href="icons-fontawesome.html" class="dropdown-item"
                                                    data-key="t-font-awesome">Font Awesome 5</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-map" role="button">
                                                <span data-key="t-maps">Maps</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                <a href="maps-google.html" class="dropdown-item"
                                                    data-key="t-google">Google</a>
                                                <a href="maps-vector.html" class="dropdown-item"
                                                    data-key="t-vector">Vector</a>
                                                <a href="maps-leaflet.html" class="dropdown-item"
                                                    data-key="t-leaflet">Leaflet</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more"
                                        role="button">
                                        <i class="bx bx-file icon nav-icon"></i>
                                        <span data-key="t-pages">Pages</span>
                                        <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-more">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-authentication" role="button">
                                                <span data-key="t-authentication">Authentication</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                                <a href="auth-login.html" class="dropdown-item"
                                                    data-key="t-login">Login</a>
                                                <a href="auth-register.html" class="dropdown-item"
                                                    data-key="t-register">Register</a>
                                                <a href="auth-recoverpw.html" class="dropdown-item"
                                                    data-key="t-recover-password">Recover Password</a>
                                                <a href="auth-lock-screen.html" class="dropdown-item"
                                                    data-key="t-lock-screen">Lock Screen</a>
                                                <a href="auth-logout.html" class="dropdown-item"
                                                    data-key="t-logout">Logout</a>
                                                <a href="auth-confirm-mail.html" class="dropdown-item"
                                                    data-key="t-confirm-mail">Confirm Mail</a>
                                                <a href="auth-email-verification.html" class="dropdown-item"
                                                    data-key="t-email-verification">Email Verification</a>
                                                <a href="auth-two-step-verification.html" class="dropdown-item"
                                                    data-key="t-two-step-verification">Two Step Verification</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#"
                                                id="topnav-utility" role="button">
                                                <span data-key="t-utility">Utility</span>
                                                <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                <a href="pages-starter.html" class="dropdown-item"
                                                    data-key="t-starter-page">Starter Page</a>
                                                <a href="pages-maintenance.html" class="dropdown-item"
                                                    data-key="t-maintenance">Maintenance</a>
                                                <a href="pages-comingsoon.html" class="dropdown-item"
                                                    data-key="t-coming-soon">Coming Soon</a>
                                                <a href="pages-timeline.html" class="dropdown-item"
                                                    data-key="t-timeline">Timeline</a>
                                                <a href="pages-faqs.html" class="dropdown-item"
                                                    data-key="t-faqs">FAQs</a>
                                                <a href="pages-pricing.html" class="dropdown-item"
                                                    data-key="t-pricing">Pricing</a>
                                                <a href="pages-404.html" class="dropdown-item"
                                                    data-key="t-error-404">Error 404</a>
                                                <a href="pages-500.html" class="dropdown-item"
                                                    data-key="t-error-500">Error 500</a>
                                            </div>
                                        </div>

                                        <a href="layouts-horizontal.html" class="dropdown-item"
                                            data-key="t-horizontal">Horizontal</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="position-relative">
                                        <div class="modal-button mt-2">
                                            <div class="row align-items-start">
                                                <div class="col-sm-auto">
                                                    <div class="d-flex gap-1">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                id="datepicker-range">
                                                            <span class="input-group-text"><i
                                                                    class="bx bx-calendar-event"></i></span>
                                                        </div>
                                                        <div class="dropdown">
                                                            <a class="btn btn-link text-body shadow-none dropdown-toggle"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </a>

                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item"
                                                                        href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="mt-3 mt-md-0 mb-3">
                                                        {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button> --}}

                                                        <button type="button" class="btn btn-success"
                                                            data-bs-toggle="modal" data-bs-target=".add-new"><i
                                                                class="mdi mdi-plus me-1"></i> Add Property</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>


                                    <div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Add New Property</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="addPropertyForm" method="POST" action="{{ route('properties.store') }}">
                                                        @csrf
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="title_en">Title (English)</label>
                                                                    <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Enter Title (English)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="title_ar">Title (Arabic)</label>
                                                                    <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Enter Title (Arabic)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="description_en">Description (English)</label>
                                                                    <textarea class="form-control" id="description_en" name="description_en" rows="3" placeholder="Enter Description (English)"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="description_ar">Description (Arabic)</label>
                                                                    <textarea class="form-control" id="description_ar" name="description_ar" rows="3" placeholder="Enter Description (Arabic)"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="city_id">City</label>
                                                                    <select class="form-select" id="city_id" name="city_id">
                                                                        <option selected>Select City</option>
                                                                        @foreach($cities as $city)
                                                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="state_id">State</label>
                                                                    <select class="form-select" id="state_id" name="state_id">
                                                                        <option selected>Select State</option>
                                                                        @foreach($states as $state)
                                                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="address">Address</label>
                                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="property_code">Property Code</label>
                                                                    <input type="text" class="form-control" id="property_code" name="property_code" placeholder="Enter Property Code">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="price">Price</label>
                                                                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="rooms">Rooms</label>
                                                                    <input type="number" class="form-control" id="rooms" name="rooms" placeholder="Enter Number of Rooms">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="bathrooms">Bathrooms</label>
                                                                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="Enter Number of Bathrooms">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="year_built">Year built</label>
                                                                    <input type="number" class="form-control" id="year_built" name="year_built" placeholder="Enter year built">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="garages">Garages</label>
                                                                    <input type="number" class="form-control" id="garages" name="garages" placeholder="Enter garages">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="garages">Featured Video</label>
                                                                    <input type="url" class="form-control" id="featured_video" name="featured_video" placeholder="Enter featured video">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="area_size">Area Size</label>
                                                                    <input type="text" class="form-control" id="area_size" name="area_size" placeholder="Enter Area Size">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="type_id">Type</label>
                                                                    <select class="form-select" id="type_id" name="type_id">
                                                                        <option selected>Select Type</option>
                                                                        @foreach($propertyType as $type)
                                                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="phone">Phone</label>
                                                                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="status_id">Status</label>
                                                                    <select class="form-select" id="status_id" name="status_id">
                                                                        <option selected>Select Status</option>
                                                                        @foreach($propertyStatus as $status)
                                                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 text-end mt-3">
                                                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i class="bx bx-x me-1 align-middle"></i> Cancel</button>
                                                                <button type="submit" class="btn btn-success" id="btn-save-event"><i class="bx bx-check me-1 align-middle"></i> Confirm</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>



                                    <div id="table-invoices-list">
                                        <div role="complementary" class="gridjs gridjs-container"
                                            style="width: 100%;">
                                            <div class="gridjs-head">
                                                <div class="gridjs-search"><input type="search"
                                                        placeholder="Type a keyword..."
                                                        aria-label="Type a keyword..."
                                                        class="gridjs-input gridjs-search-input"></div>
                                            </div>
                                            <div class="gridjs-wrapper" style="height: auto;">
                                                <table role="grid" class="gridjs-table" style="height: auto;">
                                                    <thead class="gridjs-thead">
                                                        <tr class="gridjs-tr">
                                                            <th data-column-id="#" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 48px; width: 76px;">
                                                                <div class="gridjs-th-content">#</div>
                                                            </th>
                                                            <th data-column-id="propertyId" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 96px; width: 152px;">
                                                                <div class="gridjs-th-content">Property ID</div>
                                                            </th>
                                                            <th data-column-id="title" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 111px; width: 176px;">
                                                                <div class="gridjs-th-content">Title</div>
                                                            </th>
                                                            <th data-column-id="price" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 138px; width: 219px;">
                                                                <div class="gridjs-th-content">Price</div>
                                                            </th>
                                                            <th data-column-id="area_size" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 91px; width: 144px;">
                                                                <div class="gridjs-th-content">Area Size</div>
                                                            </th>
                                                            <th data-column-id="visibility" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 84px; width: 133px;">
                                                                <div class="gridjs-th-content">Visibility</div>
                                                            </th>
                                                            <th data-column-id="action" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 81px; width: 128px;">
                                                                <div class="gridjs-th-content">Action</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="gridjs-tbody">
                                                        @foreach ($properties as $property)
                                                            <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td">
                                                                    <div class="form-check font-size-16">
                                                                        <input class="form-check-input" type="checkbox" id="propertycheck{{ $property->id }}">
                                                                        <label class="form-check-label" for="propertycheck{{ $property->id }}"></label>
                                                                    </div>
                                                                </td>
                                                                <td data-column-id="propertyId" class="gridjs-td">
                                                                    <span class="fw-semibold">{{ $property->id }}</span>
                                                                </td>
                                                                <td data-column-id="title" class="gridjs-td">{{ $property->title_en }}</td>
                                                                <td data-column-id="price" class="gridjs-td">{{ $property->price }}</td>
                                                                <td data-column-id="area_size" class="gridjs-td">{{ $property->area_size }}</td>
                                                                <td data-column-id="visibility" class="gridjs-td">
                                                                    <span>
                                                                        <span class="badge badge-pill {{ $property->visibility ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning' }} font-size-12">
                                                                            {{ $property->visibility ? 'Visible' : 'Hidden' }}
                                                                        </span>
                                                                    </span>
                                                                </td>
                                                                <td data-column-id="action" class="gridjs-td">
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                                            <li><a class="dropdown-item" href="{{ route('properties.edit', $property->id) }}">Edit</a></li>
                                                                            <li><a class="dropdown-item" href="#">Print</a></li>
                                                                            <li>
                                                                                <form action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="gridjs-footer">
                                                <div class="gridjs-pagination">
                                                    <div role="status" aria-live="polite" class="gridjs-summary"
                                                        title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>18</b>
                                                        results</div>
                                                    <div class="gridjs-pages"><button tabindex="0"
                                                            role="button" disabled="" title="Previous"
                                                            aria-label="Previous"
                                                            class="">Previous</button><button tabindex="0"
                                                            role="button" class="gridjs-currentPage"
                                                            title="Page 1" aria-label="Page 1">1</button><button
                                                            tabindex="0" role="button" class=""
                                                            title="Page 2" aria-label="Page 2">2</button><button
                                                            tabindex="0" role="button" title="Next"
                                                            aria-label="Next" class="">Next</button></div>
                                                </div>
                                            </div>
                                            <div id="gridjs-temp" class="gridjs-temp"></div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{-- <!-- Modal -->
                   <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <form>
                                    <div>
                                        <ul class="wizard-nav mb-5">
                                            <li class="wizard-list-item">
                                                <div class="list-item">
                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Customer Info">
                                                        <i class="bx bx-user-circle"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wizard-list-item">
                                                <div class="list-item">
                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Invoice Details">
                                                        <i class="bx bx-file"></i>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="wizard-list-item">
                                                <div class="list-item">
                                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Order Summery">
                                                        <i class="bx bx-edit"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- wizard-nav -->

                                        <div class="wizard-tab">
                                            <div class="text-center mb-4">
                                                <h5>Customer Information</h5>
                                                <p class="card-title-desc">Fill all information below</p>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="customerinfo-name-input" class="form-label">Customer Name :</label>
                                                            <input type="text" class="form-control" placeholder="Enter Name" id="customerinfo-name-input">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="customerinfo-email-input" class="form-label">Email :</label>
                                                            <input type="email" class="form-control" placeholder="Enter Email" id="customerinfo-email-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <div class="mb-3">
                                                            <label for="customerinfo-phone-input" class="form-label">Phone :</label>
                                                            <input type="text" class="form-control" placeholder="Enter Phone" id="customerinfo-phone-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="customerinfo-address-input" class="form-label">Address :</label>
                                                    <textarea class="form-control" placeholder="Enter Address" id="customerinfo-address-input" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- wizard-tab -->

                                        <div class="wizard-tab">

                                            <div class="text-center mb-4">
                                                <h5>Invoice Details</h5>
                                                <p class="card-title-desc">Fill Invoice Details.</p>
                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <div class="mb-3">
                                                            <label for="invoicenumberinput" class="form-label">Invoice #</label>
                                                            <input type="text" class="form-control" placeholder="Enter Invoice" id="invoicenumberinput">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Invoice Date</label>
                                                            <input type="text" class="form-control" placeholder="Enter Date" id="datepicker-invoice">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="invoicedescriptioninput" class="form-label">Description (Optional)</label>
                                                            <input type="text" class="form-control" placeholder="Enter Description" id="invoicedescriptioninput">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Payment method :</label>
                                                            <select class="form-select">
                                                                <option selected>Select Payment method</option>
                                                                <option value="CR">Credit / Debit Card</option>
                                                                <option value="PY">Paypal</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- wizard-tab -->

                                        <div class="wizard-tab">
                                            <div class="text-center mb-4">
                                                <h5>Order Summery</h5>
                                                <p class="card-title-desc">Fill Order Summery Details.</p>
                                            </div>
                                            <div>
                                                <div class="table-responsive">
                                                    <table class="table table-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Item name</th>
                                                                <th scope="col">Description</th>
                                                                <th scope="col" width="120px">Price</th>
                                                                <th scope="col" width="120px">Quantity</th>
                                                                <th scope="col" width="120px">Total</th>
                                                                <th scope="col" class="text-center">Action</th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Name" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <textarea class="form-control" placeholder="Enter Description" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Price" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Quantity" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" type="text"  value="0.00" readonly>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-center">
                                                                        <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Name" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <textarea class="form-control" placeholder="Enter Description" rows="2"></textarea>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Price" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" placeholder="Enter Quantity" type="text">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <input class="form-control" type="text"  value="0.00" readonly>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-center">
                                                                        <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-xl-3 col-md-4">
                                                        <div>
                                                            <div>
                                                                <h5 class="font-size-14 py-2">Sub Total : <span class="float-end fw-normal text-body">0.00</span></h5>
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 py-2">Discount  : <span class="float-end fw-normal text-body"> - 0.00</span></h5>
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 py-2">Shipping Charge  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 py-2">Tax  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                            </div>
                                                            <div>
                                                                <h5 class="font-size-14 py-2">Total  : <span class="float-end"> 0.00</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- wizard-tab -->

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal --> --}}

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © webadmin.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://Themesdesign.com/" target="_blank"
                                    class="text-reset">Themesdesign</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
        <i class="bx bx-cog icon-sm font-size-18"></i> <span>Settings</span>
    </a>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical"
                        value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
                        value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-bordered"
                        value="bordered">
                    <label class="form-check-label" for="layout-mode-bordered">Bordered</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fluid"
                        value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-fixed" value="fixed"
                        onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position"
                        id="layout-position-scrollable" value="scrollable"
                        onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3">Topbar Type</h6>


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-type-hidden"
                        value="hidden" onchange="document.body.setAttribute('data-topbar', 'hidden')">
                    <label class="form-check-label" for="topbar-type-hidden">Hidden</label>
                </div>


                <div id="sidebar-setting">
                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact"
                            onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small"
                            onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand"
                            onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                <h6 class="mt-4 mb-3">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- chat offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity"
        aria-labelledby="offcanvasActivityLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/eva-icons/eva.min.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>

    <!-- flatpickr js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- invoice-list init -->
    <script src="assets/js/pages/invoice-list.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
