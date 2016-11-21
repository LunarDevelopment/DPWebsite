<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function index()
    {
        \Debugbar::disable();

        return view('frontend.subscribe');
    }

    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        DB::insert('insert into subscribers (name, email) values (?, ?)', [1, 'Dayle']);
    }
}