@include('web.chunks.header')
<style>
    tbody tr {
        vertical-align: middle !important;
    }

    tbody tr td {
        font-size: 13px !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
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
        <div class="my-4 d-flex align-items-center justify-content-between gap-3">
            <div class="d-flex gap-2 align-items-center">
                <div>
                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}" class="rounded-circle"
                        style="width: 60px;height:60px" alt="favicon">
                </div>
                <div>
                    <h2>1BY10</h2>
                    <p class="text-muted font-12">Official Token of 1BY10 Protocol</p>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-sm">Trade</a>
        </div>
        <div class="row g-3 align-items-stretch">
            <div class="col-lg-3">
                <div class="bg-white rounded-4 p-3 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Overview
                        </p>
                        <a href="#" class="btn btn-success badge">Reputation: Ok ></a>
                    </div>
                    <div class="d-flex align-items-center mt-3 gap-2">
                        <div>
                            <h5 class="fw-bold">$0.2467</h5>
                        </div>
                        <div>
                            <p class="font-13 text-success">+5.86%</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="The token's total supply on 1BY10. Specifically, for TRC20, TRC721, and TRC1155 tokens, this number is returned by the contract's totalSupply method. For TRC10 tokens, this number is sourced from issuance information. For TRX, this number is the token's total supply accumulated from the creation of the genesis block to the present day.">?</button>
                                            Total Supply:
                                        </td>
                                        <td class="text-end">
                                            86,105,400,560.78122
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="The token's circulating supply on 1BY10, which is calculated by subtracting the amount of tokens in black hole addresses and team's locked-up amount from the total supply. If the project team provides the latest circulating supply data, that provided data prevails. Update circulating data">?</button>
                                            Circulating Supply:
                                        </td>
                                        <td class="text-end">
                                            86,104,620,200.64478
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Market cap = Total supply * Price">?</button>
                                            Total Market Cap:
                                        </td>
                                        <td class="text-end">
                                            $21,248,296,990
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Circulating market cap = Circulating supply * Price">?</button>
                                            Circulating Market Cap:
                                        </td>
                                        <td class="text-end">
                                            $21,248,104,420
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">Basic Info
                        </p>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date of token's issuance">?</button>
                                            Issuing Time :
                                        </td>
                                        <td class="text-end">
                                            2018-06-25 01:51:09 (UTC)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="The maximum decimals supported by the token">?</button>
                                            Decimal:
                                        </td>
                                        <td class="text-end">
                                            6
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="The Official Website of the Project">?</button>
                                            Official Website:
                                        </td>
                                        <td class="text-end">
                                            <a href="https://1by10.ink/" target="_blank">https://1by10.ink/</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="The Official Document of the Project">?</button>
                                            White Paper:
                                        </td>
                                        <td class="text-end">
                                            <a href="https://explorer.1by10.ink/doc/white_paper_v_2_0.pdf"
                                                target="_blank">https://explorer.1by10.ink/doc/white_paper_v_2_0.pdf</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Media Supported by the Project">?</button>
                                            Social Profiles:
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="font-13 fw-bold">More
                        </p>
                        <a href="#"> <i class="fa-solid fa-chart-column"></i></a>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Number of token owners on 1BY10">?</button>
                                            Holders:
                                        </td>
                                        <td class="text-end">
                                            167,383,723
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Total number of transfers on 1BY10">?</button>
                                            Total Transfer Count:
                                        </td>
                                        <td class="text-end">
                                            3,690,851,823
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Number of the token's transfers on 1BY10 for the last day (00:00:00 to 23:59:59 UTC), updated at 00:00:00 each day.">?</button>
                                            Transfers (Yesterday):
                                        </td>
                                        <td class="text-end">
                                            3,236,175 <span class="font-10 text-success">(+20.25%)</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Total trading volume of the token across all markets for the last day (00:00:00 to 23:59:59 UTC), updated at 00:00:00 each day. Data source: CoinMarketCap or SunSwap, with CoinMarketCap taking precedence.">?</button>
                                            Trading Volume (Yesterday):
                                        </td>
                                        <td class="text-end">
                                            $705.96m <span class="font-10 text-success">(+0.01%)</span>
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

