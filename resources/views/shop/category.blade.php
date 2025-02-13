@extends('layouts.downtwn')
@section('content')
    <section class="py-4">
        <div class="container">
            <div class="">
                <h3 class="title-lg">{{$categoryName}}</h3>
                <p class="subheading">Wear the vibe, share the tribe</p>
            </div>
            <div class="row">
                @foreach($products as $product)
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
            </div>
        </div>
    </section>
@endsection