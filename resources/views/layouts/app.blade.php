 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="/app.css">

        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
      <div class="container">

          <div class="form mb-1">
              <div class="note">
                  <p>

                    <!-- @if (Auth::check())
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 float-right mr-3">Login</a>
                    @endif
                  </p>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="text-sm text-gray-700 float-right mr-3">SignUp</a>
                  @endif -->

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
        @yield('content')
        </div>
    </body>
</html>
