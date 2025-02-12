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
                                    <h6 class="fw-bold">Transaction Trend <i class="fa-regular fa-star"></i></h6>
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
                                The Transaction Trend chart shows the number of daily transactions on 1BY10. This
                                indicator reflects how busy and high-volume the blockchain service is.
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">Highlight</p>
                            <p class="font-13 mt-1">
                                On average, the daily transactions on 1BY10 are <strong>6.90m</strong> in the last 30
                                days.
                            </p>
                            <p class="font-13 mt-1">
                                The number of transactions decreased by <strong>4.5%</strong> in the last 30 days.
                            </p>
                            <hr>
                        </div>
                        <div>
                            <p class="font-13 text-muted">You may be interested in</p>
                            <p class="font-13 mt-1">
                                Contract Calls <i class="fa-solid fa-link"></i>
                            </p>
                            <p class="font-13 mt-1">
                                Cumulaative Transactions <i class="fa-solid fa-link"></i>
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
                                <th  class="text-end">Total Txns</th>
                                <th class="text-end">Smart Contracts
                                    Triggered</th>
                                <th class="text-end">1BY10 Transfers</th>
                                <th class="text-end">TRC10 Transfers
                                </th>
                                <th class="text-end">USDT Transfers</th>
                                <th class="text-end">Staking/Unstaking
                                </th>
                                <th class="text-end">Voting</th>
                                <th class="text-end">Others</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>2025-02-11</span></td>
                                <td class="text-end">7,640,147</td>
                                <td class="text-end">2,157,790</td>
                                <td class="text-end">3,232,164</td>
                                <td class="text-end">263,575</td>
                                <td class="text-end">2,073,769</td>
                                <td class="text-end">3,417</td>
                                <td class="text-end">2,619</td>
                                <td class="text-end">1,980,582</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-10</span></td>
                                <td class="text-end">7,720,949</td>
                                <td class="text-end">2,204,708</td>
                                <td class="text-end">3,236,175</td>
                                <td class="text-end">264,336</td>
                                <td class="text-end">2,103,281</td>
                                <td class="text-end">3,541</td>
                                <td class="text-end">2,640</td>
                                <td class="text-end">2,009,549</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-09</span></td>
                                <td class="text-end">6,326,456</td>
                                <td class="text-end">1,696,659</td>
                                <td class="text-end">2,691,275</td>
                                <td class="text-end">246,053</td>
                                <td class="text-end">1,608,487</td>
                                <td class="text-end">3,253</td>
                                <td class="text-end">2,261</td>
                                <td class="text-end">1,686,955</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-08</span></td>
                                <td class="text-end">6,410,541</td>
                                <td class="text-end">1,745,524</td>
                                <td class="text-end">2,678,518</td>
                                <td class="text-end">258,453</td>
                                <td class="text-end">1,693,980</td>
                                <td class="text-end">3,167</td>
                                <td class="text-end">2,540</td>
                                <td class="text-end">1,722,339</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-07</span></td>
                                <td class="text-end">7,010,579</td>
                                <td class="text-end">2,056,763</td>
                                <td class="text-end">2,820,613</td>
                                <td class="text-end">275,671</td>
                                <td class="text-end">1,985,955</td>
                                <td class="text-end">3,298</td>
                                <td class="text-end">2,575</td>
                                <td class="text-end">1,851,659</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-06</span></td>
                                <td class="text-end">7,057,766</td>
                                <td class="text-end">2,034,208</td>
                                <td class="text-end">2,918,240</td>
                                <td class="text-end">283,112</td>
                                <td class="text-end">1,967,515</td>
                                <td class="text-end">3,408</td>
                                <td class="text-end">2,292</td>
                                <td class="text-end">1,816,506</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-05</span></td>
                                <td class="text-end">7,123,277</td>
                                <td class="text-end">2,055,950</td>
                                <td class="text-end">2,953,405</td>
                                <td class="text-end">290,614</td>
                                <td class="text-end">1,993,585</td>
                                <td class="text-end">3,442</td>
                                <td class="text-end">2,477</td>
                                <td class="text-end">1,817,389</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-04</span></td>
                                <td class="text-end">6,937,594</td>
                                <td class="text-end">2,013,427</td>
                                <td class="text-end">2,857,694</td>
                                <td class="text-end">266,511</td>
                                <td class="text-end">1,939,575</td>
                                <td class="text-end">3,474</td>
                                <td class="text-end">2,742</td>
                                <td class="text-end">1,793,746</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-03</span></td>
                                <td class="text-end">7,541,394</td>
                                <td class="text-end">2,269,131</td>
                                <td class="text-end">3,122,255</td>
                                <td class="text-end">272,878</td>
                                <td class="text-end">2,167,561</td>
                                <td class="text-end">3,735</td>
                                <td class="text-end">2,660</td>
                                <td class="text-end">1,870,735</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-02</span></td>
                                <td class="text-end">6,129,323</td>
                                <td class="text-end">1,707,363</td>
                                <td class="text-end">2,581,829</td>
                                <td class="text-end">261,068</td>
                                <td class="text-end">1,635,395</td>
                                <td class="text-end">3,422</td>
                                <td class="text-end">2,509</td>
                                <td class="text-end">1,573,132</td>
                            </tr>
                            <tr>
                                <td><span>2025-02-01</span></td>
                                <td class="text-end">5,649,643</td>
                                <td class="text-end">1,637,839</td>
                                <td class="text-end">2,305,188</td>
                                <td class="text-end">176,590</td>
                                <td class="text-end">1,580,706</td>
                                <td class="text-end">3,318</td>
                                <td class="text-end">2,519</td>
                                <td class="text-end">1,524,189</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-31</span></td>
                                <td class="text-end">5,984,461</td>
                                <td class="text-end">1,815,668</td>
                                <td class="text-end">2,468,516</td>
                                <td class="text-end">184,159</td>
                                <td class="text-end">1,752,189</td>
                                <td class="text-end">3,613</td>
                                <td class="text-end">2,626</td>
                                <td class="text-end">1,509,879</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-30</span></td>
                                <td class="text-end">5,736,626</td>
                                <td class="text-end">1,698,845</td>
                                <td class="text-end">2,436,838</td>
                                <td class="text-end">183,217</td>
                                <td class="text-end">1,649,617</td>
                                <td class="text-end">3,264</td>
                                <td class="text-end">2,326</td>
                                <td class="text-end">1,412,136</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-29</span></td>
                                <td class="text-end">5,479,514</td>
                                <td class="text-end">1,613,226</td>
                                <td class="text-end">2,320,916</td>
                                <td class="text-end">184,824</td>
                                <td class="text-end">1,560,123</td>
                                <td class="text-end">3,166</td>
                                <td class="text-end">2,266</td>
                                <td class="text-end">1,355,116</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-28</span></td>
                                <td class="text-end">6,104,734</td>
                                <td class="text-end">1,740,531</td>
                                <td class="text-end">2,658,776</td>
                                <td class="text-end">193,225</td>
                                <td class="text-end">1,687,615</td>
                                <td class="text-end">3,375</td>
                                <td class="text-end">2,342</td>
                                <td class="text-end">1,506,485</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-27</span></td>
                                <td class="text-end">6,971,974</td>
                                <td class="text-end">2,142,795</td>
                                <td class="text-end">2,778,548</td>
                                <td class="text-end">201,394</td>
                                <td class="text-end">2,070,192</td>
                                <td class="text-end">3,458</td>
                                <td class="text-end">2,386</td>
                                <td class="text-end">1,843,393</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-26</span></td>
                                <td class="text-end">5,763,659</td>
                                <td class="text-end">1,643,339</td>
                                <td class="text-end">2,410,656</td>
                                <td class="text-end">179,224</td>
                                <td class="text-end">1,589,725</td>
                                <td class="text-end">3,561</td>
                                <td class="text-end">2,455</td>
                                <td class="text-end">1,524,424</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-25</span></td>
                                <td class="text-end">6,194,395</td>
                                <td class="text-end">1,794,402</td>
                                <td class="text-end">2,574,644</td>
                                <td class="text-end">185,517</td>
                                <td class="text-end">1,740,855</td>
                                <td class="text-end">3,380</td>
                                <td class="text-end">2,368</td>
                                <td class="text-end">1,634,084</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-24</span></td>
                                <td class="text-end">6,799,354</td>
                                <td class="text-end">2,113,233</td>
                                <td class="text-end">2,658,532</td>
                                <td class="text-end">199,484</td>
                                <td class="text-end">2,046,792</td>
                                <td class="text-end">3,986</td>
                                <td class="text-end">2,762</td>
                                <td class="text-end">1,821,357</td>
                            </tr>
                            <tr>
                                <td><span>2025-01-23</span></td>
                                <td class="text-end">6,878,188</td>
                                <td class="text-end">2,144,939</td>
                                <td class="text-end">2,671,909</td>
                                <td class="text-end">202,881</td>
                                <td class="text-end">2,070,997</td>
                                <td class="text-end">4,040</td>
                                <td class="text-end">2,496</td>
                                <td class="text-end">1,851,923</td>
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
