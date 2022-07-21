@extends('layout.app')
@section('app-section')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Slide bar</h3>
                                </div>
                                <form action="{{url('/slide-post')}}" method="post" enctype="multipart/form-data"
                                    id="upload-image">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">slide name</label>
                                            <input type="text" name="slide" class="form-control" id="name"
                                                placeholder="Add slide">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">price</label>
                                            <input type="text" name="price" class="form-control" id="class"
                                                placeholder="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">subtitle</label>
                                            <input type="text" name="title" class="form-control" id=""
                                                placeholder="title">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input"
                                                        id="image">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
            </section>
            <!-- edit modal slide -->



            <!-- end slide modal  -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>

                                    <tr>
                                        <th>Id</th>
                                        <th> slide</th>
                                        <th> price </th>
                                        <th> title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $id=0;
                                @endphp
                                <tbody>
                                    @foreach($slide as $slide)
                                    @php
                                    $id++;
                                    @endphp
                                    <tr>
                                        <td>{{$id}}</td>

                                        <td>{{$slide->slide}}</td>

                                        <td>{{$slide->price}}</td>
                                        <td>{{$slide->title}}</td>
                                        <td><img width="100px" src="{{url('/')}}/public/slide/{{$slide->image}}"></td>
                                        <td>
                                            <button type="button" value="{{$slide->id}}"
                                                class="btn btn-default editslide" data-toggle="modal"
                                                data-target="#modal-lg">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="{{url('slider/'.$slide->id)}}" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit slide</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('slideupdate')}}" method="post" enctype="multipart/form-data"
                                id="upload-image">
                                @csrf
                                <input type="hidden" name="id" id="id" class="form-control">
                                <input type="hidden" name="old_image" id="old_image" class="form-control">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">slide name</label>
                                            <input type="text" name="slide" class="form-control" id="slide"
                                                placeholder="Add slide">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">price</label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">subtitle</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="inputFirstName" class="form-label">Image</label>
                                                <input class="form-control" type="file" name="image" id="image"
                                                    accept="image/*">
                                                <img src="{{asset('public/asset/slide/noimg.jpg')}}"
                                                    class="img-responsive img-thumbnail user-image-trigger1 form-image img-fluid"
                                                    width="100">
                                            </div>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
// editcategory
$(document).ready(function() {
    $(document).on('click', '.editslide', function(event) {
        event.preventDefault();
        var id = $(this).val()


        $.ajax({
            type: 'GET',
            url: 'slide/' + id,
            success: function(response) {
                console.log(response.sl.id);
                //$('#department_id').val(response.category.department_id);
                $('#id').val(response.sl.id);
                $('#slide').val(response.sl.slide);

                $('#price').val(response.sl.price);
                $('#title').val(response.sl.title);

                $('#old_image').val(response.sl.image);
                if (response.sl.image) {
                    var imgsrc = $('.form-image').attr('src', "{{asset('public/slide')}}" +
                        "/" + response.sl.image);
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

@endsection