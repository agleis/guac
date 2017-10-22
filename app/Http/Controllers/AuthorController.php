<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Country;

class AuthorController extends Controller
{

    /**
     * Gets the author specified by the given id.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function getAuthor($id) {
        $author = User::find($id);
        return view('author', ['author' => $author]);
    }

    /**
     * Gets the list of all the authors.
     * 
     * @return \Illuminate\View\View
     */
    public function authors() {
        $authors = User::all();
        $countries = Country::all();
        return view('authors', ['authors' => $authors, 'countries' => $countries]);
    }

    /**
     * Shows the form for editing the author given by id.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function showEditAuthor($id) {
        $author = User::find($id);
        $countries = Country::all();
        $ids = $author->countries()->pluck('id')->toArray();
        return view('author_edit', ['author' => $author, 'countries' => $countries, 'ids' => $ids]);
    }

    /**
     * Edits the author specified by the given id.
     *
     * @param Request $request
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function editAuthor(Request $request, $id) {
        $author = User::find($id);
        $author->countries()->sync($request->countries);
        $author->name = $request->name;
        $author->bio = $request->bio;
        $author->image = $this->getImage($request);
        $author->save();
        return redirect()->route('author', ['id' => $id]);
    }

    /**
     * Gets the image URL and uploads it.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function getImage($request) {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images');
            return $path;
        }
        else {
            return $request->original;
        }
    }
}
