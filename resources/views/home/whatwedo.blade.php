@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
		.responsive {
width: 100%;
height: auto;
}
		</style>
	</head>
	<body>
		<br><br><br>
		<img src="images/cover.jpg" alt="Nature" class="responsive">

<div class="activity my-5">
	<h2 class="my-5 text-center text=capitalize">What We Do</h2>
	<div class="box row m-auto justify-content-center">
		<div class="boxes">
			<img src="https://cdn.pixabay.com/photo/2015/10/30/12/10/bench-press-1013857_960_720.jpg" alt="category_Nature">
			<hr>
			<h4>Free Photo Contest</h4>
			<a>We organize free Competition</a>
			<br><br>
			<a href="#" class="btn btn-primary py-1 px-4 mb-4">View Details</a>
		</div>

		<div class="boxes">
			<img src="https://cdn.pixabay.com/photo/2014/12/14/16/05/arm-wrestling-567950_960_720.jpg" alt="category_Nature">
			<hr>
			<h4>Premium Photo contest</h4>
			<a>We organize different kind of premium photo contest</a>
			<br>
			<a href="#" class="btn btn-primary py-1 px-4 mb-4">View Details</a>
		</div>

		<div class="boxes">
			<img src="https://cdn.pixabay.com/photo/2016/01/19/16/38/woman-1149362_960_720.jpg" alt="category_Nature">
			<hr>
			<h4>Sell Photos</h4>
			<a>We sell the best photos</a>
			<br><br>
			<a href="#" class="btn btn-primary py-1 px-4 mb-4">View Details</a>
		</div>



	</div>
</div>
	</body>
</html>

@endsection
