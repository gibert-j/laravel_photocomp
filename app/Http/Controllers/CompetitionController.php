<?php

namespace App\Http\Controllers;

use App\Models\EntryPhoto;
use App\Models\Competition;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Gate;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       if (! Gate::allows('admin')) {
       abort(403);
      }
         return view('competitions.comp-index', ['competitions'=>competition::all()]);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (! Gate::allows('admin')) {
      abort(403);
     }
        return view('competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate
        ([
            'image' => 'required|image||mimes:jpeg,png,jpg|max:10000',
            'title' => 'required|string|max:1000',
            'description' => 'required|string|max:1000',
        ]);

        $imageName = time() . $request->get('title') . '.' . $request->image->extension();

        $request->image->move(public_path('competitionCardPhotos'), $imageName);

        $competition = new Competition
        ([
           "image_path" => "/competitionCardPhotos/" . $imageName,
           "title" => $request->get('title'),
           "description" =>  $request->get('description'),
           "time_remaining" =>  $request->get('time_remaining'),
           "user_id" =>  Auth::id()
         ]);
         $competition->save();
         return redirect('competitions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
         return view('competitions.show',  ['competition' => $competition]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
      if (! Gate::allows('admin')) {
      abort(403);
     }
         return view('competitions.edit',  ['competition' => $competition]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
      if (! Gate::allows('admin')) {
      abort(403);
     }
       $competition->update($request->all());
       return redirect('competitions');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
      if (! Gate::allows('admin')) {
      abort(403);
       }
      $competition->delete();
      return redirect('competitions');
    }
}
