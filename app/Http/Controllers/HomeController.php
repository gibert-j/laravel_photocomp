<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Entry;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
      $competitions=Competition::where('end_time','>',now())->get();
      return view('home/index', ['competitions'=>$competitions]);
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

    public function gallery(Request $request)
    {
       // dd($request);
        if (null !== $request->input('competition_id')) {
          $selected_category = $request->get('competition_id');
          $entry=Entry::where('competition_id','=',$request->get('competition_id'))->get();
        }
        else {
          $entry=Entry::all();
          $selected_category = " ";
        }

        $competitions=Competition::all();

        return view('home/gallery', ['entries'=>$entry, 'competitions'=>$competitions, 'selected_category'=>$selected_category]);
      }

    
      public function WhatWeDo(){
      return view('home/whatwedo');
      }


    public function rewards(){
        // $winnerimg = DB::table('entry')->select('image_path')->where('name')->get();
        return view('home/rewards');
    }

    public function about(){
        return view('home/about');
    }

    public function policy(){
        return view('home/policy');
    }
}
