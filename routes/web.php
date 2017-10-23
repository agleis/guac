<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ArticleController@index')->name('index');

Route::get('about', 'AboutController@about')->name('about');

Route::get('map', 'MapController@map')->name('map');

Route::get('stories', 'ArticleController@articles')->name('articles');

Route::get('stories/{name}', 'ArticleController@article')->name('article');

Route::get('stories/{name}/edit', 'ArticleController@showEditText')->name('edit_article');

Route::post('stories/{name}/edit', 'ArticleController@editText')
     ->name('post_edit_article');

Route::get('authors', 'AuthorController@authors')->name('authors');

Route::post('authors/new', 'AuthorController@register')->name('new_author');

Route::get('authors/{id}', 'AuthorController@getAuthor')->name('author');
Route::get('authors/{id}/edit', 'AuthorController@showEditAuthor')->name('edit_author');
Route::post('authors/{id}/edit', 'AuthorController@editAuthor')->name('edit_author_post');

Route::prefix('admin')->group(function() {
  Route::get('upload', 'ArticleController@showUpload')->name('upload_article');
  Route::post('upload', 'ArticleController@upload')->name('post_upload_article');
  Route::get('featured', 'ArticleController@showFeatured')->name('featured');
  Route::post('featured', 'ArticleController@editFeatured')->name('edit_featured');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
