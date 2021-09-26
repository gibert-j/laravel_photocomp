
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row mx-5 ">
    <img class="h-100 flex w-max"src="{{$competitions->image_path}}" alt="">
  </div>
  <div class="row place-content-center row-cols-sm-2 row-cols-md-2 g-2 mx-2 px-20 mb-50">
  <div class="col mt-10 pl-2">
    <div class="pl-5">
      <h6>Photo Contest ID:{{$competitions->id}}</h6>
      <h4>{{$competitions->title}}</h4>
      <p>{{$competitions->description}}</p>
    </div>
  </div>
  <div class="col pl-4 px-20 mt-10 ">
    <div class="pl-5">
      <h5>30 Days Remaining</h5>
      <h6>Judge <a href="#">Manoj Rai</a></h6>
      <a href="/entries" class="btn btn-primary w-44 mt-2">Upload Photo</a>
    </div>
  </div>
  </div>
</div>
@endsection
