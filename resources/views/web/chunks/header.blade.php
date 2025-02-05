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
                        <a class="nav-link" href="#">Home</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tokens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Governance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tron Ecosystem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Developers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">More</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SunPumpMeme</a>
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
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">NILE TESTNET</a></li>
                            <li><a class="dropdown-item" href="#">SHASTA TESTNET</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container py-5">
