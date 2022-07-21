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
</head>
@include('project layout.header')
<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
   

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Contact us</span></li>
                </ul>
            </div>
            <div class="row">
                <div class=" main-content-area">
                    <div class="wrap-contacts ">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="contact-box contact-form">
                                <h2 class="box-title">Leave a Message</h2>
                                <form action="{{url('contact-post')}}" method="post" name="frm-contact">
                                  @csrf
                                    <label for="name">Name<span>*</span></label>
                                    <input type="text" value="" id="name" name="name">
                                    @error('name')
                                    <span class="text-denger">{{$message}}
                                        @enderror

                                    <label for="email">Email<span>*</span></label>
                                    <input type="text" value="" id="email" name="email">
                                    @error('email')
                                    <span class="text-denger">{{$message}}
                                        @enderror
                                    <label for="phone">Number Phone</label>
                                    <input type="text" value="" id="phone" name="number">
                                    @error('phone number')
                                    <span class="text-denger">{{$message}}
                                        @enderror
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="comment"></textarea>
                                    @error('comment')
                                    <span class="text-denger">{{$message}}
                                        @enderror
                                    <input type="submit" name="ok" value="Submit">

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <div class="contact-box contact-info">
                                <div class="wrap-map">
                                    <div class="mercado-google-maps" id="az-google-maps57341d9e51968" data-hue=""
                                        data-lightness="1" data-map-style="2" data-saturation="-100"
                                        data-modify-coloring="false" data-title_maps="Kute themes"
                                        data-phone="088-465 9965 02" data-email="kutethemes@gmail.com"
                                        data-address="Z115 TP. Thai Nguyen" data-longitude="-0.120850"
                                        data-latitude="51.508742" data-pin-icon="" data-zoom="16"
                                        data-map-type="ROADMAP" data-map-height="263">
                                    </div>
                                </div>
                                <h2 class="box-title">Contact Detail</h2>
                                <div class="wrap-icon-box">

                                    <div class="icon-box-item">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Email</b>
                                            <p>Support1@Mercado.com</p>
                                        </div>
                                    </div>

                                    <div class="icon-box-item">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Phone</b>
                                            <p>0123-465-789-111</p>
                                        </div>
                                    </div>

                                    <div class="icon-box-item">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <div class="right-info">
                                            <b>Mail Office</b>
                                            <p>Sed ut perspiciatis unde omnis<br />Street Name, Los Angeles</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end main products area-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

    <!--footer area-->
    @include('project layout.footer')


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