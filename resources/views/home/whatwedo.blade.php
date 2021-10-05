@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>

	<style media="screen">
	*{
	  font-family: 'Monda', sans-serif;
	}
	.middle1{
	background-image: url("https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80");
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	padding: 25vh 0px;
	margin-top: 105px;
	text-align: center;
	z-index: 1;
	}

	.text{
	color: rgb(255, 255, 255);
	}
	.text h4{
	font-family: 'Monda', sans-serif;
	}
	.text .line{
	width: 40%;
	height: 3px;
	background-color: rgba(255, 74, 42);
	margin: auto;
	}
	.text h2{
	font-family: 'Monda', sans-serif;
	font-size: 45px;
	font-weight: 700;
	color: rgb(255, 255, 255);
	}
	.text p{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	margin: 20px 0;
	}





.text h2{
 font-family:'Monda', sans-serif;
 font-size: 45px;
}
.text p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  margin: 20px 0;
}
.activity h2{
 font-family:'Monda', sans-serif;
}

.box{
 width: 80%;
 display: flex;
 margin: auto;
}
.boxes{
 width: 280px;
 padding: 10px;
 box-shadow: 5px 5px 20px -15px rgba(0, 0, 0, 0.8), -5px -5px 20px -15px rgba(0, 0, 0, 0.8);
 margin: 10px;
}
.boxes a{

 display: block;
 font-family: 'Monda', sans-serif;
 font-size: 15px;
}
.boxes h4{
 font-family: 'Monda', sans-serif;
 margin: 10px 0;
 font-weight: 600;
 font-size: 20px;
}
.boxes img{
 height: 200px;
 object-fit: cover;
 width: 100%;
}
.boxes p{
 font-family: sans-serif;
 font-size: 12px;
}
		</style>
	</head>
	<body>

		<div class="middle1">
		  <div class="container m-auto">
		    <div class="text">
		      <h2> </h2>

		      <h2></h2>
		    </div>
		  </div>
		</div>

<div class="activity my-5">
	<h2 class="my-5 text-center text=capitalize">WHAT WE DO</h2>
	<div class="box row m-auto justify-content-center">
		<div class="boxes">
			<img src="https://images.unsplash.com/photo-1603574670812-d24560880210?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=880&q=80" alt="category_Nature">
			<hr>
			<h4>Free Photo Contest</h4>
			<a>We have different categories of competition where you can enter for free.We organise free competition once a week</a>
			<br><br>

		</div>

		<div class="boxes">
			<img src="https://cdn.pixabay.com/photo/2014/12/14/16/05/arm-wrestling-567950_960_720.jpg" alt="category_Nature">
			<hr>
			<h4>Premium Photo contest</h4>
			<a>Our premium photography contest has wide range of prize pool. Participate now  and win cool prizes</a>
			<br>

		</div>

		<div class="boxes">
			<img src="https://cdn.pixabay.com/photo/2016/01/19/16/38/woman-1149362_960_720.jpg" alt="category_Nature">
			<hr>
			<h4>Sell Photos</h4>
			<a>If you are looking for right places to buy your photos online then our website is the best place to buy quality photos in cheap price</a>
			<br><br>

		</div>



	</div>
</div>
	</body>
</html>

@endsection
