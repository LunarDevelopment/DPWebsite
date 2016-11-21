<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        \Debugbar::disable();

        return view('frontend.contact');
    }
}