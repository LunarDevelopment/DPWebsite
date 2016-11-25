<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required|String|max:255',
            'email' => 'required|email|max:255',
        ]);

        DB::insert('insert into subscribers (name, email) values (?, ?)', [$request->name, $request->email]);

        return redirect()->back()->withFlashSuccess('<strong>Thanks</strong> for subscribing!');
    }
}