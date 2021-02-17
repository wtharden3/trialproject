@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <p>show.blade.php 🖐 -- public page</p>
    <p>$meeting</p>
    <pre>{{ $meeting }}</pre>
    <h1>{{$meeting->title}}</h1>

    <div>{{$meeting->description}}</div>
    <div>{{$meeting->location}}</div>
    <div>{{$meeting->start->format('Y M d @ H:i')}} - {{$meeting->end->format('Y M d @ H:i')}}</div>

    <!-- here is where a form allowing users to toggle on/off the public meeting page - you will need to handle that form inside of a controller -->
    <h2>RSVP for this Meeting</h2>
    <div class="container">
        <div class="row">

    <form>
        <div class="col-6">
        <label>Email</label>
        <input type="email">
        </div>
        <div class="col-6">
        <label>Name</label>
        <input type="text">
        </div>
        <pre>RSVP 'yes' or 'no'</pre>
        <p>Will you be attending this meeting?</p>
        <input type="radio" id="rsvpyes" name="rsvpyes" value="yes">
        <label for="rsvpyes">Yes</label><br>
        <input type="radio" id="rsvpno" name="rsvpno" value="no">
        <label for="rsvpno">No</label><br>
        <button>Submit</button>
    </form>
        </div>
    </div>

    <h2>RSVPs</h2>
    <!-- here is where a list of emails with their RSVP status for this meeting will go -->
@endsection
