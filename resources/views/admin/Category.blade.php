@extends('layout.app')
@section('app-section')
@if(session('status'))
<script>
    swal("{{session('status')}}");
    </script>

@endif
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>Category</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-primary">
            <form action="{{url('/cat')}}" method="post" enctype="multipart/form-data" id="upload-image">
              @csrf 
              <div class="card-body">
                <div class="form-group">
                  <div class="col-md-12">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Add category">
                    @error('name')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file"  class="custom-file-input" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  @error('image')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>category name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $id=0;
                  @endphp
                  @foreach($categories as $category)
                  <tr>
                    @php
                    $id++;
                    @endphp
                    <td>{{$id}}</td>
                    <td>{{$category->name}}</td>
                    <td><img width="100px" src="{{url('/')}}/public/category/{{$category->image}}"></td>
                    <td> @if($category->status=="1")
                      <span class="badge badge-primary">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif
                    </td>
                    <td>
                      <button type="button" value="{{$category->id}}" class="btn btn-default editcategorybtn" data-toggle="modal" data-target="#modal-lg" data-bs-target="#modal-lg">
                      <i class="fas fa-edit"></i>
                      </button>
                     
                      <a href="{{url('categor/'.$category->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i>
                      </a>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---- data Table insert --->
  </section>
</div>
@endsection
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{url('/update-category')}}"  class="row g-3" role="form" method="post" enctype="multipart/form-data"
           id="categoryupdate">
          @csrf
          @method('PUT')
          <input type="hidden" name="id" id="id" class="form-control">
          <input type="hidden" name="old_image" id="old_image" class="form-control">
          <div class="col-md-12">
            <label for="inputFirstName" class="form-label">Category</label>
            <input type="text" class="form-control" id="category_name" name="name" required>
          </div>
          <div class="col-md-12">
            <label for="inputFirstName" class="form-label">Image</label>
            <input class="form-control" type="file" name="image" id="formFile" accept="image/*">
             <img src="{{asset('public/asset/category/noimg.jpg')}}" class="img-responsive img-thumbnail user-image-trigger1 form-image img-fluid" width="100">
          </div>
          <button type="submit" name="submit" class="btn btn-primary float-right">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@section('scripts')
<script type="text/javascript">
  // editcategory
       $(document).ready(function(){
       $(document).on('click', '.editcategorybtn', function(event) {
         event.preventDefault();
         var id = $(this).val()

         // alert(
  
         $.ajax({
           type: 'GET',
           url: 'category/' + id,
           success: function(response){
            console.log(response.sl.id);
             //$('#department_id').val(response.category.department_id);
             $('#id').val(response.sl.id);
             $('#category_name').val(response.sl.name);
             $('#old_image').val(response.sl.image);
             if(response.sl.image){
               var imgsrc=$('.form-image').attr('src',"{{asset('public/category')}}"+"/"+response.sl.image);
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
<script>
  $(document).ready( function () {
      $('#myTable').DataTable();
  });
</script>
@endsection
<!-- end -->