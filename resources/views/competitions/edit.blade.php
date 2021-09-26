
@extends('layouts.app')
@section('content')

<div class="container my-20">

    <div class="form-content">
    <form method="POST" action="/competitions" id = "fileupload " class="fileupload-form" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="form-group col-6">
                <label for="Name">Choose Image from your computer</label>
                <input type="file" name="image" id="image" class="form-control" required>
                <label for="Name">Change Title</label>
                <input type="text" class="form-control" id="tiltle" name="title" value="">
                <label for="Name">Edit Description Here Image</label>
                <textarea class="form-control" id="description" name="description" rows="10" required></textarea>
              </div>
            </div>
            <br>
         <input class="btn btn-primary" type="submit" value="Submit">
          <a class="btn btn-warning mx-1" href="/competitions/">Cancel</a>
      </div>
    </form>
  </div>


@endsection
