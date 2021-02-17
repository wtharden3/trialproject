@extends('layouts.app')

@section('content')
    <h1>Meetings</h1>

    @foreach($meetings as $meeting)
    <div>
        <p>index.blade.php 👇</p>
        <a href="/meetings/{{$meeting->id}}/public">{{$meeting->title}}</a>
    </div>
    @endforeach
@endsection
