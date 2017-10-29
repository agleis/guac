<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('contact');
    }

}
