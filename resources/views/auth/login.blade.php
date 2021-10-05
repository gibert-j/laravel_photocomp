@extends('layouts.app')
@section('content')
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <style>
        body{
          background-color: #F5F5F5;
          overflow: hidden;
        }
        .backgroundTop{
          background-image: url(images/bgImg.jpg);
          background-position: center;
          background-repeat: no-repeat;
          position: relative;
          height: 800px;
          padding: 25vh 0px;
          margin-top: 105px;
          z-index: 1;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 10px auto 15px 0;
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
        .img1container h3{
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

        .extra{
          text-align: center;
          padding-top: 16px;
        }

        /* The Modal (background) */
        .form {
          display: block; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: hidden; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
          margin-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 30%; /* Could be more or less, depending on screen size */
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
          from {-webkit-transform: scale(0)}
          to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
          from {transform: scale(0)}
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width:700px) {
          span.psw {
            display: block;
            float: none;
          }
          .middle{
            margin-top: 45px;
            position:fixed;
          }
          .form{
            margin-top: 105px;
          }
          .modal-content {
            width: 80%;
          }
          .cancelbtn {
            width: 100%;
          }
        }

        /*for ipd pro*/
        @media screen and (min-width:700px) and (max-width:1000px) {
          .form{
            margin-top: 80px;
          }
          .modal-content {
            width: 80%;
          }
        }
      </style>
    </head>
    <body>
      <div class="backgroundTop"> </div>

      <div id="id02" class="form">
        <form class="modal-content animate" action="{{ route('login') }}" method="POST">
        @csrf
          <div class="img1container">
            <a href="{{ route('home')}}"><span class="close" title="Close Modal" >&times;</span></a>
            <h3 class="justify-content-centre">Login</h3>
          </div>

          <div class="container">
            <label for="name"><b>Email</b></label>
            <input name="email" type="text" class="form-control w-full " placeholder="Email *" value="" required>
            @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <br> <br>
            <label for="psw"><b>Password</b></label>
            <input  name="password" type="password" class="form-control w-full" placeholder="Password *" value="" required>
            @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <br> <br>
            <button class="button1 rounded" value="Login" type="submit">Login</button>

            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <a href="{{ route('home') }}"><button type="button" class="cancelbtn rounded text-white">Cancel</button></a>
            <div class="extra">
              <a href="{{route('register')}}"><p> Don't have a account? Create a new account</p></a>
            </div>
          </div>
        </form>
    </div>


      <script>
        // Get the modal
        var form = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == form) {
                modal.style.display = "none";
            }
        }
      </script>
    </body>
  </html>
@endsection
