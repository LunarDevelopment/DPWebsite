<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;
use App\Posts;
use App\MeetTheTeam;
use App\Socials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PagesController extends Controller
{

    public $socials;
    public $cookie = true;

    public function __construct(Request $request, Socials $socials)
    {
        $socials = $socials->get()->all();
        $this->socials =  collect($socials)->keyBy('name');
        if(!$request->cookie('cookies_accepted')) {
            $this->cookie = false;
            $two_weeks = 60 * 25 * 14;
            Cookie::queue('cookies_accepted', true, $two_weeks);
        }
    }

    public function show($name, Posts $posts)
    {
        $content = $posts->where('guid', $name)->first();
        return view('frontend.content', [
            'content' => $content,
            'socials' => $this->socials,
            'cookie' => $this->cookie,
        ]);
    }

    public function index()
    {
        return view('frontend.index', [
            'socials' => $this->socials,
            'cookie' => $this->cookie,
        ]);
    }

    public function meetTheTeam(MeetTheTeam $meet_the_team)
    {
        $team_members = $meet_the_team->get()->all();
        return view('frontend.meet-the-team', [
            'team_members' => $team_members,
            'socials' => $this->socials,
            'cookie' => $this->cookie,
        ]);
    }


}