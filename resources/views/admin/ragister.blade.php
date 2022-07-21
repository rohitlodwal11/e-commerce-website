@extends('layout.app')
@section('app-section')
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1>Student Information</h1>
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
        <h3 class="card-title">Student</h3>
      </div>
      <form action="{{url('/demo')}}" method="post" enctype="multipart/form-data" id="upload-image">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <div class="col-md-12">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Section/Class</label>
            <input type="text" name="section" class="form-control" id="class" placeholder="class">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Cource</label>
            <input type="text" name="cource" class="form-control" id="cource" placeholder="Pleash enter your subject">
          </div>
          <div class="form-group">
            <label for="validationCustom04">gender</label>
            <select class="form-control" id="validationCustom04" required name="gender" id="gender">
              <option selected disabled value="">select</option>
              <option value="male">male</option>
              <option value="female" >female</option>
              <option value="other" >other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
</div>
@endsection