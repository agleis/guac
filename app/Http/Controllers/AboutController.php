<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Constant;

class AboutController extends Controller
{

    /**
     * Returns the about data for the magazine.
     *
     * @return \Illuminate\View\View
     */
    public function about() {
        $about_title = Constant::name('about_title')->content;
        $about = Constant::name('about')->content;
        return view('about', [
          'about_title' => $about_title,
          'about' => $about
        ]);
    }

}
