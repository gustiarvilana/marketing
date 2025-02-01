<script>
    $(document).ready(function() {
        // Fungsi untuk memuat data chart dan tabel
        function loadData() {
            $.ajax({
                url: "{{ route('home.data') }}", // Gantilah dengan route yang sesuai
                type: "GET",
                success: function(response) {
                    // Memuat grafik
                    loadCharts(response);

                    // Memuat data ke dalam DataTable
                    loadTableData(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error loading data: " + error);
                }
            });
        }

        // Fungsi untuk memuat data grafik
        function loadCharts(response) {
            // Wrok Report - Area Chart
            var workReportOptions = {
                series: [{
                    name: "Task",
                    data: response.work_report.task_data,
                }, {
                    name: "Completed Task",
                    data: response.work_report.completed_task_data,
                }, {
                    name: "Active Task",
                    data: response.work_report.active_task_data,
                }],
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
                    categories: response.work_report.categories,
                },
                tooltip: {
                    x: {
                        format: "dd/MM/yy HH:mm",
                    },
                },
            };
            var workReportChart = new ApexCharts(document.querySelector("#apex_Wrok_Report"),
            workReportOptions);
            workReportChart.render();

            // Sessions by Device - Donut Chart
            var sessionDeviceOptions = {
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
                series: response.sessions_by_device.series,
                labels: response.sessions_by_device.labels,
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
                }],
            };
            var sessionDeviceChart = new ApexCharts(document.querySelector("#total_employees"),
                sessionDeviceOptions);
            sessionDeviceChart.render();

            // Total Projects - Bar Chart
            var totalProjectsOptions = {
                series: [{
                    name: "Upcoming",
                    data: response.total_projects.upcoming,
                }, {
                    name: "In Progress",
                    data: response.total_projects.in_progress,
                }, {
                    name: "Completed",
                    data: response.total_projects.completed,
                }],
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
                    categories: response.total_projects.categories,
                },
                fill: {
                    opacity: 1,
                },
            };
            var totalProjectsChart = new ApexCharts(document.querySelector("#total_projects"),
                totalProjectsOptions);
            totalProjectsChart.render();
        }

        // Fungsi untuk memuat data ke dalam DataTable
        function loadTableData(response) {
            $('#dataTable').DataTable({
                data: response.data, // Mengambil data dari respons AJAX
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: "dt-body-right"
                }],
                columns: [{
                        data: 'title',
                        render: function(data, type, row) {
                            return '<h6 class="mb-0 text-nowrap"><a href="projects-detail.html" class="color-700">' +
                                data + '</a></h6>' +
                                '<small class="text-muted">Last Edited by: ' +
                                row.last_edited_by + '</small>';
                        }
                    },
                    {
                        data: 'start_date',
                        render: function(data, type, row) {
                            return '<span class="d-block text-nowrap">' +
                                data + '</span>' +
                                '<small class="text-muted">' + row.start_time + '</small>';
                        }
                    },
                    {
                        data: 'tasks_completed',
                        render: function(data, type, row) {
                            let percentage = row.tasks_completed_percentage;
                            return '<div class="progress" style="height: 5px;">' +
                                '<div class="progress-bar bg-primary" role="progressbar" style="width: ' +
                                percentage + '%" ' +
                                'aria-valuenow="' + percentage +
                                '" aria-valuemin="0" aria-valuemax="100"></div>' +
                                '</div>' +
                                '<small class="text-muted text-nowrap">Tasks Completed: ' +
                                data + '</small>';
                        }
                    },
                    {
                        data: 'priority',
                        render: function(data, type, row) {
                            return '<span class="badge bg-' + (data === 'Low' ? 'success' :
                                    'danger') +
                                ' text-uppercase">' + data + '</span>';
                        }
                    },
                    {
                        data: 'team',
                        render: function(data, type, row) {
                            return data.map(function(member) {
                                return '<img class="avatar sm rounded-circle" src="' +
                                    member.avatar + '" alt="">';
                            }).join('');
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<div class="dropdown">' +
                                '<a class="btn btn-sm btn-link" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>' +
                                '<ul class="dropdown-menu border-0 shadow p-3">' +
                                '<li><a class="dropdown-item py-2 rounded" href="#">Action</a></li>' +
                                '<li><a class="dropdown-item py-2 rounded" href="#">Another action</a></li>' +
                                '<li><a class="dropdown-item py-2 rounded" href="#">Something else here</a></li>' +
                                '</ul>' +
                                '</div>';
                        }
                    }
                ]
            });
        }

        // Panggil fungsi untuk memuat data saat halaman siap
        loadData();
    });
</script>


<script>
    $(document).ready(function() {
        $('#btn-add_sp').on('click', function() {
            $('.modal-add_sp').modal('show')
        })
    });
</script>
