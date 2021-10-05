
@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sign_up_form</title>

            <style>
                /* body{
                    background-image: ;
                } */
                .backgroundTop{
                    background-image: url(images/bgImg.jpg);
                    background-position: center;
                    background-repeat: no-repeat;
                    /* background-size: cover; */
                    position: relative;
                    height: 900px;
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
                    display: inline; /* Hidden by default */
                    position: absolute; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    /* height: 100%;  Full height */
                    overflow: hidden; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
                    margin-top: 60px;
                }

                /* Modal Content/Box */
                .modal-content {
                    background-color: #fefefe;
                    margin: 5% auto 5.5% auto; /* 5% from the top, 15% from the bottom and centered */
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
                @media screen and (min-width:700px) and (max-width:1200px) {
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
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                    </div>
                @endif


                <form class="modal-content animate" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="img1container">
                        <a href="{{ route('home')}}"><span class="close" title="Close Modal" >&times;</span></a>
                        <h3 class="justify-content-centre">Sign Up</h3>
                    </div>

                    <div class="container">
                        <label for="name"  :value="__('Name')"><b>Full name</b></label>
                        <input  id="name" name="name" type="text" class="form-control w-full" placeholder="Full Name *" :value="old('name')" autofocus >
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif

                        <br> <br>
                        <label for="username" :value="__('Username')"><b>Username</b></label>
                        <input id="username" name="username" type="text" class="form-control w-full" placeholder="Username*" :value="old('username')">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                        <br> <br>

                        <label for="email" :value="__('Email')"><b>Email</b></label>
                        <input id="email"  name="email" type="email" class="form-control w-full" placeholder="Email*" :value="old('email')">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <br> <br>

                        <label for="password" :value="__('Password')"><b>Password</b></label>
                        <input id="password" name="password" type="password" class="form-control w-full" placeholder="Password*" :value="old('password')" autocomplete="new-password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <br> <br>

                        <label for="password_confirmation" :value="__('Confirm Password')"><b>Confirm Password</b></label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control w-full" placeholder="Confirm Password*">

                        <button class="button1 rounded" value="Login" type="submit">Sign up</button>



                        <a href="{{ route('home') }}"><button type="button" class="cancelbtn rounded text-white">Cancel</button></a>
                        <div class="extra" text-center>
                            <a href="{{route('login')}}"><p> Already Registered? Login</p></a>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </html>
@endsection
