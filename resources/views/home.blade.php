@extends('layouts.master')

@section('content')
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
                            <span>Delivery</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3>03</h3>
                            <span>Terkirim</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="mb-4">Total SP</h5>
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
                            <h5 class="mb-4">Laporan Penjualan</h5>
                            <div id="apex_Wrok_Report"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card bg-transparent border-0 mt-4">
                        <h5>Penjualan By Team</h5>
                        <table id="dataTable"
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
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- .row end-->

        </div>
    </div>
@endsection

@section('js')
    @include('home-js')
@endsection
