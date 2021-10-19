@extends('layouts.app')
@section('content')
<div class="container my-52">
  <h1>Hello Admin,</h1>
  <br>
@foreach($contacts as $contact)
  <h6 class="font-semibold">You received an message from : {{ $contact->name }} </h6>
  <h5 class="font-semibold">Name: h5{{ $contact->name }}</h5>
  <h5 class="font-semibold">Email: {{ $contact->email }}</h5>
  <h5 class="font-semibold">Phone Number: {{ $contact->phone_number }}</h5>
  <h5 class="font-semibold">Subject: {{ $contact->subject }}</h5>
  <h5 class="font-semibold">Message: {{ $contact->message }}</h5>
  <br>
@endforeach
  Thank You
</div>
@endsection
