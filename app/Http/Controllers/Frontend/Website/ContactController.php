<?php

namespace App\Http\Controllers\Frontend\Website;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{


    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|String|max:255',
            'company' => 'required|String|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|String|max:15',
            'method_of_contact' => 'required|String|max:15',
        ]);

        Mail::send('frontend.emails.contact-form', ['request' => $request], function ($m) use ($request) {
            $m->from($request->email, $request->name);

            $m->to('info@digital-picnic.email', $request->name)->subject('Website contact form');
        });

        return redirect()->back()->withFlashSuccess('<strong>Thanks</strong> for contacting us! We\'ll get back to you shortly.');
    }


}