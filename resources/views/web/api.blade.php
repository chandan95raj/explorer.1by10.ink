@include('web.chunks.header')
<style>
    .top-introduce-part h3>span:after {
        background-color: #05d3e6;
        bottom: 0;
        content: "";
        display: block;
        height: 14px;
        left: 0;
        position: absolute;
        width: 67px;
        z-index: -1;
    }

    .data-part {
        background-color: #fff;
        padding: 30px 0;
    }

    .data-part .container .data-item:first-child {
        padding-left: 0;
    }

    .data-part .container .data-item {
        flex: 1 1;
        padding-left: 40px;
        position: relative;
    }

    .data-part .container .data-item>span {
        color: #73787b;
        font-size: 18px;
    }

    .data-part .container .data-item b {
        display: block;
        font-size: 30px;
        font-weight: 700;
        line-height: 36px;
        margin-top: 9px;
    }

    .data-part .container .data-item:after {
        background-color: #f0f2f3;
        content: "";
        display: block;
        height: 60px;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
    }

    .data-part .container .data-item:last-child:after {
        display: none;
    }

    .base-service {
        background-repeat: no-repeat;
        background-size: cover;
        bottom: 0px;
        content: "";
        display: block;
        height: 330px;
        left: 50%;
        position: absolute;
        transform: translateX(27%);
    }

    .partner-cont a {
        color: #000000 !important;
    }

    .partner-cont a:hover {
        color: #05d3e6 !important;
        border-color: #05d3e6 !important;
    }

    @media (max-width: 768px) {
        .base-service {
            height: 177px;
            left: 0;
            top: 40px;
            transform: none;
            width: 100%;
        }

        .custom-margin {
            margin-top: 154px !important;
        }

        .data-part {
            padding: 4px 15px;
        }

        .data-part .container {
            flex-wrap: wrap;
            justify-content: flex-start;
            padding: 0;
        }

        .data-part .container .data-item {
            border-bottom: 1px solid #f0f2f3;
            flex: none;
            padding: 16px 0;
            width: 50%;
        }

        .data-part .container .data-item:last-child {
            border: 0 !important;
        }

        .data-part .container .data-item>span {
            font-size: 14px;
        }

        .data-part .container .data-item b {
            font-size: 18px;
            line-height: 22px;
        }

        .data-part .container .data-item:after {
            display: none;
        }

        .my-flex-wrap {
            flex-wrap: wrap;
        }

    }
</style>
<div class="row mx-0 align-items-center">
    <div class="col-lg-7 text-center text-lg-start">
        <h4 class="text-color">EXPLORER 1BY10 API</h4>
        <div class="top-introduce-part position-relative" style="z-index: 1">
            <h3 class="my-4 fw-bold"><span>Easy, Efficient, and Secure Access to 1BY10</span></h3>
        </div>
        <p>Support on-chain data queries in real time, greatly simplifying your DApp development process. The security
            services enable you to customize the security strategy of your product.</p>
        <div class="mt-4">
            <a href="#" class="btn btn-primary px-4">View API Docs</a>
            <a href="#" class="btn btn-outline-primary px-4 mt-3 mt-lg-0">Create API Key</a>
            <a href="#" class="btn btn-outline-primary px-4 mt-3 mt-lg-0">Contact Us</a>
        </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
        <img src="{{ asset('/assets/web/images/api-bg.png') }}" class="w-100" alt="">
    </div>
</div>

<div class="data-part rounded mt-5">
    <div class="container d-flex align-items-center flex-wrap position-relative">
        <div class="data-item"><span><span>Daily Calls</span></span><b><span>&gt; 200 million</span></b></div>
        <div class="data-item"><span><span>Peak QPS</span></span><b><span>2000 calls/s</span></b></div>
        <div class="data-item"><span><span>Avg. Response Time</span></span><b><span>&lt; 50ms</span></b></div>
        <div class="data-item"><span><span>Error Rate</span></span><b>&lt; 0.01%</b></div>
        <div class="data-item"><span><span>Availability</span></span><b>99.9998%</b></div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center position-relative">
    <div class="col-lg-12">
        <h1 class="text-center my-3">Services</h1>
    </div>
    <div class="col-lg-7 mt-4 mt-lg-0 order-2 order-lg-1 custom-margin">
        <div class="top-introduce-part position-relative">
            <h3 class="my-4 fw-bold"><span>Basic Services</h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex gap-2">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Query the basic information, asset list, and transfer records of
                            an account</p>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Query all transactions on 1BY10 within a specified period and
                            details of the transactions</p>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Query details of a token, such as its total supply and holders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="d-flex gap-2">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Retrieve Detailed Block Information by Height or Hash Value
                            Instantly
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Search and Filter Transactions by Address or Transaction Hash
                            Value Quickly
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <div>
                        <i class="fa-solid fa-circle-check" style="color: var(--primary-color)"></i>
                    </div>
                    <div>
                        <p class="border-bottom pb-3">Get Comprehensive Token Transaction History with Sender and
                            Receiver Details</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="#" class="btn btn-primary px-4">View API Docs</a>
        </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0 order-1 order-lg-2 base-service"
        style="background-image:url({{ asset('/assets/web/images/api-ser.png') }})">
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="top-introduce-part position-relative">
            <h3 class="my-4 fw-bold"><span>Security Services</h3>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Scam Account Check</h4>
                            <p class="my-3">A unique model is established to identify scam accounts based on their
                                on-chain behaviors as well as correlation relationships.</p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div> <img src="{{ asset('/assets/web/images/security-ser/4.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Account Authorization Check</h4>
                            <p class="my-3">Check authorized contracts and addresses of an account to identify risks.
                            </p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div>
                            <img src="{{ asset('/assets/web/images/security-ser/5.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Multisig Permission Check</h4>
                            <p class="my-3">Check multisig permissions of an account in case of scams.</p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div>
                            <img src="{{ asset('/assets/web/images/security-ser/2.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Scam Transaction Check</h4>
                            <p class="my-3">Identify fraudulent transactions through algorithms involving account
                                correlation, transaction flows, and image recognition.</p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div>
                            <img src="{{ asset('/assets/web/images/security-ser/6.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Scam Website Check</h4>
                            <p class="my-3">Identify and flag fraudulent websites through algorithms as well as other
                                channels such as community reporting.</p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div>
                            <img src="{{ asset('/assets/web/images/security-ser/7.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Token Security Check</h4>
                            <p class="my-3">Assess token security from multiple dimensions to thoroughly identify
                                potential risks.</p>
                            <a href="#" class="btn btn-outline-primary px-3">View API Docs</a>
                        </div>
                        <div>
                            <img src="{{ asset('/assets/web/images/security-ser/3.png') }}"
                                style="width: 80px;height:80px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div>
            <h1 class="text-center my-3">Why 1BY10 Explorer</h1>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <img src="{{ asset('/assets/web/images/why1by10/1.png') }}" style="width:80px;height:80px"
                            alt="">
                    </div>
                    <div>
                        <h3>Usability</h3>
                    </div>
                    <div>
                        <p>Get easy access to the 1BY10 Explorer network and retrieve on-chain data without the need for
                            node deployment</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <img src="{{ asset('/assets/web/images/why1by10/2.png') }}" style="width:80px;height:80px"
                            alt="">
                    </div>
                    <div>
                        <h3>Stability</h3>
                    </div>
                    <div>
                        <p>Multiple server clusters are adopted to handle massive concurrent requests while ensuring
                            service stability</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <img src="{{ asset('/assets/web/images/why1by10/3.png') }}" style="width:80px;height:80px"
                            alt="">
                    </div>
                    <div>
                        <h3>Security</h3>
                    </div>
                    <div>
                        <p>Settings such as JWT authentication and origin header whitelist are supported to improve
                            security of the API Key service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div>
            <h1 class="text-center my-5">Partners</h1>
        </div>
        <div class="row g-4 align-items-stretch partner-cont">
            <div class="col-lg-3">
                <a href="https://1by10.website/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10webite.png') }}"
                                style="width: 20px;height:20px" alt="1by10webite">
                        </div>
                        <div>
                            <h6>1BY10 Group</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.world/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10webite.png') }}"
                                style="width: 20px;height:20px" alt="1by10webite">
                        </div>
                        <div>
                            <h6>1BY10 World</h6>
                        </div>                        
                    </div>
                </a>
            </div>           
            <div class="col-lg-3">
                <a href="https://1by10.live/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10live.png') }}"
                                style="width: 20px;height:20px" alt="1by10live">
                        </div>
                        <div>
                            <h6>1BY10 Live</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.digital/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10digital.png') }}"
                                style="width: 20px;height:20px" alt="1by10digital">
                        </div>
                        <div>
                            <h6>1BY10 Digital</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.online/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10online.png') }}"
                                style="width: 20px;height:20px" alt="1by10online">
                        </div>
                        <div>
                            <h6>1BY10 Online</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.ink/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10online.png') }}"
                                style="width: 20px;height:20px" alt="1by10online">
                        </div>
                        <div>
                            <h6>1BY10 Coin</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.homes/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10homes.png') }}"
                                style="width: 20px;height:20px" alt="1by10homes">
                        </div>
                        <div>
                            <h6>1BY10 Homes</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
            <div class="col-lg-3">
                <a href="https://1by10.site/" target="_blank" class="border p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 my-flex-wrap gap-2">
                        <div> <img src="{{ asset('/assets/web/images/1by10/1by10site.png') }}"
                                style="width: 20px;height:20px" alt="1by10site">
                        </div>
                        <div>
                            <h6>1BY10 Wealth</h6>
                        </div>                        
                    </div>
                </a>
            </div>            
        </div>
    </div>
</div>

@include('web.chunks.footer')
