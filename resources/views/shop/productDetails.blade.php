@extends('layouts.downtwn')
@section('content')
<section id="" class="py-5">
    <div class="col-12 breadcrumb">
       <p class="text-center m-0"> 
        <a href="/">Home</a> > 
        <a href="{{route('shop')}}">Shop</a> >
        <a href="#" class="active">{{$product->name}}</a>
       </p>
    </div>
        <div class="container">
		<div class="card single-prod-card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
                          @foreach($product->images as $images)
                            <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="pic-{{ $loop->index + 1 }}"><img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/{{$images}}" /></div>
                          @endforeach   
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
							
                          @foreach($product->images as $images)
                                <li class="{{ $loop->first ? 'active' : '' }}"><a data-target="#pic-{{ $loop->index + 1 }}" data-toggle="tab"><img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/w_150,h_150,c_thumb/{{$images}}" /></a></li>
                            @endforeach
						</ul>
						
					</div>
					<div class="details col-md-6">
                        <p class="m-0">Downtwn.in</p>
						<h3 class="product-title nexa-bold">{{$product->name}}</h3>
                        <p class="product-description">{!! $product->description !!}</p>
						@if($product->sales_price) 
                                <p class="mt-2">
                                    <del class="text-muted">₹{{ number_format($product->price, 2) }}</del> 
                                    <span class="text-success">₹{{ number_format($product->sales_price, 2) }}</span>
                                </p>
                            @else
                                <p class="mt-2">
                                    <span class="text-success">₹{{ number_format($product->price, 2) }}</span>
                                </p>
                            @endif
                            <p class="mini-title">Sizes</p>
                            <div class="size-options">
                                @foreach($product->stock as $stock)
                                    <label class="size-option">
                                        <input type="radio" name="size" value="{{$stock['size']}}" />
                                        <span class="size-label">{{$stock['size']}}</span>
                                    </label>
                                @endforeach
                            </div>
                            <div>
                                <p class="mini-title mt-4 mb-0">quantity</p>
                                <div class="quantity-selector">
                                    <button class="quantity-btn" id="decrease">-</button>
                                    <span class="quantity-count" id="quantity">1</span>
                                    <button class="quantity-btn" id="increase">+</button>
                                </div>
                            </div>
                            <div class="btn-section">
                                <a href="javascript:void(0)" class="btn btn-dwtwn mt-2 shine-button" id="addToCart">add to cart</a>
                                <!-- <a href="javascript:void(0)" class="btn btn-dwtwn mt-2 shine-button {{route('addtocart')}}">buy now</a> -->
                            </div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        let quantity = 1;

        // Decrease quantity
        $('#decrease').click(function () {
            if (quantity > 1) {
                quantity--;
                $('#quantity').text(quantity);
            }
        });

        // Increase quantity
        $('#increase').click(function () {
            quantity++;
            $('#quantity').text(quantity);
        });

        $(document).on('click','#addToCart', function() {
            let productid = "{{$product->id}}";
            let formData = {
                productId: productid,
                quantity: $('#quantity').text()
            };
            axios.post("{{route('addtocart')}}", formData)
                .then(response => {
                    new Noty({
                        type: "success", // success, error, warning, info
                        layout: "topRight", // topLeft, topCenter, bottomRight, etc.
                        text: "Product added to cart",
                        timeout: 3000, // Auto-dismiss in 5 seconds
                        progressBar: true,
                        closeWith: ["click", "button"],
                        theme: "metroui" // Themes: "metroui", "sunset", "relax", etc.
                    }).show();
                    generateAddToCartEvent();

                })
                .catch(error => {
                    toastr.error('Something Went wrong, Please try again later', 'Error');
                    console.error(error);
                })
        });
        /**
         * Add to cart meta event
         */
        const generateAddToCartEvent = () =>{
            const pixelId = "{{ env('META_PIXEL_ID') }}";
            const accessToken = "{{ env('META_ACCESS_TOKEN') }}";

            const endpoint = `https://graph.facebook.com/v19.0/${pixelId}/events`;

            const data = {
                "data": [
                    {
                        "event_name": "Add To Cart",
                        "event_time": Math.floor(Date.now() / 1000), // Current timestamp
                        "action_source": "website",
                        "user_data": {
                            "em": [
                                "{{ hash('sha256', 'customer@example.com') }}" // Hashed email
                            ],
                            "ph": [
                                null
                            ]
                        },
                        "custom_data": {
                            "currency": "INR",
                            "value": "{{$product->price}}"
                        },
                        "original_event_data": {
                            "event_name": "Add To Cart",
                            "event_time": Math.floor(Date.now() / 1000)
                        }
                    }
                ],
                "access_token": accessToken
            };

            axios.post(endpoint, data, {
                headers: {
                    "Content-Type": "application/json"
                }
            })
            .then(response => {
                console.log("Meta Pixel Event Response:", response.data);
            })
            .catch(error => {
                console.error("Error sending event to Meta Pixel:", error.response ? error.response.data : error.message);
                alert("Error sending event. Check console.");
            });
        }
    });
</script>
@endsection