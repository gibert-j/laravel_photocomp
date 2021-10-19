<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Mail;


class ContactController extends Controller
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

      //  dd($contacts);
        return view('contact/view-messages', ['contacts'=>Contact::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // dd($request);
      $request->validate
      ([
          'name' => 'required|string|max:20',
          'email' => 'required|string|email|max:255',
          'phone_number' => 'required|string|max:10',
          'subject'=> 'required|string|max:20',
          'message' => 'required|string|max:255',

      ]);

      $contact = new Contact
      ([
         "name" => $request->get('name'),
         "email" => $request->get('email'),
         "phone_number" => $request->get('phone_number'),
         "subject" => $request->get('subject'),
         "message" => $request->get('message'),
       ]);

      $contact->save();

      \Mail::send('contact/messages',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone_number' => $request->get('phone_number'),
                 'subject' => $request->get('subject'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('leopardrai13@gmail.com')->subject($request->get('subject'));
               });

       return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
