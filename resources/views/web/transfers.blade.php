@include('web.chunks.header')
<style>
    .chart-container {
        display: flex;
        align-items: center;
        flex-wrap: wrap
    }

    #chart {
        width: 200px;
    }


    .legend-item {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .legend-color {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .legend-text {
        font-size: 13px;
    }

    .bold {
        font-weight: bold;
    }

    .apexcharts-datalabel-value {
        font-size: 15px !important;
        font-weight: bold !important;
    }

    tbody tr {
        vertical-align: middle !important;
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
        <h4 class="my-4">Transfers </h4>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-12">
                        <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-13 fw-bold">Transfer Counts</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                                <div>
                                    <h5 class="fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total number of activated accounts on 1BY10">7,357,663,856</h5>
                                    <p class="font-13 text-muted">Total</p>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-success">+4,631,949</h5>
                                    <p class="font-13 text-muted">Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-13 fw-bold">Transfer Volume</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                                <div>
                                    <h5 class="fw-bold">181,784.67b 1BY10</h5>
                                    <p class="font-13">≈$42,591.94b</p>
                                    <p class="font-13 text-muted">Total</p>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-success">+40.15b 1BY10</h5>
                                    <p class="font-13">≈$9.41b</p>
                                    <p class="font-13 text-muted">Yesterday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Transfer Type Distribution </p>
                    </div>
                    <div class="chart-container mt-4">
                        <div id="chart"></div>
                        <div class="legend-container" id="legend"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mx-0 mt-4">
    <div class="col-lg-12 px-0">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="trctw-tab" data-bs-toggle="tab" data-bs-target="#trctw-tab-pane"
                    type="button" role="tab" aria-controls="trctw-tab-pane" aria-selected="true">TRC20
                    Transfers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="onebyten-tab" data-bs-toggle="tab" data-bs-target="#onebyten-tab-pane"
                    type="button" role="tab" aria-controls="onebyten-tab-pane" aria-selected="false">1BY10
                    Transfers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcsev-tab" data-bs-toggle="tab" data-bs-target="#trcsev-tab-pane"
                    type="button" role="tab" aria-controls="trcsev-tab-pane" aria-selected="false">TRC721
                    Transfers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcone-tab" data-bs-toggle="tab" data-bs-target="#trcone-tab-pane"
                    type="button" role="tab" aria-controls="trcone-tab-pane" aria-selected="false">TRC1155
                    Transfers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcten-tab" data-bs-toggle="tab" data-bs-target="#trcten-tab-pane"
                    type="button" role="tab" aria-controls="trcten-tab-pane" aria-selected="false">TRC10
                    Transfers</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="trctw-tab-pane" role="tabpanel" aria-labelledby="trctw-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span>
                                records are displayed.</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hash</th>
                                        <th>Block</th>
                                        <th><button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Age <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>

                                        <th>From</th>
                                        <th>To</th>
                                        <th class="text-end">Amount / Token ID </th>
                                        <th>Token </th>
                                        <th>Result </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="onebyten-tab-pane" role="tabpanel" aria-labelledby="onebyten-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span>
                                records are displayed.</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hash</th>
                                        <th>Block</th>
                                        <th><button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Age <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>

                                        <th>From</th>
                                        <th>To</th>
                                        <th class="text-end">Amount / Token ID </th>
                                        <th>Token </th>
                                        <th>Result </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="trcsev-tab-pane" role="tabpanel" aria-labelledby="trcsev-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span>
                                records are displayed.</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hash</th>
                                        <th>Block</th>
                                        <th><button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Age <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>

                                        <th>From</th>
                                        <th>To</th>
                                        <th class="text-end">Amount / Token ID </th>
                                        <th>Token </th>
                                        <th>Result </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="trcone-tab-pane" role="tabpanel" aria-labelledby="trcone-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span>
                                records are displayed.</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hash</th>
                                        <th>Block</th>
                                        <th><button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Age <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>

                                        <th>From</th>
                                        <th>To</th>
                                        <th class="text-end">Amount / Token ID </th>
                                        <th>Token </th>
                                        <th>Result </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="trcten-tab-pane" role="tabpanel" aria-labelledby="trcten-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span>
                                records are displayed.</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Hash</th>
                                        <th>Block</th>
                                        <th><button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Age <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>

                                        <th>From</th>
                                        <th>To</th>
                                        <th class="text-end">Amount / Token ID </th>
                                        <th>Token </th>
                                        <th>Result </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> Tsf8sadfasdfv154gdf </td>
                                        <td>sdsdfc8sadfasdfv154gdf</td>
                                        <td class="text-end">170,000</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">1,254.906805</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">1e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>4 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>Tasdc8sadfasdfv154gdf</td>
                                        <td class="text-end">500</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0e436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>14 mins 10 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">426</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0ce436cgwudjd87sdfd</a></td>
                                        <td><a href="#">69455121</a></td>
                                        <td>8 mins 20 secs ago</td>
                                        <td> TT8sadfasdfv154gdf </td>
                                        <td>TUc8sadfasdfv154gdf</td>
                                        <td class="text-end">425.83</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted">1By10hgfassf</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn bg-light border text-success px-1 py-1 badge font-10"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var seriesData = [1712199, 30958, 8786, 7790, 5793, 4359, 3570];
    var labelsData = [{
            name: "1By10 Transfers",
            color: "#008FFB"
        },
        {
            name: "TRC10 Transfers",
            color: "#00E396"
        },
        {
            name: "TRC20 Transfers",
            color: "#FEB019"
        },
        {
            name: "TRC721 Transfers",
            color: "#FF4560"
        },
        {
            name: "TRC1155 Transfers",
            color: "#775DD0"
        }
    ];

    var totalCalls = seriesData.reduce((a, b) => a + b, 0);

    var options = {
        series: seriesData,
        chart: {
            type: 'donut'
        },
        labels: labelsData.map(item => item.name),
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        total: {
                            show: true,
                            label: "Total",
                            formatter: function() {
                                return "1.77m\nTransfers";
                            }
                        }
                    }
                }
            }
        },
        legend: {
            show: false
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    var legendHTML = "";
    labelsData.forEach((item, index) => {
        var percentage = ((seriesData[index] / totalCalls) * 100).toFixed(2);
        legendHTML += `
            <div class="legend-item">
                <div class="legend-color" style="background: ${item.color};"></div>
                <div class="legend-text">
                    <span class="bold">${item.name}</span> - ${seriesData[index].toLocaleString()} (${percentage}%)
                </div>
            </div>
        `;
    });
    document.getElementById("legend").innerHTML = legendHTML;

    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@include('web.chunks.footer')
