<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: ALUI :: Project Tracker</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- Plugin css file  -->
    <link rel="stylesheet" href="{{ url('assets') }}/assets/css/daterangepicker.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/assets/css/dataTables.min.css">

    <!-- project Css -->
    <link rel="stylesheet" href="{{ url('assets') }}/assets/css/al.style.min.css">

    <!-- layout css -->
    <link rel="stylesheet" href="{{ url('assets') }}/assets/css/layout.j.min.css">
</head>

<body>

    <div id="layout-j" class="theme-green">

        <!-- Top menu Bar -->
        <div class="navbar navbar-expand-lg sticky-top py-md-2 border-bottom">
            <div class="container">
                <div class="left d-flex">
                    <button class="navbar-toggler color-900" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 64 80" fill="none">
                            <path class="fill-primary"
                                d="M58.8996 22.7L26.9996 2.2C23.4996 -0.0999999 18.9996 0 15.5996 2.5C12.1996 5 10.6996 9.2 11.7996 13.3L15.7996 26.8L3.49962 39.9C-3.30038 47.7 3.79962 54.5 3.89962 54.6L3.99962 54.7L36.3996 78.5C36.4996 78.6 36.5996 78.6 36.6996 78.7C37.8996 79.2 39.1996 79.4 40.3996 79.4C42.9996 79.4 45.4996 78.4 47.4996 76.4C50.2996 73.5 51.1996 69.4 49.6996 65.6L45.1996 51.8L58.9996 39.4C61.7996 37.5 63.3996 34.4 63.3996 31.1C63.4996 27.7 61.7996 24.5 58.8996 22.7ZM46.7996 66.7V66.8C48.0996 69.9 46.8996 72.7 45.2996 74.3C43.7996 75.9 41.0996 77.1 37.9996 76L5.89961 52.3C5.29961 51.7 1.09962 47.3 5.79962 42L16.8996 30.1L23.4996 52.1C24.3996 55.2 26.5996 57.7 29.5996 58.8C30.7996 59.2 31.9996 59.5 33.1996 59.5C35.0996 59.5 36.9996 58.9 38.6996 57.8C38.7996 57.8 38.7996 57.7 38.8996 57.7L42.7996 54.2L46.7996 66.7ZM57.2996 36.9C57.1996 36.9 57.1996 37 57.0996 37L44.0996 48.7L36.4996 25.5V25.4C35.1996 22.2 32.3996 20 28.9996 19.3C25.5996 18.7 22.1996 19.8 19.8996 22.3L18.2996 24L14.7996 12.3C13.8996 8.9 15.4996 6.2 17.3996 4.8C18.4996 4 19.8996 3.4 21.4996 3.4C22.6996 3.4 23.9996 3.7 25.2996 4.6L57.1996 25.1C59.1996 26.4 60.2996 28.6 60.2996 30.9C60.3996 33.4 59.2996 35.6 57.2996 36.9Z"
                                fill="black"></path>
                        </svg>
                    </a>
                </div>

                <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="ms-lg-2 ms-md-1 nav-item active"><a class="nav-link" href="index.html">Dashboard</a>
                        </li>
                        {{-- <li class="ms-lg-2 ms-md-1 nav-item"><a class="nav-link" href="projects-list.html">Project</a>
                        </li>
                        <li class="ms-lg-2 ms-md-1 nav-item"><a class="nav-link" href="activity.html">Activity</a></li>
                        <li class="ms-lg-2 ms-md-1 nav-item"><a class="nav-link" href="kanban.html">Kanban Board</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown mx-sm-4 notification-dropdown notifications me-3">
                        <a class="dropdown-toggle pe-4" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Notification</a>
                        <div id="NotificationsDiv"
                            class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0">
                                <div class="card-header border-0 p-3">
                                    <h5 class="mb-0 d-flex justify-content-between">
                                        <span>Notifications Center</span>
                                        <span class="badge text-muted">14</span>
                                    </h5>
                                    <ul class="nav nav-tabs mt-3 border-bottom-0" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                role="tab" aria-selected="true" href="#message">Message</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" role="tab"
                                                aria-selected="false" href="#events">Events</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" role="tab"
                                                aria-selected="false" href="#logs">Logs</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content card-body custom_scroll" id="notiTabContent">
                                    <div class="tab-pane fade active show" id="message" role="tabpanel">
                                        <ul class="list-unstyled list mb-0">
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Chris Fox</span> <small>2MIN</small>
                                                        </p>
                                                        <span class="text-muted">changed an issue from "In Progress" to
                                                            <span class="badge bg-success">Review</span></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded-circle no-thumbnail">RH</div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Robert Hammer</span> <small>13MIN</small>
                                                        </p>
                                                        <span class="text-muted">It is a long established fact that a
                                                            reader will be distracted</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Orlando Lentz</span> <small>1HR</small>
                                                        </p>
                                                        <span class="text-muted">There are many variations of
                                                            passages</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar4.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Barbara Kelly</span> <small>1DAY</small>
                                                        </p>
                                                        <span class="text-muted">Contrary to popular belief <span
                                                                class="badge bg-danger">Code</span></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Robert Hammer</span> <small>13MIN</small>
                                                        </p>
                                                        <span class="text-muted">making it over 2000 years old</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar6.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Orlando Lentz</span> <small>1HR</small>
                                                        </p>
                                                        <span class="text-muted">There are many variations of
                                                            passages</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle"
                                                        src="{{ url('assets') }}/assets/images/xs/avatar7.jpg"
                                                        alt="">
                                                    <div class="flex-fill ms-3">
                                                        <p class="d-flex justify-content-between mb-0 color-700">
                                                            <span>Rose Rivera</span> <small class="">1DAY</small>
                                                        </p>
                                                        <span class="text-muted">The generated Lorem Ipsum</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="events" role="tabpanel">
                                        <ul class="list-unstyled list mb-0">
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-info-circle fa-lg"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0 text-muted">Campaign <strong
                                                                class="text-primary">Holiday Sale</strong> is nearly
                                                            reach budget limit.</p>
                                                        <small class="text-muted">10:00 AM Today</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-thumbs-up fa-lg"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0 text-muted">Your New Campaign <strong
                                                                class="text-primary">Holiday Sale</strong> is approved.
                                                        </p>
                                                        <small class="text-muted">11:30 AM Today</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-pie-chart fa-lg"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0 text-muted">Website visits from Twitter is
                                                            <strong class="text-danger">27% higher</strong> than last
                                                            week.
                                                        </p>
                                                        <small class="text-muted">04:00 PM Today</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-warning fa-lg"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0 text-muted"><strong
                                                                class="text-warning">Error</strong> on website
                                                            analytics configurations</p>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="py-2 mb-1 border-bottom">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-thumbs-up fa-lg"></i></div>
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0 text-muted">Your New Campaign <strong
                                                                class="text-primary">Holiday Sale</strong> is approved.
                                                        </p>
                                                        <small class="text-muted">11:30 AM Today</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="logs" role="tabpanel">
                                        <h4>No Logs right now!</h4>
                                    </div>
                                </div>
                                <a class="card-footer text-center border-top-0" href="#"> View all
                                    notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex profile-dropdown">
                        <div class="dropdown">
                            <a href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <img alt="Image" src="{{ url('assets') }}/assets/images/profile_av.png"
                                    class="avatar rounded-circle">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 m-0 p-3">
                                <li><a class="dropdown-item py-2 rounded" href="setting.html"><i
                                            class="fa fa-cog me-3"></i>Settings</a></li>
                                <li><a class="dropdown-item py-2 rounded" href="help.html"><i
                                            class="fa fa-info-circle me-3"></i>Help Center</a></li>
                                <li><a class="dropdown-item py-2 rounded" href="profile.html"><i
                                            class="fa fa-user me-3"></i>Account</a></li>
                                <li><a class="dropdown-item py-2 rounded" href="auth-signin.html"><i
                                            class="fa fa-sign-out me-3"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rightbar-icon ms-0 ms-sm-3">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#SettingsModal"
                            class="d-block text-center"><i class="fa fa-sliders"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- block Header -->
        <div class="block-header py-4 py-lg-5">
            <div class="container">

                <div class="row mb-4">
                    <div class="col">
                        <ul class="breadcrumb bg-transparent mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                    {{-- <div class="col">
                        <ul class="list-unstyled d-sm-flex justify-content-end mb-0 d-none">
                            <li><a class="color-600" href="{{ url('assets') }}/documentation/index.html">Documentation</a></li>
                            <li><a class="color-600 ms-4" href="calendar.html">Calendar</a></li>
                        </ul>
                    </div> --}}
                </div> <!-- .row end-->
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="welcome-text mb-4">
                            <h1 class="fs-3 mb-1">Selamat Datang, {{ Str::upper(Auth()->user()->name) }}</h1>
                            {{-- <p class="fs-6 text-muted">Welcome back to your dashboard, if need a help <a href="help.html" class="link-primary">Contact us</a>.</p> --}}
                        </div>
                        <label for="periode" class="mr-3">Pilih Periode </label>
                        <ul class="nav nav-tabs tab-body-header rounded d-md-inline-flex d-flex justify-content-between"
                            role="tablist">
                            <li class="nav-item flex-fill text-center"><input type="month" name="periode"
                                    id="periode"></li>
                            {{-- <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link active"href="index.html">Dashboard</a></li>
                            <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link"href="expenses.html">Expenses</a></li>
                            <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link"href="invoice.html">Invoices</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12 text-md-end">
                        <div class="mt-md-0 mt-2">
                            <div class="input-group date-select">
                                {{-- <input class="form-control" type="text" id="daterange" value="" /> --}}
                                <a href="projects-create.html" class="btn btn-dark ms-1 float-right">Input SP
                                    Masuk</a>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none justify-content-lg-end align-items-center mt-4">
                            <div class="progress" style="height: 5px; width: 170px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <label class="text-left ms-3 mb-0"><strong>Penjualan</strong> Marketing</label>
                        </div>
                    </div>
                </div> <!-- .row end-->

            </div>
        </div>

        <!-- Main Content -->
        <div class="body_area py-4 py-md-5">
            <div class="container">

                <div class="row g-3 row-deck">
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="card border-0">
                            <div class="card-body">
                                <h3>25</h3>
                                <span>SP Masuk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="card border-0">
                            <div class="card-body">
                                <h3>40</h3>
                                <span>SP ACC</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="card border-0">
                            <div class="card-body">
                                <h3>05</h3>
                                <span>Proccessing</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="card border-0">
                            <div class="card-body">
                                <h3>03</h3>
                                <span>SP Tolak</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4">Total Pesanan</h5>
                                <div id="total_employees"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4">Total Penjualan</h5>
                                <div id="total_projects"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0">
                            <div class="card-body">
                                <h5 class="mb-4">Grafik Penjualan</h5>
                                <div id="apex_Wrok_Report"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-transparent border-0 mt-4">
                            <h5>Penjualan by Marketing</h5>
                            <table id="dataTables"
                                class="myDataTable table align-middle table-bordered mb-0 custom-table nowrap dataTable"
                                style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>Tasks Completed</th>
                                        <th>Priority</th>
                                        <th>Team</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">New Application Design</a></h6>
                                            <small class="text-muted">Last Edited by: Savanah Durgan</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 26, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 75/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar3.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar4.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Wordpress Development</a></h6>
                                            <small class="text-muted">Last Edited by: Marshall Nichols</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 29, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 30/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar4.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">WebSite & Mobile Application</a></h6>
                                            <small class="text-muted">Last Edited by: Ava Alexander</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Oct 03, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 75/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger text-uppercase">High</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar3.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar4.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Angular & Mobile App</a></h6>
                                            <small class="text-muted">Last Edited by: Ava Alexander</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">March 11, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 18%" aria-valuenow="18" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 18/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar3.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">iOS Design</a></h6>
                                            <small class="text-muted">Last Edited by: Savanah Durgan</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">April 30, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 90/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-info text-uppercase">Medium</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Admin Dashboard Design</a></h6>
                                            <small class="text-muted">Last Edited by: Savanah Durgan</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 26, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 75/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar3.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Development</a></h6>
                                            <small class="text-muted">Last Edited by: Marshall Nichols</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 29, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 30/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">New admin Design</a></h6>
                                            <small class="text-muted">Last Edited by: Savanah Durgan</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 26, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 75/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar2.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Web Laravel Development</a>
                                            </h6>
                                            <small class="text-muted">Last Edited by: Marshall Nichols</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Jan 29, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 30/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar6.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar9.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">ipad & Mobile Application</a>
                                            </h6>
                                            <small class="text-muted">Last Edited by: Ava Alexander</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">Oct 03, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 75/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-danger text-uppercase">High</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar1.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar4.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar5.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">React Web App</a></h6>
                                            <small class="text-muted">Last Edited by: Ava Alexander</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">March 11, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 18%" aria-valuenow="18" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 18/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-success text-uppercase">Low</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar10.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 text-nowrap"><a href="projects-detail.html"
                                                    class="color-700">Android & iOS Development</a></h6>
                                            <small class="text-muted">Last Edited by: Savanah Durgan</small>
                                        </td>
                                        <td>
                                            <span class="d-block text-nowrap">April 30, 2020</span>
                                            <small class="text-muted">6:30 PM</small>
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <small class="text-muted text-nowrap">Tasks Completed: 90/100</small>
                                        </td>
                                        <td>
                                            <span class="badge bg-info text-uppercase">Medium</span>
                                        </td>
                                        <td>
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar7.jpg"
                                                alt="">
                                            <img class="avatar sm rounded-circle"
                                                src="{{ url('assets') }}/assets/images/xs/avatar8.jpg"
                                                alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-link" href="#" role="button"
                                                    data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                                                <ul class="dropdown-menu border-0 shadow p-3">
                                                    <li><a class="dropdown-item py-2 rounded"
                                                            href="#">Action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Another
                                                            action</a></li>
                                                    <li><a class="dropdown-item py-2 rounded" href="#">Something
                                                            else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- .row end-->

            </div>
        </div>

        <!-- Modal: Setting -->
        <div class="modal fade" id="SettingsModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AL-UI Setting</h5>
                    </div>
                    <div class="modal-body">
                        <!-- Settings: Font -->
                        <div class="setting-font">
                            <small class="card-title text-muted">Google font Settings</small>
                            <ul class="list-group font_setting mb-3 mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font"
                                            id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font"
                                            id="font-quicksand" value="font-quicksand">
                                        <label class="form-check-label" for="font-quicksand">
                                            Quicksand Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font"
                                            id="font-nunito" value="font-nunito">
                                        <label class="form-check-label" for="font-nunito">
                                            Nunito Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font"
                                            id="font-Raleway" value="font-raleway">
                                        <label class="form-check-label" for="font-Raleway">
                                            Raleway Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Color -->
                        <div class="setting-theme">
                            <small class="card-title text-muted">Theme Color Settings</small>
                            <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                                <li data-theme="indigo">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green" class="active">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                                <li data-theme="red">
                                    <div class="red"></div>
                                </li>
                                <li data-theme="dynamic">
                                    <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
                                </li>
                            </ul>
                            <div class="form-check form-switch gradient-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar
                                    )</label>
                            </div>
                        </div>
                        <!-- Settings: bg image -->
                        <div class="setting-img mb-3">
                            <div class="form-check form-switch imagebg-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckImage">
                                <label class="form-check-label" for="CheckImage">Set Background Image
                                    (Sidebar)</label>
                            </div>
                            <div class="bg-images">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="sidebar-img-1 sidebar-img-active"><a class="rounded sidebar-img"
                                            id="img-1" href="#"><img
                                                src="{{ url('assets') }}/assets/images/sidebar-bg/sidebar-1.jpg"
                                                alt="" /></a></li>
                                    <li class="sidebar-img-2"><a class="rounded sidebar-img" id="img-2"
                                            href="#"><img
                                                src="{{ url('assets') }}/assets/images/sidebar-bg/sidebar-2.jpg"
                                                alt="" /></a></li>
                                    <li class="sidebar-img-3"><a class="rounded sidebar-img" id="img-3"
                                            href="#"><img
                                                src="{{ url('assets') }}/assets/images/sidebar-bg/sidebar-3.jpg"
                                                alt="" /></a></li>
                                    <li class="sidebar-img-4"><a class="rounded sidebar-img" id="img-4"
                                            href="#"><img
                                                src="{{ url('assets') }}/assets/images/sidebar-bg/sidebar-4.jpg"
                                                alt="" /></a></li>
                                    <li class="sidebar-img-5"><a class="rounded sidebar-img" id="img-5"
                                            href="#"><img
                                                src="{{ url('assets') }}/assets/images/sidebar-bg/sidebar-5.jpg"
                                                alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Theme dynamics -->
                        <div class="dt-setting">
                            <small class="card-title text-muted">Dynamic Color Settings</small>
                            <ul class="list-group list-unstyled mb-3 mt-1">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker"
                                        class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker"
                                        class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 1</label>
                                    <button id="chartColorPicker1"
                                        class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 2</label>
                                    <button id="chartColorPicker2"
                                        class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 3</label>
                                    <button id="chartColorPicker3"
                                        class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 4</label>
                                    <button id="chartColorPicker4"
                                        class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 5</label>
                                    <button id="chartColorPicker5"
                                        class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode">
                            <small class="card-title text-muted">Light/Dark & Contrast Layout</small>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High
                                            Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-primary lift">Save Changes</button>
                        <button type="button" class="btn btn-white border lift"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ url('assets') }}/assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="{{ url('assets') }}/assets/bundles/daterangepicker.bundle.js"></script>
    <script src="{{ url('assets') }}/assets/bundles/apexcharts.bundle.js"></script>
    <script src="{{ url('assets') }}/assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="{{ url('assets') }}/assets/js/template.js"></script>
    {{-- <script src="{{ url('assets') }}/js/index.js"></script> --}}
    <script>
        // $(function() {
        //     $('#daterange').daterangepicker({
        //         opens: 'left',
        //         format: 'MM/YYYY',
        //         showDropdowns: true,
        //     }, function(start, end, label) {
        //         console.log("A new date selection was made: " + start.format('YYYY-MM') + ' to ' + end
        //             .format('YYYY-MM'));
        //     });
        // });

        // DataTable
        $(document).ready(function() {
            $("#dataTable")
                .addClass("nowrap")
                .dataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1, -3],
                        className: "dt-body-right"
                    }],
                });
        });
    </script>

    <!-- chart -->
    <script>
        $(document).ready(function() {
            // Wrok Report
            var options = {
                series: [{
                    name: "Task",
                    data: [31, 40, 28, 51, 42, 109, 100],
                }, {
                    name: "Complated Task",
                    data: [11, 32, 45, 32, 34, 52, 41],
                }, {
                    name: "Active Task",
                    data: [50, 45, 12, 78, 23, 81, 29],
                }, ],
                chart: {
                    height: 260,
                    type: "area",
                    toolbar: {
                        show: false,
                    },
                },
                colors: ["var(--chart-color1)", "var(--chart-color2)", "var(--chart-color3)"],
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                },
                xaxis: {
                    type: "datetime",
                    categories: [
                        "2021-01-1 GMT",
                        "2021-02-1 GMT",
                        "2021-03-1 GMT",
                        "2021-04-1 GMT",
                        "2021-05-1 GMT",
                        "2021-06-1 GMT",
                        "2021-07-1 GMT",
                    ],
                },
                tooltip: {
                    x: {
                        format: "dd/MM/yy HH:mm",
                    },
                },
            };
            var chart = new ApexCharts(document.querySelector("#apex_Wrok_Report"), options);
            chart.render();

            // Sessions by Device
            var options = {
                chart: {
                    height: 250,
                    type: "donut",
                },
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    position: "top",
                    horizontalAlign: "center",
                    show: true,
                },
                colors: ["var(--chart-color1)", "var(--chart-color2)"],
                series: [86, 44],
                labels: ["Male 86", "Female 44"],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200,
                        },
                        legend: {
                            position: "bottom",
                        },
                    },
                }, ],
            };
            var chart = new ApexCharts(document.querySelector("#total_employees"), options);
            chart.render();

            // Total Projects
            var options = {
                series: [{
                    name: "Upcoming",
                    data: [4, 8, 2, 3, 12, 10, 8, 12, 11, 5, 8, 4],
                }, {
                    name: "In Progress",
                    data: [18, 22, 20, 8, 13, 27, 18, 18, 20, 12, 14, 18],
                }, {
                    name: "Completed",
                    data: [40, 35, 25, 28, 44, 53, 18, 29, 21, 19, 39, 51],
                }, ],
                chart: {
                    type: "bar",
                    height: 250,
                    stacked: true,
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                },
                colors: ["var(--chart-color1)", "var(--chart-color2)", "var(--chart-color3)"],
                dataLabels: {
                    enabled: false,
                },
                legend: {
                    position: "top",
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                    },
                },
                xaxis: {
                    type: "datetime",
                    categories: [
                        "01/30/2021 GMT",
                        "02/27/2021 GMT",
                        "03/30/2021 GMT",
                        "04/30/2021 GMT",
                        "05/30/2021 GMT",
                        "06/30/2021 GMT",
                        "07/30/2021 GMT",
                        "08/30/2021 GMT",
                        "09/30/2021 GMT",
                        "10/30/2021 GMT",
                        "11/30/2021 GMT",
                        "12/30/2021 GMT",
                    ],
                },
                fill: {
                    opacity: 1,
                },
            };
            var chart = new ApexCharts(document.querySelector("#total_projects"), options);
            chart.render();

        });
    </script>
</body>

</html>
