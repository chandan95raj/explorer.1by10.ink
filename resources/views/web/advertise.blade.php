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

<div class="row mx-0 align-items-center  mt-5 bg-white p-4 rounded">
    <div class="col-lg-7 text-center text-lg-start">
        <h4 class="text-color">EXPLORER 1BY10 Advertising Services</h4>
        <div class="top-introduce-part position-relative" style="z-index: 1">
            <h3 class="my-4 fw-bold"><span>Reach millions of blockchain users and developers worldwide</span></h3>
        </div>
        <div>
            <a href="#" class="btn btn-primary px-4">Contact Us</a>
        </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
        <img src="{{ asset('/assets/web/images/advertise/advertise-bg.png') }}" class="w-100" alt="">
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="my-5 text-center">
            <h3>Why EXPLORER 1BY10?</h3>
            <p class="text-muted mt-2">EXPLORER 1BY10 is the largest blockchain explorer in the 1BY10 ecosystem and has served tens of millions of users since its inception.</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3 text-color ">                    
                    <div>
                        <h1 class="fw-bold">#1</h1>
                    </div>
                    <div>
                        <p>Largest blockchain explorer on 1BY10</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3 text-color ">
                    <div>
                        <h1 class="fw-bold">30 M+</h1>
                    </div>
                    <div>
                        <p>Monthly pageviews</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3 text-color ">
                    <div>
                        <h1 class="fw-bold">5 M+</h1>
                    </div>
                    <div>
                        <p>Monthly unique visitors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="my-5 text-center">
            <h3>Ad Types Supported on 1BY10</h3>
            <p class="text-muted mt-2">EXPLORER 1BY10 now supports a variety of ad types to meet the needs of advertisers. It gives maximum exposure to ads while not disrupting the user experience.</p>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <img src="{{ asset('/assets/web/images/favicon.png') }}" style="width:26px;height:26px" alt="">
                    </div>
                    <div>
                        <h5 class="text-color">EXPLORER 1BY10 Home Page Banner Ad (PC)</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <p class="text-muted">Ad Type:</p>                         
                    </div>
                    <div class="col-8">
                        <p>Image</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">CPT Billing Mode:</p>                         
                    </div>
                    <div class="col-8">
                        <p>CPT</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>427*83 (1.5x recommended)</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Format:</p>                         
                    </div>
                    <div class="col-8">
                        <p>JPG/PNG/GIF</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">File Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>500K or less</p>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <img src="{{ asset('/assets/web/images/advertise/1.png') }}" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="row align-items-center">
            <div class="col-lg-7 mt-5 order-2 order-lg-1">
                <img src="{{ asset('/assets/web/images/advertise/2.png') }}" class="w-100" alt="">
            </div>
            <div class="col-lg-5  order-1 order-lg-2 mt-4 mt-lg-0 text-center text-lg-start">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <img src="{{ asset('/assets/web/images/favicon.png') }}" style="width:26px;height:26px" alt="">
                    </div>
                    <div>
                        <h5 class="text-color">EXPLORER 1BY10 Transaction Details Page Banner Ad (PC)</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <p class="text-muted">Ad Type:</p>                         
                    </div>
                    <div class="col-8">
                        <p>Image</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">CPT Billing Mode:</p>                         
                    </div>
                    <div class="col-8">
                        <p>CPT</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>1000*96</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Format:</p>                         
                    </div>
                    <div class="col-8">
                        <p>JPG/PNG/GIF</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">File Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>500K or less</p>
                    </div>                    
                </div>
            </div>
           
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="row mt-5 align-items-center">
            <div class="col-lg-5 mt-5 text-center text-lg-start">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <img src="{{ asset('/assets/web/images/favicon.png') }}" style="width:26px;height:26px" alt="">
                    </div>
                    <div>
                        <h5 class="text-color">EXPLORER 1BY10 Account Details Page Banner Ad (PC)</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <p class="text-muted">Ad Type:</p>                         
                    </div>
                    <div class="col-8">
                        <p>Image</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">CPT Billing Mode:</p>                         
                    </div>
                    <div class="col-8">
                        <p>CPT</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>1000*96</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">Image Format:</p>                         
                    </div>
                    <div class="col-8">
                        <p>JPG/PNG/GIF</p>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p class="text-muted">File Size:</p>                         
                    </div>
                    <div class="col-8">
                        <p>500K or less</p>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-7 mt-4 mt-lg-0">
                <img src="{{ asset('/assets/web/images/advertise/1.png') }}" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>

@include('web.chunks.footer')