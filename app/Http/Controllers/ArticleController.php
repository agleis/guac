<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;

use Auth;

class ArticleController extends Controller
{

    /**
     * Returns the index page of the application, with featured articles.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $featured = Article::featured();
        return view('index', ['featured' => $featured]);
    }

    /**
     * Returns the list of articles.
     *
     * @return \Illuminate\View\View
     */
    public function articles() {
        $articles = Article::list();
        return view('articles', ['articles' => $articles]);
    }

    /**
     * Returns a single article, based on the name.
     *
     * @param string $name
     * @return \Illuminate\View\View
     */
    public function article($name) {
        $article = Article::find($name);
        return view('article', ['article' => $article]);
    }

    /**
     * Shows the editor for an article's text
     *
     * @return \Illuminate\View\View
     */
    public function showEditText($name) {
        $article = Article::find($name);
        $authors = User::all();
        return view('article_edit', [
          'article' => $article,
          'authors' => $authors
        ]);
    }

    /**
     * Edits the text for an article.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function editText(Request $request, $name) {
        $article = Article::find($name);
        $article->text = $request->text;
        $article->title = $request->title;
        $article->summary = $request->summary;
        $article->name = $this->makeName($request->title);
        $article->user_id = $request->author;
        $article->image = $this->getImage($request);
        $article->save();
        return redirect()->route('article', ['name' => $article->name]);
    }

    /**
     * Shows the page for uploading an article.
     *
     * @return \Illuminate\View\View
     */
    public function showUpload() {
      $authors = User::all();
      $article = new Article();
      $author = Auth::user();
      session()->flash('upload');
      return view('article_edit', [
        'article' => $article,
        'authors' => $authors,
        'author' => $author
      ]);
    }

    /**
     * Actually uploads the article.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function upload(Request $request) {
      $article = new Article();
      $article->text = $request->text;
      $article->title = $request->title;
      $article->summary = $request->summary;
      $article->name = $this->makeName($request->title);
      $article->user_id = $request->author;
      $article->featured = false;
      $article->image = $this->getImage($request);
      $article->save();
      return redirect()->route('article', ['name' => $article->name]);
    }

    /**
     * Shows an editable list of articles.
     *
     * @return \Illuminate\View\View
     */
    public function showFeatured() {
      $articles = Article::list();
      return view('featured_edit', ['articles' => $articles]);
    }

    /**
     * Edits the list of featured articles.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function editFeatured(Request $request) {
      $articles = $request->featured;
      foreach($articles as $feature_name) {
        $article = Article::find($feature_name);
        $article->featured = true;
        $article->save();
      }
      foreach(Article::featured() as $old_featured) {
        if(!in_array($old_featured->name, $articles)) {
            $old_featured->featured = false;
        }
        else {
            $old_featured->featured = true;
        }
        $old_featured->save();
      }
      return redirect()->route('index');
    }

    /**
     * Makes the name from the title.
     *
     * @param string $title
     * @return \Illuminate\View\View
     */
    public function makeName($title) {
        $title = str_replace(" ", "_", $title);
        return preg_replace('/[^A-Za-z0-9\_]/', '', $title);
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
