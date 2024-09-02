<html lang="en"><head>
    <?php
    require_once("C:/xampp\htdocs\web2A\Controllers\DoctorController.php");
    $DoctorController = new DoctorController();
    $rendezVous = $DoctorController->getAppointmentsByDoctor(null);
    $patients = $DoctorController->getAllPatients();
    $pendingApts = 0;
    $confirmedApts = 0;

    foreach($rendezVous as $apt) {
        if ($apt['statut'] == "programmé") {
            $pendingApts++;
        } elseif ($apt['statut'] == "terminé") {
            $confirmedApts++;
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 600px;
            max-height: 400px;
        }
    </style>
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
    <link rel="stylesheet" id="css-theme" href="assets/css/themes/xdream.min.css">
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
<div id="page-container" class="sidebar-o sidebar-dark side-scroll page-header-fixed main-content-boxed side-trans-enabled">

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
        <div class="js-sidebar-scroll" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
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
                                        <a class="nav-main-link nav-main-link" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                            <i class="nav-main-link-icon fa fa-calendar"></i>
                                            <span class="nav-main-link-name">Appointments</span>
                                        </a> <li class="nav-main-heading">Manage</li>
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











                                    </ul>
                                </div>
                                <!-- END Side Navigation -->
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 359px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Search..</span>
                </button>
                <!-- END Open Search Section -->

                <!-- Search form in larger screens -->
                <form class="d-none d-lg-inline-block" action="be_pages_generic_search.html" method="POST">
                    <input type="text" class="form-control form-control-alt rounded-pill px-4" placeholder="Search.." id="page-header-search-input-full" name="page-header-search-input-full">
                </form>
                <!-- END Search form in larger screens -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-flag"></i>
                        <span class="badge rounded-pill bg-success">3</span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-image" style="background-image: url('assets/media/photos/photo25.jpg');">
                            <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
                                <div class="fs-4">Notifications</div>
                                <div class="fs-6 fw-normal text-white-75">3 New!</div>
                            </div>
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New patient was added successfully</div>
                                        <div>Mike Smith</div>
                                        <div class="text-muted">15 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fab fa-fw fa-paypal text-info"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New payment of $350 was received!</div>
                                        <div>From Carol Taylor</div>
                                        <div class="text-muted">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-calendar text-warning"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New appointment was scheduled!</div>
                                        <div>Today at 15:00 with John Doe</div>
                                        <div class="text-muted">30 min ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye me-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Shortcuts Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-shortcuts-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-th-large"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg rounded-0 p-0" aria-labelledby="page-header-shortcuts-dropdown">
                        <div class="bg-image" style="background-image: url('assets/media/photos/photo21.jpg');">
                            <div class="bg-primary-op fw-semibold text-white text-center px-3 py-4">
                                <div class="fs-4">Quick Apps</div>
                                <div class="fs-6 fw-normal text-white-75">Shortcuts</div>
                            </div>
                        </div>
                        <div class="row g-0 bg-body-extra-light push">
                            <div class="col-6">
                                <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                    <div class="block-content block-content-full ratio ratio-4x3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fa fa-2x fa-user-md text-xsmooth"></i>
                                                <div class="fs-sm fw-semibold mt-2 text-uppercase">Patients</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                    <div class="block-content block-content-full ratio ratio-4x3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fa fa-2x fa-comments text-xmodern"></i>
                                                <div class="fs-sm fw-semibold mt-2 text-uppercase">Forum</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                    <div class="block-content block-content-full ratio ratio-4x3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fa fa-2x fa-book text-xeco"></i>
                                                <div class="fs-sm fw-semibold mt-2 text-uppercase">Knowledge</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-transparent block-link-pop text-center mb-0" href="javascript:void(0)">
                                    <div class="block-content block-content-full ratio ratio-4x3">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div>
                                                <i class="fa fa-2x fa-calendar text-xinspire"></i>
                                                <div class="fs-sm fw-semibold mt-2 text-uppercase">Schedule</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Shortcuts Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                        <input type="text" class="form-control border-0" placeholder="Search Application.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
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
            <!-- Quick Menu -->

            <!-- END Quick Menu -->
            <canvas id="appointmentsChart"></canvas>
            <script>
                const ctx = document.getElementById('appointmentsChart').getContext('2d');
                const appointmentsChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Programmé', 'Terminé'],
                        datasets: [{
                            label: 'Appointment Status',
                            data: [<?php echo $pendingApts; ?>, <?php echo $confirmedApts; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Appointments Status'
                            }
                        }
                    }
                });
            </script>

            <!-- Overview -->
            <div class="row">
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="far fa-calendar fa-3x text-xinspire"></i>
                                </div>
                                <div class="fs-4 fw-semibold"><?php echo count($rendezVous)?> Appointments</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="fs-4 fw-semibold"><?php echo count($patients) ?> Patients</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fab fa-paypal fa-3x text-info"></i>
                                </div>
                                <div class="fs-4 fw-semibold"><?php echo $pendingApts?> Pending appointements</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->

            <!-- Patients -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Current Patients</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">




                        <table class="table table-striped table-borderless table-vcenter mb-0">
                            <thead>
                            <tr class="bg-body-dark">
                                <th style="width: 100px;">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach($patients as $patient)

                            {
                            echo "<tr>";
                            echo "<td>";
                            echo $patient['id'];
                            echo "</td>";
                            echo "<td>";
                            echo $patient["nom"];
                            echo "</td>";

                                echo "<td>";

                                echo $patient["email"];
                                echo "</td>";

                                echo "<td>";

                                echo  '<a class="btn btn-sm btn-alt-secondary" href="../Doctor/RendezVous/DossierMedical.php?patient_id='.$patient["id"].'">
                                        <i class="fa fa-heartbeat text-danger me-1"></i> Medical History
                            </a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Patients -->

            <!-- Appointments -->
            <!-- END Appointments -->

            <!-- Payments -->
            <!-- END Payments -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer">
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