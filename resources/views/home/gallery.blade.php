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
    box-shadow: 5px 5px 20px -15px rgba(0, 0, 0, 1), -5px -5px 20px -15px rgba(0, 0, 0, 1);
    margin: 0 10px 45px 15px;
    text-align: center;
  }
  .boxes h4{
    font-family: Bitter;
    margin: 10px 0;
    font-weight: 700;
  }
  .boxes h6{

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
    <br>
    <ul class='filters_wrapper mb-5'>

      <form class="filter btn btn-light active" action="/gallery" method="get">
        <h4>Select Competition To See Entries</h4>

        <select class="category shadow-lg border-2 shadow-inner" name="competition_id" onchange="this.form.submit()">
          @foreach($competitions as $competition)
          <option value="{{$competition->id}}" {{ $competition->id == $selected_category ? 'selected':'' }} >{{$competition->title}}</option>
          @endforeach
        </select>
        <button type="submit" name="button"></button>
      </form>
    </ul>

    <div class="box row m-auto  justify-content-center">
      @foreach($entries as $entry)
      <div class="boxes col-12 col-md-6 col-lg-3 rounded">
        <img src="{{$entry->image_path}}" >
         <br>
        @if ($entry->place == 1)
          <h3 class="text-pink-700 font-extrabold">Winner</h3>
          <h6 class="text-pink-900">Congratulation {{$entry->user->name}}, you have won the competition</h6>
        @endif

        <h6>Photo Name: {{$entry->name}}</h6>
        <hr>
        <h4>By: {{$entry->user->name}}</h4>
        <h6>Competition: {{$entry->competition->title}}</h6>

        @if (Auth::check())
        @if(Auth::user()->admin)
         <a href="competitions/1/entries/{{$entry->id}}/edit" class="btn  btn-success">Select {{$entry->user->name}} as a winner</a>
         @endif
         @endif
      </div>
      @endforeach
    </div>
  </div>
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
