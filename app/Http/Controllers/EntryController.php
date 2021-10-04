<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Entry;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competition;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Competition $competition)
    {
      return view('entries.create',['competition'=>$competition]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Competition $competition)
    {
      //  $entryCount = Entry::where('user_id',Auth::id())->where('competition_id', $request->get('competition_id') )->count();
      //
      // if ($entryCount > 1){
      //   dd('you are a cheater');
      //   //return redirect()->back() ->with('alert', 'Sorry! You Cannot Upload Photo More Than 1');
      //  }

      $request->validate
      ([
          'name' => 'required|string|max:1000',
          'image' => 'required|image||mimes:jpeg,png,jpg|max:10000',

      ]);

      $imageName = time() . $request->get('name') . '.' . $request->image->extension();
      $request->image->move(public_path('entryPhotos'), $imageName);

      $entry = new Entry
      ([
         "name" => $request->get('name'),
         "image_path" => "/entryPhotos/" . $imageName,
         "user_id" =>  Auth::id(),
         "competition_id" => $competition->id,
       ]);

      $entry->save();

      return view('entries/entry-confirmation', ['entry' => $entry]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        return view('entries/entry-thanks-message');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition, Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
      $entry->delete();
      return redirect('entrys');
    }
}
