<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Newsletter;
use App\Mail\Contact;

class ContactController extends Controller
{
    
    /**
     * Returns the contact us page.
     */
    public function contact() {
        return view('contact');
    }

    /**
     * Contacts us.
     */
    public function contactUs(Request $request) {
        $email = $request->email;
        $name = $request->name;
        $text = $request->msg;
        Mail::to('guacmag@gmail.com')->send(new Contact($email, $name, $text));
        session()->flash('success');
        return redirect()->route('contact');
    }

    /**
     * Subscribe to the list.
     */
    public function subscribe(Request $request) {
        $email = $request->email;
        Newsletter::subscribeOrUpdate($email);
        if(Newsletter::lastActionSucceeded())
            session()->flash('subscribe');
        return redirect()->route('index');
    }
}
