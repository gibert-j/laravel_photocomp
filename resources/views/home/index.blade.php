@extends('layouts.app')
@section('content')
<div class="middle">
  <div class="container m-auto">
    <div class="text">
      <h2>Welcome To PhotoShoot Competition!</h2>
      <div class="line"></div>
      <h2>Participate now, Show your Photography Skills, Get Rewarded</h2>
    </div>
  </div>
</div>
<div class="entries py-2 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
      @foreach($competitions as $competition)
      <div class="col pb-5">
        <div class="card  mb-3 shadow-sm">
          <div class="carousel-item active ">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$competition->image_path}}">
            <div class="caption pl-3">
               <h2 class="">{{$competition->title}}</h2>
            </div>
          </div>
        </div>
          <p>{{$competition->description}}</p>
          <a href="{{ url('competitions/'.$competition->id) }}" class=" btn btn-primary">Enter Now</a>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
