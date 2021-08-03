
@extends('layouts.app')
@section('content')


    <div class=" md:max-w-md mx-auto py-10 h-screen bg-gray-300 px-3 my-52 ">
      <div class="content-center px-24 my-4 font-bold text-2xl text-center">
        Fill Your Details To Sign Up
      </div>
      <form method="POST" action="{{ route('register') }}">
          @csrf

            <div class=" max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">

                <div class="md:flex ">
                    <div class="w-full p-3 px-6 py-4">
                      <label for="name" :value="__('Name')" >Full Name</label>
                      <input id="name" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-4">
                      <label for="username" :value="__('Username')" >Username</label>

                      <input id="username" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="username" name="username" :value="old('username')" required />
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="email" :value="__('Email')" >Email</label>

                      <input id="email" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="email" name="email" :value="old('email')" required />
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="password" :value="__('Password')" >Password</label>

                      <input id="password" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />
                    </div>
                </div>
                <label for=""></label>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                      <input id="password_confirmation" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600"
                                      type="password"
                                      name="password_confirmation" required />
                    </div>
                </div>


                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ml-4">
                    {{ __('Login') }}
                </button>
              </div>
              </div>
            </div>
            <br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-10" type="submit" value="Sign Up">
             Sign Up
           </button>
          </form>
        </div>


@endsection
