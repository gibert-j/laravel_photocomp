@extends('layouts.app')
@section('content')
    <div class="md:max-w-md mx-auto py-10  bg-gray-300 px-3 my-52">
      <div class="content-center  my-4 font-bold text-2xl text-center">
        Login
      </div>
        <form method="POST" action="{{ route('login') }}">
                @csrf

            <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                        <input name="email" type="text" class="form-control w-full " placeholder="Email *" value=""/>
                    </div>
                </div>
                <div class="md:flex">
                    <div class="w-full p-3 px-6 py-10">
                        <input name="password" type="password" class="form-control w-full" placeholder="Your Password *" value=""/>
                    </div>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-9 rounded ml-10" type="submit" value="Sign Up">
             Login
           </button>
          </form>

        </div>
@endsection
