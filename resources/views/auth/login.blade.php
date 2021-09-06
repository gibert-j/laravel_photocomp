@extends('layouts.app')
@section('content')
    <div class="md:max-w-md mx-auto py-10  bg-gray-300 px-3 my-52">
      <div class="content-center  my-4 font-bold text-2xl text-center">
        Login-PhotoComp
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
          <div class="md:flex">
            <div class="w-full p-3 px-6 py-10">
              <input name="email" type="text" class="form-control w-full " placeholder="Email *" value=""/>
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
          <div class="md:flex">
            <div class="w-full p-3 px-6 py-10">
              <input name="password" type="password" class="form-control w-full" placeholder="Your Password *" value=""/>
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
          </div>
        </div>
        
        <div class="md:flex">
          <div class="w-full p-3 px-6 py-10">
            <button class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-6  rounded " type="submit" value="Login">
             Login
            </button>
          </div>
          <div class="w-full p-3 px-6 ">
            <button class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-6  rounded ml-20" type="cancel" value="Cancel">
            <a href="{{ route('home') }}" class="text-white">Cancel</a> 
            </button>
          </div>
        </div>
      </form>

    </div>
@endsection
