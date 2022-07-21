<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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

<body class="home-page home-01 ">

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
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <form action="{{url('/sign')}}" method="post">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">Name*</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Last name*">
                                        @error('name')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                        @error('email')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">Password *</label>
                                        <input type="text" id="frm-reg-pass" name="password" placeholder="Password">
                                        @error('password')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">Confirm Password *</label>
                                        <input type="text" id="frm-reg-cfpass" name="password_confirmation"
                                            placeholder="Confirm Password">
                                        @error('confirm password')
                                        <span class="text-danger">{{$message}} </span>
                                        @enderror
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
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
    <script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('public/assets/js/functions.js')}}"></script>
    <!--footer area-->
</body>

</html>