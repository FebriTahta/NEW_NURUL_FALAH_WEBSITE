
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<title>:: BigBucket :: Form Advanced</title>

<link rel="stylesheet" href="{{asset('assets/vendor/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}">

<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
<!-- colorpicker -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
<!-- tagsinput -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" type="text/css">
</head>
<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('assets/images/brand/icon_black.svg')}}" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <nav class="navbar custom-navbar navbar-expand-lg py-2">
        <div class="container-fluid px-0">
            <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
            <a href="index.html" class="navbar-brand"><img src="{{asset('assets/images/brand/icon.svg')}}" alt="BigBucket" />
                <strong>Big</strong> Bucket</a>
            <div id="navbar_main">
                <ul class="navbar-nav mr-auto hidden-xs">
                    <li class="nav-item page-header">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Form</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item hidden-xs">
                        <form class="form-inline main_search">
                            <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..."
                                aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i class="fa fa-cogs"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                            <div class="py-3 px-3">
                                <h5 class="heading h6 mb-0">Notifications <span
                                        class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                            </div>
                            <div class="list-group">
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-pink">TC</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur eiusmod tempor</p>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                    <div class="list-group-img"><span class="avatar bg-blue">WS</span></div>
                                    <div class="list-group-content">
                                        <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                        <p class="text-sm">Lorem sit amet consectetur adipiscing eiusmod tempor</p>
                                    </div>
                                </a>
                            </div>
                            <div class="py-3 text-center">
                                <a href="javascript:void(0);" class="link link-sm link--style-3">View all notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">User menu</h6>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span
                                    class="float-right badge badge-success">$50K</span><i
                                    class="fa fa-briefcase text-primary"></i>My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0);"><span class="float-right badge badge-warning">4</span><i
                                    class="fa fa-envelope text-primary"></i>Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-cog text-primary"></i>Settings</a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-sign-out text-primary"></i>Sign
                                out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main_content" id="main-content">
        <div class="left_sidebar">
            <nav class="sidebar">
                <div class="user-info">
                    <div class="image"><a href="javascript:void(0);"><img src="{{asset('assets/images/user.png')}}" alt="User"></a></div>
                    <div class="detail mt-3">
                        <h5 class="mb-0">Mike Thomas</h5>
                        <small>Admin</small>
                    </div>
                    <div class="social">
                        <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                        <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                        <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
                    </div>
                </div>
                <ul id="main-menu" class="metismenu">
                    <li class="g_heading">Main</li>
                    <li><a href="index.html"><i class="ti-home"></i><span>Dashboard</span></a></li>
                    <li><a href="ui-elements.html"><i class="ti-vector"></i><span>UI Elements</span></a></li>
                    <li class="g_heading">Application</li>
                    <li><a href="app-calendar.html"><i class="ti-calendar"></i><span>Calendar</span></a></li>
                    <li><a href="app-taskboard.html"><i class="ti-notepad"></i><span>TaskBoard</span></a></li>
                    <li><a href="app-inbox.html"><i class="ti-email"></i><span>Inbox</span></a></li>
                    <li><a href="app-chat.html"><i class="ti-comments"></i><span>Chat Apps</span></a></li>
                    <li><a href="app-contact.html"><i class="ti-id-badge"></i><span>Contact List</span></a></li>
                    <li><a href="widgets.html"><i class="ti-widget"></i><span>Widgets</span></a></li>
        
                    <li class="g_heading">Chart, Froms & Elements</li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-pie-chart"></i><span>Charts</span></a>
                        <ul>
                            <li><a href="chart-c3.html">C3 Chart</a></li>
                            <li><a href="chartsjs.html">Charts JS</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">JQuery Knob</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Forms</span></a>
                        <ul>
                            <li><a href="form-elements.html">Basic Elements</a></li>
                            <li class="active"><a href="form-advanced.html">Advanced Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html">Table Example</a></li>
                            <li><a href="table-normal.html">Table Normal</a></li>
                            <li><a href="table-datatable.html">Jquery Datatable</a></li>
                            <li><a href="table-editable.html">Table Editable</a></li>
                            <li><a href="table-foo.html">Table Foo</a></li>
                        </ul>
                    </li>
                    <li class="g_heading">Users</li>
                    <li><a href="page-profile.html"><i class="ti-user"></i><span>Profile</span></a></li>
                    <li><a href="page-timeline.html"><i class="ti-menu-alt"></i><span>Timeline</span></a></li>
                    <li><a href="page-invoices.html"><i class="ti-file"></i><span>Invoices</span></a></li>
                    <li class="g_heading">Authentication</li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-lock"></i><span>Authentication</span></a>
                        <ul>
                            <li><a class="dropdown-item" href="auth-login.html">Login</a></li>
                            <li><a class="dropdown-item" href="auth-register.html">Register</a></li>
                            <li><a class="dropdown-item" href="auth-forgot-password.html">Forgot password</a></li>
                            <li><a class="dropdown-item" href="auth-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-na"></i><span>Error Pages</span></a>
                        <ul>
                            <li><a class="dropdown-item" href="error-400.html">400 error</a></li>
                            <li><a class="dropdown-item" href="error-401.html">401 error</a></li>
                            <li><a class="dropdown-item" href="error-403.html">403 error</a></li>
                            <li><a class="dropdown-item" href="error-404.html">404 error</a></li>
                            <li><a class="dropdown-item" href="error-500.html">500 error</a></li>
                            <li><a class="dropdown-item" href="error-503.html">503 error</a></li>
                        </ul>
                    </li>
                    <li class="g_heading">Extra</li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow"><i class="ti-clipboard"></i><span>Pages</span></a>
                        <ul>
                            <li><a href="page-empty.html">Empty page</a></li>
                            <li><a href="page-pricing.html">Pricing cards</a>
                            <li><a href="page-search.html">Search Results</a></li>
                            <li><a href="page-testimonials.html">Testimonials</a></li>
                            <li><a href="page-icons.html">Icons</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="docs/introduction.html"><i class="ti-file"></i><span>Documentation</span></a></li>
                </ul>
            </nav>
        </div>
        
        <div class="right_sidebar">
            <div class="setting_div">
                <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
            </div>
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings" role="tab"
                        aria-controls="Settings" aria-selected="true">Settings</a></li>
                <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                        aria-controls="Contact" aria-selected="false">Contact</a></li>
            </ul>
            <hr>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                    <div class="sidebar-scroll">
                        <div class="sidebar-widget px-3">
                            <h5>Theme Setting</h5>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="azure">
                                    <div class="azure"></div>
                                </li>
                                <li data-theme="indigo" class="active">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Dark Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-dark">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Mini Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-sidebar">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>Language Setting</h5>
                            <select class="selectpicker" title="Select language">
                                <option>English</option>
                                <option>Spanish</option>
                                <option>Chinese</option>
                                <option>Hindi</option>
                                <option>Arabic</option>
                            </select>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>General Setting</h5>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Report Panel Usage</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Email Redirect</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Notifications</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Location Permission</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">New Project</h4>
                                <h4 class="progress-percentage text-uppercase">$950</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase"> Admin</h4>
                                <h4 class="progress-percentage text-uppercase">$10k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Balance</h4>
                                <h4 class="progress-percentage text-uppercase">$50k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Storage</h4>
                                <h4 class="progress-percentage text-uppercase">35GB</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                        aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                                <span class="btn-inner--visible">Upgrade Now</span>
                                <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                    <div class="sidebar-widget px-3">
                        <ul class="list-unstyled contact-list">
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="javascript:void(0);">Form Advanced</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-align-justify"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">                        
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Application</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Calendar</a>
                            <a class="dropdown-item" href="javascript:void(0);">TaskBoard</a>
                            <a class="dropdown-item" href="javascript:void(0);">Chat App</a>
                            <a class="dropdown-item" href="javascript:void(0);">Contacts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Timeline</a>
                            <a class="dropdown-item" href="javascript:void(0);">Invoices</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Stater page</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Pricing</a>
                            <a class="dropdown-item" href="javascript:void(0);">Search</a>
                            <a class="dropdown-item" href="javascript:void(0);">Testimonials</a>
                            <a class="dropdown-item" href="javascript:void(0);">Map</a>
                            <a class="dropdown-item" href="javascript:void(0);">Icon</a>
                            <a class="dropdown-item" href="javascript:void(0);">Carousel</a>
                            <a class="dropdown-item" href="javascript:void(0);">Gallery</a>
                            <a class="dropdown-item" href="javascript:void(0);">Lookup</a>
                        </div>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button type="button" class="btn btn-primary">Add</button>
                        <a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio" class="btn btn-success ml-2">Portfolio</a>
                    </form>
                </div>
            </nav>
            <div class="container-fluid">

                <!-- Advanced Select2 -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Advanced Select2</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Basic</p>
                                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                                <option></option>
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>With OptGroups</p>
                                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                                <option></option>
                                                <optgroup label="Picnic">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </optgroup>
                                                <optgroup label="Camping">
                                                    <option>Tent</option>
                                                    <option>Flashlight</option>
                                                    <option>Toilet Paper</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Multiple Select</p>
                                            <select class="form-control show-tick ms select2" multiple data-placeholder="Select">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>With Clear Button</p>
                                            <select class="form-control show-tick ms search-select" data-placeholder="Select">
                                                <option></option>
                                                <option>Hot Dog, Fries and a Soda</option>
                                                <option>Burger, Shake and a Smile</option>
                                                <option>Sugar, Spice and all things nice</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Max Selection Limit: 2</p>
                                            <select id="max-select" class="form-control show-tick ms" multiple>
                                                <option></option>
                                                <optgroup label="Condiments" data-max-options="2">
                                                    <option>Mustard</option>
                                                    <option>Ketchup</option>
                                                    <option>Relish</option>
                                                </optgroup>
                                                <optgroup label="Breads" data-max-options="2">
                                                    <option>Plain</option>
                                                    <option>Steamed</option>
                                                    <option>Toasted</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Loading Data</p>
                                            <input type="hidden" id="loading-select" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Loading Array Data</p>
                                            <input type="hidden" id="array-select" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Disabled Option</p>
                                            <select class="form-control show-tick ms select2" data-placeholder="Select">
                                                <option></option>
                                                <option>Mustard</option>
                                                <option disabled>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Color Pickers -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Color Pickers</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <label>HEX CODE</label>
                                        <div class="input-group colorpicker">                                   
                                            <input type="text" class="form-control" value="#5b39b1">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="input-group-addon"> <i></i> </span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>RGB(A) CODE</label>
                                        <div class="input-group colorpicker">
                                            <input type="text" class="form-control" value="rgba(91,57,177,1)">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="input-group-addon"> <i></i> </span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Input Mask -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>jQuery Input Mask</h2>
                            </div>
                            <div class="body">
                                <div class="demo-masked-input">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-6">
                                            <b>Date</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                                                </div>
                                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Time (24 hour)</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                                <input type="text" class="form-control time24" placeholder="Ex: 23:59">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Time (12 hour)</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                                <input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Date Time</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                <input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Mobile Phone Number</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Phone Number</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Money (Dollar)</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                                </div>
                                                <input type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                            </div>
                                        </div>                               
                                        <div class="col-lg-3 col-md-6">
                                            <b>IP Address</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-desktop"></i></span>
                                                </div>
                                                <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Credit Card</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                                </div>
                                                <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Email Address</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                                <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <b>Serial Key</b>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                                </div>
                                                <input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tags Input -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Tags Input</h2>
                            </div>
                            <div class="body">
                                <div class="example">
                                    <input type="text" class="form-control" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDERS -->
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Input Sliders</h2>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Default input slider -->
                                        <div class="input-slider-container">
                                            <div id="input-slider" class="input-slider" data-range-value-min="100" data-range-value-max="500"></div>
                                            <!-- Input slider values -->
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <span id="input-slider-value" class="range-slider-value" data-range-value-low="100"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="range-slider-wrapper">
                                            <!-- Range slider container -->
                                            <div id="input-slider-range" data-range-value-min="100" data-range-value-max="500"></div>
                                            <!-- Range slider values -->
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="range-slider-value value-low" data-range-value-low="200" id="input-slider-range-value-low"></span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="range-slider-value value-high" data-range-value-high="400" id="input-slider-range-value-high"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- Core -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script> <!-- Select2 Js -->
<script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script> <!-- Bootstrap Colorpicker Js --> 
<script src="{{asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> <!-- Input Mask Plugin Js --> 
<script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script> <!-- tagsinput --> 
<script src="{{asset('assets/vendor/nouislider/js/nouislider.min.js')}}"></script> <!-- SLIDERS --> 

<!-- Theme JS -->
<script src="{{asset('assets/js/theme.js')}}"></script>
<script src="{{asset('assets/js/pages/advanced-form.js')}}"></script>
</body>
</html>