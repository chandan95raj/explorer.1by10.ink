@include('web.chunks.header')
<!-- Swiper CSS -->
<link rel="stylesheet" href="{{ asset('/assets/web/swiper/swiper-bundle.min.css') }}">

<!-- Swiper JS -->
<script src="{{ asset('/assets/web/swiper/swiper-bundle.min.js') }}"></script>

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

    .home-tvl-chart:before {
        background: linear-gradient(90deg, #f3f5fb80, #f5f6fb00 14.75%, #fff0 0);
        bottom: 0;
        content: "";
        right: -1px;
        position: absolute;
        top: 0;
        transform: scaleX(-1);
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

<div class="row mt-3 mx-0 trending-section">
    <div class="col-lg-12">
        <div class="row ">
            <div class="col-lg-8 card">
                <div class="row card-body pb-0">
                    <div class="col-lg-6 pb-3 pt-3 pt-lg-0 border-end">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex gap-3">
                                    <div>
                                        <img src="{{ asset('/assets/web/images/icons/user.png') }}"
                                            style="width: 40px;height:40px" alt="">
                                    </div>
                                    <div>
                                        <a href="{{ url('/blockchain/accounts') }}">
                                            <p class="font-13">Total Accounts</p>
                                            <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Total number of activated accounts on 1BY10">287,556,879</a>
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start text-lg-end">
                                <a href="{{ url('/blockchain/accounts') }}">
                                    <p class="font-13">24h</p>
                                    <p class="font-14"><a href="#" class="text-success" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="New accounts on 1BY10 in the past 24 hours">+178,850</a></p>
                                </a>
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
                                        <p class="font-13">TVL</p>
                                        <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Total Value Locked (TVL) indicates the total value of assets locked ina all protocols on 1BY10">$18,656,666,881</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start text-lg-end">
                                <p class="font-13">24h</p>
                                <p class="font-14"><a href="#" class="text-success" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-title="Comparison between current assets locked on 1BY10 and that 24 hours ago">+1.15%</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom py-0 card-body">
                    <div class="col-lg-6 pb-3 pt-3 pt-lg-0 border-end">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex gap-3">
                                    <div>
                                        <img src="{{ asset('/assets/web/images/icons/total-trans.png') }}"
                                            style="width: 40px;height:40px" alt="">
                                    </div>
                                    <div>
                                        <a href="{{ url('/blockchain/transactions') }}">
                                            <p class="font-13">Total Txns</p>
                                            <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Total number of transactions recorded on 1BY10">9,556,426,752</a>
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start text-lg-end">
                                <a href="{{ url('/blockchain/transactions') }}">
                                    <p class="font-13">24h</p>
                                    <p class="font-14"><a href="#" class="text-success"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Total transactions on 1BY10 in the past 24 hours">+6,995,968</a>
                                    </p>
                                </a>
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
                                        <p class="font-13">Total Transfer Volume</p>
                                        <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Total transfer volume of hot tokens on 1BY10">$16,450,189,125,150</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start text-lg-end">
                                <p class="font-13">24h</p>
                                <p class="font-14"><a href="#" class="text-success" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-title="The transfer volume on 1BY10 in the past 24 hours">+$24,364,954,014</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 flex-wrap trans-details card-body p-0">
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
            <div class="col-lg-4 card market-section">
                <div class="w-100 card-body px-0">
                    <div class="row graph-title border-bottom pb-2">
                        <div class="col-lg-6">
                            <div class="d-flex gap-3">
                                <div>
                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                        style="width: 40px;height:40px" alt="favicon">
                                </div>
                                <div>
                                    <h6>1BY10</h6>
                                    <div class="d-flex gap-2">
                                        <h6><a href="#">$0.2245</a>
                                        </h6>
                                        <a href="#" class="badge text-success"
                                            style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            data-bs-title="The price change in the past 24 hours"> +2.7% <i
                                                class="fa-solid fa-arrow-up-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-start text-lg-end">
                            <p><a href="#"><span class="text-muted">Total Market Cap</span> <span
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total value of 1BY10 circulating across the market">$19.4b</span></a>
                            </p>
                            <p><a href="#"><span class="text-muted">Volume(24h)</span> <span
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Total trading volume of 1BY10 circulating across the market in the past 24 hours">$1.0b</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-8">
                            <div id="chart"></div>
                        </div>
                        <div class="col-lg-4 text-start text-lg-end">
                            <div>
                                <p class="text-muted font-12">Supply</p>
                                <p class="fw-bold"><a href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-title="Total supply of 1BY10 on 1BY10">86,116,404,369</a></p>
                            </div>
                            <div class="mt-4">
                                <p class="text-muted font-12">Staked</p>
                                <p class="fw-bold"><a href="#" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        data-bs-title="1BY10 Staked : 44,086,755,337 <br> Stake 2.0 : 22,911,326,646  (51.97%) <br> Stake 1.0 : 21,175,428,691  (48.03%)"
                                        data-bs-html="true">86,116,404,369</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- <div class="row mt-3 card mx-0 market-section">
    <div class="col-lg-12 card-body">
        <div class="d-flex gap-3">
            <div>
                <img src="{{ asset('/assets/web/images/icons/favicon.png') }}" style="width: 40px;height:40px"
                    alt="">
            </div>
            <div>
                <h6>1BY10</h6>
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
                            data-bs-title="Total value of 1BY10 circulating across the market">$19.4b</span></a></p>
            </div>
            <div class="col-lg-6 text-start text-lg-end">
                <p><a href="#"><span class="text-muted">Volume(24h)</span> <span data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Total trading volume of 1BY10 circulating across the market in the past 24 hours">$1.0b</span></a>
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
                            data-bs-title="Total supply of 1BY10 on 1BY10">86,116,404,369</a></h6>
                </div>
                <div class="mt-4">
                    <p class="text-muted">Staked</p>
                    <h6><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-title="1BY10 Staked : 44,086,755,337 <br> Stake 2.0 : 22,911,326,646  (51.97%) <br> Stake 1.0 : 21,175,428,691  (48.03%)"
                            data-bs-html="true">86,116,404,369</a></h6>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                                <p class="font-13">Reward 176 1BY10</p>
                            </div>
                            <div class="text-start text-lg-end mt-3 mt-lg-0">
                                <p class="font-13"><i class="fa-solid fa-fire text-danger"></i> 383.456421 1BY10</p>
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
                <div class="card my-border-none-one h-100 d-flex flex-column">
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
                                            <p>10,545,554 <a href="#">1BY10</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer 1BY10"> Transfer
                                                1BY10</a>
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
                                            <p>10,545,554 <a href="#">1BY10</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer 1BY10"> Transfer
                                                1BY10</a>
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
                                            <p>10,545,554 <a href="#">1BY10</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer 1BY10"> Transfer
                                                1BY10</a>
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
                                            <p>10,545,554 <a href="#">1BY10</a></p>
                                            <a href="#" class="badge text-primary text-dark"
                                                style="background-color: #d1e7dd;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Transfer 1BY10"> Transfer
                                                1BY10</a>
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
                <div class="card home-translations-chart  my-border-none-two h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <h5 class="font-13 fw-bold"><a href="#">Daily Txns (14D)</a></h5>
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
                                        <p class="font-10">1BY10 Transfers </p>
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

<div class="row mt-3 mx-0">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between tvl-header">
            <h5><a href="#">Tvl / TVC</a></h5>
            <div class="d-flex align-items-center gap-2">
                <div>
                    <a href="#" class="btn btn-outline-primary btn-sm">Submit Project</a>
                </div>
                <p><a href="#">More <i class="fa-solid fa-chevron-right"
                            style="font-size: 9px !important"></i></a></p>
            </div>
        </div>
        <div class="row mt-3 g-0">
            <div class="col-lg-5">
                <div class="card home-tvl-chart my-border-none-one h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p class="text-muted">TVL</p>
                                <h6>$20,449,663,572</h6>
                            </div>
                            <div>
                                <div class="d-flex gap-2 counts">
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-primary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">TVL </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-danger rounded-circle" style="width: 7px;height:7px"></div>
                                        </div>
                                        <p class="font-10">1BY10 Staking Governance </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4" id="chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card my-border-none-two h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover tvl-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Project</th>
                                        <th>Category</th>
                                        <th>TVL</th>
                                        <th>Change(24h)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">1BY10 Staking Governance</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Governance</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-success">+1.64%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">JustLend DAO</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Lending</button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staking</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$6,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-danger">-1.64%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Just Cryptos</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Cross Chain</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$2,310,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-danger">-1.4%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Sun.io</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> DEX</button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Stablecoin</button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Farm</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$6,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-danger">+1.64%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Demo DAO</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Lending</button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staking</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$6,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-success">-1.64%</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/wstusdt.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Tst DAO</a></p>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Lending</button>
                                            <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staking</button>
                                        </td>
                                        <td>
                                            <p class="text-muted">$6,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-success">-1.64%</p>
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

<div class="row mt-3 mx-0 trans-section">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between">
            <h5><a href="#">Top 5 Tokens by Transfer Volume</a></h5>
        </div>
        <div class="row mt-3 g-0">
            <div class="col-lg-7">
                <div class="card my-border-none-one h-100 d-flex flex-column">
                    <div class="card-body pb-0">
                        <div class="table-responsive">
                            <table class="table table-hover tvl-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Token</th>
                                        <th>Transfer Volume (Yesterday)</th>
                                        <th>Transfers (Yesterday)</th>
                                        <th>Market Cap</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">1BY10</a></p>
                                                    <p class="text-muted">USDT</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9,510,545</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">JustLend</a></p>
                                                    <p class="text-muted">USDD</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9,510,545</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Just Cryptos</a></p>
                                                    <p class="text-muted">PAYN</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9,510,545</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Sun.io</a></p>
                                                    <p class="text-muted">USDT</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9,510,545</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <div>
                                                    <p><a href="#">Demo DAO</a></p>
                                                    <p class="text-muted">USDT</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9,510,545</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">$9,510,545,455</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card home-translations-chart  my-border-none-two h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <h5 class="font-13 fw-bold"><a href="#">Transfer Volume Trends (14D)</a></h5>
                            </div>
                            <div>
                                <div class="d-flex gap-2 counts">
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-primary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">USDT </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-danger rounded-circle" style="width: 7px;height:7px"></div>
                                        </div>
                                        <p class="font-10">1BY10 </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-success rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">USDT</p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-secondary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">PAYN</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4" id="chart3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 mx-0">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between tvl-header">
            <h5><a href="#">1BY10 USDT</a></h5>
        </div>
        <div class="row mt-3 g-0 align-items-stretch">
            <div class="col-lg-7">
                <div class="card home-tvl-chart my-border-none-one h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>Transfer / Supply / Accounts </p>
                            </div>
                            <div>
                                <div class="d-flex gap-2 counts">
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-primary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">Transfer Volume </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-danger rounded-circle" style="width: 7px;height:7px"></div>
                                        </div>
                                        <p class="font-10">Transfers</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4" id="chart4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card my-border-none-two h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="border-bottom pb-3">
                            <p class="font-13 text-muted mb-2">Transfer</p>
                            <p class="font-13 ">7-day transfer volume reaches <span
                                    class="fs-6 fw-bold">$137,896,955,794</span>, changed by <span
                                    class="text-success">+4.4%</span></p>
                            <p class="font-13 text-muted">7-day transfer count reaches <span
                                    class="font-14">13,511,676</span>, changed by +1.95%</p>
                        </div>
                        <div class="border-bottom py-3">
                            <p class="font-13 text-muted mb-2">Supply</p>
                            <p class="font-13 "><span class="fs-6 fw-bold">61,742,996,582 USDT</span> issued on 1BY10
                                in total</p>
                            <p class="font-13 text-muted">Changed by <span class="text-success">0.0332%</span>
                                comparing to 30 days ago</p>
                        </div>
                        <div class="py-3">
                            <p class="font-13 text-muted mb-2">Accounts</p>
                            <p class="font-13 "><span class="fs-6 fw-bold">60,502,060</span> holders, changed by <span
                                    class="text-success">+2.45%</span> comparing to 30 days ago</p>
                            <p class="font-13 text-muted">944,909 active accounts for yesterday, changed by <span
                                    class="text-danger">-4.65%</span> comparing to 30 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 mx-0">
    <div class="col-lg-12 px-0">
        <div class="d-flex justify-content-between tvl-header">
            <h5><a href="#">Statistics</a></h5>
        </div>
        <div class="row mt-0 g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>Active Accounts / New Accounts / Total Accounts </p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart5"></div>
                        <div class="border-top pt-2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div>
                                    <p class="font-13 text-muted">Active Accounts (Yesterday)</p>
                                    <p>2,571,145 <button class="btn btn-danger badge" disabled>-4.21%</button></p>
                                </div>
                                <div>
                                    <p class="font-13 text-muted">Average Active Accounts (Past 1 month)</p>
                                    <p>2,594,451</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>Total Protocol Revenue</p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart6"></div>
                        <div class="border-top pt-2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div>
                                    <p class="font-13 text-muted">Total Protocol Revenue (Yesterday)</p>
                                    <p>$2,571,145 <button class="btn btn-success badge" disabled>+0.04%</button></p>
                                </div>
                                <div>
                                    <p class="font-13 text-muted">Total Protocol Revenue (Past 1 month)</p>
                                    <p>$262,092,367 <button class="btn btn-danger badge" disabled>-11.21%</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Supply / 1BY10 Net Increase</p>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart7"></div>
                        <div class="border-top pt-2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div>
                                    <p class="font-13 text-muted">1BY10 Supply</p>
                                    <p>86,109,554,007</p>
                                </div>
                                <div>
                                    <p class="font-13 text-muted">Annualized Inflation Rate</p>
                                    <p><span class="text-danger">-0.79% </span> <button class="btn btn-primary badge"
                                            disabled>Deflation</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p>1BY10 Staked / 1BY10 Staking Rate </p>
                            </div>
                            <div>
                                <div class="d-flex gap-2 counts">
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-primary rounded-circle" style="width: 7px;height:7px">
                                            </div>
                                        </div>
                                        <p class="font-10">Stake 2.0 </p>
                                    </a>
                                    <a href="#" class="d-flex gap-1 align-items-center">
                                        <div>
                                            <div class="bg-danger rounded-circle" style="width: 7px;height:7px"></div>
                                        </div>
                                        <p class="font-10">Stake 1.0 </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-2" id="chart8"></div>
                        <div class="border-top pt-2">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div>
                                    <p class="font-13 text-muted">1BY10 Staked</p>
                                    <p>22,571,145</p>
                                </div>
                                <div>
                                    <p class="font-13 text-muted">Stake 2.0 </p>
                                    <p>22,981,669,761 <span class="font-13 text-muted"> (52.05%)</span></p>
                                </div>
                                <div>
                                    <p class="font-13 text-muted">Stake 1.0 </p>
                                    <p>21,173,856,520 <span class="font-13 text-muted"> (47.95%)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="#">View More Data <i class="fa-solid fa-chevron-right"
                        style="font-size: 9px !important"></i></a>
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
                height: '150px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
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
                toolbar: {
                    show: false
                }
            },
            series: [{
                    name: 'sales',
                    data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
                },
                {
                    name: 'Revenue',
                    data: [20, 30, 25, 45, 40, 55, 65, 85, 110]
                },
                {
                    name: 'Profit',
                    data: [10, 20, 15, 30, 25, 40, 50, 70, 90]
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

        var options2 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '209px',
                toolbar: {
                    show: false
                }
            },
            series: [{
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

        var options3 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '278px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var options4 = {
            series: [{
                name: 'TEAM A',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
            }, {
                name: 'TEAM B',
                type: 'area',
                data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
            }],
            chart: {
                height: '100%',
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

        var options5 = {
            series: [{
                name: 'TEAM A',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
            }],
            chart: {
                height: '200px',
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

        var options6 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '200px',
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999]
            },
            stroke: {
                width: 1
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50']
        }

        var options7 = {
            chart: {
                type: 'line',
                width: '100%',
                height: '200px',
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

        var options8 = {
            series: [{
                data: [400, 430]
            }],
            chart: {
                type: 'bar',
                height: '200px'
            },
            colors: ['#05d3e6', '#ff9800', '#4caf50'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['50b', '40b'],
            }
        };


        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
        chart1.render();

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
        chart4.render();

        var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
        chart5.render();

        var chart6 = new ApexCharts(document.querySelector("#chart6"), options6);
        chart6.render();

        var chart7 = new ApexCharts(document.querySelector("#chart7"), options7);
        chart7.render();

        var chart8 = new ApexCharts(document.querySelector("#chart8"), options8);
        chart8.render();

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
