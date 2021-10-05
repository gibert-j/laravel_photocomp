@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
  <style media="screen">
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

  *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Monda', sans-serif;
  }
  body{
    font-family: 'Playfair Display', serif;
    display: grid;
    background-color: linear-gradient(#bdc3c7, #2c3e50);
    align-content: center;
    min-height: 100vh;
  }
  section{
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 90vh;
    width: 85vw;
    margin: 0 auto;
  }
  .image{
    margin: auto;
    object-fit: cover;
    background-repeat: no-repeat;

  }
  .image img{
    height: 200px;
    width: 200px;
  }
  .content{
    background: #fff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
  }
  .content h2{
    text-transform: uppercase;
    font-size: 36px;
    letter-spacing: 6px;
    opacity: 0.9;
  }
  .content span{
    height: 0.5px;
    width: 80px;
    background: #777;
    margin: 30px 0;
  }
  .content p{
    font-size: 20px;
    padding-bottom: 15px;
    font-weight: 600;
    font-family: sans-serif;
    opacity: 0.7;
    width: 60%;
    text-align: left;
    margin: 0 auto;
    line-height: 1.7;
  }
  .links{
    margin: 15px 0;
  }
  .links li{
    border: 0.5px solid #777;
    list-style: none;
    border-radius: 5px;
    padding: 10px 15px;
    width: 160px;
    text-align: center;
  }
  .links li a{
    text-transform: uppercase;
    color: #777;
    text-decoration: none;
  }
  .links li:hover{
    border-color: #06d6a0;
  }
  .links li:hover a{
    color :#06d6a0;
  }
  .vertical-line{
    height: 30px;
    width: 0.5px;
    background: #777;
    margin: 0 auto;
  }
  .icons{
    display: flex;
    padding: 15px 0;
  }
  .icons li{
    display: block;
    padding: 5px;
    margin: 5px;
  }
  .icons li i{
    font-size: 26px;
    opacity: 0.8;
  }
  .icons li i:hover{
    color: #06d6a0;
  }
  /*****************/
  @media(max-width: 992px){
    section{
      grid-template-columns: 1fr;
      width: 100%;
    }
    .image{
      margin-top:50%;
      object-fit: cover;

    }
    .content{
      height: 100vh;
    }
    .content h2{
      font-size: 20px;
      margin-top: 50px;
    }
    .content span{
      margin: 20px 0;
    }
    .content p{
      font-size: 14px;
    }
    .links li a{
      font-size: 14px;
    }
    .links{
      margin: 5px 0;
    }
    .links li{
      padding: 6px 10px;
    }
    .icons li i{
      font-size: 15px;
    }
  }

  @import 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css';
  @import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css';
  @import 'https://fonts.googleapis.com/css?family=Raleway:100,600';
  @import 'https://fonts.googleapis.com/css?family=Open+Sans:300';
  .section-title h2 {
    text-transform: uppercase;
  }
  .section-title {
    margin: 3% 0;
  }
  .section-title p {
    text-transform: uppercase;
    font-weight:bold;
  }
  .single-team{
    padding-bottom: 70px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    box-shadow:5px 5px 15px #000;
  }

  .team-img{
    position: relative;
    z-index: 5;
    overflow: hidden;
    height: 300px;
  }
  .team-img img{
    width: 100%;
    transition: .3s;
    object-fit: cover;
  }
  .single-team:hover .team-img img {
    transform: scale(1.1);
  }
  .team-content {
    height: 80px;
    width: 100%;
    position: absolute;
    text-align: center;
    overflow: hidden;
    bottom: 0;
    transition: all .4s;
    background: black;
    z-index:3;
  }
  .single-team:hover .team-content{
    height: 150px;
  }
  .team-info {
    padding: 5px 20px 5px 20px;
    transition: all .5s;
  }
  .single-team:hover .team-content{
    background: #000;
  }
  .single-team .team-content .team-info h3 {
    text-transform: uppercase;
    color: #fff;
    font-size: 16px;
    margin: 5px;
  }
  .single-team:hover .team-info h3{
    color: tomato;
  }
  .team-info p {
    margin-top: 15px;
    color: #fff;
  }
  .single-team-text p{
    margin-top: 5px;
  }
  .team-text {
    color: #fff;
    padding: 0 10px 5px;
  }

  /* ignore the code below */

  .link-area
  {
    position:fixed;
    bottom:20px;
    left:20px;
    padding:15px;
    border-radius:40px;
    background:tomato;
    z-index: 10;
  }
  .link-area a
  {
    text-decoration:none;
    color:#fff;
    font-size:25px;
  }
  </style>
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>
  <section>
    <div class = "image my-52">
      <img src=" images/logo.png" >
    </div>
    <div class = "content">
      <h2>About Us</h2>
      <span><!-- line here --></span>

      <p>PhotoComp is a platform where anyone can compete in photo competition.
        Our goal is to connect photographers from all around the world.
      </p>

      <ul class = "links">
        <li><a href = "{{ route('whatwedo') }}">What we do</a></li>
        <div class = "vertical-line"></div>
        <li><a href = "{{ route('contact') }}">Contact us</a></li>
      </ul>
      <ul class = "icons">
        <li>

          <a href="https://www.youtube.com/channel/UCPWZRlSULOWNmWrtHVd43NA" class = "fa fa-youtube"> </a>
        </li>
        <li>

          <a href="https://www.facebook.com/PhotoComp-105658778549141 " class = "fa fa-facebook"> </a>

        </li>

        <li>

          <a href="https://www.instagram.com/photocomp8989/ " class = "fa fa-instagram"> </a>
        </li>
      </ul>
    </div>
  </section>
  <div class="team-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2>JUDGES</h2>
            <p>Meet Our Talented Judges</p>
          </div>
        </div>
        <!--== Single Team Item ==-->
        <div class="col-md-3">
          <div class="single-team">
            <div class="team-img">
              <img src="images/hancy.jpg" alt="" class="img-responsive">
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Manoj Rai</h3>
              </div>
              <!-- <p class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quasi, vel.</p> -->
            </div>
          </div>
        </div>
        <!--== Single Team Item ==-->
        <div class="col-md-3">
          <div class="single-team">
            <div class="team-img">
              <img src="images/saiko.jpg" alt="" class="img-responsive">
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Sanjeev Bardewa</h3>
              </div>
              <!-- <p class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quasi, vel.</p> -->
            </div>
          </div>
        </div>
        <!--== Single Team Item ==-->
        <div class="col-md-3">
          <div class="single-team">
            <div class="team-img">
              <img src="images/prksh.jpg" alt="" class="img-responsive">
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Prakash Tamang</h3>
              </div>
              <!-- <p class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quasi, vel.</p> -->
            </div>
          </div>
        </div>
        <!--== Single Team Item ==-->
        <div class="col-md-3">
          <div class="single-team">
            <div class="team-img">
              <img src="images/javier.jpg" alt="" class="img-responsive">
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3>Javier Gilbert</hh3>
                </div>
                <!-- <p class="team-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quasi, vel.</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
  @endsection
