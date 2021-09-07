<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('home/index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8'

            ], [
                'name.required' => 'Name is required',
                'username.required' => 'Username is required',
                'password.required' => 'Password is required'
            ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);

        return back()->with('success', 'User created successfully.');

    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function gallery(){
        return view('home/gallery');
      }
      public function Landscapes(){
        return view('home/Landscapes');
      }
      public function portrait(){
        return view('home/portrait');
      }
      public function Sports(){
        return view('home/Sports');
      }

    public function rewards(){
        return view('home/rewards');
    }
    public function about(){
        return view('home/about');
    }
}
