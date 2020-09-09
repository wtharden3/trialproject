@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <h1>{{$meeting->title}}</h1>

    <div>{{$meeting->description}}</div>
    <div>{{$meeting->location}}</div>
    <div>{{$meeting->start->format('Y M d @ H:i')}} - {{$meeting->end->format('Y M d @ H:i')}}</div>

    <h2>RSVPs</h2>
@endsection