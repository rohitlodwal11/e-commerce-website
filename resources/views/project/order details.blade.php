@extends('layout.app')
@section('app-section')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Order Details</h3>
                            </div>

                            <div class="card-body">

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>

                                        <tr>
                                            <th>S no</th>
                                            <th>order ID</th>
                                            <th>Product Name</th>
                                            <th>qty</th>
                                            <th>price</th>
                                            <th>status</th>

                                            <th> Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                        $id=0;
                                        @endphp
                                        @foreach($orderItem as $order)
                                        @php
                                        $id++;
                                        @endphp
                                        <tr>
                                            <td>{{$id}}</td>

                                            <td>{{$order->order_id}}
                                            </td>
                                            <td> {{$order->prod_id}} </td>

                                            <td>{{$order->qty}}</td>
                                            <td>{{$order->price}}</td>
                                            <td> @if($order->status=="0")
                                                <a class="btn btn-danger">
                                                    Pending
                                                </a>
                                                @else
                                                <a class="btn btn-success">
                                                    <b>Compelte</b>
                                                </a>


                                                @endif
                                            </td>

                                            <td><a href="{{url('/order-view')}}" class="btn btn-success">
                                                    <i class=""></i>view</a></td>


                                        </tr>
                                        @endforeach
                                </table>

                            </div>

                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection