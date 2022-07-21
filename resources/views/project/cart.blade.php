<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shopping Cart</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body class=" shopping-cart page ">
    @include('project layout.header')

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

                <div class="wrap-iten-in-cart">
                    <h3 class="box-title"></h3>
                    <ul class="products-cart">
                        @php
                        $total = 0;
                        $ship =0;
                        @endphp
                        @foreach($cartItem as $item)
                        <li class="pr-cart-item product_data">
                            <div class="product-image">
                                <figure><img src="{{url('/')}}/public/product/{{$item->products->image}}" alt="">
                                </figure>
                            </div>

                            <div class="product-name">
                                <a class="link-to-product" href="#">{{$item->products->brand}}
                                    {{$item->products->name}}
                                    [White]</a>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3 my-auto">
                                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                                    <label>Quantity</label>
                                    <div class="input-group text-center mb-3" style="width:10px">
                                        <button class="input-group-text changqantity decrementbtn">-</button>
                                        <input type="text" name="product-quatity" class="text-center qty-input"
                                            value="{{$item->prod_qty}}">

                                        <button class="input-group-text changqantity incrementbtn">+</button>

                                    </div>
                                </div>
                            </div>

                             <div class="price-field sub-total">

                                <p class="prod_price">Rs: {{$item->products->price*$item->prod_qty}}</p>

                                <a href="{{url('cart/'.$item->id)}}" class="btn btn-danger" title="">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                        @php $total += $item->products->price * $item->prod_qty; @endphp
                        @php $ship += $item->prod_qty*50;@endphp
                        @endforeach
                    </ul>
                </div>

                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info"><span class="title">Subtotal</span><b class="index">Rs:{{$total}}</b>
                        </p>
                        <p class="summary-info"><span class="title">Shipping</span><b class="index">Rs:{{$ship}}</b>
                        </p>
                        <p class="summary-info total-info "><span class="title">Total</span><b
                                class="index">Rs:{{$total+$ship;}}</b>
                        </p>
                    </div>
                    <div class="checkout-info">
                        <label class="checkbox-field">
                            <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I
                                have promo code</span>
                        </label>
                        <a class="btn btn-checkout" href="{{url('/check')}}">Check out</a>
                        <a class="link-to-shop" href="{{url('shop')}}">Continue Shopping<i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="update-clear">

                       

                    </div>
                </div>
            </div>
        </div>

    </main>

    @include('project layout.footer')

    <script>
    $(document).ready(function() {
        $('.decrementbtn').click(function(e) {
            e.preventDefault();
            var inc_value = $(this).closest('.product_data').find('.qty-input').val();

            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).closest('.product_data').find('.qty-input').val(value);

            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.incrementbtn').click(function(e) {
            e.preventDefault();
            var inc_value = $(this).closest('.product_data').find('.qty-input').val();


            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $(this).closest('.product_data').find('.qty-input').val(value);

            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.changqantity').click(function() {
            var prod_id = $(this).closest('.product_data').find('.prod_id').val();
            var prod_qty = $(this).closest('.product_data').find('.qty-input').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({    
                method: "POST",
                url: "{{url('update-cart')}}",
                data: {
                    'prod_id': prod_id,
                    'prod_qty': prod_qty,
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
    });
    </script>

    <script>
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "{{url('product-list')}}",
        success: function(response) {
            // console.log(response);
            startAutoComplete(response);
        }
    });

    function startAutoComplete(availableTags) {
        $(".search_product").autocomplete({
            source: availableTags
        });
    }
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

</body>

</html>