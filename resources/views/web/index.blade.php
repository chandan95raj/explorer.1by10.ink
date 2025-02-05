@include('web.chunks.header')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<style>
    .apexcharts-zoom-icon.apexcharts-selected svg {
        fill: #05d3e6 !important;
    }

    .swiper-button-next {
        color: #000000;
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        padding: 10px;
        right: -10px;
        width: 20px;
        height: 10px;
        top: 68%;
    }

    .swiper-button-prev {
        color: #000000;
        background-color: rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        padding: 10px;
        right: 0px;
        width: 20px;
        height: 10px;
        top: 68%;
        left: -8px;
        display: none
    }

    .swiper-button-next:after {
        font-size: 10px;
    }

    .swiper-button-prev:after {
        font-size: 10px;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 0.5);
        /* Hover effect */
    }

    .home-translations-chart:before {
        background: linear-gradient(270deg, #f3f5fb80, #f5f6fb00 14.75%, #fff0 0);
        bottom: 0;
        content: "";
        left: -1px;
        position: absolute;
        top: 0;
        transform: matrix(-1, 0, 0, 1, 0, 0);
        width: 100%;
    }

    .my-border-none-one {
        border-top-right-radius: 0;
        border-right: none;
        border-bottom-right-radius: 0;
    }

    .my-border-none-two {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left: none;
    }

    @media (max-width: 768px) {

        .swiper-button-next,
        .swiper-button-prev,
        .block-bg-animate-wrap {
            display: none;
        }

        .my-border-none-one {
            border-top-right-radius: var(--bs-card-border-radius);
            ;
            border-right: 1px solid var(--bs-border-color-translucent);
            border-bottom-right-radius: var(--bs-card-border-radius);
            ;
        }

        .my-border-none-two {
            border-top-left-radius: var(--bs-card-border-radius);
            ;
            border-bottom-left-radius: var(--bs-card-border-radius);
            ;
            border-left: 1px solid var(--bs-border-color-translucent);
        }
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
<div class="row mt-3 mx-0">
    <div class="col-lg-12 px-0">
        <div class="d-flex gap-3 align-items-center flex-wrap">
            <div>
                <p style="font-size: 13px">Trending Search:</p>
            </div>
            <div class="d-flex gap-2 align-items-center flex-wrap">
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/wstusdt.png') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="wstusdt"></div>
                    <a href="#">wstUSDT</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/usdt.png') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="usdt"></div>
                    <a href="#">USDT</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/C8MRT.png') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="C8MRT"></div>
                    <a href="#">SUNDOG</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/pw.png') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="pw"></div>
                    <a href="#">USDH</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/htx.jpeg') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="htx"></div>
                    <a href="#">HTXunion</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/tron.jpeg') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="tron"></div>
                    <a href="#">TRONGUY</a>
                </div>
                <div class="d-flex gap-2 trending-srch align-items-center">
                    <div><img src="{{ asset('assets/web/images/icons/payn.png') }}" class="rounded-circle"
                            style="height: 14px;width:14px;" alt="payn"></div>
                    <a href="#">PAYN</a>
                </div>
                <div class="d-flex gap-2 trending-srch">
                    <a href="#">More <i class="fa-solid fa-chevron-right"
                            style="font-size: 9px !important"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 card mx-0 trending-section">
    <div class="col-lg-12 card-body">
        <div class="row">
            <div class="col-lg-6 pb-3 pt-3 pt-lg-0 border-end">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex gap-3">
                            <div>
                                <img src="{{ asset('/assets/web/images/icons/user.png') }}"
                                    style="width: 40px;height:40px" alt="">
                            </div>
                            <div>
                                <p>Total Accounts</p>
                                <h5><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total number of activated accounts on 1BY10">287,556,879</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end">
                        <p>24h</p>
                        <h6><a href="#" class="text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="New accounts on 1BY10 in the past 24 hours">+178,850</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-3 pt-3 pt-lg-0 my-border">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex gap-3">
                            <div>
                                <img src="{{ asset('/assets/web/images/icons/tvl.png') }}"
                                    style="width: 40px;height:40px" alt="">
                            </div>
                            <div>
                                <p>TVL</p>
                                <h5><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total Value Locked (TVL) indicates the total value of assets locked ina all protocols on 1BY10">$18,656,666,881</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end">
                        <p>24h</p>
                        <h6><a href="#" class="text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Comparison between current assets locked on 1BY10 and that 24 hours ago">+1.15%</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-bottom pb-0">
            <div class="col-lg-6 pb-3 pt-3 pt-lg-0 border-end">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex gap-3">
                            <div>
                                <img src="{{ asset('/assets/web/images/icons/total-trans.png') }}"
                                    style="width: 40px;height:40px" alt="">
                            </div>
                            <div>
                                <p>Total Txns</p>
                                <h5><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total number of transactions recorded on 1BY10">9,556,426,752</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end">
                        <p>24h</p>
                        <h6><a href="#" class="text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Total transactions on 1BY10 in the past 24 hours">+6,995,968</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pb-3 pt-3 pt-lg-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex gap-3">
                            <div>
                                <img src="{{ asset('/assets/web/images/icons/t-value.png') }}"
                                    style="width: 40px;height:40px" alt="">
                            </div>
                            <div>
                                <p>Total Transfer Volume</p>
                                <h5><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total transfer volume of hot tokens on 1BY10">$16,450,189,125,150</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end">
                        <p>24h</p>
                        <h6><a href="#" class="text-success" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="The transfer volume on 1BY10 in the past 24 hours">+$24,364,954,014</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-3 flex-wrap mt-3 trans-details">
            <p>Current/Max TPS <span data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="TPS indicates the number of transactions processed on TRON per second, with a maximum of 1,035 ">98/1005</span>
            </p>
            <p>Nodes <span data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Total number of nodes on TRON">7,993</span></p>
            <p>Total Contracts <span data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Total number of smart contracts on 1BY10 Verified: 129,941 Unverified: 5,816,148">5,946,993</span>
            </p>
            <p>Total Tokens <span data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Total number of tokens on 1By10, including TRC10, TRC20,  <br>  TRC721 and TRC1155 tokens  <br>  TRC10: 3,476 TRC20: 173,538  <br> TRC721: 1,715  <br>  TRC1155: 32"
                    data-bs-html="true">178,761</span></p>
        </div>
    </div>
</div>

<div class="row mt-3 card mx-0 market-section">
    <div class="col-lg-12 card-body">
        <div class="d-flex gap-3">
            <div>
                <img src="{{ asset('/assets/web/images/icons/trx.png') }}" style="width: 40px;height:40px"
                    alt="">
            </div>
            <div>
                <h6>TRX</h6>
                <div class="d-flex gap-2">
                    <h6><a href="#">$0.2245</a>
                    </h6>
                    <a href="#" class="badge text-success" style="background-color: #d1e7dd;"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="The price change in the past 24 hours"> +2.7% <i
                            class="fa-solid fa-arrow-up-long"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-3 graph-title border-bottom pb-3">
            <div class="col-lg-6">
                <p><a href="#"><span class="text-muted">Total Market Cap</span> <span data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Total value of TRX circulating across the market">$19.4b</span></a></p>
            </div>
            <div class="col-lg-6 text-start text-lg-end">
                <p><a href="#"><span class="text-muted">Volume(24h)</span> <span data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Total trading volume of TRX circulating across the market in the past 24 hours">$1.0b</span></a>
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-10">
                <div id="chart"></div>
            </div>
            <div class="col-lg-2 text-start text-lg-end">
                <div>
                    <p class="text-muted">Supply</p>
                    <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="Total supply of TRX on 1BY10">86,116,404,369</a></h6>
                </div>
                <div class="mt-4">
                    <p class="text-muted">Staked</p>
                    <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="TRX Staked : 44,086,755,337 <br> Stake 2.0 : 22,911,326,646  (51.97%) <br> Stake 1.0 : 21,175,428,691  (48.03%)"
                            data-bs-html="true">86,116,404,369</a></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 mx-0 blocks-sider-section position-relative w-100">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between">
            <h5><a href="#">Blocks</a></h5>
            <p><a href="#">More <i class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
            </p>
        </div>
    </div>
    <div class="swiper-container overflow-hidden px-0 mt-3">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6><a href="#">#69556465</a></h6>
                                <p class="text-muted mt-2 font-13">less than 1sec ago</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <a href="#" class="badge text-success"
                                    style="background-color: #d1e7dd;">BlockAnalysis <i
                                        class="fa-solid fa-chevron-right" style="font-size: 9px !important"></i></a>
                                <p class="font-13 mt-2">327 Txns</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <p class="font-13">Reward 176 Trx</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 Trx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-bg-animate-wrap">
            <div>
                <div class="slider-move"></div>
            </div>
        </div>
        <!-- Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="row mt-3 mx-0 trans-section">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between">
            <h5><a href="#">Transactions</a></h5>
        </div>
        <div class="row mt-3 g-0">
            <div class="col-lg-7">
                <div class="card my-border-none-one">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover trans-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><a href="#">65dgds45dgsg5</a></p>
                                            <p class="font-13 text-muted">8 secs ago</p>
                                        </td>
                                        <td>
                                            <p><span class="font-13 text-muted"> From</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                            <p><span class="font-13 text-muted">To</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                        </td>
                                        <td>
                                            <p>10,545,554 <a href="#">TRX</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer TRX"> Transfer TRX</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">95dgds45dgsg5</a></p>
                                            <p class="font-13 text-muted">14 secs ago</p>
                                        </td>
                                        <td>
                                            <p><span class="font-13 text-muted">From</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                            <p><span class="font-13 text-muted">To</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                        </td>
                                        <td>
                                            <p>10,545,554 <a href="#">TRX</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer TRX"> Transfer TRX</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">89dgds45dgsg5</a></p>
                                            <p class="font-13 text-muted">18 secs ago</p>
                                        </td>
                                        <td>
                                            <p><span class="font-13 text-muted">From</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                            <p><span class="font-13 text-muted">To</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                        </td>
                                        <td>
                                            <p>10,545,554 <a href="#">TRX</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer TRX"> Transfer TRX</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">1255gdgds45dgsg5</a></p>
                                            <p class="font-13 text-muted">20 secs ago</p>
                                        </td>
                                        <td>
                                            <p><span class="font-13 text-muted">From</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                            <p><span class="font-13 text-muted">To</span> <a
                                                    href="#">Tsafsa4545sfsa54445</a></p>
                                        </td>
                                        <td>
                                            <p>10,545,554 <a href="#">TRX</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer TRX"> Transfer TRX</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center more">
                            <a href="#">More <i class="fa-solid fa-chevron-right"
                                    style="font-size: 9px !important"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card home-translations-chart  my-border-none-two">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <h5><a href="#">Daily Txns (14D)</a></h5>
                            </div>
                            <div>
                                <div class="d-flex gap-2 counts">
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-primary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">Txn Count </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-danger rounded-circle" style="width: 7px;height:7px"></div>
                                        </div>
                                        <p class="font-10">TRX Transfers </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-success rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">USDT Count Transfers</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4" id="chart1"></div>
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
                height: '250px'
            },
            series: [
                {
                    name: 'sales',
                    data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
                }
            ],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }
        var options1 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '214px',
                toolbar: { show: false }
            },
            series: [
                {
                    name: 'sales',
                    data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
                },
                {
                    name: 'Revenue',
                    data: [20, 30, 25, 45, 40, 55, 65, 85, 110]
                }
            ],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();

        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);

        chart1.render();

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                    spaceBetween: 35,
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                },
            },
            on: {
                slideChange: function() {
                    if (swiper.isBeginning) {
                        swiper.navigation.prevEl.style.display =
                            'none';
                    } else {
                        swiper.navigation.prevEl.style.display =
                            'flex';
                    }
                },
            },
        });
    });
</script>

@include('web.chunks.footer')
