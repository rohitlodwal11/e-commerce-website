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
                                        <th>name</th>
                                        <th>Phone</th>
                                        <th>address</th>
                                        <th>code</th>
                                        <th>city</th>
                                        <th>payment_mode</th>
                                        <th>payment_id</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $id=0;
                                   @endphp 
                                    @foreach($order as $o)
                                    @php
                                      $id++;
                                      @endphp 
                                    <tr>
                                        <td>{{$id}}</td>

                                        <td>{{$o->fname}}

                                            {{$o->lname}}
                                        </td>
                                        <td>{{$o->phone}}</td>
                                        <td>{{$o->add}}</td>

                                        <td>{{$o->code}}</td>
                                        <td>{{$o->city}}</td>
                                        <td>{{$o->payment_mode}}</td>
                                        <td>{{$o->payment_id}}</td>

                                        <td> @if($o->status=="1")
                                            <a class="btn btn-danger">
                                                Pending
                                            </a>
                                            @else
                                            <a class="btn btn-success">
                                                <b>Compelte</b>
                                            </a>


                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>



                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</div>
@endsection