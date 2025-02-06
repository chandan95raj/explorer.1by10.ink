<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explorer - 1BY10.INK</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/web/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('assets/web/bootstrap/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/web/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/web/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/apexcharts.js') }}"></script>
    <style>
        .dropdown-menu.mega-menu li a {
            font-size: 13px;
        }

        .dropdown-menu.mega-menu li {
            margin-bottom: 8px;
        }

        .navbar .dropdown-toggle::after {
            display: none;
        }

        .api-img {
            bottom: 0;
            display: inline-block;
            height: 60px;
            opacity: .5;
            position: absolute;
            right: 0;
            width: 62px;
        }
        .fixed-nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: white;
        }


    </style>
</head>

<body style="background-color: #F0F5F5">
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/web/images/logo.png') }}" style="width:120px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Blockchain</a>
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Nodes</a></li>
                                    <li><a class="dropdown-item" href="#">Blocks</a></li>
                                    <li><a class="dropdown-item" href="#">Accounts</a></li>
                                </div>
                                <div class="col-md-6">
                                    <li><a class="dropdown-item" href="#">Contracts</a></li>
                                    <li><a class="dropdown-item" href="#">Transfers</a></li>
                                    <li><a class="dropdown-item" href="#">Transactions</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Tokens</a>
                        <ul class="dropdown-menu mega-menu">
                            <li><a class="dropdown-item" href="#">Token Tracker</a></li>
                            <p class="font-12 text-muted my-2 ps-3">Hot Tokens</p>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <img src="{{ asset('/assets/web/images/icons/favicon.png') }}"
                                                class="rounded-circle" style="width: 20px;height:20px" alt="favicon">
                                        </div>
                                        <div>
                                            <p>1BY10</p>
                                            <p class="text-muted font-10">Official Token of 1BY10</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <img src="{{ asset('/assets/web/images/icons/payn.png') }}"
                                                class="rounded-circle" style="width: 20px;height:20px" alt="favicon">
                                        </div>
                                        <div>
                                            <p>JustLend</p>
                                            <p class="text-muted font-10">Official Token of 1BY10</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <img src="{{ asset('/assets/web/images/icons/pw.png') }}"
                                                class="rounded-circle" style="width: 20px;height:20px" alt="favicon">
                                        </div>
                                        <div>
                                            <p>Just Cryptos</p>
                                            <p class="text-muted font-10">Official Token of 1BY10</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <img src="{{ asset('/assets/web/images/icons/htx.jpeg') }}"
                                                class="rounded-circle" style="width: 20px;height:20px" alt="favicon">
                                        </div>
                                        <div>
                                            <p>Sun.io</p>
                                            <p class="text-muted font-10">Official Token of 1BY10</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Data</a>
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="font-12 text-muted my-2 ps-3">Charts</p>
                                    <li><a class="dropdown-item" href="#">1By10 Supply</a></li>
                                    <li><a class="dropdown-item" href="#">Total Protocol Revenue</a></li>
                                    <li><a class="dropdown-item" href="#">Active Accounts</a></li>
                                    <li><a class="dropdown-item" href="#">Transaction Trend</a></li>
                                    <li><a class="dropdown-item" href="#">More <i
                                                class="fa-solid fa-chevron-right"
                                                style="font-size: 9px !important"></i></a></li>
                                </div>
                                <div class="col-md-4">
                                    <p class="font-12 text-muted my-2 ps-3">Rankings</p>
                                    <li><a class="dropdown-item" href="#">Top Accounts</a></li>
                                    <li><a class="dropdown-item" href="#">Top Tokens</a></li>
                                    <li><a class="dropdown-item" href="#">Top Contracts</a></li>
                                    <li><a class="dropdown-item" href="#">Resource Consumption</a></li>
                                    <li><a class="dropdown-item" href="#">More <i
                                                class="fa-solid fa-chevron-right"
                                                style="font-size: 9px !important"></i></a></li>
                                </div>
                                <div class="col-md-4">
                                    <p class="font-12 text-muted my-2 ps-3">Analytics</p>
                                    <li><a class="dropdown-item" href="#">Account Holdings</a></li>
                                    <li><a class="dropdown-item" href="#">Stablecoin Overview</a></li>
                                    <li><a class="dropdown-item" href="#">More <i
                                                class="fa-solid fa-chevron-right"
                                                style="font-size: 9px !important"></i></a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Governance</a>
                        <ul class="dropdown-menu mega-menu">
                            <li><a class="dropdown-item" href="#">Super Representatives </a></li>
                            <li><a class="dropdown-item" href="#">Votes</a></li>
                            <li><a class="dropdown-item" href="#">1BY10 Staking Governance</a></li>
                            <li><a class="dropdown-item" href="#">Parameters & Proposals </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">1By10 Ecosystem</a>
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.website/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10webite.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Group</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Group</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.world/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10world.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 World</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 World</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.live/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10live.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Live</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Live</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.digital/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10digital.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Digital</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Digital</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-md-6">
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.online/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10online.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Online</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Online</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.ink/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10online.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Coin</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Coin</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.homes/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10homes.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Homes</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Homes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="https://1by10.site/" target="_blank">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img src="{{ asset('/assets/web/images/1by10/1by10site.png') }}"
                                                        class="rounded-circle" style="width: 20px;height:20px"
                                                        alt="favicon">
                                                </div>
                                                <div>
                                                    <p>1BY10 Wealth</p>
                                                    <p class="text-muted font-10">Official Website of 1BY10 Wealth</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Developers</a>
                        <ul class="dropdown-menu mega-menu" style="padding: 0 !important">
                            <li style="margin-bottom:unset !important;">
                                <a class="dropdown-item" href="#">
                                    <div class="py-2">
                                        <div><button class="btn btn-outline-dark btn-sm py-0">API</button> API</div>
                                        <p class="my-2">
                                            Provide easy, efficient, and <br> secure access to the 1BY10 <br> network, ushering in
                                            <br>the future of decentralization.<br> The security services enable you to<br>
                                            customize the security <br>strategy of your product.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <span>API <i class="fa-solid fa-arrow-right-long"></i></span>
                                            </div>
                                            <div class="api-img">
                                                <img src="{{asset('/assets/web/images/icons/topbar.png')}}"  style="width: 62px;height:60px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-right">
                    <a href="#" class="text-dark">Register</a> |
                    <a href="#" class="text-dark">Log In</a>
                    <a href="#" class="btn my-btn btn-sm">Connect Wallet</a>
                    <div class="notification dropdown">
                        <a href="#"
                            class="dropdown-toggle rounded-circle d-flex align-items-center justify-content-center border shadow-sm"
                            data-bs-toggle="dropdown" style="width: 36px;height:36px">
                            <i class="fa-regular fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div class="dropdown-item border-bottom">
                                    <a href="#" class="notif-a">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Saepe pariatur, dolor
                                        optio odit eius id fugiat nesciunt cupiditate aliquid impedit.</a>
                                    <p>04-02-2024</p>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item border-bottom">
                                    <a href="#" class="notif-a">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Saepe pariatur, dolor
                                        optio odit eius id fugiat nesciunt cupiditate aliquid impedit.</a>
                                    <p>04-02-2024</p>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item border-bottom">
                                    <a href="#" class="notif-a">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Saepe pariatur, dolor
                                        optio odit eius id fugiat nesciunt cupiditate aliquid impedit.</a>
                                    <p>04-02-2024</p>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <a href="#" class="notif-a">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Saepe pariatur, dolor
                                        optio odit eius id fugiat nesciunt cupiditate aliquid impedit.</a>
                                    <p>04-02-2024</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="last dropdown">
                        <a href="#"
                            class="dropdown-toggle rounded-circle d-flex align-items-center justify-content-center border shadow-sm"
                            data-bs-toggle="dropdown" style="width: 36px;height:36px">
                            <i class="fa-solid fa-book"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mega-menu">
                            <li><a class="dropdown-item" href="#">NILE TESTNET</a></li>
                            <li><a class="dropdown-item" href="#">SHASTA TESTNET</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
      window.addEventListener("scroll", function () {
            let navbar = document.querySelector(".navbar");
            if (window.scrollY > 80) { 
                navbar.classList.add("fixed-nav");
            } else {
                navbar.classList.remove("fixed-nav");
            }
        });
    </script>

    <section>
        <div class="container py-5">
