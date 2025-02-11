@include('web.chunks.header')
<style>
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
        <div class="my-4 d-flex align-items-center justify-content-between gap-3">
            <h4>Token Tracker</h4>
            <a href="#" class="btn btn-primary btn-sm">Record Token</a>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-3">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Tokens <button
                                class="btn bg-light border text-dark px-1 py-1 badge font-10" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="Total number of tokens issued on 1BY10">?</button>
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">178,879</h5>
                            <p class="font-13 text-muted">Total</p>
                        </div>
                        <div>
                            <h5 class="fw-bold text-success">+184</h5>
                            <p class="font-13 text-muted">Last 7 Days</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Distribution <button
                                class="btn bg-light border text-dark px-1 py-1 badge font-10" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="Distribution of TRC10, TRC20, TRC721 and TRC1155 tokens issued on 1BY10">?</button>
                        </p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">173,654</h5>
                            <p class="font-13 text-muted">TRC20</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">1,716</h5>
                            <p class="font-13 text-muted">TRC721</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">32</h5>
                            <p class="font-13 text-muted">TRC1155</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">3,477</h5>
                            <p class="font-13 text-muted">TRC10</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">On-Chain Assets <button
                                class="btn bg-light border text-dark px-1 py-1 badge font-10" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                data-bs-title="Total value of assets with a 24h trading volume of over $1 million">?</button>
                        </p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-1 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">$94,874,617,726</h5>
                            <p class="font-13 text-muted">Total Value</p>
                        </div>
                        <div>
                            <div id="chart"></div>
                        </div>
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
                    type="button" role="tab" aria-controls="trctw-tab-pane" aria-selected="true">TRC20</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcsev-tab" data-bs-toggle="tab" data-bs-target="#trcsev-tab-pane"
                    type="button" role="tab" aria-controls="trcsev-tab-pane" aria-selected="false">TRC721</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcone-tab" data-bs-toggle="tab" data-bs-target="#trcone-tab-pane"
                    type="button" role="tab" aria-controls="trcone-tab-pane"
                    aria-selected="false">TRC1155</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="trcten-tab" data-bs-toggle="tab" data-bs-target="#trcten-tab-pane"
                    type="button" role="tab" aria-controls="trcten-tab-pane"
                    aria-selected="false">TRC10</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="trctw-tab-pane" role="tabpanel" aria-labelledby="trctw-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2"><span class="text-dark">173,655</span> tokens in total
                                (Tokens with Suspicious and Unsafe reputation are not displayed.)</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Token </th>
                                        <th class="text-end">Price</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="24 hour change compared with TRX">?</button>
                                            Change(24h)
                                        </th>
                                        <th class="text-end">Volume(24h)</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="A token's market cap = circulating supply * price. Tokens with a 24h trading volume less than 0.1% of its market cap will be excluded from the calculation.">?</button>
                                            Circulating Marketing Cap
                                        </th>
                                        <th class="text-end">Token Holder</th>
                                        <th>Operation </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$1.0001</td>
                                        <td class="text-end"><span class="text-success">+44.74</span></td>
                                        <td class="text-end"> $292345 </td>
                                        <td class="text-end"> $2923564545</td>
                                        <td class="text-end"> 3,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$5.0001</td>
                                        <td class="text-end"><span class="text-success">+54.74</span></td>
                                        <td class="text-end"> $45345 </td>
                                        <td class="text-end"> $6783564545</td>
                                        <td class="text-end"> 23,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$15.0001</td>
                                        <td class="text-end"><span class="text-success">+14.74</span></td>
                                        <td class="text-end"> $154345 </td>
                                        <td class="text-end"> $9543564545</td>
                                        <td class="text-end"> 500,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$11.0001</td>
                                        <td class="text-end"><span class="text-success">+4.74</span></td>
                                        <td class="text-end"> $9645 </td>
                                        <td class="text-end"> $87864545</td>
                                        <td class="text-end"> 123,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$55.0001</td>
                                        <td class="text-end"><span class="text-success">+34.74</span></td>
                                        <td class="text-end"> $145345 </td>
                                        <td class="text-end"> $852564545</td>
                                        <td class="text-end"> 324,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$45.0001</td>
                                        <td class="text-end"><span class="text-success">+63.74</span></td>
                                        <td class="text-end"> $7154345 </td>
                                        <td class="text-end"> $945543564545</td>
                                        <td class="text-end"> 100,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$1.0001</td>
                                        <td class="text-end"><span class="text-success">+44.74</span></td>
                                        <td class="text-end"> $292345 </td>
                                        <td class="text-end"> $2923564545</td>
                                        <td class="text-end"> 3,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$5.0001</td>
                                        <td class="text-end"><span class="text-success">+54.74</span></td>
                                        <td class="text-end"> $45345 </td>
                                        <td class="text-end"> $6783564545</td>
                                        <td class="text-end"> 23,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$15.0001</td>
                                        <td class="text-end"><span class="text-success">+14.74</span></td>
                                        <td class="text-end"> $154345 </td>
                                        <td class="text-end"> $9543564545</td>
                                        <td class="text-end"> 500,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$11.0001</td>
                                        <td class="text-end"><span class="text-success">+4.74</span></td>
                                        <td class="text-end"> $9645 </td>
                                        <td class="text-end"> $87864545</td>
                                        <td class="text-end"> 123,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$55.0001</td>
                                        <td class="text-end"><span class="text-success">+34.74</span></td>
                                        <td class="text-end"> $145345 </td>
                                        <td class="text-end"> $852564545</td>
                                        <td class="text-end"> 324,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$45.0001</td>
                                        <td class="text-end"><span class="text-success">+63.74</span></td>
                                        <td class="text-end"> $7154345 </td>
                                        <td class="text-end"> $945543564545</td>
                                        <td class="text-end"> 100,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
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
                            <p class="text-muted font-13 me-2"><span class="text-dark"> 1,716 </span> tokens in total
                                (Tokens with Suspicious and Unsafe reputation are not displayed.)</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Token </th>
                                        <th class="text-end"> Transfer Count(24h)</th>
                                        <th class="text-end">Token Holder</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">250</td>
                                        <td class="text-end"> 29</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 30,564 </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 24,931 </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin issue
                                                        by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">150</td>
                                        <td class="text-end"> 26,545 </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 243,044 </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">1</td>
                                        <td class="text-end"> 3,084 </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">6</td>
                                        <td class="text-end"> 2,56☺ </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">2</td>
                                        <td class="text-end"> 9,26☺ </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 7,26☺ </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 4,86☺ </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">1</td>
                                        <td class="text-end"> 6,96☺ </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">9</td>
                                        <td class="text-end"> 1,96☺ </td>
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
                            <p class="text-muted font-13 me-2"><span class="text-dark">32</span>
                                tokens in total
                                (Tokens with Suspicious and Unsafe reputation are not displayed.)</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Token </th>
                                        <th class="text-end"> Transfer Count(24h)</th>
                                        <th class="text-end">Token Holder</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">250</td>
                                        <td class="text-end"> 29</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 30,564 </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 24,931 </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin issue
                                                        by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">150</td>
                                        <td class="text-end"> 26,545 </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 243,044 </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">1</td>
                                        <td class="text-end"> 3,084 </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">6</td>
                                        <td class="text-end"> 2,56☺ </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">2</td>
                                        <td class="text-end"> 9,26☺ </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 7,26☺ </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">--</td>
                                        <td class="text-end"> 4,86☺ </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">1</td>
                                        <td class="text-end"> 6,96☺ </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">9</td>
                                        <td class="text-end"> 1,96☺ </td>
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
                            <p class="text-muted font-13 me-2"><span class="text-dark">3,477 </span>
                                tokens in total
                                (Tokens with Suspicious and Unsafe reputation are not displayed.)</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Token </th>
                                        <th class="text-end">Price</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="24 hour change compared with TRX">?</button>
                                            Change(24h)
                                        </th>
                                        <th class="text-end">Volume(24h)</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="A token's market cap = circulating supply * price. Tokens with a 24h trading volume less than 0.1% of its market cap will be excluded from the calculation.">?</button>
                                            Circulating Marketing Cap
                                        </th>
                                        <th class="text-end">Token Holder</th>
                                        <th>Operation </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$1.0001</td>
                                        <td class="text-end"><span class="text-success">+44.74</span></td>
                                        <td class="text-end"> $292345 </td>
                                        <td class="text-end"> $2923564545</td>
                                        <td class="text-end"> 3,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$5.0001</td>
                                        <td class="text-end"><span class="text-success">+54.74</span></td>
                                        <td class="text-end"> $45345 </td>
                                        <td class="text-end"> $6783564545</td>
                                        <td class="text-end"> 23,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$15.0001</td>
                                        <td class="text-end"><span class="text-success">+14.74</span></td>
                                        <td class="text-end"> $154345 </td>
                                        <td class="text-end"> $9543564545</td>
                                        <td class="text-end"> 500,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$11.0001</td>
                                        <td class="text-end"><span class="text-success">+4.74</span></td>
                                        <td class="text-end"> $9645 </td>
                                        <td class="text-end"> $87864545</td>
                                        <td class="text-end"> 123,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$55.0001</td>
                                        <td class="text-end"><span class="text-success">+34.74</span></td>
                                        <td class="text-end"> $145345 </td>
                                        <td class="text-end"> $852564545</td>
                                        <td class="text-end"> 324,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$45.0001</td>
                                        <td class="text-end"><span class="text-success">+63.74</span></td>
                                        <td class="text-end"> $7154345 </td>
                                        <td class="text-end"> $945543564545</td>
                                        <td class="text-end"> 100,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/usdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Tether (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$1.0001</td>
                                        <td class="text-end"><span class="text-success">+44.74</span></td>
                                        <td class="text-end"> $292345 </td>
                                        <td class="text-end"> $2923564545</td>
                                        <td class="text-end"> 3,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10 (USDT)</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$5.0001</td>
                                        <td class="text-end"><span class="text-success">+54.74</span></td>
                                        <td class="text-end"> $45345 </td>
                                        <td class="text-end"> $6783564545</td>
                                        <td class="text-end"> 23,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$15.0001</td>
                                        <td class="text-end"><span class="text-success">+14.74</span></td>
                                        <td class="text-end"> $154345 </td>
                                        <td class="text-end"> $9543564545</td>
                                        <td class="text-end"> 500,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$11.0001</td>
                                        <td class="text-end"><span class="text-success">+4.74</span></td>
                                        <td class="text-end"> $9645 </td>
                                        <td class="text-end"> $87864545</td>
                                        <td class="text-end"> 123,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$55.0001</td>
                                        <td class="text-end"><span class="text-success">+34.74</span></td>
                                        <td class="text-end"> $145345 </td>
                                        <td class="text-end"> $852564545</td>
                                        <td class="text-end"> 324,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted font-12">USDT is the official stablecoin
                                                        issued <br> by Tether on the 1BY10 network.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">$45.0001</td>
                                        <td class="text-end"><span class="text-success">+63.74</span></td>
                                        <td class="text-end"> $7154345 </td>
                                        <td class="text-end"> $945543564545</td>
                                        <td class="text-end"> 100,564,545</td>
                                        <td>
                                            <button
                                                class="btn bg-light border text-danger px-1 py-1 badge font-10">Trade</button>
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
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: "area",
                height: '80px',
                width: '100px',
                sparkline: {
                    enabled: true
                }
            },
            series: [{
                data: [10, 15, 14, 18, 16, 14, 12, 17, 19, 25] // Adjust values as needed
            }],
            stroke: {
                curve: "smooth"
            },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 0.4,
                    opacityFrom: 0.6,
                    opacityTo: 0.1
                }
            },
            colors: ["#28a745"],
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
