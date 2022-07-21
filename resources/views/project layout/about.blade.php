<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body class="inner-page about-us ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>


    @include('project layout.header')
    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>about us</span></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <!-- <div class="main-content-area"> -->
            <div class="aboutus-info style-center">
                <b class="box-title">Interesting Facts</b>
                <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type
                </p>
            </div>

            <div class="row equal-container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">10000</b>
                        <span class="sub-title">Items in Store</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">90%</b>
                        <span class="sub-title">Our Customers comeback</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">2 million</b>
                        <span class="sub-title">User of the site</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">What we really do?</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">History of the Company</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Our Vision</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Cooperate with Us!</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Cooperate with Us!</b>
                        <div class="list-showups">
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1"
                                    checked="checked">
                                <span class="check-box"></span>
                                <span class='function-name'>Support 24/7</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
                                <span class="check-box"></span>
                                <span class='function-name'>Best Quanlity</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
                                <span class="check-box"></span>
                                <span class='function-name'>Fastest Delivery</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry...</span>
                            </label>
                            <label>
                                <input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
                                <span class="check-box"></span>
                                <span class='function-name'>Customer Care</span>
                                <span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry...</span>
                            </label>
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
    <script src="{{asset('public/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/js/functions.js')}}"></script>
    <!--footer area-->
</body>

</html>