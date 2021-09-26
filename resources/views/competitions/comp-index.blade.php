@extends('layouts.app')
@section('content')
<div class="container mt-32 ">
  <div class="content-center px-32 ">

      <a class="btn btn-sm btn-outline-danger" href="/competitions/create">Create New Competition</a>
     <br>
    @foreach($competitions as $competition)
    <br>
     <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $competition->image_path }}">

       <h3>{{$competition->title}}</h3>
        <p>{{$competition->description}}</p>
        <form action="/competitions/{{$competition->id}}" method="POST">
              @method('DELETE')
              @csrf

              <a class="btn btn-sm btn-outline-secondary" href="/competitions/{{$competition->id}}">Show</a>
              <a class="btn btn-sm btn-outline-secondary" href="/competitions/{{$competition->id}}/edit">Edit</a>
              <button type="submit" title="delete" class="btn btn-sm btn-outline-danger" >Delete</button>
            </form>

      @endforeach
  </div>
 </div>
 @endsection
