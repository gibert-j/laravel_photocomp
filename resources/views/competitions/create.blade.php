
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="form-content content pt-10 pb-10 mt-40 border-2 shadow-md w-50 ml-72">
    <div class="ml-20 flex flex-wrap content-center">
      <form id = "fileupload" class="fileupload-form" action="/competitions" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image" class="form-control" required >

        <label for="competitionTitle">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="" required>
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
          <label for="competitionTitle">Time Remaining</label>
        <input type="text" class="form-control" id="time_remaining" name="time_remaining" value="" required>
        <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <a class="btn btn-warning mx-1" href="competitions">Cancel</a>
      </form>
    </div>
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

@endsection
