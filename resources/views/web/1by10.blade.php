@include('web.chunks.header')

<div class="row mx-0">
    <div class="col-lg-12 px-0">
        <div class="input-group">
            <button class="btn btn-outline-secondary" disabled>
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="text" class="form-control py-2"
                placeholder="Search by Token / Account / Contract / Txn Hash / Block"
                aria-label="Text input with 2 dropdown buttons">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">All</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Tokens</a></li>
                <li><a class="dropdown-item" href="#">Account</a></li>
                <li><a class="dropdown-item" href="#">Contracts</a></li>
                <li><a class="dropdown-item" href="#">Txn Hashes</a></li>
                <li><a class="dropdown-item" href="#">Blocks</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row mt-3 mx-0">
    <div class="col-lg-12 px-0">
        <div class="row mt-0 g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Price </p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart5"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Market Cap</p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart6"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div>
                                    <p>1BY10 Supply</p>
                                </div>
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active py-1" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Supply</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link py-1" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Net Increase</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div>
                                    <div id="chart"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <p class="p-2 rounded bg-light">The number of holders totaled
                                    <strong>167,383,723</strong>yesterday
                                </p>
                                <div class="mt-3">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Generated / Burned</p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart7"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Staked</p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        var options = {
            chart: {
                type: 'line',
                width: '100%',
                height: '200px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [125, 91, 70, 60, 49, 50, 35, 40, 30]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var options3 = {
            series: [{
                name: "Holders",
                type: "bar",
                data: [1.2, 1.8, 1.4, 1.6, 1.9, 1.7, 1.3, 1.5, 1.6, 1.8]
            }],
            chart: {
                height: '200px',
                type: "line",
                stacked: false
            },
            plotOptions: {
                bar: {
                    columnWidth: "5%",
                    borderRadius: 5
                }
            },
            stroke: {
                width: [0]
            },
            colors: ["#05d3e6"],
            fill: {
                opacity: [1, 0.3, 1, 1, 0.3]
            },
            xaxis: {
                categories: ["01-10", "01-13", "01-16", "01-19", "01-22", "01-25", "01-28", "01-31",
                    "02-06", "02-09"
                ]
            },
            yaxis: {
                labels: {
                    formatter: (value) => value + "m"
                }
            },
            tooltip: {
                shared: true
            },
            legend: {
                position: "bottom"
            }
        };

        var options5 = {
            series: [{
                name: 'TEAM A',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
            }],
            chart: {
                height: '200px',
                type: 'line',
                stacked: false,
                toolbar: {
                    show: false
                }
            },
            stroke: {
                width: [0, 2, 5],
                curve: 'smooth'
            },
            colors: ['#05d3e6', '#05d3e6'],
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },

            fill: {
                opacity: [0.85, 0.25, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                    stops: [0, 100, 100, 100]
                }
            },
            labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003',
                '07/01/2003',
                '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
            ],
            markers: {
                size: 0
            },
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                title: {
                    text: 'Points',
                }
            },
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;

                    }
                }
            }
        };

        var options6 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '200px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var options7 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '200px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [125, 91, 70, 60, 49, 50, 35, 40, 30]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var options8 = {
            series: [{
                data: [400, 430]
            }],
            chart: {
                type: 'bar',
                height: '200px'
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['50b', '40b'],
            }
        };
        

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();

        var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
        chart5.render();

        var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
        chart6.render();

        var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
        chart7.render();

        var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
        chart8.render();
    });
</script>

@include('web.chunks.footer')