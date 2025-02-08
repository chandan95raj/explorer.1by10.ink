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

<div class="row mx-0 mt-3">
    <div class="col-lg-12 px-0">
        <h4 class="my-4">Blocks</h4>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Number of Blocks</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">288,103,621</h5>
                            <p class="font-13 text-muted">Latest</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">+166,332</h5>
                            <p class="font-13 text-muted">Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Block Rewards</p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">10.4b 1BY10</h5>
                            <p class="font-13">≈$2,423,103,622.63</p>
                            <p class="font-13 text-muted">Total</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">5,067,392 1BY10</h5>
                            <p class="font-13">≈$1,180,337.88</p>
                            <p class="font-13 text-muted">Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Stats on Burned 1BY10</p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">14.29b 1BY10</h5>
                            <p class="font-13">≈$3,329,309,312.1</p>
                            <p class="font-13 text-muted">Total</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">7,546,448 1BY10</h5>
                            <p class="font-13">≈$1,757,779.6</p>
                            <p class="font-13 text-muted">Yesterday</p>
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
                <div class="d-flex flex-wrap gap-3 mb-3 align-items-center">
                    <p class="text-muted font-13 me-2">Only the first <span class="text-dark">10,000</span> records are displayed./p>
                </div>
                <div class="table-responsive">
                    <table class="table accounts-table">
                        <thead class="table-light">
                            <tr>
                                <th>Block</th>
                                <th><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Date and time of the last transaction made by the account">?</button>
                                    Age <button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                            class="fa-solid fa-right-left"></i></button>
                                </th>
                                <th>Producer</th>
                                <th class="text-end"> TXN Count</th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total bandwidth and energy consumed by transactions in the block">?</button>
                                    Consumed Energy / Bandwidth
                                </th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total 1BY10 burned in this block">?</button>
                                    Burned 1BY10
                                </th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="16 TRX as block rewards, and 160 1BY10 as voting rewards">?</button>
                                    Block Rewards
                                </th>
                                <th class="text-end">Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>4 mins 10 secs ago</td>
                                <td><a href="#"> Crypto Innovation Fund</a></td>
                                <td class="text-end"> 328 </td>
                                <td class="text-end"> 6,716,510/95,239</td>
                                <td class="text-end">174.38201</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455120</a></td>
                                <td>5 mins 10 secs ago</td>
                                <td><a href="#">BlockchainOrg</a></td>
                                <td class="text-end"> 281 </td>
                                <td class="text-end"> 4,307,252/80,377</td>
                                <td class="text-end">144.91757</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>1 mins 10 secs ago</td>
                                <td><a href="#"> metaverse home</a></td>
                                <td class="text-end"> 285 </td>
                                <td class="text-end"> 5,677,456/83,594</td>
                                <td class="text-end">122.54278</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>14 mins 10 secs ago</td>
                                <td><a href="#"> JD Investment</a></td>
                                <td class="text-end"> 411 </td>
                                <td class="text-end">10,402,418/119,789 </td>
                                <td class="text-end">323.2106</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>17 mins 10 secs ago</td>
                                <td><a href="#"> Crypto Innovation Fund</a></td>
                                <td class="text-end"> 328 </td>
                                <td class="text-end"> 6,716,510/95,239</td>
                                <td class="text-end">174.38201</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>1 mins 10 secs ago</td>
                                <td><a href="#"> metaverse home</a></td>
                                <td class="text-end"> 285 </td>
                                <td class="text-end"> 5,677,456/83,594</td>
                                <td class="text-end">122.54278</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>14 mins 10 secs ago</td>
                                <td><a href="#"> JD Investment</a></td>
                                <td class="text-end"> 411 </td>
                                <td class="text-end">10,402,418/119,789 </td>
                                <td class="text-end">323.2106</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>17 mins 10 secs ago</td>
                                <td><a href="#"> Crypto Innovation Fund</a></td>
                                <td class="text-end"> 328 </td>
                                <td class="text-end"> 6,716,510/95,239</td>
                                <td class="text-end">174.38201</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>1 mins 10 secs ago</td>
                                <td><a href="#"> metaverse home</a></td>
                                <td class="text-end"> 285 </td>
                                <td class="text-end"> 5,677,456/83,594</td>
                                <td class="text-end">122.54278</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>14 mins 10 secs ago</td>
                                <td><a href="#"> JD Investment</a></td>
                                <td class="text-end"> 411 </td>
                                <td class="text-end">10,402,418/119,789 </td>
                                <td class="text-end">323.2106</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>17 mins 10 secs ago</td>
                                <td><a href="#"> Crypto Innovation Fund</a></td>
                                <td class="text-end"> 328 </td>
                                <td class="text-end"> 6,716,510/95,239</td>
                                <td class="text-end">174.38201</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>14 mins 10 secs ago</td>
                                <td><a href="#"> JD Investment</a></td>
                                <td class="text-end"> 411 </td>
                                <td class="text-end">10,402,418/119,789 </td>
                                <td class="text-end">323.2106</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
                            </tr>
                            <tr>
                                <td><a href="#">69455121</a></td>
                                <td>17 mins 10 secs ago</td>
                                <td><a href="#"> Crypto Innovation Fund</a></td>
                                <td class="text-end"> 328 </td>
                                <td class="text-end"> 6,716,510/95,239</td>
                                <td class="text-end">174.38201</td>
                                <td class="text-end">176 1BY10</td>
                                <td class="text-end">UNCONFIRMED</td>
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
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@include('web.chunks.footer')
