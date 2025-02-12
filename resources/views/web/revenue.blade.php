@include('web.chunks.header')
<style>
    tbody tr {
        vertical-align: middle !important;
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

<div class="row mx-0 mt-3">
    <div class="col-lg-12 px-0">
        <div class="my-4 d-flex align-items-center flex-wrap gap-2">
            <h4>Total Protocol Revenue</h4>
            <p class="text-muted">* Calculated based on daily Energy and Bandwidth consumption on 1BY10 <a
                    href="#">Rules</a> </p>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-12">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <p class="font-13 text-muted mb-2">Total Protocol Revenue (Yesterday)</p>
                            <h5 class="fw-bold">$9.35m</h5>
                            <p class="font-13 text-danger">-4.20%</p>
                        </div>
                        <div>
                            <p class="font-13 text-muted mb-2">Total Protocol Revenue (30d)</p>
                            <h5 class="fw-bold">$262.10m</h5>
                            <p class="font-13 text-danger">-6.73%</p>
                        </div>
                        <div>
                            <p class="font-13 text-muted mb-2">Total Protocol Revenue (90d)</p>
                            <h5 class="fw-bold">$854.23m</h5>
                            <p class="font-13 text-success">+33.16%</p>
                        </div>
                        <div>
                            <p class="font-13 text-muted mb-2">Total Protocol Revenue (365d)</p>
                            <h5 class="fw-bold">$2.36b</h5>
                            <p class="font-13 text-success">+119.47%</p>
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
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div>
                            <h6 class="fw-bold">Trends <i class="fa-regular fa-star"></i></h6>
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
                                <th class="text-end">Total Protocol Revenue</th>
                                <th class="text-end">Revenue from Staking/Percentage</th>
                                <th class="text-end">Revenue from Burning/Percentage</th>
                                <th class="text-end">1BY10 Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-02-11</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-10</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-09</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-08</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-07</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-06</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-05</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-04</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-03</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-02</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                            <tr>
                                <td>2025-02-01</td>
                                <td class="text-end">$9,347,197	</td>
                                <td class="text-end">$7,554,440 <span class="text-muted">(80.82%)</span></td>
                                <td class="text-end">$1,792,756 <span class="text-muted">(19.18%)</span></td>
                                <td class="text-end">$0.24107</td>
                            </tr>                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var options = {
        series: [{
                name: "Total Protocol Revenue",
                data: [3.2, 3.5, 3.8, 4.0, 4.5, 4.8, 5.0, 5.3, 5.5, 5.8, 6.0, 6.5]
            },
            {
                name: "Revenue from Staking",
                data: [2.0, 2.2, 2.5, 2.7, 3.0, 3.2, 3.5, 3.8, 4.0, 4.3, 4.5, 5.0]
            },
            {
                name: "Revenue from Burning",
                data: [1.0, 1.2, 1.5, 1.7, 1.8, 1.9, 2.0, 2.2, 2.3, 2.5, 2.7, 3.0]
            }
        ],
        chart: {
            type: 'line',
            height: 400
        },
        colors: ['#e74c3c', '#3498db', '#f1c40f'],
        stroke: {
            width: 2,
            curve: 'smooth'
        },
        xaxis: {
            categories: ['2024-03', '2024-04', '2024-05', '2024-06', '2024-07', '2024-08', '2024-09', '2024-10',
                '2024-11', '2024-12', '2025-01'
            ],
            labels: {
                rotate: -45
            }
        },
        yaxis: {
            labels: {
                formatter: function(value) {
                    return "$" + value + "m";
                }
            }
        },
        legend: {
            position: 'bottom'
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
@include('web.chunks.footer')
