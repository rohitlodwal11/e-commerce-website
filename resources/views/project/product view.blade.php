<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Detail</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/color-01.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class=" detail page ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    @include('project layout.header')


    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>detail</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-product-detail">
                        <div class="detail-media">
                            <div class="product-gallery">
                                <ul class="slides">


                                    <img src="{{url('/')}}/public/product/{{$product->image}}" width="800" height="800"
                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                </ul>
                            </div>
                        </div>
                        <div class="detail-info">
                            <div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{$product->name}}</h2>

                            <div class="short-desc">
                                <ul>
                                    <li>7,9-inch LED-backlit, 130Gb</li>
                                    <li>Dual-core A7 with quad-core graphics</li>
                                    <li>FaceTime HD Camera 7.0 MP Photos</li>
                                </ul>
                            </div>
                            <div class="wrap-social">
                                <a class="link-socail" href="#"><img
                                        src="{{asset('public/assets/images/social-list.png')}}" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">RS:{{$product->price}}</span></div>
                            @if($product->qty > 0)
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            @else
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>Out of Stock</b></p>
                            </div>
                            @endif
                            <div class="product_data ">
                                <form action="" enctype="multipart/form-data" method="post">
                                    @if($product->qty > 0)
                                    <input type="hidden" value="{{$product->id }}" name="" class="prod_id">
                                    <div class="quantity">
                                        <span>Quantity:</span>
                                        <div class="quantity-input">
                                            <input type="text" name="product-quatity" class="qty-input" value="1"
                                                data-max="10" pattern="[0-9]*">

                                            <a class="btn btn-reduce" href="#"></a>
                                            <a class="btn btn-increase" href="#"></a>
                                        </div>
                                    </div>

                                    @endif
                                    <div class="wrap-butons">
                                        @if($product->qty > 0)
                                        <a href="#" class="btn add-to-cart addToCartBtn">Add to Cart</a>
                                        @endif

                                        <div class="wrap-btn">
                                           
                                            <a href="#" class="btn btn-wishlist addwishlist">Add Wishlist</a>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">description</a>
                            <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                            <a href="#review" class="tab-control-item">Reviews</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no
                                    qui, a t everti meliore erroribus sea. ro cum. Sea ne accusata voluptatibus. Ne
                                    cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis
                                    torquatos cum ei.</p>
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut,
                                    legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his,
                                    ius graecis accommodare te. No eam tota nostrum eque. Est cu nibh clita. Sed an
                                    nominavi, et stituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum
                                    euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit,
                                    modus taria . </p>
                                <p>experian soleat maluisset per. Has eu idque similique, et blandit scriptorem
                                    tatibus mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex
                                    per.</p>
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Weight</th>
                                            <td class="product_weight">1 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td class="product_dimensions">12 x 15 x 23 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td>
                                                <p>Black, Blue, Grey, Violet, Yellow</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">

                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6
                                                Chainsaw Omnidirectional [Orage]</span></h2>
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="" src="{{asset('public/assets/images/author-avata.jpg')}}"
                                                        height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span class="width-80-percent">Rated <strong
                                                                    class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong class="woocommerce-review__author">admin</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date"
                                                                datetime="2008-02-14 20:00">Tue, Aug 15, 2017</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>Pellentesque habitant morbi tristique senectus et
                                                                netus et malesuada fames ac turpis egestas.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                <form action="#" method="post" id="commentform" class="comment-form"
                                                    novalidate="">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be
                                                            published.</span> Required fields are marked <span
                                                            class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>Your rating</span>
                                                        <p class="stars">

                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="rating" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="rating" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="rating" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="rating" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="rating" value="5"
                                                                checked="checked">
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name <span class="required">*</span></label>
                                                        <input id="author" name="author" type="text" value="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label>
                                                        <input id="email" name="email" type="email" value="">
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45"
                                                            rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                            value="Submit">
                                                    </p>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>

    </main>
    <!--main area-->


    @include('project layout.footer')
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
                url: "{{url('/wish-cart')}}",
                success: function(response) {
                    $('.wish-count').html('');
                    $('.wish-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.addwishlist').click(function(e) {
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            // alert(product_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "{{url('/add-to-wishlist')}}",
                data: {
                    'product_id': product_id,
                },
                success: function(response) {


                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.addToCartBtn').click(function(e) {
            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();
            //   alert(product_brand);
            //    alert(product_image);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "{{url('add-to-cart')}}",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty,
                },
                success: function(response) {
                    // alert(response.product_image);
                    window.location.href = "/php/cart";
                }
            })
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
    <script src="{{asset('public/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/js/functions.js')}}"></script>
    <!--footer area-->
</body>

</html>