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
                            <li><a class="color-600"
                                    href="{{ url('assets') }}/documentation/index.html">Documentation</a></li>
                            <li><a class="color-600 ms-4" href="calendar.html">Calendar</a></li>
                        </ul>
                    </div> --}}
         </div> <!-- .row end-->
         <div class="row">
             <div class="col-xl-8 col-lg-7 col-md-12">
                 <div class="welcome-text mb-4">
                     <h1 class="fs-3 mb-1">Selamat Datang, {{ Str::upper(Auth::user()->username) }}</h1>
                     {{-- <p class="fs-6 text-muted">Welcome back to your dashboard, if need a help <a
                                    href="help.html" class="link-primary">Contact us</a>.</p> --}}
                 </div>
                 <ul class="nav nav-tabs tab-body-header rounded d-md-inline-flex d-flex justify-content-between"
                     role="tablist">
                     <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link active"
                             href="index.html">Dashboard</a></li>
                     <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link"
                             href="expenses.html">Expenses</a></li>
                     <li class="nav-item flex-fill text-center"><a class="text-uppercase nav-link"
                             href="invoice.html">Invoices</a></li>
                 </ul>
             </div>
             <div class="col-xl-4 col-lg-5 col-md-12 text-md-end">
                 <div class="mt-md-0 mt-2">
                     <div class="input-group date-select">
                         <input class="form-control" type="text" id="" value="" disabled />
                         <a href="#" class="btn btn-dark ms-1" id="btn-add_sp">Tambah SP Masuk</a>
                     </div>
                 </div>
                 <div class="d-lg-flex d-none justify-content-lg-end align-items-center mt-4">
                     <div class="progress" style="height: 5px; width: 170px;">
                         <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                     <label class="text-left ms-3 mb-0"><strong>Project</strong> Preview</label>
                 </div>
             </div>
         </div> <!-- .row end-->

     </div>
 </div>
