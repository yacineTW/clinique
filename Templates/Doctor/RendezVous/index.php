<html lang="en">
<?php
require_once("C:/xampp\htdocs\web2A\Controllers\DoctorController.php");
$DoctorController = new DoctorController();
$rendezVous = $DoctorController->getAppointmentsByDoctor(null);
$patients = $DoctorController->getAllPatients();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
<!-- Page Container -->
<!--
  Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


  FOOTER

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

  DARK MODE

    'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
-->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled"><div id="page-overlay"></div>
    <!-- Side Overlay-->
    <aside id="side-overlay" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                            <!-- Side Header -->
                            <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
                                <div class="bg-primary-op">
                                    <div class="content-header">
                                        <!-- User Avatar -->
                                        <a class="img-link me-1" href="be_pages_generic_profile.html">
                                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                                        </a>
                                        <!-- END User Avatar -->

                                        <!-- User Info -->
                                        <div class="ms-2">
                                            <a class="text-white fw-semibold" href="be_pages_generic_profile.html">George Taylor</a>
                                            <div class="text-white-75 fs-sm">Full Stack Developer</div>
                                        </div>
                                        <!-- END User Info -->

                                        <!-- Close Side Overlay -->
                                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                        <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                                            <i class="fa fa-times-circle"></i>
                                        </a>
                                        <!-- END Close Side Overlay -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Side Header -->

                            <!-- Side Content -->
                            <div class="content-side">
                                <!-- Side Overlay Tabs -->
                                <div class="block block-transparent pull-x pull-t mb-0">
                                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                                                <i class="fa fa-fw fa-cog"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false" tabindex="-1">
                                                <i class="far fa-fw fa-user-circle"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false" tabindex="-1">
                                                <i class="far fa-fw fa-edit"></i>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="block-content tab-content overflow-hidden">
                                        <!-- Settings Tab -->
                                        <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab" tabindex="0">
                                            <div class="block mb-0">
                                                <!-- Color Themes -->
                                                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                                                </div>
                                                <div class="block-content block-content-full">
                                                    <div class="row g-sm text-center">
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-default active" data-toggle="theme" data-theme="default" href="#">
                                                                Default
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                                                                xWork
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                                                                xModern
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                                                                xEco
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                                                                xSmooth
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                                                                xInspire
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                                                                xDream
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                                                                xPro
                                                            </a>
                                                        </div>
                                                        <div class="col-4 mb-1">
                                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                                                                xPlay
                                                            </a>
                                                        </div>
                                                        <div class="col-12">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Color Themes -->

                                                <!-- Sidebar -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                                                </div>
                                                <div class="block-content block-content-full">
                                                    <div class="row g-sm text-center">
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                                        </div>
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Sidebar -->

                                                <!-- Header -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Header</span>
                                                </div>
                                                <div class="block-content block-content-full">
                                                    <div class="row g-sm text-center mb-2">
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                                        </div>
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                                        </div>
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                                        </div>
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Header -->

                                                <!-- Content -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Content</span>
                                                </div>
                                                <div class="block-content block-content-full">
                                                    <div class="row g-sm text-center">
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                                        </div>
                                                        <div class="col-6 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                                        </div>
                                                        <div class="col-12 mb-1">
                                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Content -->

                                                <!-- Layout API -->
                                                <div class="block-content block-content-full border-top">
                                                    <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                                                        <i class="fa fa-fw fa-flask me-1"></i> Layout API
                                                    </a>
                                                </div>
                                                <!-- END Layout API -->
                                            </div>
                                        </div>
                                        <!-- END Settings Tab -->

                                        <!-- People -->
                                        <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
                                            <div class="block mb-0">
                                                <!-- Online -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Online</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul class="nav-items">
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Marie Duncan</div>
                                                                    <div class="fs-sm text-muted">Photographer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Justin Hunt</div>
                                                                    <div class="fw-normal fs-sm text-muted">Web Designer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Lori Moore</div>
                                                                    <div class="fw-normal fs-sm text-muted">Web Developer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Online -->

                                                <!-- Busy -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Busy</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul class="nav-items">
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Danielle Jones</div>
                                                                    <div class="fw-normal fs-sm text-muted">UI Designer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- END Busy -->

                                                <!-- Away -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Away</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul class="nav-items">
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Thomas Riley</div>
                                                                    <div class="fw-normal fs-sm text-muted">Copywriter</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Carol Ray</div>
                                                                    <div class="fw-normal fs-sm text-muted">Writer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- END Away -->

                                                <!-- Offline -->
                                                <div class="block-content block-content-sm block-content-full bg-body">
                                                    <span class="text-uppercase fs-sm fw-bold">Offline</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul class="nav-items">
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Jose Wagner</div>
                                                                    <div class="fw-normal fs-sm text-muted">Teacher</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Barbara Scott</div>
                                                                    <div class="fw-normal fs-sm text-muted">Photographer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Carol Ray</div>
                                                                    <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Albert Ray</div>
                                                                    <div class="fw-normal fs-sm text-muted">UX Specialist</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- END Offline -->

                                                <!-- Add People -->
                                                <div class="block-content block-content-full border-top">
                                                    <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                                                        <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Add People
                                                    </a>
                                                </div>
                                                <!-- END Add People -->
                                            </div>
                                        </div>
                                        <!-- END People -->

                                        <!-- Profile -->
                                        <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
                                            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                                <div class="block mb-0">
                                                    <!-- Personal -->
                                                    <div class="block-content block-content-sm block-content-full bg-body">
                                                        <span class="text-uppercase fs-sm fw-bold">Personal</span>
                                                    </div>
                                                    <div class="block-content block-content-full">
                                                        <div class="mb-4">
                                                            <label class="form-label">Username</label>
                                                            <input type="text" readonly="" class="form-control" id="so-profile-username-static" value="Admin">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="so-profile-name">Name</label>
                                                            <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="so-profile-email">Email</label>
                                                            <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                                        </div>
                                                    </div>
                                                    <!-- END Personal -->

                                                    <!-- Password Update -->
                                                    <div class="block-content block-content-sm block-content-full bg-body">
                                                        <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                                                    </div>
                                                    <div class="block-content block-content-full">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="so-profile-password">Current Password</label>
                                                            <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="so-profile-new-password">New Password</label>
                                                            <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                                                            <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                                        </div>
                                                    </div>
                                                    <!-- END Password Update -->

                                                    <!-- Options -->
                                                    <div class="block-content block-content-sm block-content-full bg-body">
                                                        <span class="text-uppercase fs-sm fw-bold">Options</span>
                                                    </div>
                                                    <div class="block-content">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                                                            <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                                                        </div>
                                                        <p class="text-muted fs-sm">
                                                            Make your online status visible to other users of your app
                                                        </p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                                                            <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                                                        </div>
                                                        <p class="text-muted fs-sm">
                                                            Receive desktop notifications regarding your projects and sales
                                                        </p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                                                            <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                                                        </div>
                                                        <p class="text-muted fs-sm">
                                                            If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                                        </p>
                                                    </div>
                                                    <!-- END Options -->

                                                    <!-- Submit -->
                                                    <div class="block-content block-content-full border-top">
                                                        <button type="submit" class="btn w-100 btn-alt-primary">
                                                            <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                                                        </button>
                                                    </div>
                                                    <!-- END Submit -->
                                                </div>
                                            </form>
                                        </div>
                                        <!-- END Profile -->
                                    </div>
                                </div>
                                <!-- END Side Overlay Tabs -->
                            </div>
                            <!-- END Side Content -->
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1089px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 500px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
      Sidebar Mini Mode - Display Helper classes

      Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

      Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
      Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
      Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
            <div class="content-header bg-black-10">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
                    D<span class="opacity-75">x</span>
                </a>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->

        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
            <div class="content-header justify-content-lg-center">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="index.html">
                    Dash<span class="opacity-75">mix</span>
                    <span class="fw-normal">Medical</span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div class="d-lg-none">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                                <!-- Side Actions -->
                                <div class="content-side content-side-full text-center bg-black-10">
                                    <div class="smini-hide">
                                        <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                                        <div class="mt-2 mb-1 fw-semibold">Dr. Taylor</div>
                                        <a class="text-white-50 me-1" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-user-md"></i>
                                        </a>
                                        <a class="text-white-50 me-1" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-cog"></i>
                                        </a>
                                        <a class="text-white-50" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-sign-out-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- END Side Actions -->

                                <!-- Side Navigation -->
                                <div class="content-side">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link active" href="db_medical.html">
                                                <i class="nav-main-link-icon fa fa-hospital"></i>
                                                <span class="nav-main-link-name">Overview</span>
                                                <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-heading">Manage</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-user-circle"></i>
                                                <span class="nav-main-link-name">Patients</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Current</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Manage</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Add Patient</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-calendar"></i>
                                                <span class="nav-main-link-name">Appointments</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Active</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Manage</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Add Appointment</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fab fa-paypal"></i>
                                                <span class="nav-main-link-name">Payments</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Pending</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Manage</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="">
                                                        <span class="nav-main-link-name">Add Payment</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-main-heading">Settings</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="">
                                                <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                                                <span class="nav-main-link-name">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="">
                                                <i class="nav-main-link-icon fa fa-lock"></i>
                                                <span class="nav-main-link-name">Security</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="">
                                                <i class="nav-main-link-icon fa fa-flag"></i>
                                                <span class="nav-main-link-name">Notifications</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-heading">Help</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="">
                                                <i class="nav-main-link-icon fa fa-book"></i>
                                                <span class="nav-main-link-name">Knowledge Base</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="">
                                                <i class="nav-main-link-icon fa fa-comments"></i>
                                                <span class="nav-main-link-name">Hospital Forum</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-heading">Dashboards</li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="be_pages_dashboard_all.html">
                                                <i class="nav-main-link-icon fa fa-arrow-left"></i>
                                                <span class="nav-main-link-name">Go Back</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Side Navigation -->
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 768px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search</span>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown" style="">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="be_pages_generic_profile.html">
                                <i class="far fa-fw fa-user me-1"></i> Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>
                                <span class="badge bg-primary rounded-pill">3</span>
                            </a>
                            <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                <i class="far fa-fw fa-file-alt me-1"></i> Invoices
                            </a>
                            <div role="separator" class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="far fa-fw fa-building me-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="op_auth_signin.html">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">App was updated to v5.6!</div>
                                        <div class="text-muted">3 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-user-plus text-info"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New Subscriber was added! You now have 2580!</div>
                                        <div class="text-muted">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">Server backup failed to complete!</div>
                                        <div class="text-muted">30 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">You are running out of space. Please consider upgrading your plan.</div>
                                        <div class="text-muted">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New Sale! + $30</div>
                                        <div class="text-muted">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="far fa-fw fa-list-alt"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Quick Overview -->
            <div class="row items-push">
                <div class="col-6 col-lg-3">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="add.php">
                        <div class="block-content py-5">
                            <div class="fs-3 fw-semibold text-success mb-1">
                                <i class="fa fa-plus"></i>
                            </div>
                            <p class="fw-semibold fs-sm text-success text-uppercase mb-0">
                                Add New
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Quick Overview -->

            <!-- All Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Appointements</h3>
                    <div class="block-options">
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                        <div class="block-options">
                            <select id="patientFilter" class="form-select">
                                <option value="">Select a Patient</option> 
                                <?php foreach ($patients as $patient): ?>
                                    <option value="<?php echo htmlspecialchars($patient['id']); ?>">
                                        <?php echo htmlspecialchars($patient['nom']); // filter patient ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#patientFilter').select2();

                                $('#patientFilter').on('change', function() {
                                    const selectedPatientId = $(this).val();
                                    filterByPatientId(selectedPatientId);
                                });
                            });
                        </script>
                        <script>
                            function filterByPatientId(patientId) {
                                const rows = document.querySelectorAll('.appointment-row');

                                rows.forEach(row => {
                                    const rowPatientId = row.querySelector('td:nth-child(3) a').textContent.trim(); // Adjust index as needed

                                    if (patientId === '' || rowPatientId === patientId) {
                                        row.style.display = ''; // Show row
                                    } else {
                                        row.style.display = 'none'; // Hide row
                                    }
                                });
                            }
                        </script>
                        <div class="dropdown">
                            <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filters <i class="fa fa-angle-down ms-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
                                <a class="dropdown-item" href="javascript:void(0)" onclick="filterByStatus('all')">All</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="filterByStatus('scheduled')">Scheduled</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="filterByStatus('cancelled')">Cancelled</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="filterByStatus('done')">Done</a>
                            </div>
                        </div>
                    </div>
                    <script>
                        function filterByStatus(status) {
                            const rows = document.querySelectorAll('.appointment-row');
                            console.log(rows);
                            rows.forEach(row => {
                                const rowStatus = row.querySelector('td:nth-child(4) .badge').textContent.toLowerCase();
                                console.log(rowStatus);
                                console.log(status);

                                if (status === 'all' || rowStatus.includes(status)) {
                                    row.style.display = ''; // Show row
                                } else {
                                    row.style.display = 'none'; // Hide row
                                }
                            });
                        }
                    </script>
                </div>
                <div class="block-content bg-body-dark">
                    <!-- Search Form -->
                    <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-alt" id="dm-ecom-products-search" name="dm-ecom-products-search" placeholder="Search all appointements..">
                        </div>
                    </form>
                    <!-- END Search Form -->
                </div>
                <div class="block-content">
                    <!-- All Products Table -->
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 100px;">ID</th>
                                <th class="d-none d-sm-table-cell text-center">Doctor</th>
                                <th class="d-none d-md-table-cell">Patient</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-end">Added</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($rendezVous as $appointment){
                                echo "  <tr class='appointment-row'>
    <td class='text-center fs-sm'>
        <a class='fw-semibold' href='DossierMedical.php?patient_id=" . $appointment['patient_id'] . "'>
            <strong>" . $appointment['id'] . "</strong>
        </a>
    </td>
    <td class='d-none d-sm-table-cell text-center fs-sm'>" . $appointment['medecin_id'] . "</td>
    <td class='d-none d-md-table-cell fs-sm'>
        <a class='fw-semibold' href='DossierMedical.php?patient_id=" . $appointment['patient_id'] . "'>" . $appointment['patient_id'] . "</a>
    </td>";
                                if ($appointment['statut'] == 'programmé') {
                                    echo "<td><span class='badge bg-success'>Scheduled</span></td>";
                                } else if ($appointment['statut'] == 'annulé') {
                                    echo "<td><span class='badge bg-danger'>Cancelled</span></td>";
                                } else {
                                    echo "<td><span class='badge bg-warning'>Done</span></td>";
                                }
                                 echo "   
                             
                                <td class='text-end d-none d-sm-table-cell fs-sm'>
                                    <strong>".$appointment['created_at']."</strong>
                                </td>
                                <td class='text-center fs-sm'>
    <a class='btn btn-sm btn-alt-secondary' href='edit.php?id=".$appointment['id']."&doctor_id=".$appointment['medecin_id']."&patient_id=". $appointment['patient_id']."&datetime=".urlencode($appointment['date_heure'])."&status=".$appointment['statut']."'>
        <i class='fa fa-fw fa-eye'></i>
    </a>
    <a class='btn btn-sm btn-alt-secondary' href='javascript:void(0)' onclick='deleteItem(".$appointment['id'].")'>
        <i class='fa fa-fw fa-times text-danger'></i>
    </a>
</td>
                            </tr>
                          ";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    <script>
                        function deleteItem(id){
                            if(confirm('Are you sure you want to delete this appointement?')){
                                window.location.href = 'delete.php?id='+id;
                            }
                        }
                    </script>
                    <!-- END All Products Table -->

                    <!-- Pagination -->
                    <nav aria-label="Photos Search Navigation">
                        <ul class="pagination justify-content-end mt-2">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                    Prev
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    Next
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Pagination -->
                </div>
            </div>
            <!-- END All Products -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.5</a> © <span data-toggle="year-copy" class="js-year-copy-enabled">2024</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/dashmix.app.min.js"></script>


</body></html>