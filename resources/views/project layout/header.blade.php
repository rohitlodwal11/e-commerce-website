<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+123) 456 789" href="#"><span
                                        class="icon label-before fa fa-mobile"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="topbar-menu right-menu">

                        <ul>
                            <li class="menu-item menu-item-has-children parent">
                                <a title="Dollar (USD)" href="#">Setting<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu curency">
                                    @if(session()->has("USER_ID"))
                                    <li class="menu-item">
                                        <a title="Dollar (USD)" href="{{url('/logeed')}}">Logout</a>
                                    </li>
                                  
                                    <li class="menu-item">
                                        <a title="Dollar (USD)" href="#">{{session()->get('USER_NAME')}}</a>
                                    </li>

                                    @else
                                    <li class="menu-item">
                                        <a title="Pound (GBP)" href="{{url('/log')}}">Login</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Euro (EUR)" href="{{url('/signup')}}">Signup</a>
                                    </li>
                                    
                                    @endif
                                </ul>
                            </li>

                            </li>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img
                                            src="{{asset('public/assets/images/lang-en.png')}}"
                                            alt="lang-en"></span>English<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu lang">
                                    <li class="menu-item"><a title="hungary" href="#"><span
                                                class="img label-before"><img
                                                    src="{{asset('public/assets/images/lang-hun.png')}}"
                                                    alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item"><a title="german" href="#"><span class="img label-before"><img
                                                    src="{{asset('public/assets/images/lang-ger.png')}}"
                                                    alt="lang-ger"></span>German</a></li>
                                    <li class="menu-item"><a title="french" href="#"><span class="img label-before"><img
                                                    src="{{asset('public/assets/images/lang-fra.png')}}"
                                                    alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item"><a title="canada" href="#"><span class="img label-before"><img
                                                    src="{{asset('public/assets/images/lang-can.png')}}"
                                                    alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children parent">
                                <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu curency">
                                    <li class="menu-item">
                                        <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                    </li>
                                    <li class="menu-item">
                                    </li>
                                    <li class="menu-item">
                                        <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="index.html" class="link-to-home"><img
                                src="{{asset('public/assets/images/logo-top-1.png')}}" alt="mercado"></a>
                    </div>
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="{{url('product-search')}}" method="post">
                                @csrf

                                <input type="search" value="" name="search" id="availableTags" class="search_product"
                                     placeholder="Search here...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="{{url('/wishlist')}}" class="link-direction">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index wish-count"> item</span>
                                    <span class="title">Wishlist</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="#" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index cart-count"></span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
               

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="{{url('/')}}" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/about')}}" class="link-term mercado-item-title">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/shop')}}" class="link-term mercado-item-title">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/cart')}}" class="link-term mercado-item-title">Cart</a>
                            </li>

                            <li class="menu-item">
                                <a href="{{url('/contact')}}" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>