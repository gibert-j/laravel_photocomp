@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="content pt-10 pb-10 mt-40 border-2 shadow-md w-50 ml-72 " >
      <div class="ml-20 flex flex-wrap content-center">
        <form id = "fileupload" class="fileupload-form" action="/upload" method="post" enctype="multipart/form-data">
         @csrf
          <div class="form-group">
            <input type="file" name="image" id="image" class="form-control" required>
            <br>
              <label for="name">Enter name for your photo</label>
              <input type="text" name="name" id="name" class="form-control " required>
          </div>
              <button type="submit" name="submit-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-10">Submit</button>
        </form>
      </div>
     </div>
   </div>

@endsection
