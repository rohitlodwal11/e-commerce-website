@extends('layout.app')
@section('app-section')
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1>Update student</h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Update Student </h3>
      </div>
      <form action="{{url('update-data')}}" method="post" enctype="multipart/form-data" id="upload-image">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <div class="col-md-12">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="hidden" name="id" value="{{$student->id}}">
              <input type="text" name="name" class="form-control" value="{{$student->name}}"  id="name" placeholder="Enter name">
            </div>
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Section/Class</label>
            <input type="text" name="section" class="form-control" value="{{$student->section}}" id="class" placeholder="class">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cource</label>
            <input type="text" name="cource" class="form-control" value="{{$student->cource}}" id="cource" placeholder="Pleash enter your subject">
          </div>
         
          <div class="form-group">
    <label for="validationCustom04">gender</label>
    <select class="form-control" id="validationCustom04" name="gender" id="gender">
      @if($student->gender=="male")
      <option value="male">male</option>
      <option value="female">female</option>
      <option value="other">other</option>


      @elseif($student->gender=="female")
      <option value="male">male</option>
      <option value="female">female</option>
      <option value="other">other</option>


      @else
      <option value="male">male</option>
      <option value="female">female</option>
      <option value="other">other</option>
    @endif
    </select>

    <div class="invalid-feedback">

      Please select a gender
    </div>
  </div>
         
          <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="image" value="{{$student->image}}" class="custom-file-input" id="image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                
              </div>   
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>

            </div>
                 <img width="100px" src="{{url('/')}}/public/student/{{$student->image}}">
                 
                  
       



          </div>
         
          <div class="card-footer">
            <button type="update" class="btn btn-primary">Update</button>
          </div>
      </form>
      </div>
    </div>
</section>
</div>
@endsection
