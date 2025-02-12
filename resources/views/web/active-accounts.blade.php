@include('web.chunks.header')
<style>
    tbody tr {
        vertical-align: middle !important;
    }

    tbody tr td {
        font-size: 13px !important;
    }

    .filter-buttons {
        margin-bottom: 10px;
    }

    .filter-buttons button {
        padding: 3px 8px;
        margin: 2px;
        border: 1px solid #ccc;
        background: #f8f8f8;
        cursor: pointer;
        border-radius: 4px;
    }

    .filter-buttons button.active {
        background: #05d3e6;
        color: white;
        border-color: #05d3e6;
    }
</style>
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

<div class="row mx-0 mt-4">
    <div class="col-lg-12 px-0">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div>
                                    <h6 class="fw-bold">Active Accounts <i class="fa-regular fa-star"></i></h6>
                                </div>
                            </div>
                            <div>
                                <div class="filter-buttons">
                                    <button onclick="updateChart(30)" class="active">1M</button>
                                    <button onclick="updateChart(90)">3M</button>
                                    <button onclick="updateChart(365)">1Y</button>
                                    <button onclick="updateChart(1000)">ALL</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div id="chart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3 mt-lg-0">
                        <div>
                            <p class="font-13 text-muted">About</p>
                            <p class="font-13 mt-1">
                                The Active Accounts chart shows the number of accounts that have transfer records during
                                the specified period on 1BY10, including wallet accounts and contract accounts.
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">Highlight</p>
                            <p class="font-13 mt-1">
                                On average, the daily active accounts on 1BY10 are 2.59m in the past 1 month.
                            </p>
                            <p class="font-13 mt-1">
                                In 2025-01, daily active accounts on 1BY10 are up by <strong>4.12%</strong> compared with that in 2024-12.                                
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">You may be interested in</p>
                            <p class="font-13 mt-1">
                                Total Accounts <i class="fa-solid fa-link"></i>
                            </p>
                            <p class="font-13 mt-1">
                                1BY10 Holders <i class="fa-solid fa-link"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-4">
    <div class="col-lg-12 px-0">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h6>List</h6>
                    <div>
                        <button class="btn bg-light"><i class="fa-solid fa-bars"></i></button>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table accounts-table">
                        <thead class="table-light">
                            <tr>
                                <th>Date (UTC)</th>
                                <th class="text-end">Active Accounts</th>
                                <th class="text-end">Changed By</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-02-11</td>
                                <td class="text-end">2,843,743</td>
                                <td class="text-end text-danger">-0.53 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">2,858,774</td>
                                <td class="text-end text-success">+20.32 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-09</td>
                                <td class="text-end">2,376,030</td>
                                <td class="text-end text-danger">-0.79 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-08</td>
                                <td class="text-end">2,394,856</td>
                                <td class="text-end text-danger">-6.86 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-07</td>
                                <td class="text-end">2,571,145</td>
                                <td class="text-end text-danger">-4.21 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-06</td>
                                <td class="text-end">2,684,046</td>
                                <td class="text-end text-success">+0.60 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-05</td>
                                <td class="text-end">2,668,096</td>
                                <td class="text-end text-success">+2.00 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-04</td>
                                <td class="text-end">2,615,712</td>
                                <td class="text-end text-danger">-7.92 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-03</td>
                                <td class="text-end">2,840,612</td>
                                <td class="text-end text-success">+18.47 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-02</td>
                                <td class="text-end">2,397,735</td>
                                <td class="text-end text-success">+12.36 %</td>
                            </tr>
                            <tr>
                                <td>2025-02-01</td>
                                <td class="text-end">2,133,935</td>
                                <td class="text-end text-danger">-8.49 %</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            series: [{
                name: 'TEAM A',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
            }],
            chart: {
                height: '350px',
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

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();


        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@include('web.chunks.footer')
