@push('css')
@endpush

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
                        <a href="#" class="btn btn-dark ms-1" id="btn-add_sp"
                            data-saless="{{ json_encode($saless) }}" data-produks="{{ json_encode($produks) }}"
                            data-types="{{ json_encode($types) }}">
                            Tambah SP Masuk
                        </a>

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

<!-- Modal -->
<div class="modal fade modal-add_sp" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Submit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="row">
                        <!-- Date -->
                        <div class="col-md-6 mb-3">
                            <label for="tgl" class="form-label">Date</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" required>
                        </div>
                        <!-- User ID -->
                        <div class="col-md-6 mb-3">
                            <label for="id_user" class="form-label">Sales</label>
                            <select name="id_user" id="id_user" class="select2 form-control">
                                <option value="">Pilih Sales</option>
                            </select>
                        </div>
                        <!-- Product ID -->
                        <div class="col-md-6 mb-3">
                            <label for="id_product" class="form-label">Product</label>
                            <select name="id_product" id="id_product" class="select2 form-control">
                                <option value="">Pilih Product</option>
                            </select>
                        </div>
                        <!-- Type -->
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Type Beli</label>
                            <select name="type" id="type" class="select2 form-control">
                                <option value="">Pilih Type</option>
                            </select>
                        </div>

                        <!-- Qty -->
                        <div class="col-md-6 mb-3">
                            <label for="qty" class="form-label">Qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            // Trigger modal on button click
            $('#btn-add_sp').on('click', function() {
                // Retrieve data from button attributes
                var saless = $(this).data('saless');
                var produks = $(this).data('produks');
                var types = $(this).data('types');

                // Clear previous options in all dropdowns
                $('#id_user').empty();
                $('#id_product').empty();
                $('#type').empty();

                // Add sales options (User ID)
                $('#id_user').append('<option value="">Pilih Sales</option>');
                $.each(saless, function(index, sale) {
                    $('#id_user').append('<option value="' + sale.id + '">' + sale.name +
                        '</option>');
                });

                // Add product options
                $('#id_product').append('<option value="">Pilih Product</option>');
                $.each(produks, function(index, product) {
                    $('#id_product').append('<option value="' + product.id + '">' + product.name +
                        '</option>');
                });

                // Add type options
                $('#type').append('<option value="">Pilih Type</option>');
                $.each(types, function(index, type) {
                    $('#type').append('<option value="' + type.id + '">' + type.name + '</option>');
                });

                // Show the modal
                $('.modal-add_sp').modal('show');
            });
        });
    </script>
@endpush
