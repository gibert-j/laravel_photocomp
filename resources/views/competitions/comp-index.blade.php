@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>photocomp</title>
  <style>
    .top{
     background-color: rgba(210, 210, 210, 1);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      margin-top: 50px;
      padding-top: 10vh;
      padding-bottom: 5vh;
      text-align: center;
      z-index: 1;
    }
    .top::before{
      width: 100%;
      height: 25%;
      position: relative;
      content: '';
      top: 0;
      left: 0;
      background-color: rgba(0, 0, 0, .5);
      z-index: -1;
    }
    .box{
      width: 100%;
      display: flex;
      margin: auto;
    }

    .boxes{
      width: 30%;
      padding: 10px;
      box-shadow: 5px 5px 20px -15px rgba(0, 0, 0, 0.8), -5px -5px 20px -15px rgba(0, 0, 0, 0.8);
      margin: 7px; 10px 45px 15px;
    }
    .boxes a{
      padding-top: 4px;
      padding-bottom: 4px;
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
</head>
<body>
  <div class="top">
    <div class="container m-auto">
      <div class="text">
        <h3 style="color: green; text-align: centers">Welcome to Admin Page! From here, you can Create, Edit and Delete a competition.</h3>
          <a class="btn btn-sm btn-outline-success" href="/competitions/create">Create New Competition</a>
      </div>
    </div>
  </div>

<div class="box row m-auto justify-content-center">
  @foreach($competitions as $competition)
  <div class="boxes col-12 col-md-6 col-lg-3 rounded">
      <img class="bd-placeholder-img card-img" src="{{ $competition->image_path }}">
        <h3>{{$competition->title}}</h3>
        <p>{{$competition->description}}</p>
        <h4>{{$competition->time_remaining}}</h4>
    <hr>
      <form action="/competitions/{{$competition->id}}" method="POST">
              @method('DELETE')
              @csrf
              <div class="buttons d-flex justify-content-around">
                <a class="btn btn-sm btn-outline-secondary" href="/competitions/{{$competition->id}}">Show</a>
                <a class="btn btn-sm btn-outline-secondary" href="/competitions/{{$competition->id}}/edit">Edit</a>
                <a href="" class="btn btn-sm btn-outline-danger"><button type="submit" title="delete">Delete</button></a>
              </div>
            </form>
   </div>
    @endforeach

</body>
</html>
 @endsection
