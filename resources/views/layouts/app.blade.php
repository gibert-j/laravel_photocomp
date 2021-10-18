 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- // <title>{{ config('app.name', 'Photocomp') }}</title> -->
   <title>Photocomp</title>
   <link rel="stylesheet" href="/app.css">

   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 </head>
  <body>
    <div class="navigation">
      <nav class="navbar navbar-expand-lg">
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/logo.png" alt="logo"></a>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler bg-primary navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            @if (Auth::check())
            @if(Auth::user()->admin)
             <a href="/competitions" class="btn  btn-success">ORGANISE COMPETITION</a>
             @endif
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">PHOTO CONTEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('rewards') }}">REWARDS</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">LOGOUT</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">PHOTO CONTEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('rewards') }}">REWARDS</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">LOGIN</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">SIGNUP</a>
            </li>
            @endif
            @endif


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
    </div>
  </nav>
</div>
    <main>
      @yield('content')
    </main>
<footer>
  <div class="footer">
    <div class="foot py-5">
      <div class="col-md-4 col-md-4 col-12 text-white">
        <h4>PhotoComp </h4>
        <a href="">> Queenstown, NewZealand</a> <br>
        <a href="">> © 2021 PhotoComp, NZ</a> <br>
        <a href="/policy">> Privacy Policy</a> <br>
      </div>
      <div class="col-lg-4 col-md-4 col-12 text-white">
        <h4>Main Menu</h4>
        <a href="/"> > Home</a> <br>
        <a href="/about"> > About us</a> <br>
        <a href="/gallery"> > Gallery</a> <br>
        <a href="/rewards"> > Rewards</a>
      </div>
      <div class="col-lg-4 col-md-4 col-12 text-white">
        <h4>Contact Us</h4>
        <a href="mailto:photocomp87@gmail.com"> > photocomp87@gmail.com</a> <br>
        <a href="https://www.facebook.com/PhotoComp-105658778549141"> > Facebook</a> <br>
        <a href="https://www.instagram.com/photocomp8989/"> > Instagram</a> <br>
        <a href="https://www.youtube.com/channel/UCPWZRlSULOWNmWrtHVd43NA"> > Youtube</a> <br>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
