<?php

namespace App\Http\Controllers;

use App\Models\Meeting;

class MeetingsController extends Controller
{
    public function index()
    {
        $meetings = Meeting::all();

        return view('meetings.index')->with(['meetings' => $meetings]);
    }

    public function show($meetingId)
    {
        $meeting = Meeting::find($meetingId);

        return view('meetings.show')->with(['meeting' => $meeting]);
    }

    public function privatepage($meetingId)
    {
        $meeting = Meeting::find($meetingId);
        //need a find by email:

        return view('meetings.privatepage')->with(['meeting' => $meeting]);
    }
}
