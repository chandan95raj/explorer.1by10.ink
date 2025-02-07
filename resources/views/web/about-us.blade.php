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
    .partner-cont a {
        color: #000000 !important;
    }

    .partner-cont a:hover {
        color: #05d3e6 !important;
        border-color: #05d3e6 !important;
    }
</style>
<div class="row mx-0 align-items-center">
    <div class="col-lg-7 text-center text-lg-start">
        <h4 class="text-color">ABOUT EXPLORER 1BY10</h4>
        <div class="top-introduce-part position-relative" style="z-index: 1">
            <h3 class="my-4 fw-bold"><span>Discovering Insights, One Step at a Time with Explorer 1BY10</span></h3>
        </div>
        <p>At 1by10, we are passionate about empowering individuals and organizations to explore, understand, and
            utilize blockchain technology. Our mission is to provide a comprehensive and user-friendly blockchain
            explorer platform that enables users to access, analyze, and visualize blockchain data.</p>
        <br>
        <p>Our team consists of experienced professionals from various backgrounds, including blockchain development,
            software engineering, data analysis, and marketing. We are a diverse and dynamic team that is passionate
            about blockchain technology and its potential to create positive change.
        </p>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
        <img src="{{ asset('/assets/web/images/about-main-bg.png') }}" class="w-100" alt="">
    </div>
</div>

<div class="row mx-0 align-items-center mt-5">
    <div class="col-lg-6">
        <img src="{{ asset('/assets/web/images/story-bg.png') }}" class="w-100" alt="">
    </div>
    <div class="col-lg-6 mt-4 mt-lg-0 text-center text-lg-start">
        <h4 class="text-color">Our Story</h4>
        <div class="top-introduce-part position-relative">
            <h3 class="my-4 fw-bold"><span>The Journey Behind Explorer 1BY10: Our Story Unfolds.</span></h3>
        </div>
        <p style="text-align:justify;">The story of 1by10 began with a shared vision among its founders to harness the
            potential of blockchain
            technology to create a more transparent, secure, and connected world. As early adopters of blockchain, they
            recognized the vast opportunities it presented, but also the significant challenges that lay ahead. Chief
            among these was the lack of accessible and user-friendly tools for exploring and analyzing blockchain data.
            This realization sparked the idea for 1by10, a blockchain explorer and analytics platform designed to bridge
            the gap between blockchain technology and mainstream adoption.
        </p>
        <br>
        <p style="text-align:justify;">
            As 1by10 continued to grow and evolve, the team remained committed to their core values of innovation,
            transparency, and community. They fostered a culture of collaboration and open communication, engaging with
            users, partners, and industry leaders to stay at the forefront of blockchain innovation. Through strategic
            partnerships and integrations, 1by10 expanded its capabilities, adding new features and tools to support the
            increasingly complex needs of its users. Today, 1by10 stands as a leading blockchain explorer and analytics
            platform, empowering individuals and organizations to harness the potential of blockchain technology and
            create a more transparent, secure, and connected world.
        </p>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="top-introduce-part position-relative">
            <h3 class="my-4 fw-bold"><span>Our Mission & Vision</h3>
        </div>
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Our Mission</h4>
                            <p class="mt-3">At 1by10, our mission is to empower individuals and organizations to
                                harness the potential of blockchain technology, providing intuitive and secure access to
                                blockchain data, analytics, and insights, and fostering a community of innovation and
                                collaboration.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white rounded-4 p-4 shadow-sm h-100 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between flex-grow-1 my-flex-wrap">
                        <div>
                            <h4>Our Vision</h4>
                            <p class="mt-3">Our vision is to be the leading blockchain explorer and analytics
                                platform, bridging the gap between blockchain technology and mainstream adoption, and
                                creating a more transparent, secure, and connected world, one block at a time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mx-0 mt-5 align-items-center">
    <div class="col-lg-12">
        <div class="top-introduce-part position-relative">
            <h3 class="my-4 fw-bold"><span>Our Values</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <h5><i class="fa-solid fa-file-lines fs-1 text-color"></i></h5>
                    </div>
                    <div>
                        <h3>Transparency</h3>
                    </div>
                    <div>
                        <p>We believe in transparency and openness in our operations and communication.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <h5><i class="fa-solid fa-lightbulb fs-1 text-color"></i></h5>
                    </div>
                    <div>
                        <h3>Innovation</h3>
                    </div>
                    <div>
                        <p>We are committed to innovation and excellence in everything we do.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <h5><i class="fa-solid fa-users fs-1 text-color"></i></h5>
                    </div>
                    <div>
                        <h3>User-centricity</h3>
                    </div>
                    <div>
                        <p>We are focused on creating user-friendly and intuitive solutions that meet the needs of our
                            users.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
                <div class="d-flex flex-column gap-3 text-center px-0 px-lg-3">
                    <div>
                        <h6><i class="fa-solid fa-handshake fs-1 text-color"></i></h6>
                    </div>
                    <div>
                        <h3>Collaboration</h3>
                    </div>
                    <div>
                        <p>We believe in collaboration with other organizations to advance the adoption of blockchain
                            technology.
                        </p>
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
