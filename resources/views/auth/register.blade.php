
@extends('layouts.app')
@section('content')


    <div class="form-content">
      <form method="POST" action="{{ route('register') }}">
          @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="name" :value="__('Name')" >Full Name</label>
                      <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="username" :value="__('Username')" >Username</label>

                      <input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" :value="__('Email')" >Email</label>

                      <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="password" :value="__('Password')" >Password</label>

                      <input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />
                    </div>
                </div>
                <label for=""></label>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                      <input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4">
                    {{ __('Login') }}
                </button>
              </div>
              </div>
            </div>
            <input type="submit" value="Sign Up">
          </form>
        </div>


@endsection
