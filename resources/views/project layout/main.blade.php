<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">

            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                data-dots="false">
                @foreach($slide as $slide)
                <div class="item-slide">

                    <img width="100px" src="{{url('/')}}/public/slide/{{$slide->image}}" alt="" class="img-slide">
                    <div class="slide-info slide-1">
                        <h2 class="f-title"> <b>{{$slide->slide}}</b></h2>
                        <span class="subtitle">{{$slide->title}}</span>
                        <p class="sale-info">Only price: <span class="price">${{$slide->price}}</span></p>
                        <a href="#" class="btn-link">Shop Now</a>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('public/assets/images/home-1-banner-1.jpg')}}" alt="" width="580"
                            height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('public/assets/images/home-1-banner-2.jpg')}}" alt="" width="580"
                            height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->
        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">On Sale</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                data-loop="false" data-nav="true" data-dots="false"
                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                @foreach($Product as $product)
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="{{url('detail/'.$product->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="{{url('/')}}/public/product/{{$product->image}}" width="800"
                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>{{$product->name}}
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">RS:{{$product->sell_price}}</p>
                            </ins> <del>
                                <p class="product-price">RS:{{$product->price}}</p>
                            </del></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('public/assets/images/digital-electronic-')}}banner.jpg" width="1170"
                            height="240" alt="">
                    </figure>
                </a>
            </div>

            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @foreach($Product as $product)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{url('detail/'.$product->id)}}"
                                            title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{url('/')}}/public/product/{{$product->image}}"
                                                    width="800" height="800"
                                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{url('quiek/'.$product->id)}}" class="function-link">quick
                                                view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>
                                                <h5 class="">{{$product->name}}</h5>
                                            </span></a>
                                        <div class="wrap-price"><span class="product-price">${{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box"> Trending Product</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('public/assets/images/fashion-accesories-')}}banner.jpg" width="1170"
                            height="240" alt="">
                    </figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">

                    <!-- <div class="tab-control">
                        <a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
                        <a href="#fashion_1b" class="tab-control-item">Watch</a>
                        <a href="#fashion_1c" class="tab-control-item">Laptop</a>
                        <a href="#fashion_1d" class="tab-control-item">Tablet</a>
                    </div> -->
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach($pro as $products)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{url('detail/'.$products->id)}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img width="50px"
                                                    src="{{url('/')}}/public/product/{{$products->image}}">

                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">trending</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>{{$products->name}}
                                            </span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">RS:{{$products->sell_price}}</p>
                                            </ins> <del>
                                                <p class="product-price">RS:{{$products->price}}</p>
                                            </del></div>
                                    </div>
                                </div>
                                @endforeach











                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>

    </div>

</main>