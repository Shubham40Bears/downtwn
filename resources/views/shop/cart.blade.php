@extends('layouts.downtwn')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">My Cart</h2>

    @if(!$products)
        <div class="alert alert-warning">Your cart is empty.</div>
    @else
        <div class="table-responsive">
            @foreach($products as $product)
                    <div class="cart-item">
                        <div>
                            <img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/{{ $product->images[0] }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 100px; border-radius: 6px;">
                        </div>
                        <div class="prod">
                            @php
                                $cartItem = collect($cartItems)->firstWhere('productId', $product->id);
                            @endphp
                            <p class="text-left">{{ $product->name }}
                                <br />
                                <small>Size: {{ $cartItem['size'] ?? 'N/A' }}</small>
                            </p>
                            <div class="icons-cont">
                                <div class="d-flex justify-content-center align-items-center qty-data">
                                    <button class="btn btn-sm btn-outline-secondary decrease-qty no-border" data-id="{{ $product->id }}">-</button>
                                    <span class="mx-2 quantity" id="quantity-{{ $product->id }}">{{ $cartItem['quantity'] ?? 1 }}</span>
                                    <button class="btn btn-sm btn-outline-secondary increase-qty no-border" data-id="{{ $product->id }}">+</button>
                                </div>
                                <i class="fa-solid fa-trash text-danger"></i>
                            </div>
                        </div>
                        <div>
                            <p>₹<span id="total-{{ $product->id }}" data-price="{{$product->price}}">{{ number_format($product->price, 2) }}</span></p>
                        </div>
                    </div>
                    <!-- <tr>
                        <td>
                            <img src="https://res.cloudinary.com/shubhambhattacharya/image/upload/{{ $product->images[0] }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 80px;">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>₹{{ number_format($product->price, 2) }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <button class="btn btn-sm btn-outline-secondary decrease-qty" data-id="{{ $product->id }}">-</button>
                                <span class="mx-2 quantity" id="quantity-{{ $product->id }}">1</span>
                                <button class="btn btn-sm btn-outline-secondary increase-qty" data-id="{{ $product->id }}">+</button>
                            </div>
                        </td>
                        <td>₹<span id="total-{{ $product->id }}" data-price="{{$product->price}}">{{ number_format($product->price, 2) }}</span></td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-item" data-id="{{ $product->id }}"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr> -->
                @endforeach
        </div>
        <hr>
        <div class="text-end">
            <p class="d-flex justify-content-between">Subtotal: <span id="cart-total">0.00</span></p>
            <button type="button" id="checkOutBtn" class="btn btn-dwtwn my-3 w-100">Checkout <i class="fa-solid fa-chevron-right"></i></button>
        </div>
    @endif
</div>
<section class="billing">
    <div class="">
        <!-- Billing Details -->
        <div class="col-md-7">
            <div class="card p-4 shadow">
                <h4 class="mb-3">Order Summary <span class="goback"><i class="fa-solid fa-arrow-left-long"></i></span></h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Subtotal <span class="subtot">0</span>
                    </li>
                    <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                        SGST <span>₹0</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        CGST <span>₹0</span>
                    </li> -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Shipping <span>₹ 200</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Total</strong> <span class="totamt">0</span>
                    </li>
                </ul>
                <small>This price includes 6% SGST & 6% CGST</small>
                <hr>
                <h4 class="mb-3">Billing Details</h4>
                <form id="checkoutForm">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter your city" required>
                    </div>
                    <div class="mb-3">
                        <label for="zip" class="form-label">ZIP Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="Enter your ZIP code" required>
                    </div>
                    <button type="submit" class="btn btn-dwtwn w-100">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function () {
    function updateTotal() {
        let total = 0;
        $(".quantity").each(function () {
            let id = $(this).attr("id").split("-")[1];
            let qty = parseInt($(this).text());
            let price = parseFloat($("#total-" + id).data("price"));
            let itemTotal = qty * price;
            $("#total-" + id).text(itemTotal.toFixed(2));
            total += itemTotal;
        });
        $("#cart-total").text('₹ '+total.toFixed(2));
        $(".subtot").text('₹ '+total.toFixed(2));
        $(".totamt").text('₹ '+(total+200).toFixed(2));
    }

    $(".increase-qty").click(function () {
        let id = $(this).data("id");
        let quantity = parseInt($("#quantity-" + id).text());
        $("#quantity-" + id).text(quantity + 1);
        updateTotal();
    });

    $(".decrease-qty").click(function () {
        let id = $(this).data("id");
        let quantity = parseInt($("#quantity-" + id).text());
        if (quantity > 1) {
            $("#quantity-" + id).text(quantity - 1);
            updateTotal();
        }
    });

    $(".remove-item").click(function () {
        let id = $(this).data("id");
        $(this).closest("tr").remove();
        updateTotal();
    });

    $('#checkOutBtn').click(function(){
        $('.billing').toggleClass('active');
        registerOrderProcessEvents('Initiate Checkout', parseInt($('#cart-total').text().replace(/[^\d]/g, ''), 10)/100);
    });
    $('.goback').click(function(){
        $('.billing').toggleClass('active');
    });

    updateTotal();
});
const registerOrderProcessEvents = (processType, amount) => {
    const pixelId = "{{ env('META_PIXEL_ID') }}";
            const accessToken = "{{ env('META_ACCESS_TOKEN') }}";

            const endpoint = `https://graph.facebook.com/v19.0/${pixelId}/events`;

            const data = {
                "data": [
                    {
                        "event_name": processType,
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
                            "value": amount
                        },
                        "original_event_data": {
                            "event_name": processType,
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
};
</script>
@if($products)
<script>
    const saveCheckoutData = function (rzpData){
        var formData = {
                fullName: $('#fullName').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                address: $('#address').val(),
                city: $('#city').val(),
                zip: $('#zip').val(),
                razorpay_data: rzpData,
                total_price: $('.totamt').text()
            };
        axios.post("{{route('confirmOrder')}}", formData).then(response => {
            // console.log(response);
            registerOrderProcessEvents('Purchase Event', parseInt($('.totamt').text().replace(/[^\d]/g, ''), 10)/100);
            window.location.href = `/thankyou/${response.data.order.id}`;
        });
    }
     $(document).on('submit','#checkoutForm',function(e){
        e.preventDefault();
        axios.post("{{route('initPayment')}}", {})
        .then(response => {
            const data = response.data;
            if (data.success) {
                    const options = {
                        key: "{{ env('RAZORPAY_KEY') }}",
                        amount: data.amount,
                        currency: "INR",
                        name: "Downtwn",
                        description: "Payment for Order Id: "+data.order_id,
                        order_id: data.order_id,
                        handler: function (response) {
                            localStorage.setItem('rzp_dt', JSON.stringify(response));
                            saveCheckoutData(response);
                            registerOrderProcessEvents('Add Payment Info Event', data.amount)
                        },
                        prefill: {
                            name: $('#fullName').val(),
                            email: $('#email').val(),
                        },
                        theme: {
                            color: "#000000",
                        },
                    };

                    const razorpay = new Razorpay(options);
                    razorpay.open();
                } else {
                    alert("Failed to initiate payment. Please try again.");
                }

        })
        .catch(error => {
            console.error(error);
        })
    });
</script>
@endif
@endsection
