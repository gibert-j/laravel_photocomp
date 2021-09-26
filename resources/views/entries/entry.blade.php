@extends('layouts.app')
@section('content')

  <div class="container my-20">
    <div class="row w-max mt-20 row-cols-sm-2 row-cols-md-1 g-1 mx-2 px-50">
      <div class=" col pl-10">
        <form id = "fileupload" class="fileupload-form pl-20 ml-10 my-5 " action="entries" method="post" enctype="multipart/form-data">
         @csrf
          <div class="form-group ml-52 px-10 py-10 w-1/2 border-2">
            <input type="file" name="image" id="image" class="form-control" value="Choose Photo" required>
            <br>
              <label for="name">Enter Caption for your photo</label>
              <input type="text" name="name" id="name" class="form-control " value="" required>
              <label for="name">Select Competition</label>
              <select class="form-control w-60 border-2 shadow-md" id="competition_id"  name="competition_id" >
                @foreach ($competitions as $competition)
                <option value="{{$competition->id}}"> {{$competition->title}} </option>
                @endforeach
              </select>
              <button type="submit" name="submit-button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-52 rounded mt-10">Submit</button>
          </div>
        </form>
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
   </div>

@endsection
