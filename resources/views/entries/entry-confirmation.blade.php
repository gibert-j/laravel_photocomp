@extends('layouts.app')
@section('content')
<div class="container mt-32 ">
  <div class="content-center px-32 ">
     <hr>
     <h5>Are you sure you want to enter below photo for the competition?</h5>
     <hr>
       <img src="{{ $entry->image_path }}" class="h-50 w-100 " alt="..."><br>
       <p>By confirming you are accepting our policy</p>
     <a href="{{url('entries/'.$entry->id)}}" class="btn btn-primary py-1 px-2 mb-4">Confirm Submission</a>
  </div>
 </div>
@endsection
