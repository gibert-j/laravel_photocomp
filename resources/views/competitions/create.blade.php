
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="md:max-w-md border-2 mt-28 shadow-m">
    <div class="mx-5 my-2 flex flex-wrap content-center">
      <form id = "fileupload" class="fileupload-form" action="/competitions" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Choose Image</label>
        <input type="file" name="image" id="image" class="form-control" required >
        <br>
        <label for="competitionTitle">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="" required>
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
        <br>
        <label for="competitionTitle">Closing Time</label>
        <input type="datetime" class="form-control" id="closing_time" name="closing_time" value="" required>
        <br>
        <input class="btn btn-success" type="submit" value="Submit">
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

<script>
   var msg = '{{Session::get('alert')}}';
   var exist = '{{Session::has('alert')}}';
   if(exist){
     alert(msg);
   }
 </script>
