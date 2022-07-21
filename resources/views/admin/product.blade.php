@extends('layout.app')
@section('app-section')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- form start -->
                        <form action="{{url('Product')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value='<?php echo csrf_token(); ?>'>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control select2" name="category" style="width: 100%;"
                                        id="category">
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="subcategory" id="subcategory">

                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Name</label>
                                            <input type="text" name="name" class="form-control" id="okok"
                                                placeholder="Enter Product">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Clothes Brand</label>
                                            <input type="text" name="brand" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter Brand Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Selling Price</label>
                                            <input type="text" name="sell_price" class="form-control"
                                                id="exampleInputEmail1" placeholder="Enter selling Price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input type="text" name="qty" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter quantity">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Trending</label>
                                            <input type="text" name="trending" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter trending product">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <!-- /.form-group -->

                                        </div>
                                        <!-- /.col -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </div>

                                <!-- /.row -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>

                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>subCategory ID</th>

                                        <th> Name</th>
                                        <th> brand </th>
                                        <th> Price</th>
                                        <th> Selling Price</th>
                                        <th> Quantity </th>
                                        <th> Trending </th>


                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $id=0;
                                @endphp
                                <tbody>
                                    @foreach($products as $product)
                                    @php
                                    $id++;
                                    @endphp
                                    <tr>


                                        <td>{{$id}}</td>

                                        <td>{{$product->category_id}}
                                        </td>
                                        <td>{{$product->subcategory_id}}</td>

                                        <td>{{$product->name}}</td>
                                        <td>{{$product->brand}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->sell_price}}</td>
                                        <td>{{$product->qty}}</td>
                                        <td>{{$product->trending}}</td>


                                        <td><img width="50px" src="{{url('/')}}/public/product/{{$product->image}}">
                                        </td>
                                        <td><a href="{{url('produc/'.$product->id)}}" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></a>
                                            <button value="{{$product->id}}" class="btn btn-primary editbtn"><i
                                                    class="fas fa-edit"></i></button>
                                           

                                        </td>

                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!---   edit product modal --->


<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('Product_update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" class="form-control">
                <input type="hidden" name="old_image" id="old_image" class="form-control">
                <div class="card-body">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control select2" name="category" style="width: 100%;" id="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" name="subcategory" id="subcategory">

                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" name="name" class="form-control" id="pro_name"
                                    placeholder="Enter Clothes">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Clothes Brand</label>
                                <input type="text" name="brand" class="form-control" id="pro_brand"
                                    placeholder="Enter Brand Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="price" class="form-control" id="pro_price"
                                    placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Selling Price</label>
                                <input type="text" name="sell_price" class="form-control" id="pro_sell"
                                    placeholder="Enter selling Price">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input type="text" name="qty" class="form-control" id="pro_qty"
                                    placeholder="Enter quantity">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Trending</label>
                                <input type="text" name="trending" class="form-control" id="pro_trending"
                                    placeholder="Enter quantity">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>


                                </div>
                                <!-- /.form-group -->


                            </div>
                            <!-- /.col -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </div>

                    <!-- /.row -->
                </div>
            </form>
        </div>
    </div>
</div>







<!--- end  edit product modal --->


@endsection

@section('scripts')
<script type="text/javascript">
// editcategory
$(document).ready(function() {
    $(document).on('click', '.editbtn', function(event) {
        event.preventDefault();
        var id = $(this).val()


        $.ajax({
            type: 'GET',
            url: 'product/' + id,
            success: function(response) {
                console.log(response.sl.id);
                //$('#department_id').val(response.category.department_id);
                $('#id').val(response.sl.id);
                $('#category').val(response.sl.category);
                $('#subcategory').val(response.sl.subcategory);

                $('#pro_name').val(response.sl.name);
                $('#pro_brand').val(response.sl.brand);
                $('#pro_price').val(response.sl.price);
                $('#pro_sell').val(response.sl.sell_price);
                $('#pro_qty').val(response.sl.qty);
                $('#pro_trending').val(response.sl.trending);


                $('#old_image').val(response.sl.image);
                if (response.sl.image) {
                    var imgsrc = $('.form-image').attr('src',
                        "{{asset('public/product')}}" + "/" + response.sl.image);
                }


                $('#modal-lg').modal('show');
                // $('#old-image').val(response.bcategory.bcatimg);
                // if(response.bcategory.bcatimg){
                //   $imgsrc = $('.form-image').attr('src',"{{asset('img')}}/"+response.bcategory.bcatimg);
                // }
            }

        });
    });
});
</script>

<script type="text/javascript">
$("document").ready(function() {
    $('select[name="category"]').on('change', function() {
        var catId = $(this).val();
        if (catId) {
            $.ajax({
                url: 'products/' + catId,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="subcategory"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="subcategory"]').append('<option value=" ' +
                            value.id + '">' + value.subcategory_name +
                            '</option>');
                    })
                }

            })
        } else {
            $('select[name="subcategory"]').empty();
        }
    });


});
</script>


@endsection