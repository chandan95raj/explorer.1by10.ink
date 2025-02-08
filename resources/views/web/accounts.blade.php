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
        <h4 class="my-4">Accounts</h4>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Number of Accounts</p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Total number of activated accounts on 1BY10">288,103,621</h5>
                            <p class="font-13 text-muted">Total</p>
                        </div>
                        <div>
                            <h5 class="fw-bold text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="New accounts on 1BY10 in the past 24 hours">+166,332</h5>
                            <p class="font-13 text-muted">Last 24h</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">1BY10 Holders</p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">166,964,266</h5>
                            <p class="font-13 text-muted">Holders</p>
                        </div>
                        <div>
                            <h5 class="fw-bold">57.96%</h5>
                            <p class="font-13 text-muted">Percentage</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Active Accounts</p>
                        <a href="#" class="font-13">More <i class="fa-solid fa-chevron-right"
                                style="font-size: 9px !important"></i></a>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3">
                        <div>
                            <h5 class="fw-bold">2,571,145</h5>
                            <p class="font-13 text-muted">Daily Active Accounts</p>
                        </div>
                        <div>
                            <h5 class="fw-bold text-danger">-4.21%</h5>
                            <p class="font-13 text-muted">24h Change</p>
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
                    <p class="text-muted font-13 me-2">The latest <span class="text-dark">10,000</span> records are shown, sorted by decreasing 1BY10
                        balance by
                        default</p>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label text-muted font-13" for="flexSwitchCheckDefault">Hide contract
                            address</label>
                        <button class="btn bg-light border text-dark px-1 py-1 badge font-10" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Turn on to hide smart contract addresses and turn off to view all addresses">?</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table accounts-table">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Account</th>
                                <th class="text-end">1BY10 Balance</th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Amount of 1BY10 held by the account as compared to the total in circulation">?</button>
                                    Percentage</th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Users vote for 1BY10 SRs with 1BY10 Power (TP), which can be obtained by staking 1BY10.">?</button>
                                    1BY10 Power</th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Txn count related to this address">?</button> TXN Count</th>
                                <th class="text-end"><button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Date and time of the last transaction made by the account">?</button>
                                    Age <button
                                        class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                            class="fa-solid fa-right-left"></i></button></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#"> TEjhjg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end"> 10,208,740,373.5 </td>
                                <td class="text-end"> 10.21 % </td>
                                <td class="text-end">0</td>
                                <td class="text-end">641,029</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="#"> DtYgsg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end"> 8,997,562,062.24 </td>
                                <td class="text-end"> 9.00 %</td>
                                <td class="text-end">0</td>
                                <td class="text-end">44,871</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="#"> SOTjg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end">7,864,243,543.42 </td>
                                <td class="text-end"> 8.21 % </td>
                                <td class="text-end">0</td>
                                <td class="text-end">1,319</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> <a href="#"> KHhfsd4safa4554Fffsfasf</a> </td>
                                <td class="text-end"> 2,942,082,546.84 </td>
                                <td class="text-end"> 11.1 % </td>
                                <td class="text-end">0</td>
                                <td class="text-end">3,331</td>
                                <td class="text-end">10 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td> 5 </td>
                                <td><a href="#"> Pjsjf654safa4554Fffsfasf</a> </td>
                                <td class="text-end"> 10,208,740,373.5 </td>
                                <td class="text-end"> 10.21 % </td>
                                <td class="text-end">105,352,202</td>
                                <td class="text-end">7,394</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <a href="#"> TEjhjg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end"> 2,563,109,998.9 </td>
                                <td class="text-end"> 1.21 % </td>
                                <td class="text-end">0</td>
                                <td class="text-end">641,029</td>
                                <td class="text-end">4 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <a href="#"> DtYgsg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end"> 2,423,078,515.77 </td>
                                <td class="text-end"> 2.21 % </td>
                                <td class="text-end">0</td>
                                <td class="text-end">641,029</td>
                                <td class="text-end">10 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <a href="#"> SOTjg4654safa4554Fffsfasf</a>
                                    <button class="btn badge text-primary text-dark border-0"
                                        style="background-color: #d1e7dd;" disabled> JustLend TRX Token</button>
                                </td>
                                <td class="text-end"> 1,999,998,984.64 </td>
                                <td class="text-end"> 10.21 % </td>
                                <td class="text-end">960,000,000</td>
                                <td class="text-end">641,029</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td> 9 </td>
                                <td> <a href="#"> KHhfsd4safa4554Fffsfasf</a> </td>
                                <td class="text-end"> 1,018,783,645.21 </td>
                                <td class="text-end"> 10.21 % </td>
                                <td class="text-end">6,270,868</td>
                                <td class="text-end">1,847</td>
                                <td class="text-end">40 mins 10 secs ago</td>
                            </tr>
                            <tr>
                                <td> 10 </td>
                                <td><a href="#"> Pjsjf654safa4554Fffsfasf</a> </td>
                                <td class="text-end"> 976,481,941.29 </td>
                                <td class="text-end"> 10.21 % </td>
                                <td class="text-end">175,876,316.127</td>
                                <td class="text-end">1,034</td>
                                <td class="text-end">5 mins 10 secs ago</td>
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
