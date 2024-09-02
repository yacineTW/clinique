<html lang="en">
<head>
    <?php
    require_once("C:/xampp\htdocs\web2A\Controllers\DoctorController.php");
    $DoctorController = new DoctorController();
    $patients = $DoctorController->getAllPatients();
    $doctors = $DoctorController->getAllDoctors();
    // Initialize variables
    $id = 0;
    $doctor_id = '';
    $patient_id = '';
    $datetime = '';
    $status = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $id = $_POST['id'];
        $doctorId = $_POST['doctor_id'];
        $appointmentDate = $_POST['appointment_date'];
        $status = $_POST['status'];

        // Validate input
        if (!empty($doctorId) && !empty($appointmentDate) && !empty($status)) {
            // Create a new RendezVous object and save it
            $DoctorController->updateAppointment($id,$appointmentDate,$status);
            // Redirect or display success message
            header('Location: index.php'); // Redirect to a success page
            exit;
        } else {
            echo "All fields are required.";
        }
    }

    // Check if parameters are set
    if (isset($_GET['doctor_id'], $_GET['patient_id'], $_GET['datetime'], $_GET['status'],$_GET['id'])) {
        $doctor_id = $_GET['doctor_id'];
        $patient_id = $_GET['patient_id'];
        $datetime = $_GET['datetime'];
        $id = $_GET['id'];
        $status = $_GET['status'];
    } else {
        // Handle missing parameters
        echo "Missing required parameters.";
        exit;
    }
    ?>
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
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/js/plugins/dropzone/min/dropzone.min.css">

    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
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
        }</style><style>.cke{visibility:hidden;}</style><style>undefined</style><script type="text/javascript" src="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/config.js?t=MAUF"></script><link rel="stylesheet" type="text/css" href="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/skins/moono-lisa/editor.css?t=MAUF"><script type="text/javascript" src="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/lang/fr.js?t=MAUF"></script><script type="text/javascript" src="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/styles.js?t=MAUF"></script><link rel="stylesheet" type="text/css" href="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css?t=MAUF"><link rel="stylesheet" type="text/css" href="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/plugins/scayt/dialogs/dialog.css?t=MAUF"><link rel="stylesheet" type="text/css" href="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/plugins/tableselection/styles/tableselection.css?t=MAUF"><link rel="stylesheet" type="text/css" href="http://localhost/web2a/Templates/doctor/rendezvous/assets/js/plugins/ckeditor/plugins/dialog/styles/dialog.css?t=MAUF"><style>@keyframes rotate{0%{transform:rotate(0)}to{transform:rotate(360deg)}}.geS5n{padding:34px 24px 24px!important}.question-ai-box{position:absolute;top:8px;right:8px}.question-ai-loading,.question-ai-ask,.question-ai-answer,.question-ai-error__network,.question-ai-error__tip,.question-ai-img{cursor:pointer;box-sizing:border-box;user-select:none;border-radius:12px;width:fit-content;height:24px;padding:4px;transition:all .3s ease-in-out;overflow:hidden}.question-ai-loading{background-color:#edf3ff;justify-content:center;align-items:center;max-width:150px;display:flex}.question-ai-loading__logo{transform-origin:50%;background-size:100% 100%;width:16px;height:16px;animation:1s linear infinite rotate}.question-ai-loading__title{color:#797a7a;margin:0 8px;font-size:12px}.question-ai-img{background-color:#edf3ff!important;display:flex!important}.question-ai-img__title{color:#005cff;white-space:nowrap;cursor:default;margin:0 4px;font-size:12px;font-weight:400}.question-ai-img__again{color:#131414;white-space:nowrap;cursor:pointer;border-left:1px solid #005cff;width:fit-content;height:16px;padding:0 8px;font-size:12px;font-weight:400}.question-ai-ask{background-color:#005cff;max-width:24px}.question-ai-ask:hover{max-width:400px;background-color:#edf3ff!important}.question-ai-ask:hover .question-ai-ask__hover{display:flex!important}.question-ai-ask:hover .question-ai-ask__logo{display:none!important}.question-ai-ask__close{cursor:pointer;background-size:100% 100%;width:16px;height:16px;position:absolute;top:-8px;right:-8px}.question-ai-ask__logo,.question-ai-ask__chat{background-size:100% 100%;width:16px;height:16px}.question-ai-ask__hover{justify-content:center;align-items:center;width:100%;display:none}.question-ai-ask__title{color:#005cff;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-answer{background-color:#edf3ff;justify-content:center;align-items:center;display:flex}.question-ai-answer__text{color:#131414;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-answer__text:hover{color:#005cff}.question-ai-answer__right{background-size:100% 100%;width:16px;height:16px}.question-ai-error__network{cursor:default}.question-ai-error__network,.question-ai-error__tip{background-color:#ffe6e3;justify-content:center;align-items:center;display:flex}.question-ai-error__icon{background-size:100% 100%;width:16px;height:16px}.question-ai-error__title{color:#ff3939;white-space:nowrap;margin:0 4px;font-size:12px;font-weight:400}.question-ai-error__again{color:#131414;white-space:nowrap;cursor:pointer;border-left:1px solid #ff3939;width:fit-content;height:16px;padding:0 8px;font-size:12px;font-weight:400}.question-ai-error__right{background-size:100% 100%;width:16px;height:16px}#close-copilot-dialog{color:#1f1f1f;background-color:#000000a3;width:100vw;height:100vh;font-size:14px;position:fixed;top:0;left:0;overflow:hidden}#close-copilot-dialog #close-copilot-card{box-sizing:border-box;background-color:#fff;border-radius:16px;width:388px;height:250px;padding:24px;position:fixed;top:50vh;left:50%;transform:translate(-50%,-50%)}#close-copilot-dialog #close-copilot-card .questionai-card-header{justify-content:space-between;align-items:center;width:100%;height:30px;margin-bottom:24px;display:flex}#close-copilot-dialog #close-copilot-card .questionai-card-header .title{color:#131414;text-align:center;font-family:PingFangSC-Semibold;font-size:20px;font-weight:600}#close-copilot-dialog #close-copilot-card .questionai-card-header img{cursor:pointer;width:24px;height:24px}#close-copilot-dialog #close-copilot-card .radio-item{margin-bottom:12px}#close-copilot-dialog #close-copilot-card .radio-item *{cursor:pointer}#close-copilot-dialog #close-copilot-card .radio-item label{color:#131414;flex-direction:row;align-items:center;font-family:PingFangSC-Regular;font-size:14px;display:flex}#close-copilot-dialog #close-copilot-card .radio-item label .radio-item__radio{opacity:0;position:absolute}#close-copilot-dialog #close-copilot-card .radio-item label .radio-item__indicate-img{flex:none;width:16px;margin-right:5px}#close-copilot-dialog #close-copilot-card .tips-item{color:#8c91ab;margin-bottom:20px;padding-left:6px;font-family:PingFangSC-Regular;font-size:12px;font-weight:400}#close-copilot-dialog #close-copilot-card .btn-box{justify-content:flex-end;align-items:center;width:100%;display:flex}#close-copilot-dialog #close-copilot-card .btn-box .cancel-btn,#close-copilot-dialog #close-copilot-card .btn-box .confirm-btn{box-sizing:border-box;text-align:center;cursor:pointer;border-radius:24px;width:fit-content;height:40px;padding:0 24px;font-family:PingFangSC-Semibold;font-size:12px;font-weight:600;line-height:40px}#close-copilot-dialog #close-copilot-card .btn-box .cancel-btn{color:#131414;background-color:#f5f5f5}#close-copilot-dialog #close-copilot-card .btn-box .confirm-btn{color:#fff;background-color:#005cff;margin-left:12px}.question-ai-guide__border{z-index:999;box-sizing:border-box;color:#131414;background-color:#fff;border-radius:16px;width:fit-content;height:48px;padding:1px;font-size:14px;position:absolute;top:-50px;right:4px}.question-ai-guide__box{box-sizing:border-box;background-image:linear-gradient(135deg,#ccdfff 0%,#b3faff 100%);border-radius:16px;align-items:center;width:100%;height:100%;padding:0 8px 0 16px;display:flex}.question-ai-guide__btn{box-sizing:border-box;cursor:pointer;background-color:#fff;border-radius:20px;width:fit-content;height:32px;margin-left:16px;padding:0 16px;line-height:32px}.question-ai-guide__borderdown{border-top:8px solid #fff;border-left:16px solid #0000;width:0;height:0;position:absolute;bottom:-8px;right:16px}.question-ai-guide__boxdown{z-index:9999;border-top:7px solid #b3faff;border-left:14px solid #0000;width:0;height:0;position:absolute;bottom:-6px;right:17px}@media print{.question-ai-guide{display:none}}.qai-single-pay-modal[data-v-4ab058]{z-index:2147400001;flex-direction:column;width:100%;height:100%;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji;font-size:14px;line-height:normal;display:flex;position:fixed;top:0;right:0;overflow:hidden;box-shadow:0 8px 16px #919eab29}.qai-single-pay-modal .modal-mask[data-v-4ab058]{z-index:1;background:#000000a3;position:absolute;inset:0}.qai-single-pay-modal span[data-v-4ab058]{display:inline-block}.qai-single-pay-modal img[data-v-4ab058]{display:block}.qai-single-pay-modal .flex-center[data-v-4ab058]{align-items:center;display:flex}.qai-single-pay-modal .modal-body[data-v-4ab058]{z-index:2;box-sizing:border-box;background-image:linear-gradient(142deg,#e6efff 0%,#e0fdff 100%);border-radius:16px;flex-direction:column;align-items:center;width:396px;max-width:100%;max-height:90%;padding:0 12px 24px;transition:transform .2s ease-in-out;display:flex;position:absolute;top:50%;left:50%;transform:translate(-50%)translateY(-50%)}.qai-single-pay-modal .modal-body .flex-around[data-v-4ab058]{justify-content:space-around;align-items:center;display:flex}.qai-single-pay-modal .modal-body .toast[data-v-4ab058]{text-align:center;color:#fff;letter-spacing:0;text-align:center;background:#000c;border-radius:16px;max-width:360px;height:52px;margin:auto;padding:0 24px;font-family:PingFangSC-Regular;font-size:14px;font-weight:400;line-height:52px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}.qai-single-pay-modal .modal-body .main-header[data-v-4ab058]{box-sizing:border-box;justify-content:space-between;align-items:center;width:100%;height:62px;display:flex;position:relative;overflow:hidden}.qai-single-pay-modal .modal-body .main-header .plus_bg[data-v-4ab058]{width:120px;height:120px;position:absolute;bottom:-10px;right:50px}.qai-single-pay-modal .modal-body .main-header .plus_logo[data-v-4ab058]{width:152px;height:32px;margin-left:12px}.qai-single-pay-modal .modal-body .main-header .icon_close[data-v-4ab058]{cursor:pointer;width:24px;height:24px;margin-right:4px}.qai-single-pay-modal .modal-body .main-white[data-v-4ab058]{background:#fffc;border-radius:16px;margin-bottom:24px;padding:32px}.qai-single-pay-modal .modal-body .main-white .title[data-v-4ab058]{color:#141414;letter-spacing:0;margin-bottom:24px;font-family:Helvetica;font-size:20px;font-weight:700;line-height:28px}.qai-single-pay-modal .modal-body .main-white .desc-list[data-v-4ab058]{color:#141414;letter-spacing:0;flex-direction:column;font-family:Helvetica;font-size:16px;font-weight:400;line-height:24px;display:flex;margin-left:0!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item[data-v-4ab058]{align-items:center;display:flex;margin-bottom:16px!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item[data-v-4ab058]:last-child{margin-bottom:0!important}.qai-single-pay-modal .modal-body .main-white .desc-list .item img[data-v-4ab058]{width:28px;height:28px;margin-right:16px}.qai-single-pay-modal .modal-body .btn_subscribe[data-v-4ab058]{text-align:center;color:#fff;cursor:pointer;background-image:linear-gradient(94deg,#8b48ff 0%,#5741ff 51%,#005cff 100%);border-radius:24px;width:308px;height:40px;font-family:Helvetica;font-size:16px;font-weight:700;line-height:40px}</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"></head>

<plasmo-csui id="qaiUnderlineWordShadowHostEl"></plasmo-csui><body>
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
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Susan Day</div>
                                                                    <div class="fs-sm text-muted">Photographer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Jesse Fisher</div>
                                                                    <div class="fw-normal fs-sm text-muted">Web Designer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Judy Ford</div>
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
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Judy Ford</div>
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
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Jack Estrada</div>
                                                                    <div class="fw-normal fs-sm text-muted">Copywriter</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Andrea Gardner</div>
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
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Jose Mills</div>
                                                                    <div class="fw-normal fs-sm text-muted">Teacher</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Carol Ray</div>
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
                                                                    <div class="fw-semibold">Helen Jacobs</div>
                                                                    <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="d-flex py-2" href="be_pages_generic_profile.html">
                                                                <div class="flex-shrink-0 mx-3 overlay-container">
                                                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                                                    <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="fw-semibold">Adam McCoy</div>
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
                                            <form action="edit.php" method="POST">
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
                            <script>
                                function validate()
                                {
                                    return true;
                                }
                            </script>
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
                        <span class="d-none d-sm-inline-block">Doctor</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
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
            <!-- Quick Overview + Actions -->

            <!-- END Quick Overview + Actions -->

            <!-- Info -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Info</h3>
                </div>
                <div class="block-content">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <form action="edit.php" method="POST" >
                                <div class="mb-4">

                                    <label class="form-label" for="val-skill">Doctor <span class="text-danger">*</span></label>
                                    <select class="form-select valid" id="val-skill" name="doctor_id" aria-describedby="val-skill-error" aria-invalid="false">
                                        <?php
                                        foreach ($doctors as $doc) {
                                            echo '<option value="' . htmlspecialchars($doc['id']) . '">' . htmlspecialchars($doc['nom']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="val-skill">Status <span class="text-danger">*</span></label>
                                    <select class="form-select valid" id="val-skill" name="status" aria-describedby="val-skill-error" aria-invalid="false">
                                       <option value="programmé">programmé</option>
                                        <option value="annulé">annulé</option>
                                        <option value="terminé">terminé</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="id_start_datetime">Date:</label>
                                    <div class="input-group date" id="id_1">
                                        <input type="datetime-local" name="appointment_date" value="05/16/2018 11:31:00" class="form-control" required="">
                                    </div>
                                </div>
                                <br>

<input type="text" name="id" value="<?php echo $id ?>" hidden>

                                <div class="mb-4">
                                    <button type="submit" class="btn btn-alt-primary">Update Appointement</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Info -->

            <!-- Meta Data -->

            <!-- END Meta Data -->

            <!-- Media -->

            <!-- END Media -->
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

<!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
<script src="assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/js/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/js/plugins/dropzone/min/dropzone.min.js"></script>

<!-- Page JS Helpers (Select2 + Bootstrap Maxlength + CKEditor plugins) -->
<script>Dashmix.helpersOnLoad(['jq-select2', 'jq-maxlength', 'js-ckeditor']);</script>


<input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body><plasmo-csui id="qaiSidebarShadowHostEl"></plasmo-csui></html>