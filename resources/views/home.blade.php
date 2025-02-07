@extends('layouts.downtwn')
@section('content')
<section>
    <div class="container-fluid p-0">
            <div class="">
                <!-- Carousel Section -->
                <div class="col-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                            <li data-target="#carouselExampleFade" data-slide-to="3"></li>
                        </ol> -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738854243/3_otecv5.webp" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738854242/DSC00302-compressed_d5ye0k.webp" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738854242/DSC00272-1_s4aca1.webp" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://res.cloudinary.com/shubhambhattacharya/image/upload/v1738854242/C0088.MP4.00_14_17_03.Still001_evk932.webp" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="topMarqDiv">
        <div class="topMarq lg-band">
            <div class="stretch-pro-marquee">✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
            <div class="stretch-pro-marquee">✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
            <div class="stretch-pro-marquee">✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
            <div class="stretch-pro-marquee">✦ use code dt20 & get 20% off on your first order. ✦ hurry!</div>
        </div>
    </div>
</section>
@foreach($categories as $category)
    @if($category->products->count() > 0)
    <section class="py-4">
        <div class="container">
            <div class="">
                <h3 class="title-lg">{{$category->name}}</h3>
                <p class="subheading">Wear the vibe, share the tribe</p>
            </div>
            <div class="row">
                @foreach($category->products as $product)
                    <div class="col-6 product-card col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <a href="{{route('productDetails',['product_id' => $product->id, 'product_slug' => $product->slug])}}" class="text-decoration-none">
                                <img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/{{$product->images[0]}}" class="card-img-top" alt="{{$product->name}}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="mt-2">
                                        @if($product->sales_price)
                                            <del class="text-muted">₹{{ number_format($product->sales_price, 2) }}</del> 
                                        @endif
                                        <span class="text-success">₹{{ number_format($product->price, 2) }}</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    <a href="{{route('category',['category_slug' => $category->slug])}}" class="btn btn-dwtwn">shop now</a>
                </div>
            </div>
        </div>
    </section>
    @endif
@endforeach
<section class="py-4">
        <div class="container">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators custom-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner btm-carousel">
                        <div class="carousel-item active">
                            <div class="feature-items">
                                <i class="fa-brands fa-cotton-bureau mb-3 theme-color"></i>
                                <h4>100% COTTON</h4>
                                <p class="text-center">Experience unparalleled comfort with our products, crafted meticulously from the finest pure cotton.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="feature-items">
                                <i class="fa-solid fa-truck-fast mb-3 theme-color"></i>
                                <h4>FAST SHIPPING</h4>
                                <p class="text-center">Enjoy the convenience of our fast delivery, bringing your purchase to your doorstep in just a week's time.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="feature-items">
                                <i class="fa-solid fa-shield-halved theme-color"></i>
                                <h4>SECURE PAYMENTS</h4>
                                <p class="text-center">Shop with confidence knowing your payments are processed through our reliable and trusted partners.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
</section>
@endsection
