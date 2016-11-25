<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Subscribers;

class SubscribeController extends Controller
{
    public function index(Subscribers $subscribers)
    {
        $result = $subscribers->get()->all();
        return view('backend.subscribers', ['subscribers' => $result]);
    }
}