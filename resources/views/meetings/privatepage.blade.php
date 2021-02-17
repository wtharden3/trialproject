@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <p>privatepage.blade.php 🖐 -- public page</p>
    <p>$meeting</p>
    <pre>{{ $meeting }}</pre>



    <h2>Emails</h2>
    <!-- here is where a list of emails with their RSVP status for this meeting will go -->
@endsection