<div class="row mx-0 mt-4">
    <div class="col-lg-12 px-0">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="trctw-tab" data-bs-toggle="tab" data-bs-target="#trctw-tab-pane"
                    type="button" role="tab" aria-controls="trctw-tab-pane" aria-selected="true">Token
                    Transfers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tokenholder-tab" data-bs-toggle="tab"
                    data-bs-target="#tokenholder-tab-pane" type="button" role="tab"
                    aria-controls="tokenholder-tab-pane" aria-selected="false">Token
                    Holders</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="markets-tab" data-bs-toggle="tab" data-bs-target="#markets-tab-pane"
                    type="button" role="tab" aria-controls="markets-tab-pane" aria-selected="false">
                    Markets</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="analysis-tab" data-bs-toggle="tab"
                    data-bs-target="#analysis-tab-pane" type="button" role="tab"
                    aria-controls="analysis-tab-pane" aria-selected="false">
                    Analysis</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="trctw-tab-pane" role="tabpanel" aria-labelledby="trctw-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <p class="text-muted font-13 me-2">
                                A total of <span class="text-dark">3,690,963,897</span> . Only the first <span
                                    class="text-dark">10,000</span> records are displayed.
                                <a href="#">View analysis></a>
                            </p>
                            <div>
                                <a href="#" class="btn btn-primary badge"><i class="fa-solid fa-filter"></i>
                                    Advanced Filter</a>
                                <a href="#" class="btn btn-primary badge" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Sort transactions by date"><i
                                        class="fa-regular fa-calendar"></i></a>
                                <a href="#" class="btn btn-primary badge"><i
                                        class="fa-solid fa-filter"></i></a>
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
                                        <th>Amount </th>
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
                                        <td>170,000</td>

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
                                        <td>1,254.906805</td>

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
                                        <td>500</td>

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
                                        <td>426</td>

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
                                        <td>425.83</td>

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
                                        <td>170,000</td>

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
                                        <td>1,254.906805</td>

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
                                        <td>500</td>

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
                                        <td>426</td>

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
                                        <td>425.83</td>

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
                                        <td>170,000</td>

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
                                        <td>1,254.906805</td>

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
                                        <td>500</td>

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
                                        <td>426</td>

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
                                        <td>425.83</td>

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
            <div class="tab-pane fade" id="tokenholder-tab-pane" role="tabpanel" aria-labelledby="tokenholder-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-header bg-white pb-0">
                        <div class="d-flex flex-wrap gap-3 mb-1 mt-1 align-items-center justify-content-between">
                            <p class="font-13 me-2">Asset Breakdown by Holders</p>
                        </div>
                        <div class="mt-3">
                            <div id="chart"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-3 mb-3 mt-1 align-items-center justify-content-between">
                            <div>
                                <p class="font-13">Holders' Address</p>
                                <p class="text-muted font-13 mt-2">A total of <span
                                        class="text-dark">167,383,723</span>
                                    token holder accounts. Only the first <span class="text-dark">10,000</span> data
                                    are displayed.</p>
                            </div>
                            <div>
                                <input type="search" class="form-control" placeholder="Search Address">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Address</th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Quantity of the token held by this address">?</button>
                                            Amount
                                        </th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Value of the token held by this address">?</button>
                                            Value
                                        </th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Quantity of the token held by this address as compared to the total supply of the token">?</button>
                                            Percentage
                                        </th>
                                        <th class="text-end"><button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Date and time of the last transaction made by the account">?</button>
                                            Latest TXN Time (Local)
                                            <button
                                                class="btn bg-light border text-dark px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td> <a href="#"> TDjk451BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staked Token</button></td>
                                        <td class="text-end">2,942,082,546.835061</td>
                                        <td class="text-end">$725,639,200.82</td>
                                        <td class="text-end">3.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> <a href="#"> Rw45TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">9,082,546.835061</td>
                                        <td class="text-end">$135,639,200.82</td>
                                        <td class="text-end">4.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td> <a href="#"> C2TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">2,423,078,515.768893</td>
                                        <td class="text-end">$597,631,347.76</td>
                                        <td class="text-end">2.814092%</td>
                                        <td class="text-end">2025-02-08 22:09:45</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td> <a href="#"> TDjk451BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staked Token</button></td>
                                        <td class="text-end">2,942,082,546.835061</td>
                                        <td class="text-end">$725,639,200.82</td>
                                        <td class="text-end">3.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td> <a href="#"> Rw45TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">9,082,546.835061</td>
                                        <td class="text-end">$135,639,200.82</td>
                                        <td class="text-end">4.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td> <a href="#"> C2TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">2,423,078,515.768893</td>
                                        <td class="text-end">$597,631,347.76</td>
                                        <td class="text-end">2.814092%</td>
                                        <td class="text-end">2025-02-08 22:09:45</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td> <button class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> SC</button> <a
                                                href="#"> 1BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> USDT Token</button></td>
                                        <td class="text-end">10,208,870,853.3259849</td>
                                        <td class="text-end">$2,517,929,653.34</td>
                                        <td class="text-end">11.85628%</td>
                                        <td class="text-end">2025-02-11 14:16:51</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td> <a href="#"> TDjk451BY10fdasdDFd5454</a> <button
                                                class="btn badge text-primary text-dark border-0"
                                                style="background-color: #d1e7dd;" disabled> Staked Token</button></td>
                                        <td class="text-end">2,942,082,546.835061</td>
                                        <td class="text-end">$725,639,200.82</td>
                                        <td class="text-end">3.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td> <a href="#"> Rw45TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">9,082,546.835061</td>
                                        <td class="text-end">$135,639,200.82</td>
                                        <td class="text-end">4.416847%</td>
                                        <td class="text-end">2025-01-22 20:13:54</td>
                                        <td class="text-end">--</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td> <a href="#"> C2TDjk451BY10fdasdDFd5454</a></td>
                                        <td class="text-end">2,423,078,515.768893</td>
                                        <td class="text-end">$597,631,347.76</td>
                                        <td class="text-end">2.814092%</td>
                                        <td class="text-end">2025-02-08 22:09:45</td>
                                        <td class="text-end"><a href="#" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                data-bs-title="View analysis of this account's holdings"><i
                                                    class="fa-solid fa-chart-line"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="markets-tab-pane" role="tabpanel" aria-labelledby="markets-tab"
                tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-muted">Market Cap Ranking</p>
                                    </div>
                                    <div class="col-6">
                                        <p>#11</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-muted">Total Market Cap</p>
                                    </div>
                                    <div class="col-6">
                                        <p>21,149,515,467</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-muted">Volume (24h)</p>
                                    </div>
                                    <div class="col-6">
                                        <p>$765,733,393</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-muted">High / Low (24h)</p>
                                    </div>
                                    <div class="col-6">
                                        <p>$0.2482 / $0.2364</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table accounts-table">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Exchange</th>
                                        <th class="text-end">Token Pair</th>
                                        <th class="text-end">Price</th>
                                        <th class="text-end">Volume (24h)</th>
                                        <th class="text-center">Trust Score </th>
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
                                                <p><a href="#">1BY10 </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2463</td>
                                        <td class="text-end">$62,321,371</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
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
                                                <p><a href="#">JustLend DAO </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2458</td>
                                        <td class="text-end">$116,870,596</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
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
                                                <p><a href="#">Just Cryptos </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2462</td>
                                        <td class="text-end">$21,716,643</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
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
                                                <p><a href="#">Sun.io </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2459</td>
                                        <td class="text-end">$25,567,745</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
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
                                                <p><a href="#">Demo DAO </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2462</td>
                                        <td class="text-end">$31,326,812</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">1BY10 </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2463</td>
                                        <td class="text-end">$62,321,371</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">JustLend DAO </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2458</td>
                                        <td class="text-end">$116,870,596</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Just Cryptos </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2462</td>
                                        <td class="text-end">$21,716,643</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Sun.io </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2459</td>
                                        <td class="text-end">$25,567,745</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/icons/tron.jpeg') }}"
                                                        class="rounded-circle" style="width:20px;height:20px;"
                                                        alt="">
                                                </div>
                                                <p><a href="#">Demo DAO </a></p>
                                            </div>
                                        </td>
                                        <td class="text-end"><a href="#">1BY10/USDT</a></td>
                                        <td class="text-end">$0.2462</td>
                                        <td class="text-end">$31,326,812</td>
                                        <td class="text-center">
                                            <button
                                                class="btn bg-light border text-success px-1 py-1 badge font-10 rounded-circle"><i
                                                    class="fa-solid fa-check"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="analysis-tab-pane" role="tabpanel"
                aria-labelledby="analysis-tab" tabindex="0">
                <div class="card border-top-0 rounded-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active py-1" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Token Transfers</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link py-1" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Holding Accounts</button>
                                </li>
                            </ul>
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
                                <p class="p-2 rounded bg-light">Yesterday's transfer amount:
                                    <strong>1,257,355,517,518</strong>; transfers:
                                    <strong>3,236,175</strong>;
                                    receiving accounts: <strong>1,678,953</strong>; sending accounts:
                                    <strong>763,120</strong>;
                                    transaction accounts: <strong>2,191,083</strong>
                                </p>
                                <div class="mt-3">
                                    <div id="chart2"></div>
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
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'bar',
                height: 90,
                width: '100%',
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: '100%'
                }
            },
            colors: ['#4A90E2', '#9B59B6', '#F1C40F', '#1ABC9C', '#7FDBFF'],
            series: [{
                    name: "Top 1~10 holders",
                    data: [39.64]
                },
                {
                    name: "Top 11~50 holders",
                    data: [34.92]
                },
                {
                    name: "Top 51~100 holders",
                    data: [5.18]
                },
                {
                    name: "Top 101~500 holders",
                    data: [5.67]
                },
                {
                    name: "Top 501~∞ holders",
                    data: [14.59]
                }
            ],
            xaxis: {
                categories: [''],
                labels: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            yaxis: {
                show: false
            },
            grid: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                markers: {
                    width: 12,
                    height: 12
                }
            },
            tooltip: {
                enabled: false
            }
        };

        var options2 = {
            series: [{
                    name: "Transfer Count",
                    type: "line",
                    data: [2.5, 2.7, 3.0, 2.8, 3.2, 3.1, 2.9, 3.3, 3.0, 3.2]
                },
                {
                    name: "Number of Receiving Account",
                    type: "area",
                    data: [1.8, 2.0, 2.2, 2.1, 2.4, 2.3, 2.2, 2.5, 2.3, 2.4]
                },
                {
                    name: "Number of Sending Account",
                    type: "bar",
                    data: [1.2, 1.8, 1.4, 1.6, 1.9, 1.7, 1.3, 1.5, 1.6, 1.8]
                },
                {
                    name: "Transfer Accounts",
                    type: "line",
                    data: [0.5, 0.6, 0.7, 0.6, 0.8, 0.9, 0.7, 0.8, 0.9, 1.0]
                },
                {
                    name: "Transfer Amount",
                    type: "area",
                    data: [1.0, 1.2, 1.1, 1.3, 1.5, 1.4, 1.3, 1.6, 1.5, 1.7]
                }
            ],
            chart: {
                height: '500px',
                type: "line",
                stacked: false
            },
            stroke: {
                width: [2, 2, 0, 1, 2]
            },
            colors: ["#4A90E2", "#9B59B6", "#05d3e6", "#F39C12", "#E74C3C"],
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

        var options3 = {
            series: [
                {
                    name: "Holders",
                    type: "bar",
                    data: [1.2, 1.8, 1.4, 1.6, 1.9, 1.7, 1.3, 1.5, 1.6, 1.8]
                }
            ],
            chart: {
                height: '500px',
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
            colors: [ "#05d3e6"],
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

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();


        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

@include('web.chunks.footer')
