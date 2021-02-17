@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <p>show.blade.php 🖐</p>
    <p>$meeting</p>
    <pre>{{ $meeting }}</pre>

    <pre>we need a new page with this info</pre>
    <h1>{{$meeting->title}}</h1>

    <div>{{$meeting->description}}</div>
    <div>{{$meeting->location}}</div>
    <div>{{$meeting->start->format('Y M d @ H:i')}} - {{$meeting->end->format('Y M d @ H:i')}}</div>

    <!-- here is where a form allowing users to toggle on/off the public meeting page - you will need to handle that form inside of a controller -->

    <h2>RSVPs</h2>
    <!-- here is where a list of emails with their RSVP status for this meeting will go -->
@endsection
