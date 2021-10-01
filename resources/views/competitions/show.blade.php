
@extends('layouts.app')
@section('content')

<style media="screen">

  .content img{
    object-fit: cover;
    width: 100%;
    height: 350px;
  }
</style>
<div class="container mt-5">
  <hr>
  <div class="content">
    <img src="{{$competition->image_path}}" alt="">

  <div class="row place-content-cente row-cols-sm-2 row-cols-md-2 g-2 mx-2 mb-50">
  <div class="col mt-10 pl-2">
    <div class="pl-2">
      <h6>Photo Contest ID:{{$competition->id}}</h6>
      <h4>{{$competition->title}}</h4>
      <p>{{$competition->description}}</p>
    </div>
  </div>
  <div class="col px-2 mt-10 ">
    <div class="pl-2">
      <h4>{{$competition->time_remaining}}</h4>
      <h6>Judge <a href="#">Manoj Rai</a></h6>
      <a href="/competitions/{{$competition->id}}/entries/create" class="btn btn-success mt-2">Upload Photo</a>
    </div>
  </div>
  </div>
</div>
</div>
@endsection
