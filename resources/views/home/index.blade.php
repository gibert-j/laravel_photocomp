
@extends('layouts.app')
@section('content')
<style media="screen">
.box{
 width: 100%;
 display: flex;
 margin: auto;
}
.boxes{
 width: 30%;
 padding: 10px;
 box-shadow: 5px 5px 20px -15px rgba(0, 0, 0, 0.8), -5px -5px 20px -15px rgba(0, 0, 0, 0.8);
 margin: 0 10px 45px 15px;
}
.boxes a{
 display: block;
 font-family: sans-serif;
 font-size: 16px;
 text-align: center;
}
.boxes h3{
 font-family: 'Monda', sans-serif;
 margin: 10px 0;
 font-weight: 600;
 font-size: 20px;
 text-align: center;
 text-transform: capitalize;
}
.boxes img{
 height: 250px;
 object-fit: cover;
 width: 100%;
}
.boxes p{
 font-family: 'Monda', sans-serif;
 font-size: 15px;
 text-align: center;
 height: 80px;


}
</style>
<hr><br>
<div class="middle">
  <div class="container m-auto">
    <div class="text">
      <h2>Welcome To Photo Competition</h2>
      <div class="line"></div>
      <h2>Participate now, Show your Photograph, Get Rewarded</h2>
    </div>
  </div>
</div>

<div class="box row m-auto justify-content-center">
  @foreach($competitions as $competition)
  <div class="boxes col-12 col-md-6 col-lg-3 rounded">
      <img class="bd-placeholder-img card-img" src="{{$competition->image_path}}">
        <h3>{{$competition->title}}</h3>
    <hr>
    <p class="px-2">{{$competition->description}}</p>
    <div class="carousel-item active">
    <h6 class="px-4"> <b> CLOSING IN {{$competition->hours_to_go}} HOURS </b></h6>
    <br>
    <a href="{{ url('competitions/'.$competition->id) }}" class="btn btn-succes">ENTER NOW</a>
   </div>
    <br>
   </div>
       @endforeach
   </div>

@endsection
