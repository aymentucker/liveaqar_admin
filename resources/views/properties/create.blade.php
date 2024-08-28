<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Add Product | webadmin - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- choices css -->
    <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

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

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <!-- start page title -->
                <div class="page-title-box align-self-center d-none d-md-block">
                    <h4 class="page-title mb-0">Add Product</h4>
                </div>
                <!-- end page title -->

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block language-switch ms-2">
                    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="18">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search icon-sm align-middle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                        <form class="p-2">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                    <i class="bx bx-search search-icon"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 250px;">
                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
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
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                        <h6 class="mb-1">Salena Layfield</h6>
                                        <div>
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                        alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="p-3 border-bottom">
                            <h6 class="mb-0">Martin Gurley</h6>
                            <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                        </div>
                        <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Help</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge bg-success-subtle text-success  ms-auto">New</span></a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
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
                            <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
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
                            <li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
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
                            <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
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
                            <li><a href="form-validation.html" data-key="t-form-validation">Form Validation</a></li>
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
                            <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
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
                            <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
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
                            <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                            <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                            <li><a href="auth-logout.html" data-key="t-logout">Logout</a></li>
                            <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                            <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                            <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
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
                            <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a></li>
                            <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
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

                <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <!-- start page title -->
                <div class="page-title-box align-self-center d-none d-md-block">
                    <h4 class="page-title mb-0">Add Product</h4>
                </div>
                <!-- end page title -->

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block language-switch ms-2 ms-xl-3">
                    <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="18">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search icon-sm align-middle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                        <form class="p-2">
                            <div class="search-box">
                                <div class="position-relative">
                                    <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                    <i class="bx bx-search search-icon"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 250px;">
                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
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
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
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
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Salena Layfield</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                        alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="p-3 border-bottom">
                            <h6 class="mb-0">Martin Gurley</h6>
                            <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                        </div>
                        <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Help</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge bg-success-subtle text-success  ms-auto">New</span></a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
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
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span data-key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                    <a href="index.html"  class="dropdown-item" data-key="t-ecommerce">Ecommerce</a>
                                    <a href="dashboard-sales.html"  class="dropdown-item" data-key="t-sales">Sales</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-cube icon nav-icon"></i>
                                   <span data-key="t-elements">Elements</span> <div class="arrow-down"></div>
                                </a>

                                <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                    <div class="ps-2 p-lg-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="menu-title">Elements</div>
                                                    <div class="row g-0">
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                <a href="ui-buttons.html" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                <a href="ui-cards.html" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                <a href="ui-carousel.html" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                <a href="ui-dropdowns.html" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                <a href="ui-grid.html" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                <a href="ui-images.html" class="dropdown-item" data-key="t-images">Images</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <a href="ui-lightbox.html" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                                <a href="ui-modals.html" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                <a href="ui-offcanvas.html" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                <a href="ui-rangeslider.html" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                                <a href="ui-progressbars.html" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                <a href="ui-sweet-alert.html" class="dropdown-item" data-key="t-sweet-alert">Sweet-Alert</a>
                                                                <a href="ui-tabs-accordions.html" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                <a href="ui-video.html" class="dropdown-item" data-key="t-video">Video</a>
                                                                <a href="ui-general.html" class="dropdown-item" data-key="t-general">General</a>
                                                                <a href="ui-colors.html" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                <a href="ui-rating.html" class="dropdown-item" data-key="t-rating">Rating</a>
                                                                <a href="ui-notifications.html" class="dropdown-item" data-key="t-notifications">Notifications</a>
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
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                    <i class="bx bx-store icon nav-icon"></i>
                                    <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                    <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>

                                    <a href="apps-todo.html" class="dropdown-item" data-key="t-todo">Todo</a>

                                    <a href="apps-file-manager.html" class="dropdown-item" data-key="t-filemanager">File Manager</a>

                                    <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>


                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                            role="button">
                                            <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                            <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                            <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                            <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                            <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                            <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                            <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                            <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                            <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                            role="button">
                                            <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                            <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                            <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                            role="button">
                                           <span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                            <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                            <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                            role="button">
                                           <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                            <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                            <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                            <a href="contacts-profile.html" class="dropdown-item" data-key="t-user-profile">Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                    <i class="bx bx-layer icon nav-icon"></i>
                                    <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                            role="button">
                                            <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-form">
                                            <a href="form-elements.html" class="dropdown-item" data-key="t-form-elements">Form Elements</a>
                                            <a href="form-layouts.html" class="dropdown-item" data-key="t-form-layouts">Form Layouts</a>
                                            <a href="form-validation.html" class="dropdown-item" data-key="t-form-validation">Form Validation</a>
                                            <a href="form-advanced.html" class="dropdown-item" data-key="t-form-advanced">Form Advanced</a>
                                            <a href="form-editors.html" class="dropdown-item" data-key="t-form-editors">Form Editors</a>
                                            <a href="form-uploads.html" class="dropdown-item" data-key="t-form-upload">Form File Upload</a>
                                            <a href="form-wizard.html" class="dropdown-item" data-key="t-form-wizard">Form Wizard</a>
                                            <a href="form-mask.html" class="dropdown-item" data-key="t-form-mask">Form Mask</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                            role="button">
                                            <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-table">
                                            <a href="tables-basic.html" class="dropdown-item" data-key="t-basic-tables">Basic Tables</a>
                                            <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                            role="button">
                                            <span data-key="t-charts">Charts</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                            <a href="charts-apex.html" class="dropdown-item" data-key="t-apex-charts">Apex Charts</a>
                                            <a href="charts-chartjs.html" class="dropdown-item" data-key="t-chartjs-charts">Chartjs Charts</a>
                                            <a href="charts-tui.html" class="dropdown-item" data-key="t-ui-charts">Toast UI Charts</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                            role="button">
                                            <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                            <a href="icons-evaicons.html" class="dropdown-item" data-key="t-evaicons">Eva Icons</a>
                                            <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                            <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                            <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                            role="button">
                                            <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-map">
                                            <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                            <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                            <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                    <i class="bx bx-file icon nav-icon"></i>
                                    <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-authentication"
                                            role="button">
                                            <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                            <a href="auth-login.html" class="dropdown-item" data-key="t-login">Login</a>
                                            <a href="auth-register.html" class="dropdown-item" data-key="t-register">Register</a>
                                            <a href="auth-recoverpw.html" class="dropdown-item" data-key="t-recover-password">Recover Password</a>
                                            <a href="auth-lock-screen.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                            <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Logout</a>
                                            <a href="auth-confirm-mail.html" class="dropdown-item" data-key="t-confirm-mail">Confirm Mail</a>
                                            <a href="auth-email-verification.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                            <a href="auth-two-step-verification.html" class="dropdown-item" data-key="t-two-step-verification">Two Step Verification</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                            role="button">
                                            <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                            <a href="pages-starter.html" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                            <a href="pages-maintenance.html" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                            <a href="pages-comingsoon.html" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                            <a href="pages-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                            <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                            <a href="pages-pricing.html" class="dropdown-item" data-key="t-pricing">Pricing</a>
                                            <a href="pages-404.html" class="dropdown-item" data-key="t-error-404">Error 404</a>
                                            <a href="pages-500.html" class="dropdown-item" data-key="t-error-500">Error 500</a>
                                        </div>
                                    </div>

                                    <a href="layouts-horizontal.html" class="dropdown-item" data-key="t-horizontal">Horizontal</a>
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
                        <div id="addproduct-accordion" class="custom-accordion">
                            <div class="card">
                                <a href="#addproduct-productinfo-collapse" class="text-body" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-productinfo-collapse">
                                    <div class="p-4">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-subtle  text-primary">
                                                        <h5 class="text-primary font-size-17 mb-0">01</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Product Info</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>

                                    </div>
                                </a>

                                <div id="addproduct-productinfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label" for="productname">Product Name</label>
                                                <input id="productname" name="productname" placeholder="Enter Product Name" type="text" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturername">Manufacturer Name</label>
                                                        <input id="manufacturername" name="manufacturername" placeholder="Enter Manufacturer Name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">

                                                    <div class="mb-3">
                                                        <label class="form-label" for="manufacturerbrand">Manufacturer Brand</label>
                                                        <input id="manufacturerbrand" name="manufacturerbrand" placeholder="Enter Manufacturer Brand" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="price">Price</label>
                                                        <input id="price" name="price" placeholder="Enter Price" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="choices-single-default" class="form-label">Category</label>
                                                        <select class="form-control" data-trigger name="choices-single-category" id="choices-single-category">
                                                            <option value="">Select</option>
                                                            <option value="EL">Electronic</option>
                                                            <option value="FA">Fashion</option>
                                                            <option value="FI">Fitness</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="choices-single-specifications" class="form-label">Specifications</label>
                                                        <select class="form-control" data-trigger name="choices-single-category" id="choices-single-specifications">
                                                            <option value="HI" selected>High Quality</option>
                                                            <option value="LE" selected>Leather</option>
                                                            <option value="NO">Notifications</option>
                                                            <option value="SI">Sizes</option>
                                                            <option value="DI">Different Color</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="productdesc">Product Description</label>
                                                <textarea class="form-control" id="productdesc" placeholder="Enter Description" rows="4"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <a href="#addproduct-img-collapse" class="text-body collbodyd" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
                                    <div class="p-4">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-subtle  text-primary">
                                                        <h5 class="text-primary font-size-17 mb-0">02</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Product Image</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted mdi mdi-cloud-upload"></i>
                                                </div>
                                                <h4 class="mb-0">Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <a href="#addproduct-metadata-collapse" class="text-body collbodyd" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                                    <div class="p-4">

                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar">
                                                    <div class="avatar-title rounded-circle bg-primary-subtle  text-primary">
                                                        <h5 class="text-primary font-size-17 mb-0">03</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Meta Data</h5>
                                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                            </div>

                                        </div>

                                    </div>
                                </a>

                                <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                                    <div class="p-4 border-top">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metatitle">Meta Title</label>
                                                        <input id="metatitle" name="metatitle" placeholder="Enter Title" type="text" class="form-control">
                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="metakeywords">Meta Keywords</label>
                                                        <input id="metakeywords" name="metakeywords" placeholder="Enter Keywords" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <label class="form-label" for="metadescription">Meta Description</label>
                                                <textarea class="form-control" id="metadescription" placeholder="Enter Description" rows="4"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-4">
                    <div class="col text-end">
                        <a href="#" class="btn btn-danger"> <i class="bx bx-x me-1"></i> Cancel </a>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn"> <i class=" bx bx-file me-1"></i> Save </a>
                    </div> <!-- end col -->
                </div> <!-- end row-->




            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © webadmin.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Themesdesign.com/" target="_blank" class="text-reset">Themesdesign</a>
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
                <input class="form-check-input" type="radio" name="layout"
                    id="layout-vertical" value="vertical">
                <label class="form-check-label" for="layout-vertical">Vertical</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                    id="layout-horizontal" value="horizontal">
                <label class="form-check-label" for="layout-horizontal">Horizontal</label>
            </div>

            <h6 class="mt-4 mb-3">Layout Mode</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                    id="layout-mode-light" value="light">
                <label class="form-check-label" for="layout-mode-light">Light</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                    id="layout-mode-dark" value="dark">
                <label class="form-check-label" for="layout-mode-dark">Dark</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                    id="layout-mode-bordered" value="bordered">
                <label class="form-check-label" for="layout-mode-bordered">Bordered</label>
            </div>

            <h6 class="mt-4 mb-3">Layout Width</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                    id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                <label class="form-check-label" for="layout-width-fluid">Fluid</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                    id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
            </div>

            <h6 class="mt-4 mb-3">Layout Position</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                    id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                    id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
            </div>

            <h6 class="mt-4 mb-3">Topbar Type</h6>


            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                    id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                <label class="form-check-label" for="topbar-color-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                    id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                <label class="form-check-label" for="topbar-color-dark">Dark</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                    id="topbar-type-hidden" value="hidden" onchange="document.body.setAttribute('data-topbar', 'hidden')">
                <label class="form-check-label" for="topbar-type-hidden">Hidden</label>
            </div>


            <div id="sidebar-setting">
            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                <label class="form-check-label" for="sidebar-size-default">Default</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                    id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
            </div>

            <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                <label class="form-check-label" for="sidebar-color-light">Light</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                    id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

<!-- choices js -->
<script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/dropzone-min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-choices.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
