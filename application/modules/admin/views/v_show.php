<!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Deepor I Project Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <!-- Toggles CSS -->
    <link href="<?= base_url() ?>template/admin/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>template/admin/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Toastr CSS -->
    <link href="<?= base_url() ?>template/admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>template/admin/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>


    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-horizontal-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block mr-5" src="<?= base_url() ?>template/admin/dist/img/logo.png" alt="brand" />Deepor
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <!-- <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
                </li> -->
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion ion-ios-notifications"></i><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="<?= base_url() ?>template/admin/dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="<?= base_url() ?>template/admin/dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Deepor head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
                                                <span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="<?= base_url() ?>template/admin/dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        <!--Horizontal Nav-->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard1.html">CRM</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="dashboard2.html">Project</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard3.html">Statistics</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <i class="ion ion-ios-apps"></i>
                                <span class="nav-link-text">Application</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Email</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="file-manager.html">File Manager</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                                <i class="ion ion-ios-copy"></i>
                                <span class="nav-link-text">Pages</span>
                            </a>
                            <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                                                Authentication
                                            </a>
                                            <ul id="auth_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signup_drp">
                                                                Sign Up
                                                            </a>
                                                            <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                                                <li class="nav-item">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="signup.html">Cover</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="signup-simple.html">Simple</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#signin_drp">
                                                                Login
                                                            </a>
                                                            <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                                                <li class="nav-item">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="login.html">Cover</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="login-simple.html">Simple</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#recover_drp">
                                                                Recover Pwd
                                                            </a>
                                                            <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                                                <li class="nav-item">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="reset-password.html">Reset Password</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="lock-screen.html">Lock Screen</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="404.html">Error 404</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="maintenance.html">Maintenance</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="profile.html">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="gallery.html">Gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="activity.html">Activity</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq.html">Faq</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#user_drp">
                                <i class="ion ion-ios-laptop"></i>
                                <span class="nav-link-text">User Interface</span>
                            </a>
                            <ul id="user_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                                                Components
                                            </a>
                                            <ul id="Components_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="alerts.html">Alerts</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="avatar.html">Avatar</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="badge.html">Badge</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="buttons.html">Buttons</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="cards.html">Cards</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="collapse.html">Collapse</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="list-group.html">List Group</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="modal.html">Modal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="nav.html">Nav</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="navbar.html">Navbar</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="nestable.html">Nestable</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="pagination.html">Pagination</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="popovers.html">Popovers</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="progress.html">Progress</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="tooltip.html">Tooltip</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                                                Content
                                            </a>
                                            <ul id="content_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="typography.html">Typography</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="images.html">Images</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="media-object.html">Media Object</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                                                Utilities
                                            </a>
                                            <ul id="utilities_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="background.html">Background</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="border.html">Border</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="colors.html">Colors</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="embeds.html">Embeds</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="icons.html">Icons</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="shadow.html">Shadow</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="sizing.html">Sizing</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="spacing.html">Spacing</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                                                Forms
                                            </a>
                                            <ul id="forms_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="form-element.html">Form Elements</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="input-groups.html">Input Groups</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="form-layout.html">Form Layout</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="form-mask.html">Form Mask</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="form-validation.html">Form Validation</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="file-upload.html">File Upload</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="editor.html">Editor</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                                                Tables
                                            </a>
                                            <ul id="tables_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="basic-table.html">Basic Table</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="data-table.html">Data Table</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="editable-table.html">Editable Table</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                                                Charts
                                            </a>
                                            <ul id="charts_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="line-charts.html">Line Chart</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="area-charts.html">Area Chart</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                                                Maps
                                            </a>
                                            <ul id="maps_drp" class="nav flex-column collapse collapse-level-2">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="google-map.html">Google Map</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="vector-map.html">Vector Map</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="documentation.html">
                                <i class="ion ion-ios-book"></i>
                                <span class="nav-link-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!--/Horizontal Nav-->

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head mb-15">
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>

                    <h6 class="mb-5">Layout</h6>
                    <p class="font-14">Choose your preferred layout</p>
                    <div class="layout-img-wrap">
                        <div class="row">
                            <a href="dashboard1.html" class="col-6 mb-30">
                                <img class="rounded opacity-70" src="<?= base_url() ?>template/admin/dist/img/layout1.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="javascript:void(0);" class="col-6 mb-30 active">
                                <img class="rounded opacity-70" src="<?= base_url() ?>template/admin/dist/img/layout2.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                            <a href="dashboard3.html" class="col-6">
                                <img class="rounded opacity-70" src="<?= base_url() ?>template/admin/dist/img/layout3.png" alt="layout">
                                <i class="zmdi zmdi-check"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="<?= base_url() ?>template/admin/dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="<?= base_url() ?>template/admin/dist/img/logo-dark.png" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pa-0">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Logo</th>
                                                    <th>Project</th>
                                                    <th>Company</th>
                                                    <th>Update</th>
                                                    <th>Budget</th>
                                                    <th>Tasks</th>
                                                    <th class="w-20">Status</th>
                                                    <th>Deadline</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="img-fluid rounded" src="<?= base_url() ?>template/admin/dist/img/logo1.jpg" alt="icon"></td>
                                                    <td>Branding</td>
                                                    <td>Pineapple Inc</td>
                                                    <td>13 Nov 2018</td>
                                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                                    <td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>0</span></span></td>
                                                    <td>
                                                        <div class="progress-wrap lb-side-left mnw-125p">
                                                            <div class="progress-lb-wrap">
                                                                <label class="progress-label mnw-25p">95%</label>
                                                                <div class="progress progress-bar-xs">
                                                                    <div class="progress-bar bg-success w-95" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>10 Nov 2018</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid rounded" src="<?= base_url() ?>template/admin/dist/img/logo2.jpg" alt="icon"></td>
                                                    <td>Website</td>
                                                    <td>Gooole co.</td>
                                                    <td>30 Nov 2018</td>
                                                    <td><span class="badge badge-soft-primary">In Process</span></td>
                                                    <td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>3</span></span></td>
                                                    <td>
                                                        <div class="progress-wrap lb-side-left mnw-125p">
                                                            <div class="progress-lb-wrap">
                                                                <label class="progress-label mnw-25p">70%</label>
                                                                <div class="progress progress-bar-xs">
                                                                    <div class="progress-bar bg-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>13 Dec 2018</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid rounded" src="<?= base_url() ?>template/admin/dist/img/logo3.jpg" alt="icon"></td>
                                                    <td>Collaterals</td>
                                                    <td>Big Energy</td>
                                                    <td>12 Nov 2018</td>
                                                    <td><span class="badge badge-soft-danger">Behind</span></td>
                                                    <td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>14</span></span></td>
                                                    <td>
                                                        <div class="progress-wrap lb-side-left mnw-125p">
                                                            <div class="progress-lb-wrap">
                                                                <label class="progress-label mnw-25p">35%</label>
                                                                <div class="progress progress-bar-xs">
                                                                    <div class="progress-bar bg-danger w-35" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>21 Oct 2018</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid rounded" src="<?= base_url() ?>template/admin/dist/img/logo4.jpg" alt="icon"></td>
                                                    <td>Branding, Print</td>
                                                    <td>Novotel</td>
                                                    <td>10 Nov 2018</td>
                                                    <td><span class="badge badge-soft-primary">In process</span></td>
                                                    <td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>6</span></span></td>
                                                    <td>
                                                        <div class="progress-wrap lb-side-left mnw-125p">
                                                            <div class="progress-lb-wrap">
                                                                <label class="progress-label mnw-25p">85%</label>
                                                                <div class="progress progress-bar-xs">
                                                                    <div class="progress-bar bg-primary w-85" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>14 Nov 2018</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid rounded" src="<?= base_url() ?>template/admin/dist/img/logo5.jpg" alt="icon"></td>
                                                    <td>Web Application</td>
                                                    <td>Folkswagan</td>
                                                    <td>12 Nov 2018</td>
                                                    <td><span class="badge badge-soft-danger">Behind</span></td>
                                                    <td><span class="d-flex align-items-center"><i class="zmdi zmdi-time-restore font-25 mr-10 text-light-40"></i><span>9</span></span></td>
                                                    <td>
                                                        <div class="progress-wrap lb-side-left">
                                                            <div class="progress-lb-wrap">
                                                                <label class="progress-label mnw-25p">30%</label>
                                                                <div class="progress progress-bar-xs">
                                                                    <div class="progress-bar bg-danger w-30" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15 Oct 2018</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="#" class="text-dark">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/admin/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>template/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?= base_url() ?>template/admin/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?= base_url() ?>template/admin/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?= base_url() ?>template/admin/dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="<?= base_url() ?>template/admin/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="<?= base_url() ?>template/admin/dist/js/toggle-data.js"></script>

    <!-- Toastr JS -->
    <script src="<?= base_url() ?>template/admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

    <!-- Counter Animation JavaScript -->
    <script src="<?= base_url() ?>template/admin/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendors/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Init JavaScript -->
    <script src="<?= base_url() ?>template/admin/dist/js/init.js"></script>
    <script src="<?= base_url() ?>template/admin/dist/js/dashboard2-data.js"></script>

</body>

</html>