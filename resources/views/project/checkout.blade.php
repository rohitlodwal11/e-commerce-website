<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CheckOut</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/color-01.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AUcfRh0OWRvEF1-7Edu8qAg7Rf7FpRBN3ozXlE1xFbsEzB3MhGMSwH-Z0en9fDrCkaOFuEY4Hm1cJASe">
    </script>
</head>
@include('project layout.header')


<body class=" checkout page ">
    @if(session('status'))
    <script>
    swal("{{session('status')}}");
    </script>

    @endif
    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->


    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <form action="{{url('order-place')}}" method="post">
                        @csrf
                        <p class="row-in-form">
                            <label for="fname">first name<span>*</span></label>
                            <input class="fname" name="fname" type="text" value="" placeholder="Your name">
                            @error('fname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="lname">last name<span>*</span></label>
                            <input class="lname" type="text" name="lname" value="" placeholder="Your last name">
                            @error('lname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email Addreess:</label>
                            <input class="email" type="email" name="email" value="" placeholder="Type your email">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Phone number<span>*</span></label>
                            <input class="phone" type="number" name="phone" value="" placeholder="10 digits format">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Address:</label>
                            <input class="add" type="text" value="" name="add" placeholder="Street at apartment number">
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="country">Country<span>*</span></label>
                            <input class="country" type="text" name="country" value="" placeholder="United States">
                            @error('country')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="zip-code">Postcode / ZIP:</label>
                            <input class="code" type="number" name="code" value="" placeholder="Your postal code">
                            @error('code')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">Town / City<span>*</span></label>
                            <input class="city" type="text" name="city" value="" placeholder="City name">
                            @error('city')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </p>
                </div>
                   @php
                   $total = 0;
                   $qty = 0;
                   $grandtotal = 0;
                   @endphp
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <p class="summary-info grand-total"><span> Product
                            </span> <span class="grand-total-price">Qty</span><span
                                class="grand-total-price">Payment</span></p>
                        @foreach($cartItem as $item)
                        <!-- <p class="summary-info"><span class="title">{{$item->products->name}}</span></p>
                        <p class="colume"><span class="title"></span>{{$item->prod_qty}}</p> -->
                           <p class="summary-info grand-total"><span>
                            </span>{{$item->products->name}} <span
                                class="grand-total-price"></span>{{$item->prod_qty}}<span
                                class="grand-total-price"></span>RS:{{$item->products->price*$item->prod_qty}}</p>
                        @php $total += $item->products->price*$item->prod_qty ;
                        $qty += $item->prod_qty*50;
                        $grandtotal = $total+$qty;
                        @endphp
                        @endforeach
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                                <span>Direct Bank Transder</span>
                                <span class="payment-desc">But the majority have suffered alteration in some form, by
                                    injected humour, or randomised words which don't look even slightly
                                    believable</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" class="payment_mode" id="payment-mode" type="radio">
                                <span class="rezorpay">rezorpay payment</span>

                            </label>

                           </div>

                        <p class="summary-info grand-total"><span>Grand Total</span> <span
                                class="grand-total-price">RS:{{$grandtotal}}</span></p>
                        <input type="hidden" name="payment_mode" value="">
                        <button type="submit" class="btn btn-medium">Place order now</button>

                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">{{$qty}} </span></p>
                        <h4 class="title-box">Discount Codes</h4>
                        <!-- <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                        </p>
                        <a href="#" class="btn btn-small">Apply</a> -->
                    </div>
                </div>

                </form>

            </div>
            <!--end main content area-->
        </div>
        <!--end container-->

    </main>


    @include('project layout.footer')

    <script>
    $(document).ready(function() {
        $('.rezorpay').click(function(e) {
            e.preventDefault();
            // alert("hello word");
            var fname = $('.fname').val();
            var lname = $('.lname').val();
            var email = $('.email').val();
            var phone = $('.phone').val();
            var add = $('.add').val();
            var country = $('.country').val();
            var code = $('.code').val();
            var city = $('.city').val();
            var data = {
                'fname': fname,
                'lname': lname,
                'email': email,
                'phone': phone,
                'add': add,
                'country': country,
                'code': code,
                'city': city,
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "{{url('/add-rezorpay')}}",
                data: data,
                success: function(response) {
                    var options = {
                        "key": "rzp_test_UaldteSOwz3nlO", // Enter the Key ID generated from the Dashboard
                        "amount": response.alltotal * 100,
                        "currency": "INR",
                        "description": "Acme Corp",
                        "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.png",
                        "prefill": {
                            "email": response.email,
                            "contact": response.phone,
                        },
                        config: {
                            display: {
                                blocks: {
                                    hdfc: { //name for HDFC block
                                        name: "Pay using HDFC Bank",
                                        instruments: [{
                                                method: "card",
                                                issuers: ["HDFC"]
                                            },
                                            {
                                                method: "netbanking",
                                                banks: ["HDFC"]
                                            },
                                        ]
                                    },
                                    other: { //  name for other block
                                        name: "Other Payment modes",
                                        instruments: [{
                                                method: "card",
                                                issuers: ["ICIC"]
                                            },
                                            {
                                                method: 'netbanking',
                                            }
                                        ]
                                    }
                                },
                                hide: [{
                                    method: "upi"
                                }],
                                sequence: ["block.hdfc", "block.other"],
                                preferences: {
                                    show_default_blocks: false // Should Checkout show its default blocks?
                                }
                            }
                        },
                        "handler": function(responsea) {
                            alert(responsea.razorpay_payment_id);
                            $.ajax({
                                method: "POST",
                                url: "{{url('/order-place')}}",
                                data: {
                                    'fname': response.fname,
                                    'lname': response.lname,
                                    'email': response.email,
                                    'phone': response.phone,
                                    'add': response.add,
                                    'country': response.country,
                                    'code': response.code,
                                    'city': response.city,
                                    'payment_mode': "rezorpay payment",
                                    'payment_id': responsea
                                          .razorpay_payment_id,
                                },
                                    success: function(responseb) {

                                    window.location.href = "/php/thank";
                                }

                            });
                        },
                        "modal": {
                            "ondismiss": function() {
                                if (confirm(
                                        "Are you sure, you want to close the form?"
                                    )) {
                                    txt = "You pressed OK!";
                                    console.log("Checkout form closed by the user");
                                } else {
                                    txt = "You pressed Cancel!";
                                    console.log("Complete the Payment")
                                }
                            }
                        }
                    };
                    var rzp1 = new Razorpay(options);
                   
                    rzp1.open();
                }
           
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/load-cart-data')}}",
                success: function(response) {
                    $('.cart-count').html('');
                    $('.cart-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script src="{{asset('public/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/js/functions.js')}}"></script>
    <!--footer area-->

</body>

</html>