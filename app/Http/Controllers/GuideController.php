<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guide;

class GuideController extends Controller
{
    
    /**
     * Displays the list of city guides.
     *
     */
     public function guides() {
        $guides = Guide::all();
        return view('guides', ['guides' => $guides]);
     }

     /**
     * Displays a single city guide.
     *
     */
     public function guide($id) {
        $guide = Guide::find($id);
        return view('guide', ['guide' => $guide]);
     }

}
