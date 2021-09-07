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
    background: $third;
  }

  .filters_wrapper {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
    list-style: none;
    margin: 0 auto 10px;
    padding: 0;

    li {
      flex: auto;

      &.active {
        background-color: $secondary!important;
        border-color: $secondary!important;
        color: white!important;
      }
    }
  }

  .gallery-wrapper {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;

    .card-item {
      display: none;

      &.showed {
        display: block;
      }

      .picture-wrapper {
        border-radius: 5px;
        display: block;
        height: 150px;
        overflow: hidden;

        img {
          height: 100%;
          width: 100%;
          object-fit: cover;
        }
      }
    }
  }
  </style>
  <link rel="stylesheet" href="/css/master.css">

</head>
<body>
  <div class="container pb-5 pt-5">
    <div class="top-content text-center text-white pb-5">
      <h1 class=""> <span class="text-secondary"></span> <span class="text-secondary"></span></h1>
    </div>
    <h3 class="my-5 text-center text=capitalize">Welcome to PhotoComp Gallery</h3>
    <ul class='filters_wrapper mb-5'>
      <a href="{{ route('gallery') }}" class="filter btn btn-light " data-filter="all">All</a>
      <a href="{{ route('Landscapes') }}" class="filter btn btn-light " data-filter="birds">Landscapes</a>
      <a href="{{ route('portrait') }}" class="filter btn btn-light " data-filter="all">Portrait</a>
      <a href="{{ route('Sports') }}" class="filter btn btn-light active" data-filter="all">Sports</a>
    </ul>
    <div class="gallery-wrapper">
      <div class="card-item showed" >
        <div class="picture-wrapper">
          <img src="https://cdn.pixabay.com/photo/2017/04/22/10/15/woman-2250970__340.jpg" alt="">
        </div>
      </div>
      <div class="card-item showed" >
        <div class="picture-wrapper">
          <img src="https://cdn.pixabay.com/photo/2013/03/19/18/23/mountain-biking-95032__340.jpg" alt="">
        </div>
      </div>
      <div class="card-item showed" >
        <div class="picture-wrapper">
          <img src="https://cdn.pixabay.com/photo/2016/08/01/20/13/girl-1561989__340.jpg" alt="">
        </div>
      </div>
      <div class="card-item showed" >
        <div class="picture-wrapper">
          <img src="https://cdn.pixabay.com/photo/2013/02/09/04/23/swimmers-79592__340.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection
