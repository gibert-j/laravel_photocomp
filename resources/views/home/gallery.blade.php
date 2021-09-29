@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">


  .text-secondary {
    color: $secondary!important;
  }

  body {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  .filters_wrapper {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 10px;
    list-style: none;
    margin: 0 auto 10px;
    padding: 0;
  }
  .activity{
    margin-top: 120px;
  }
  .box{
    width: 100%;
    display: flex;
  }
  .boxes{
      width: 30%;
      padding: 10px;
      /* box-shadow: 5px 5px 20px -15px rgba(0, 0, 0, 0.8), -5px -5px 20px -15px rgba(0, 0, 0, 0.8); */
      margin: 0 10px 45px 15px;
      border: 1px solid;
      text-align: center;
  }
      .boxes h4{
      font-family: Bitter;
      margin: 10px 0;
      font-weight: 700;
    }
    .boxes img{
      height: 250px;
      object-fit: cover;
      width: 100%;
    }

</style>
</head>
<body>
  <div class="activity">
    <h2 class="text-center text=capitalize">Welcome to PhotoComp Gallery</h2>
    <ul class='filters_wrapper mb-5'>
      <h5 class="filter btn btn-light active " data-filter="all">Entries So Far</h5>
    </ul>
    <div class="box row m-auto  justify-content-center">

        @foreach($entries as $entry)
        <div class="boxes rounded">
        <img src="{{$entry->image_path}}" alt="category_Nature">
        <hr>
        <h4>By {{$entry->user->name}}</h4>
        <br>
        <h6 class= "content-centre">{{$entry->competition->title}}</h6>
          <!-- <div class="col pb-5">
            <div class="card  mb-3 shadow-sm">
              <div class="carousel-item active ">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$entry->image_path}}">
                <div class="carousel-caption">

                </div>
              </div>
            </div>

          </div> -->
          </div>
          @endforeach

    </div>
  </div>
  <!-- <div class="container pb-5 pt-5">
    <div class="top-content text-center text-white pb-5">
      <h1 class=""> <span class="text-secondary"></span> <span class="text-secondary"></span></h1>
    </div>
    <h3 class="my-5 text-center text=capitalize">Welcome to PhotoComp Gallery</h3>
    <ul class='filters_wrapper mb-5'>
      <h5 class="filter btn btn-light active " data-filter="all">Entries So Far</h5>
    </ul>

    <div class="entries py-2 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach($entries as $entry)
          <div class="col pb-5">
            <div class="card  mb-3 shadow-sm">
              <div class="carousel-item active ">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{$entry->image_path}}">
                <div class="carousel-caption">

                </div>
              </div>
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div> -->
  @if ($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
 </ul>
</div>
@endif
</body>
</html>
@endsection
