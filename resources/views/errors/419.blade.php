
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/web/images/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/web/images/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/web/images/favicon.png')}}">
    <link rel="manifest" href="https://www.creative-tim.com/twcomponents/site.webmanifest">
    <link rel="mask-icon" href="https://www.creative-tim.com/twcomponents/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="https://tailwindcomponents.com/storage/2327/temp78140.png?v=2025-01-25 11:24:40" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://www.creative-tim.com/twcomponents/component/404-template/landing" />
    <meta property="og:title" content="404 Template by Scott Windon" />
    <meta property="og:description" content="A simple 404 error page template" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="404 Template by Scott Windon" />
    <meta name="twitter:description" content="A simple 404 error page template" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/2327/temp78140.png?v=2025-01-25 11:24:40" />

    <link rel="canonical" href="https://www.creative-tim.com/twcomponents/component/404-template" itemprop="URL">
    
    <title>404 Error Page explorer.1by10.ink. </title>
    <style>
        .right-img{
            height: 75vh; width: auto;
        }

        @media(max-width:600px){
            .right-img{
                height: auto; width: auto;
            } 
        }
    </style>

            <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-gray-200">
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="min-w-screen min-h-screen bg-blue-100 flex items-center p-5 lg:p-20 overflow-hidden relative">
    <div class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
        <div class="w-full md:w-1/2">
            <div class="mb-10 lg:mb-20">
                <img src="{{asset('/assets/web/images/logo.png')}}" alt="Site Logo" style="width: 200px;">
            </div>
            <div class="mb-10 md:mb-20 text-gray-600 font-light">
                <h1 class="font-black uppercase text-3xl lg:text-5xl text-yellow-500 mb-10" style="color: #0EB4C2!important;">You seem to be lost!</h1>
                <p>The page you're looking for isn't available.</p>
                <p>Try searching again or use the Go Back button below.</p>
            </div>
            <div class="mb-20 md:mb-0">
                <a href="{{ url()->previous() }}" class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-yellow-500 hover:text-yellow-600" style="color: #0EB4C2!important;"><i class="mdi mdi-arrow-left mr-2"></i>Go Back</a>
            </div>
        </div>
        <div class="w-full md:w-1/2 text-center">
            <img src="{{asset('/assets/web/images/undraw_startled_ez5h.png')}}" alt="Error Logo" class="right-img">
            <a href="{{url('/')}}" target="_blank" class="text-xs text-gray-300">explorer.1by10.ink</a>
        </div>
    </div>
    <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
    <div class="w-96 h-full bg-yellow-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
</div>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9077e65d49474013","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>
</html>