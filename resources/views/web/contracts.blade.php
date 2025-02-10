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
        <h4 class="my-4">Contracts</h4>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-12">
                        <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-13 fw-bold">Contracts</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                                <div>
                                    <h5 class="fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total number of activated accounts on 1BY10">288,103,621</h5>
                                    <p class="font-13 text-muted">Total</p>
                                </div>
                                <div>
                                    <h5 class="fw-bold text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="New accounts on 1BY10 in the past 24 hours">+3,304</h5>
                                    <p class="font-13 text-muted">Last 24h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="font-13 fw-bold">Verified Contracts</p>
                                <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                        style="font-size: 9px !important"></i></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                                <div>
                                    <h5 class="fw-bold">130,037</h5>
                                    <p class="font-13 text-muted">Total</p>
                                </div>
                                <div>
                                    <h5 class="fw-bold">+29</h5>
                                    <p class="font-13 text-muted">Last 24h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">
                            24h Top Contracts
                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Top 7 smart contracts by the number of calls in the past 24 hours across the network">?</button>
                        </p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
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
                <button class="nav-link active" id="verified-tab" data-bs-toggle="tab"
                    data-bs-target="#verified-tab-pane" type="button" role="tab" aria-controls="verified-tab-pane"
                    aria-selected="true">Verified Contracts</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="allcontracts-tab" data-bs-toggle="tab"
                    data-bs-target="#allcontracts-tab-pane" type="button" role="tab"
                    aria-controls="allcontracts-tab-pane" aria-selected="false">All Contracts</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="verified-tab-pane" role="tabpanel"
                aria-labelledby="verified-tab" tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2"><span class="text-dark">130,037</span> contracts in
                                total</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Account</th>
                                        <th>Contract Name</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Number of times this smart contract is called for transactions">?</button>
                                            Number of Calls
                                        </th>
                                        <th class="text-end">1BY10 Balance
                                        </th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Solidity compiler version">?</button>
                                            Version
                                        </th>
                                        <th class="text-end">Licence</th>
                                        <th class="text-end">Created on</th>
                                        <th class="text-end">Verified on</th>
                                        <th class="text-end">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i>  </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="allcontracts-tab-pane" role="tabpanel" aria-labelledby="allcontracts-tab"
                tabindex="0">
                <div class="card border-top-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2"><span class="text-dark">530,922,037</span> contracts in
                                total</p>
                            <div>
                                <input type="search" class="form-control"
                                    placeholder="Search by Contract Account / Name">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Account</th>
                                        <th>Contract Name</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Number of times this smart contract is called for transactions">?</button>
                                            Number of Calls
                                        </th>
                                        <th class="text-end">1BY10 Balance
                                        </th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Solidity compiler version">?</button>
                                            Version
                                        </th>
                                        <th class="text-end">Licence</th>
                                        <th class="text-end">Created on</th>
                                        <th class="text-end">Verified on</th>
                                        <th class="text-end">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td> TetherToken </td>
                                        <td class="text-end"> 6,716,510/95,239</td>
                                        <td class="text-end">1,011,224.373851</td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2019-04-16</td>
                                        <td class="text-end">2019-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"> <i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Constructor Arguments"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> Trfgasdj54fsfcsaFd</a> </td>
                                        <td> TrxChainInsura </td>
                                        <td class="text-end">38,473,973</td>
                                        <td class="text-end">17.126279 </td>
                                        <td class="text-end">0.5.12</td>
                                        <td class="text-end">MIT</td>
                                        <td class="text-end">2022-04-16</td>
                                        <td class="text-end">2024-12-04</td>
                                        <td class="text-end"><button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </td>
                                    </tr>
                                    <tr>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> TVjfgdfg6545FGGgfh</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> KLV Token</button></td>
                                        <td> Klever </td>
                                        <td class="text-end">16,434,541</td>
                                        <td class="text-end">24,978.434496 </td>
                                        <td class="text-end">0.4.25</td>
                                        <td class="text-end">None</td>
                                        <td class="text-end">2021-04-26</td>
                                        <td class="text-end">2023-12-06</td>
                                        <td class="text-end">
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" > <i
                                                    class="fa-solid fa-bolt" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="Optimization Enabled"></i> </button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;"><i
                                                    class="fa-solid fa-wrench" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Constructor Arguments"></i></button>
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
            name: "USDT Token",
            color: "#008FFB"
        },
        {
            name: "SUN: SunPumpSwap",
            color: "#00E396"
        },
        {
            name: "PAYN Token",
            color: "#FEB019"
        },
        {
            name: "TUE25q925... BNexTJc",
            color: "#FF4560"
        },
        {
            name: "SUN: SunSwap Smart",
            color: "#775DD0"
        },
        {
            name: "TPwezUWp... NCEE5s",
            color: "#546E7A"
        },
        {
            name: "SUN: SunSwap V2",
            color: "#26a69a"
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
                                return "1.77m\nCalls";
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
                    <span class="bold">${item.name}</span> - ${seriesData[index].toLocaleString()} calls (${percentage}%)
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
