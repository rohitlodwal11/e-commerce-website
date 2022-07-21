<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Detail</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/color-01.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript Bundle with Popper -->


</head>

@include('project layout.header')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order Details</h3>
                </div>
                <!-- /.card-header -->


                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-hover">
                        <thead>

                            <tr>
                                <th>S no</th>
                                <th>Product name </th>
                                <th>price</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @php 
                           $id=0;
                            @endphp
                         @foreach($wish as $wishlist)
                            @php 
                            $id++;
                            @endphp
                            <tr>
                        
                                <td>{{$id}}</td>
                                <td>{{$wishlist->product->name}}</td>
                                <td>RS:{{$wishlist->product->price}}</td>
                                 <td><a href="{{url('wish/'.$wishlist->id)}}" class="btn btn-danger">Delete
                                  </a>
                
                </td>
                               



                            </tr>
                            @endforeach
                    </table>

                </div>

                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>





@include('project layout.footer')


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