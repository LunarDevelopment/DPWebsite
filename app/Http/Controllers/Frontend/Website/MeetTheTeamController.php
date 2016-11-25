<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;

use App\MeetTheTeam;

class MeetTheTeamController extends Controller
{
    public function index()
    {
        $team_members = collect($team_members)->sortBy('surname');
        return view('frontend.meet-the-team', ['team_members' => $team_members]);
    }
}
