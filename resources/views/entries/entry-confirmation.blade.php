@extends('layouts.app')
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>confirmation</title>
  <style>
    body {
        background-color: #E6E6FA;
      }
      /* Modal Content/Box */
      .modal-content {
        margin: 120px auto 0px auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 60%; /* Could be more or less, depending on screen size */
        height: 575px;

      }
      .title{
        margin-top:10px;
        text-align: center;

      }
      .image{
        width: 60%;
        margin: 10px auto 0px auto;
        height: 375px;
        border: 1px solid black;
        display: block;
      }
      .image img{
        width: 100%;
        object-fit: cover;
        height: 375px;
      }
      .text{
        width: 60%;
        margin: auto;
        color: black;
        text-align: center;
      }
      .container{
        width: 60%;
        margin: auto;
      }
      .container .btn{
        background-color: green;
      }
      .container .cnclbtn{
        float: right;
        background-color: red;
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

</body>
</html>

 <div class="modal-content animate " >
    <div class="title">
      <h3>Confirm Submission.</h3>
      <h6>Are you sure you want to enter below photo for the competition?</h6>
    </div>

    <div class="image">
      <img src="{{ $entry->image_path }}" alt="image">
    </div>

    <div class="text">
        <li>
          By confirming the submission you are accepting <br> <a href=""> Our terms and conditions.</a>
    </div>

    <div class="container">
      <a href="{{route('home')}}" class="btn hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="myFunction()">Confirm</a>
      <a href="{{route('home')}}" class="cnclbtn btn hover:bg-red-700 text-white font-bold py-2 px-4  rounded">Cancel</a>
    </div>
  </div>
<script>
function myFunction() {
  alert("Confirm Successfully! Thanks for your submission.");
}
</script>
<!-- <div class="container mt-32 ">
  <div class="content-center px-32 ">
     <hr>
     <h5>Are you sure you want to enter below photo for the competition?</h5>
     <hr>
       <img src="{{ $entry->image_path }}" class="h-50 w-100 " alt="..."><br>
       <p>By confirming you are accepting our policy</p>
     <a href="{{url('entries/'.$entry->id)}}" class="btn btn-primary py-1 px-2 mb-4">Confirm Submission</a>
  </div>
 </div> -->
@endsection
