<html lang="en"><head>
    <?php

    require_once("C:/xampp\htdocs\web2A\Controllers\DoctorController.php");
    $DoctorController = new DoctorController();
    $appointments = $DoctorController->getAppointementsByPatient(2); // par defaut patientn2
    ?>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&amp;family=Roboto:wght@500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .dataTables_wrapper .dataTables_filter {
            float: right;
        }
        .dataTables_wrapper .dataTables_paginate {
            float: right;
        }
    </style>
    <style id="r-style-sheet">.context-menu-container {
            position: absolute;
            z-index: 100000;
            background: none;
            min-width: 150px;

            /*background: #800000;*/
        }
        .context-menu-container {
            opacity: 0;
        }
        .r-dropdown .drp-toggle{
            position: absolute;
            top: 8px;
            right: 6px
        }
        .r-drp-chevron-down {
            box-sizing: border-box;
            position: relative;
            display: block;
            transform: scale(var(--ggs,1));
            width: 22px;
            height: 22px;
            border: 2px solid transparent;
            border-radius: 100px
        }

        .r-drp-chevron-down::after {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 7px;
            height: 7px;
            border-bottom: 2px solid;
            border-right: 2px solid;
            transform: rotate(45deg);
            left: 4px;
            top: 2px
        }
        .r-dropdown .r-menu-item:hover {
            background: #dfdfdf;
        }

        .r-dropdown .r-menu-item.r-d-sel {
            background: #00366c;
            color: #fff;
        }
        .r-dropdown .r-menu-item {
            padding: 5px 15px;
            cursor: pointer;
            color:#000;
            font-size:14px
        }

        .r-dropdown {
            border-radius: 4px;
            border: 1px solid #dfdfdf;
            width: 100%;
            background: #fff;
            padding: 5px 0;

        }
        .r-dropdown.scrollable {
            max-height: 200px;
            overflow: auto;
        }</style><style>undefined</style><style>@keyframes rotate{0%{transform:rotate(0)}to{transform:rotate(360deg)}}.geS5n{padding:34px 24px 24px!important}.question-ai-box{position:absolute;top:8px;right:8px}.question-ai-loading,.question-ai-ask,.question-ai-answer,.question-ai-error__network,.question-ai-error__tip,.question-ai-img{cursor:pointer;box-sizing:border-box;user-select:none;border-radius:12px;width:fit-content;height:24px;padding:4px;transition:all .3s ease-in-out;overflow:hidden}.question-ai-loading{background-color:#edf3ff;justify-content:center;align-items:center;max-width:150px;display:flex}.question-ai-loading__logo{transform-origin:50%;background-size:100% 100%;width:16px;height:16px;animation:1s linear infinite rotate}.question-ai-loading__title{color:#797a7a;margin:0 8px;font-size:12px}.question-ai-img{background-color:#edf3ff!important;display:flex!important}.question-ai-img__title{color:#005cff;white-space:nowrap;cursor:default;margin:0 4px;font-size:12px;font-weight:400}.question-ai-img__again{color:#131414;white-space:nowrap;cursor:pointer;border-left:1px solid #005cff;width:fit-content;height:16px;padding:0 8px;font-size:12px;font-weight:400}.question-ai-ask{background-color:#005cff;max-width:24px}.question-ai-ask:hover{max-width:400px;background-color:#edf3ff!important}.question-ai-ask:hover .question-ai-ask__hover{display:flex!important}.question-ai-ask:hover .question-ai-ask__logo{display:none!important}.question-ai-ask__close{cursor:pointer;background-size:100% 100%;width:16px;height:16px;position:absolute;top:-8px;right:-8px}.question-ai-ask__logo,.question-ai-ask__chat{background-size:100% 100%;width:16px;height:16px}.question-ai-ask__hover{justify-content:center;align-items:center;width:100%;display:none}.question-ai-ask__title{color:#005cff;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-answer{background-color:#edf3ff;justify-content:center;align-items:center;display:flex}.question-ai-answer__text{color:#131414;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-answer__text:hover{color:#005cff}.question-ai-answer__right{background-size:100% 100%;width:16px;height:16px}.question-ai-error__network{cursor:default}.question-ai-error__network,.question-ai-error__tip{background-color:#ffe6e3;justify-content:center;align-items:center;display:flex}.question-ai-error__icon{background-size:100% 100%;width:16px;height:16px}.question-ai-error__title{color:#ff3939;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-error__again{color:#131414;white-space:nowrap;cursor:pointer;border-left:1px solid #ff3939;width:fit-content;height:16px;padding:0 8px;font-size:12px;font-weight:400}.question-ai-error__right{background-size:100% 100%;width:16px;height:16px}#close-copilot-dialog{color:#1f1f1f;background-color:#000000a3;width:100vw;height:100vh;font-size:14px;position:fixed;top:0;left:0;overflow:hidden}#close-copilot-dialog #close-copilot-card{box-sizing:border-box;background-color:#fff;border-radius:16px;width:388px;height:250px;padding:24px;position:fixed;top:50vh;left:50%;transform:translate(-50%,-50%)}#close-copilot-dialog #close-copilot-card .questionai-card-header{justify-content:space-between;align-items:center;width:100%;height:30px;margin-bottom:24px;display:flex}#close-copilot-dialog #close-copilot-card .questionai-card-header .title{color:#131414;text-align:center;font-family:PingFangSC-Semibold;font-size:20px;font-weight:600}#close-copilot-dialog #close-copilot-card .questionai-card-header img{cursor:pointer;width:24px;height:24px}#close-copilot-dialog #close-copilot-card .radio-item{margin-bottom:12px}#close-copilot-dialog #close-copilot-card .radio-item *{cursor:pointer}#close-copilot-dialog #close-copilot-card .radio-item label{color:#131414;flex-direction:row;align-items:center;font-family:PingFangSC-Regular;font-size:14px;display:flex}#close-copilot-dialog #close-copilot-card .radio-item label .radio-item__radio{opacity:0;position:absolute}#close-copilot-dialog #close-copilot-card .radio-item label .radio-item__indicate-img{flex:none;width:16px;margin-right:5px}#close-copilot-dialog #close-copilot-card .tips-item{color:#8c91ab;margin-bottom:20px;padding-left:6px;font-family:PingFangSC-Regular;font-size:12px;font-weight:400}#close-copilot-dialog #close-copilot-card .btn-box{justify-content:flex-end;align-items:center;width:100%;display:flex}#close-copilot-dialog #close-copilot-card .btn-box .cancel-btn,#close-copilot-dialog #close-copilot-card .btn-box .confirm-btn{box-sizing:border-box;text-align:center;cursor:pointer;border-radius:24px;width:fit-content;height:40px;padding:0 24px;font-family:PingFangSC-Semibold;font-size:12px;font-weight:600;line-height:40px}#close-copilot-dialog #close-copilot-card .btn-box .cancel-btn{color:#131414;background-color:#f5f5f5}#close-copilot-dialog #close-copilot-card .btn-box .confirm-btn{color:#fff;background-color:#005cff;margin-left:12px}.question-ai-guide__border{z-index:999;box-sizing:border-box;color:#131414;background-color:#fff;border-radius:16px;width:fit-content;height:48px;padding:1px;font-size:14px;position:absolute;top:-50px;right:4px}.question-ai-guide__box{box-sizing:border-box;background-image:linear-gradient(135deg,#ccdfff 0%,#b3faff 100%);border-radius:16px;align-items:center;width:100%;height:100%;padding:0 8px 0 16px;display:flex}.question-ai-guide__btn{box-sizing:border-box;cursor:pointer;background-color:#fff;border-radius:20px;width:fit-content;height:32px;margin-left:16px;padding:0 16px;line-height:32px}.question-ai-guide__borderdown{border-top:8px solid #fff;border-left:16px solid #0000;width:0;height:0;position:absolute;bottom:-8px;right:16px}.question-ai-guide__boxdown{z-index:9999;border-top:7px solid #b3faff;border-left:14px solid #0000;width:0;height:0;position:absolute;bottom:-6px;right:17px}@media print{.question-ai-guide{display:none}}.qai-single-pay-modal[data-v-4ab058]{z-index:2147400001;flex-direction:column;width:100%;height:100%;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji;font-size:14px;line-height:normal;display:flex;position:fixed;top:0;right:0;overflow:hidden;box-shadow:0 8px 16px #919eab29}.qai-single-pay-modal .modal-mask[data-v-4ab058]{z-index:1;background:#000000a3;position:absolute;inset:0}.qai-single-pay-modal span[data-v-4ab058]{display:inline-block}.qai-single-pay-modal img[data-v-4ab058]{display:block}.qai-single-pay-modal .flex-center[data-v-4ab058]{align-items:center;display:flex}.qai-single-pay-modal .modal-body[data-v-4ab058]{z-index:2;box-sizing:border-box;background-image:linear-gradient(142deg,#e6efff 0%,#e0fdff 100%);border-radius:16px;flex-direction:column;align-items:center;width:396px;max-width:100%;max-height:90%;padding:0 12px 24px;transition:transform .2s ease-in-out;display:flex;position:absolute;top:50%;left:50%;transform:translate(-50%)translateY(-50%)}.qai-single-pay-modal .modal-body .flex-around[data-v-4ab058]{justify-content:space-around;align-items:center;display:flex}.qai-single-pay-modal .modal-body .toast[data-v-4ab058]{text-align:center;color:#fff;letter-spacing:0;text-align:center;background:#000c;border-radius:16px;max-width:360px;height:52px;margin:auto;padding:0 24px;font-family:PingFangSC-Regular;font-size:14px;font-weight:400;line-height:52px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}.qai-single-pay-modal .modal-body .main-header[data-v-4ab058]{box-sizing:border-box;justify-content:space-between;align-items:center;width:100%;height:62px;display:flex;position:relative;overflow:hidden}.qai-single-pay-modal .modal-body .main-header .plus_bg[data-v-4ab058]{width:120px;height:120px;position:absolute;bottom:-10px;right:50px}.qai-single-pay-modal .modal-body .main-header .plus_logo[data-v-4ab058]{width:152px;height:32px;margin-left:12px}.qai-single-pay-modal .modal-body .main-header .icon_close[data-v-4ab058]{cursor:pointer;width:24px;height:24px;margin-right:4px}.qai-single-pay-modal .modal-body .main-white[data-v-4ab058]{background:#fffc;border-radius:16px;margin-bottom:24px;padding:32px}.qai-single-pay-modal .modal-body .main-white .title[data-v-4ab058]{color:#141414;letter-spacing:0;margin-bottom:24px;font-family:Helvetica;font-size:20px;font-weight:700;line-height:28px}.qai-single-pay-modal .modal-body .main-white .desc-list[data-v-4ab058]{color:#141414;letter-spacing:0;flex-direction:column;font-family:Helvetica;font-size:16px;font-weight:400;line-height:24px;display:flex;margin-left:0!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item[data-v-4ab058]{align-items:center;display:flex;margin-bottom:16px!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item[data-v-4ab058]:last-child{margin-bottom:0!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item img[data-v-4ab058]{width:28px;height:28px;margin-right:16px}.qai-single-pay-modal .modal-body .btn_subscribe[data-v-4ab058]{text-align:center;color:#fff;cursor:pointer;background-image:linear-gradient(94deg,#8b48ff 0%,#5741ff 51%,#005cff 100%);border-radius:24px;width:308px;height:40px;font-family:Helvetica;font-size:16px;font-weight:700;line-height:40px}</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"></head>
<plasmo-csui id="qaiUnderlineWordShadowHostEl"></plasmo-csui><body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>123 Street, New York, USA</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+012 345 6789</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; top: -100px;">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="AppointmentsList.php" class="nav-item nav-link">My appointements</a>

        </div>
        <a href="appointment.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Book an appointment<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->

<!-- Appointment End -->


<div class="card">
    <div class="card-header">
        View Appointments
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="dateRange">Filter by Date Range</label>
            <input type="text" id="dateRange" class="form-control">
        </div>
        <table id="appointmentsTable" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th>Doctor</th>
                <th>Date</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <!-- Example Data -->
           <?php
           foreach ($appointments as $appointment) {
               echo "<tr>";
               echo "<td>" . $appointment['doctor_name'] . "</td>";
               echo "<td>" . $appointment['date_heure'] . "</td>";
             //  echo "<td>" . $appointment['description'] . "</td>";
              echo "<td> description </td>";
               echo "<td>" . $appointment['statut'] . "</td>";
               echo "</tr>";
           }
           ?>
            </tbody>
        </table>
    </div>
</div>

<script>

    $(document).ready(function() {
        var table = $('#appointmentsTable').DataTable({
            columnDefs: [
                {
                    targets: 0, // Doctor column
                    orderable: true,
                    searchable: true,
                    render: function(data, type, row, meta) {
                        // Customize rendering for Doctor column
                        return `<strong>${data}</strong>`; // Example: Bold doctor names
                    }
                },
                {
                    targets: 1, // Date column
                    orderable: true,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        console.log("data  = ",data);
                        // Format the date (assumes date format YYYY-MM-DD)
                        if (type === 'display') {
                            var date = new Date(data);
                            var options = {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            };
                            return date.toLocaleDateString(undefined, options); // Format date-time
                        }
                        return data;
                    }
                },
                {
                    targets: 2, // Description column
                    orderable: false,
                    searchable: true,
                    render: function(data, type, row, meta) {
                        // Customize rendering for Description column
                        return `<em>${data}</em>`; // Example: Italicize descriptions
                    }
                },
                {
                    targets: 3, // Status column
                    orderable: true,
                    searchable: true,
                    render: function(data, type, row, meta) {
                        // Customize rendering for Status column
                        var statusClass = data === 'Completed' ? 'badge-success' : 'badge-warning';
                        return `<span class="badge ${statusClass}">${data}</span>`; // Example: Add badge
                    }
                }
            ],
            searching: true,
            ordering: true,
            paging: true
        });

        // Date range picker setup
        $('#dateRange').daterangepicker({
            opens: 'left',
            locale: {
                format: 'YYYY-MM-DD' // Ensure this format matches your date data
            }
        });

        // Custom filter function
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                if (settings.nTable.id !== 'appointmentsTable') {
                    return true; // Skip filtering for tables other than the target one
                }

                var min = $('#dateRange').data('daterangepicker').startDate;
                var max = $('#dateRange').data('daterangepicker').endDate;
                console.log("data = ",data);
                var dateText = data[1]; // Use data for the date column

                // Convert date string to Date object
                var date = new Date(dateText);
                console.log("date text = "+dateText);
                // Check if date is valid
                if (isNaN(date.getTime())) {
                    console.error('Invalid date:', dateText);
                    return true; // Ignore invalid dates
                }

                // Date range filtering
                if (
                    (min === null && max === null) ||
                    (min === null && date <= max) ||
                    (min <= date && max === null) ||
                    (min <= date && date <= max)
                ) {
                    return true;
                }

                return false;
            }
        );

        // Redraw table on date range change
        $('#dateRange').on('apply.daterangepicker', function(ev, picker) {
            table.draw();
        });

        // Custom sorting logic
        table.on('order.dt', function(e, settings) {
            var order = table.order();
            var sortedColumnIndex = order[0][0]; // Index of the sorted column
            var sortedDirection = order[0][1]; // 'asc' or 'desc'

            console.log('Sorted column index: ' + sortedColumnIndex);
            console.log('Sorted direction: ' + sortedDirection);
        });

        // Debug table initialization
        console.log('DataTable initialized:', table);
    });
</script>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                <a class="btn btn-link" href="">Cardiology</a>
                <a class="btn btn-link" href="">Pulmonary</a>
                <a class="btn btn-link" href="">Neurology</a>
                <a class="btn btn-link" href="">Orthopedics</a>
                <a class="btn btn-link" href="">Laboratory</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms &amp; Condition</a>
                <a class="btn btn-link" href="">Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    © <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="display: none;"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


</body><plasmo-csui id="qaiSidebarShadowHostEl"></plasmo-csui></html>