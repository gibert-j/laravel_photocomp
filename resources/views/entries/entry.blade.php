@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>

    <style>
      body {
        background-color: #E6E6FA;
      }
      /* Modal Content/Box */
      .modal-content {
        margin: 10% auto 0px auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
        height: 450px; /*Could be more or less, depending on screen size */
      }
      form{
        width: 90%;
        height: 250px;
      }
      .title{
        margin-top: 30px;
        margin-bottom:10px;
        text-align: center;
      }

      .close {
        position: absolute;
        right: 16px;
        top: 0;
        color: #000;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover, .close:focus {
        color: red;
        cursor: pointer;
      }

      .upload{
        margin-top: 20px;
        display: block;
      }

      .upload input{
        display: inherit;
        background-color: #DCDCDC;
        width: 100%;
      }

      .fileName{
        margin-top: 20px;
      }

      .fileName input{
        background-color: #DCDCDC;
        height: 20px;
      }
      .container button{
        margin: auto;
      }
      .container .cnclbtn{
        float: right;
      }


      /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)}
          to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
          from {transform: scale(0)}
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
            display: block;
            float: none;
          }
        }
    </style>
</head>
<body>
    <div class="modal-content animate content  border-2 shadow-md " >
      <div class="title">
        <a href="{{ route('home')}}"><span class="close" title="Close Modal" >&times;</span></a>
      </div>
      <div class="ml-20 mb-20 flex flex-wrap content-center">
        <form id = "fileupload" class="fileupload-form" action="entries" method="post" enctype="multipart/form-data">
          @csrf
          <div class="upload">
            <label for="file"><h6>Choose a Photo to participate:</h6></label>
            <input type="file" name="image" id="image" required>
          </div>
          <br>
          <div class="fileName">
            <label for="name"><h6>Enter caption for your photo:</h6></label>
            <input type="text" name="name" id="name" required>
          </div>
            <br>
          <select class="form-control w-60 border-2 shadow-md" id="competition_id"  name="competition_id" >
            @foreach ($competitions as $competition)
              <option value="{{$competition->id}}"> {{$competition->title}} </option>
            @endforeach
          </select>
          <br>

          <div class="container">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            <a href="{{route('home')}}" class="cnclbtn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
          </div>

        </form>
      </div>
    </div>

</body>
</html>
  <!-- <div class="container my-20">
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
     </div> -->

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
