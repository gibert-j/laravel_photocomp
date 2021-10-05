@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Verdana, sans-serif;
    background-color: #f2f2f2;
  }

  .mySlides {
    display: none;
  }

  .slideshow-container img {
    width: 100%;
    vertical-align: middle;
    height: 450px;
    object-fit: cover;
    color: #f2f2f2;
  }

  /* Slideshow container */
  .slideshow-container {
    width: 100%;
    position: relative;
    margin-top: 110px;
    text-align: center;
    background-color: #f2f2f2;
    background-position: center;
    background-repeat: no-repeat;
  }

  .slideshow-container::before {
    width: 100%;
    height: 100%;
    position: relative;
    content: '';
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .5);
    z-index: -1;
  }
  .detail .title{
    text-align: center;
  }
  .title h2 {
    font-family: sans-serif;
    font-size: 25px;
    font-weight: bold;
    color: black;
  }
  .boxes {
    text-align: center;
    box-shadow: none;
    border: 1px solid black;
    margin: 5px 10px auto 10px;
  }

  /* Caption text */
  .text {
    margin-bottom: 200px;
    color: white;
    font-size: 32px;
    font-family: sans-serif;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 5s;
    animation-name: fade;
    animation-duration: 5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .3
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }



  .detail-text {
    width: 60%;
    padding-left: 50px;
    text-transform: capitalize;
  }

  .detail-text p {
    width: 90%;
    line-height: 30px;
    font-family: sans-serif;
    font-size: 16px;
  }

  .detail-text h1 {
    font-family: Bitter;
    font-weight: 700;
  }

  @media screen and (max-width:100%) {
    .detail .jumbotron {
      display: flex !important;
      flex-direction: column;
    }

    .detail .jumbotron .image {
      width: 100%;
      order: 1;

    }

    .detail .jumbotron .detail-text {
      width: 100%;


    }
  }
  </style>
</head>
<body>
  <div class="bodyPart">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="images/light.jpg" style="width:100%">
        <div class="text">SHARE WITH US WHAT YOU FAIL TO PUT INTO WORDS
        </div>.
      </div>
      <div class="mySlides fade">
        <img src="images/cat.jpg" style="width:100%">
        <div class="text">YOUR FIRST 1,000 PHOTOGRAPHS MAY BE WORST, BUT NEVER GIVE-UP</div>
      </div>

      <div class="mySlides fade">
        <img src="images/stars.jpg" style="width:100%">
        <div class="text">START YOUR JOURNEY WITH US</div>
      </div>
      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
    <br>

  <!-- <div class="detail mt-5">
    <div class="title">
      <h2>OUR WINNERS</h2>
    </div>
    <div class="box row m-auto  justify-content-center">
      <div class="boxes col-12 col-md-6 col-lg-3 rounded">
        <img src="" alt="category_Nature">
        <br>
        <h5>COMPETITION TITLE</h5>
        <h2>Winner name</h2>
        <p>Congratultion .. </p>
      </div>
    </div>
    </div> -->
 <br>
    <div class="booking jumbotron text-center">
      <h1>Participate now for amazing rewards</h1>
      <p class="w-50 m-auto">Register now & be the part of PhotoComp & join the <br> "Global Photography Competition"
      </p>
      <form action="{{ route('register') }}">
        <button class="btn btn-primary px-4 py-1 mt-4">Register now</button>
      </form>
    </div>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
  </script>
</body>
</html>
@endsection
