 @extends('layout.app')
@section('app-section')
<div class="content-wrapper">
<div class="text-center">
  <a type="button" class="btn btn-primary" href="{{url('/ragister')}}">Add User</a>
</div>
<section class="content-header">
  @if(session('status'))
  <div class="alert alert-success">{{session('status')}}</div>
  @endif
  <div class="container-fluid">
    <div class="row mb-12">
      <div class="col-sm-">
        <h1>DataTables</h1>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Student Information</h3>
        </div>
        <div class="card-body">
          <table id="myTable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>S.no</th>
                <th>Student Name</th>
                <th>Section/Class</th>

                <th>Cource</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Status</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @php

             $id=0;
            @endphp

             @foreach($students as $student)
              <tr>
              @php 
                 $id++;
             
              @endphp
                <td>{{$id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->section}}</td>
                <td>{{$student->cource}}</td>
                <td>
                  
                  @if($student->gender=="male")
                  male
                  @elseif($student->gender=="female")
                  female
                  @else
                  other
                  @endif
                
                </td>

                  <td><img width="100px" src="{{url('/')}}/public/student/{{$student->image}}"></td> 
                  <td> @if($student->status=="1")
                    <span class="badge badge-primary">Active</span>
                  @else
                  <span class="badge badge-primary">Inactive</span>
                  
                
                @endif
                  </td>
              <td> 
                  <a href="{{url('profile/'.$student->id)}}" class="btn btn-success"><i class="fas fa-users"></i>
                
                 </a>
                   <a href="{{url('edit/'.$student->id)}}" class="btn btn-primary">
                    <i class="fas fa-edit"></i></a>
                  <form action="{{url('student/'.$student->id)}}" method="post">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-danger btn-sm" data-container="body" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delelet this itmes');">
                      <i class="fas fa-trash"></i></button>
                  </form>
                  @endforeach
                <td>
                 
                  
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
</div>
@endsection
@section('scripts')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
});
</script>

@endsection
