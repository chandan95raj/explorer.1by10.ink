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
                                    <h6 class="fw-bold">1BY10 Supply <i class="fa-regular fa-star"></i></h6>
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
                            <div>
                                <div class="filter-buttons">
                                    <button onclick="updateChart(30)" class="active">1M</button>
                                    <button onclick="updateChart(90)">3M</button>
                                    <button onclick="updateChart(365)">1Y</button>
                                    <button onclick="updateChart(1000)">ALL</button>
                                </div>
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
                    <div class="col-lg-3 mt-3 mt-lg-0">
                        <div>
                            <p class="font-13 text-muted">About</p>
                            <p class="font-13 mt-1">
                                The 1BY10 Supply chart shows the historical supply of 1BY10. Trend of supply (inflation or
                                deflation) is one of the key factors affecting the price of a cryptocurrency.
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">Highlight</p>
                            <p class="font-13 mt-1">
                                The supply of 1BY10 was <strong>86.11b</strong> yesterday.
                            </p>
                            <p class="font-13 mt-1">
                                1BY10 is in deflation with an annualized increase rate of <strong>-2.84%</strong> for the period from
                                2019-12-29 (UTC) to 2025-02-10 (UTC).
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">You may be interested in</p>
                            <p class="font-13 mt-1">
                                1BY10 Generated / Burned
                            </p>
                            <p class="font-13 mt-1">
                                1BY10 Staked
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
                                <th class="text-end">1BY10 Supply</th>
                                <th class="text-end">Daily Supply Change</th>
                                <th class="text-end">Net Increase</th>
                                <th class="text-end">1BY10 Generated</th>
                                <th class="text-end">1BY10 Burned</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-09</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-08</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-07</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-06</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-05</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-04</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-03</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-02</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-01</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
                            </tr>
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">86,105,417,970</td>
                                <td class="text-end">-0.0036%</td>
                                <td class="text-end">-3,085,041</td>
                                <td class="text-end">5,067,392</td>
                                <td class="text-end">8,152,433</td>
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
            chart: {
                type: 'line',
                width: '100%',
                height: '400px',
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
                height: '400px',
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

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();


        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@include('web.chunks.footer')
