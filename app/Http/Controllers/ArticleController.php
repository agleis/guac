<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;
use App\Guide;
use App\Category;
use App\Country;
use App\Region;

use App\Http\Resources\Article as ArticleResource;
use App\Http\Resources\Guide as GuideResource;

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
        $articles = Article::list();
        $guides = Guide::featured();
        return view('index', [
            'featured' => $featured,
            'articles' => $articles,
            'guides' => $guides
        ]);
    }

    /**
     * Returns the list of articles.
     *
     * @return \Illuminate\View\View
     */
    public function articles() {
        $articles = Article::list();
        $categories = Category::all();
        $regions = Region::all();
        return view('articles', [
            'articles' => $articles,
            'categories' => $categories,
            'regions' => $regions
        ]);
    }

    /**
     * Returns a single article, based on the name.
     *
     * @param string $name
     * @return \Illuminate\View\View
     */
    public function article($name) {
        $article = Article::find($name);
        $next = Article::next($article->created_at)->first();
        $prev = Article::prev($article->created_at)->first();
        return view('article', [
            'article' => $article,
            'next' => $next ? $next->name : "",
            'prev' => $prev ? $prev->name : ""
        ]);
    }

    /**
     * Shows the editor for an article's text
     *
     * @return \Illuminate\View\View
     */
    public function showEditText($name) {
        $article = Article::find($name);
        $authors = User::all();
        $regions = Region::all();
        $categories = Category::all();
        $countries = Country::all();
        return view('article_edit', [
          'article' => $article,
          'authors' => $authors,
          'regions' => $regions,
          'categories' => $categories,
          'countries' => $countries
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
        $article->issue = $request->issue;
        $article->user_id = $request->author;
        $article->region_id = $request->region;
        $article->category_id = $request->category;
        $article->country_id = $request->country;
        $article->image = asset($request->image);
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
      $regions = Region::all();
      $categories = Category::all();
      $countries = Country::all();
      $article = new Article();
      $author = Auth::user();
      session()->flash('upload');
      return view('article_edit', [
        'article' => $article,
        'authors' => $authors,
        'author' => $author,
        'regions' => $regions,
        'categories' => $categories,
        'countries' => $countries
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
      $article->issue = $request->issue;
      $article->name = $this->makeName($request->title);
      $article->user_id = $request->author;
      $article->region_id = $request->region;
      $article->category_id = $request->category;
      $article->country_id = $request->country;
      $article->featured = false;
      $article->image = asset($request->image);
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
     * Returns a JSON list of articles filtered by country.
     */
    public function json(Request $request) {
        $country = $request->country;
        $stories = ArticleResource::collection(Article::map($country));
        $guides = GuideResource::collection(Guide::map($country));
        $merged = $stories->merge($guides);
        return response()->json($merged);
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
