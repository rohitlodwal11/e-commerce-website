
@extends('layout.app')
@section('app-section')
<div class="content-wrapper">
<section class="content-header">
  <div class="container-fluid">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="{{url('/')}}/public/student/{{$student->image}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
<div class="mt-3">
<h4 class="btn-lg bg-primary text-light border">{{$student->name}}</h4>
<p class="text-muted font-size-sm"></p>

</div>
</div>
<hr class="my-4">
@if($student->status=="1")
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0">name:</h6>
<span class="text-secondary">{{$student->name}}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0">section:</h6>
<span class="text-secondary" >{{$student->section}}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0">cource:</h6>
<span class="text-secondary"  >{{$student->cource}}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
<h6 class="mb-0">gender:</h6>
<span class="text-secondary" >{{$student->gender}}</span>
</li>

</ul>
@endif
</div>
</div>
</section>
</div>

@endsection