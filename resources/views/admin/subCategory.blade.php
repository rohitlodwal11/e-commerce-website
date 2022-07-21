@extends('layout.app')
@section('app-section')
<script>
    swal("{{session('status')}}");
    </script>
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
            @if(session()->has('status'))
            <div class="alert alert-success">
              {{ session()->get('status') }}
            </div>
            @endif
            <form action="{{url('subCategory')}}" method="post" enctype="multipart/form-data" id="upload-image">
              @csrf 
              <div class="card-body">
                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control select2" name="category_id" style="width: 100%;"id="category_id">
                    @foreach($Category as $categor)
                    <option value="{{$categor->id}}">{{$categor->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <label for="exampleInputEmail1">SubCategory name</label>
                    <input type="text" name="subcategory_name" class="form-control" id="subcategory_name" placeholder="Add category">
                    @error('sub_category')
                    <span class="text-danger">{{$message}}</span>
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
                  <span class="text-danger">{{$message}}</span>
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
          <div class="row"></div>
          <table id="myTable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>S.no</th>
                <th>category name</th>
                <th>subcategory name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $id=0;
              @endphp
              @foreach($subCategory as $subCategory)
              @php
              $id++;
              @endphp
              <tr>
                <td>{{$id}}</td>
                <td>{{$subCategory->category_id}}</td>
                <td>{{$subCategory->subcategory_name}}</td>
                <td><img width="100px" src="{{url('/')}}/public/subCategory/{{$subCategory->image}}"></td>
                <td> 
                  @if($subCategory->status=="1")
                  <span class="badge badge-primary">Active</span>
                  @else
                  <span class="badge badge-danger">Inactive</span>
                  @endif
                </td>
                <td>
                  <button type="button" value="{{$subCategory->id}}" class="btn btn-default editcategory" data-toggle="modal" data-target="#modal-lg">
                  <i class="fas fa-edit"></i>
                  </button>
                  <a href="{{url('subCategor/'.$subCategory->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<!---- data Table insert --->
</section>
</div>
<!-- Button trigger modal -->
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
        <form action="{{url('subupdate')}}" method="post" enctype="multipart/form-data" id="upload-image">
          @csrf 
          <input type="hidden" name="id" id="id" class="form-control">
          <input type="hidden" name="old_image" id="old_image" class="form-control">
          <div class="card-body">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control select2" name="category_id" style="width: 100%;"id="category_id">
                @foreach($Category as $categor)
                <option value="{{$categor->name}}">{{$categor->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <label for="exampleInputEmail1">SubCategory name</label>
                <input type="text" name="subcategory_name" class="form-control" id="sub_cat" placeholder="Add category">
                @error('sub_category')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <label for="inputFirstName" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="formFile" accept="image/*">
                <img src="{{asset('public/asset/subCategory/noimg.jpg')}}" class="img-responsive img-thumbnail user-image-trigger1 form-image img-fluid" width="100">
              </div>
              @error('image')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="card-footer">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--- end edit modal -->
@endsection
@section('scripts')
<script type="text/javascript">
  // editcategory
       $(document).ready(function(){
       $(document).on('click', '.editcategory', function(event) {
         event.preventDefault();
         var id = $(this).val()
  
       
      $.ajax({
           type: 'GET',
           url: 'subCategory/' + id,
           success: function(response){
            console.log(response.sl.id);
             //$('#department_id').val(response.category.department_id);
             $('#id').val(response.sl.id);
             $('#category_id').val(response.sl.category_id);
  
             $('#sub_cat').val(response.sl.subcategory_name);
             $('#old_image').val(response.sl.image);
             if(response.sl.image){
               var imgsrc=$('.form-image').attr('src',"{{asset('public/subCategory')}}"+"/"+response.sl.image);
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