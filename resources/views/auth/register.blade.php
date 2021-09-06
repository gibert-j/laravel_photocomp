
@extends('layouts.app')
@section('content')

    <div class=" md:max-w-md mx-auto py-10 bg-gray-300 px-3 my-52 ">
      <div class="content-center px-20 my-4 font-bold text-2xl text-center">
         Fill Your Details To Sign Up
      </div>
      @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
            </div>
        @endif
      <form method="POST" action="{{ route('register') }}">
          @csrf
            <div class=" max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">           
                <div class="md:flex ">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="name" :value="__('Name')" >Full Name</label>
                      <input id="name" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="text" name="name" :value="old('name')" autofocus />
                      @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                         @endif
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="username" :value="__('Username')" >Username</label>
                      <input id="username" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="username" name="username" :value="old('username')" />
                      @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="email" :value="__('Email')" >Email</label>
                      <input id="email" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="email" name="email" :value="old('email')" />
                      @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="password" :value="__('Password')" >Password</label>
                      <input id="password" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600" type="password" name="password" autocomplete="new-password" />
                      @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                    </div>
                </div>
                <!-- <label for=""></label> -->
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                      <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                      <input id="password_confirmation" class="h-10 px-2 w-full border-2 rounded focus:outline-none focus:border-600"
                                      type="password"
                                      name="password_confirmation" />
                    </div>
                </div>
                </div>

                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                         {{ __('Already registered?') }} Login
                        </a>
                    </div>
                    
                    <div class="w-full p-3 px-6 py-10">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded ml-10" type="submit" value="Sign Up">
                            Sign Up
                        </button>
                    </div>
                    
                </div>  
        </form>
        
    </div>
@endsection
