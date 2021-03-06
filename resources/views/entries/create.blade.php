@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>

    <style>
    *{
      font-family: 'Monda', sans-serif;
    }
      body {
        background-color: #E6E6FA;
      }
      /* Modal Content/Box */
      .modal-content {
        margin: 2% auto 2% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 30%; /* Could be more or less, depending on screen size */
        height: 450px; /*Could be more or less, depending on screen size */
      }
      form{
        width: 90%;
        height: 250px;
      }
      .title{
        margin-top: 20px;
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
        @media screen and (max-width: 700px) {
          span.psw {
            display: block;
            float: none;
          }
          .modal-content {
            width: 100% !important; /* Could be more or less, depending on screen size */
          }
        }
        @media screen and (max-width:1200px) and (min-width: 700px) {
          .modal-content {
            width: 60% !important;
          }
        }
    </style>
</head>
<body>
  <br><br><br><br>
    <div class="modal-content animate border-2 shadow-md " >
      <div class="title ">
        <h3>Participation-Form</h3>
        <a href="{{route('home')}}"><span class="close" title="Close Modal" >&times;</span></a>
      </div>
      <div class="ml-5 mb-20 flex flex-wrap content-center">
        <form id = "fileupload" class="fileupload-form" action="/competitions/{{$competition->id}}/entries" method="post" enctype="multipart/form-data">
          @csrf
          <div class="upload">
            <label for="file"><h6>Choose a Photo for Competition</h6></label>
            <br>
            <input type="file" name="image" id="image" required>
          </div>
          <br>
          <div class="fileName">
            <label for="name"><h6>Enter caption for your photo:</h6></label>
            <input type="text" name="name" id="name" required>
          </div>
            <br>
          <br>
          <div class="container">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            <a href="{{route('home')}}" class="cnclbtn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
          </div>

        </form>
      </div>
    </div>

</body>
</html>

     @if ($errors->any())
  <div class="modal-content alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      <!-- <p>Image should be jpg, jpeg and png and size should be no more than 10mb</p> -->
      @endforeach
    </ul>
  </div>
  @endif
   </div>

@endsection
