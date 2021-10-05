
@extends('layouts.app')
@section('content')
<br><br>
<div class="container my-28">
    <div class="form-content  px-28 py-28">
    <form method="POST" action="/competitions/{{$competition->id}}" id = "fileupload " class="fileupload-form" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row ">
              <div class="form-group col-6">
                <label for="Title">Time Remaining</label>
                <input type="text" class="form-control" id="time_remaining" name="time_remaining" value="{{$competition->end_time}}" required>
              </div>
            </div>
            <br>
         <input class="btn btn-primary" type="submit" value="Submit">
          <a class="btn btn-warning mx-1" href="/competitions/">Cancel</a>
      </div>
    </form>
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

@endsection
