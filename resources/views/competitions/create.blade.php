@extends('layouts.app')
@section('content')
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .backgroundTop {
      background-image: url(images/bgImg.jpg);
      background-position: center;
      background-repeat: no-repeat;
      /* background-size: cover; */
      position: relative;
      padding: 25vh 0px;
      margin-top: 105px;
      z-index: 1;
    }
    .form-control {
      padding: .20rem .5rem;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px auto 15px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    .button1 {
      background-color: #04AA6D;
      color: white;
      padding: 5px 18px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .button1:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: 100%;
      padding: 5px 18px;
      background-color: #f44336;
      margin-bottom: 5px;
    }

    /* Center the image and position the close button */
    .img1container h3 {
      text-align: center;
      font-size: 28px;
      font-family: 'Monda';
      margin: 24px 0 12px 0;
      position: relative;
      color: black;
    }

    img.avatar {
      width: 20%;
      border-radius: 50%;
    }

    /* The Modal (background) */
    .form {
      display: inline; /* Hidden by default */
      position: absolute; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      overflow: hidden; /* Enable scroll if needed */
      background-color: rgba(210, 210, 210, 1); /* Black w/ opacity */
      margin-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 5.5% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 30%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width:700px) {
      span.psw {
        display: block;
        float: none;
      }

      .middle {
        margin-top: 45px;
        position: fixed;
      }

      .form {
        margin-top: 105px;
      }

      .modal-content {
        width: 80%;
      }

      .cancelbtn {
        width: 100%;
      }
      .footer{
        display: none;
      }
    }

    /*for ipd pro*/
    @media screen and (min-width:700px) and (max-width:1200px) {
      .form {
        margin-top: 80px;
      }

      .modal-content {
        width: 80%;
      }
      .footer{
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="backgroundTop"> </div>

  <div id="id02" class="form">
    <form class=" fileupload-form modal-content animate" id="fileupload" action="/competitions" method="post" enctype="multipart/form-data">
      @csrf
      <div class="img1container">
        <h3 class="justify-content-centre">Create Competition</h3>
      </div>

      <div class="container">
        <label for="image"><b>Choose Image</b></label>
        <input type="file" name="image" id="image" class="form-control" required>

        <br>
        <label for="competitionTitle"><b>Title</b></label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title *" value="" required>

        <br>
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Description *" rows="5"
          required></textarea>

        <br>
        <label for="competitionTitle">Closing Time</label>
        <input type="datetime" class="form-control" id="closing_time" placeholder="yyyy-mm-dd hh:mm:ss"
          name="closing_time" value="" required>

        <br>
        <button class="button1 rounded" value="Submit" type="submit">Submit</button>

        <a href="/competitions"><button type="button" class="cancelbtn rounded text-white">Cancel</button></a>
      </div>
    </form>
  </div>

  @if ($errors->any())
  <div class="modal alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if (exist) {
      alert(msg);
    }
  </script>
</body>

</html>


@endsection
