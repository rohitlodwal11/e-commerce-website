<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digital & Electronics</title>
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



</head>

<body class="home-page home-01 ">
    @include('project layout.header')
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Digital & Electronics</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="banner-shop">
                        <a href="#" class="banner-link">
                            <figure><img src="{{asset('public/assets/images/shop-banner.jpg')}}"></figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Digital & Electronics</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen">
                                    <option value="12" selected="selected">12 per page</option>
                                    <option value="16">16 per page</option>
                                    <option value="18">18 per page</option>
                                    <option value="21">21 per page</option>
                                    <option value="24">24 per page</option>
                                    <option value="30">30 per page</option>
                                    <option value="32">32 per page</option>
                                </select>
                            </div>

                            <div class="change-display-mode">
                                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                                <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                            </div>

                        </div>

                    </div>
                    <!--end wrap shop control-->

                    <div class="row">
                        @foreach($products as $product)
                        <ul class="product-list grid-products equal-container">

                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 product_data ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{url('detail/'.$product->id)}}"
                                            title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('/')}}/public/product/{{$product->image}}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        {{$product->brand}}
                                        <a href="#" class="product-name"><span>{{$product->name}}
                                                [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">${{$product->price}}</span>
                                        </div>

                                        <form action="" enctype="multipart/form-data" method="post">
                                            <input type="hidden" value="{{ $product->id }}" name="" class="prod_id">


                                            <a href="{{url('detail/'.$product->id)}}" class="btn add-to-cart">Add To
                                                Cart</a>
                                        </form>

                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current">1</span></li>
                            <li><a class="page-number-item" href="#">2</a></li>
                            <li><a class="page-number-item" href="#">3</a></li>
                            <li><a class="page-number-item next-link" href="#">Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div>
                <!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Fashion & Accessories</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Furnitures & Home Decors</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Digital & Electronics</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Tools & Equipments</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Kid’s Toys</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Organics & Spa</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Brand</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="6">
                                <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
                                <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a>
                                </li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a>
                                </li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs &
                                        Prosecsors</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a>
                                </li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone &
                                        Tablets</a></li>
                                <li class="list-item"><a
                                        data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>'
                                        class="btn-control control-show-more" href="#">Show more<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                    <div class="widget mercado-widget filter-widget price-filter">
                        <h2 class="widget-title">Price</h2>
                        <div class="widget-content">
                            <div id="slider-range"></div>
                            <p>
                                <label for="amount">Price:</label>
                                <input type="text" id="amount" readonly>
                                <button class="filter-submit">Filter</button>
                            </p>
                        </div>
                    </div><!-- Price-->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Color</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list has-count-index">
                                <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a>
                                </li>
                                <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- Color -->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Size</h2>
                        <div class="widget-content">
                            <ul class="list-style inline-round ">
                                <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                                <li class="list-item"><a class="filter-link " href="#">M</a></li>
                                <li class="list-item"><a class="filter-link " href="#">l</a></li>
                                <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                            </ul>
                            <div class="widget-banner">
                                <figure><img src="{{asset('public/assets/images/size-banner-widget.jpg')}}" width="270"
                                        height="331" alt="">
                                </figure>
                            </div>
                        </div>
                    </div><!-- Size -->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            @foreach($pro as $products)
                            <ul class="products">
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="{{url('detail/'.$products->id)}}"
                                                title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="{{url('/')}}/public/product/{{$products->image}}"
                                                        alt="">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>
                                                    {{$products->name}}</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">RS:{{$products->sell_price}}</p>
                                                </ins> <del>
                                            </div>
                                        </div>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div><!-- brand widget-->

                </div>
                <!--end sitebar-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

    <!--footer area-->
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
                url: "{{url('/load-cart-data')}}",
                success: function(response) {
                    $('.cart-count').html('');
                    $('.cart-count').html(response.count);

                }
            });
        }
    });
    </script>


    @section('scripts')
    <script>
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "{{url('product-list')}}",
        success: function(response) {


            startAutoComplete(response);
        }
    });

    function startAutoComplete(availableTags) {
        $(".search_product").autocomplete({
            source: availableTags

        });
    }
    </script>
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{asset('public/assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('public/assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/js/functions.js')}}"></script>
    @yield('scripts')
</body>

</html>