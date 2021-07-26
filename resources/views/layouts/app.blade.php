 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
          <link rel="stylesheet" href="/app.css">


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
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler bg-primary navbar-dark" type="button" data-toggle="collapse"
      data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Photo Contest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Competition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rewards.html">View Rewards</a>
        </li>
      </ul>
      <!-- <h3><a href="#"><i class="fa fa-fw fa-user"></i></a></h3> -->

      <div class="dropdown">
        @if (Route::has('login'))

              @auth
                  <p>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf

                      <a href="{{ route('logout') }}" class="text-sm text-gray-700 float-right mr-3">Logout</a>
                  </form>
                @else
                     <a href="{{ route('login') }}" class="text-sm text-gray-700 float-right mr-3">Login</a>

                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm text-gray-700 float-right mr-3">SignUp</a>
                  @endif
                </p>
            @endauth
      @endif
      </div>


      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>

    </div>

  </div>
  </nav>

</div>
<div class="">

</div>
<br> <br> <br> <br> <br>
        @yield('content')
</div>
        <footer>
            <div class="footer">
              <div class="foot py-5">

                <div class="col-md-4 col-md-4 col-12 text-white">

                  <h4>PhotoComp </h4>
                  <a href="">> Location: Queenstown, NewZealand</a> <br>
                  <a href="">> copyright&copy 2021, PhotoComp</a> <br>
                  <a href="">> Privacy Policy</a> <br>
                  <a href="">> Our Terms and Condition</a>

                </div>
                <div class="col-lg-4 col-md-4 col-12 text-white">
                  <h4>Main Menu</h4>
                  <a href="index.html"> > Home</a> <br>
                  <a href="about.html"> > About us</a> <br>
                  <a href="gallery.html"> > Our Gallery</a> <br>
                  <a href="rewards.html"> > View Rewards</a>
                </div>

                <div class="col-lg-4 col-md-4 col-12 text-white">
                  <h4>Contact Us</h4>
                  <a href="mailto:leopardrai13@gmail.com"> > photo@comp.ac.nz</a> <br>
                  <a href=""> > Facebook</a> <br>
                  <a href=""> > Instagram</a> <br>
                  <a href=""> > Twitter</a> <br>
                </div>

              </div>
            </div>
          </footer>
    </body>
</html>
