<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Downtwn.in | Wear the vibe and share the tribe">
    <meta property="og:description" content="Discover our collection of high-quality, stylish oversized tees designed for comfort and individuality. Wear the vibe and share the tribe with Downtwn🤙🏻">
    <meta property="og:image" content="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738931835/Dt-msg-banner_y7nwll.jpg">
    <meta property="og:url" content="https://downtwn.in/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Downtwn.in">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '469856359523154');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=469856359523154&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>
    <div id="app">
        <div class="topMarqDiv">
            <div class="topMarq">
                <div>✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
                <div>✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
                <div>✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
                <div>✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
            </div>
        </div>
        <header class="header-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Hamburger Menu (Left) -->
                    <div class="col-4 col-sm-2 pl-0">
                        <button class="navbar-toggler left-icon-container" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" id="menu" aria-label="Toggle navigation">
                            <i class="fa-solid fa-ellipsis"></i>
                        </button>
                    </div>
                    
                    <!-- Logo (Center) -->
                    <div class="col-4 text-center">
                        <a href="/" class="text-white h2"><img src="{{asset('images/dl.webp')}}" class="img-fluid logo-head" /></a>
                    </div>
                    
                    <!-- Cart Icon (Right) -->
                    <div class="col-4 text-end icon-container">
                        <a href="{{route('cart')}}" class="text-white">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu-section">
            <div class="divider"></div>
            <div>
                <img src="{{asset('images/dl.webp')}}" class="img-fluid menu-logo" />
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-lg-none">
                        <a class="nav-link menu-link" data-aos="flip-up" href="/"><span>HOME</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link menu-link" data-aos="flip-up" href="/"><span>ABOUT</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link menu-link" data-aos="flip-up" href="/shop"><span>SHOP</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link menu-link" data-aos="flip-up" href="/cart"><span>CART</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link menu-link" data-aos="flip-up" href="/contact"><span>HELP &amp; SUPPORT</span><i class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <main class="">
            @yield('content')
        </main>
        <footer class="bg-night text-white pt-4 pb-2">
            <div class="container">
                <div class="row">
                <!-- Company Info Section -->
                <div class="col-md-4">
                    <h5>Corporate Address</h5>
                    <p>
                    204, 3rd Floor, 1334-2. Thadagam Road, Rishba Complex, Coimbatore.<br/>
                    Pin: 641002 <br/>
                    +91-99436 11966
                    </p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5>Important Links</h5>
                    <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Shop</a></li>
                    <li><a href="#" class="text-white">Contact Us</a></li>
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white">Terms of Use</a></li>
                    <li><a href="#" class="text-white">Return & Refund</a></li>
                    <li><a href="#" class="text-white">Shipping</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <div class="col-md-4">
                    <img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738870082/razorpay-with-all-cards-upi-logo-8C260E1375-seeklogo.com_af6hse.png" class="img-fluid footer-payment" />
                </div>
                </div>
                <div class="row mt-3">
                <div class="col text-center">
                    <p class="mb-0">&copy; {{date('Y')}} Downtwn.in. All Rights Reserved.</p>
                </div>
                </div>
            </div>
        </footer>

    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).on('click','#menu', function(){
            $('.menu-section').toggleClass('active');
        })
    </script>
    @yield('scripts')
</body>
</html>
