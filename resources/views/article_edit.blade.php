@extends('layouts.app')

@section('content')
  <editor :author="JSON.parse('{{str_replace("'", "\\'", $article->user ? $article->user->toJson() : (isset($author) ? $author : '{}'))}}')"
          :authors="JSON.parse('{{str_replace("'", "\\'", $authors->toJson())}}')"
          title="{{$article->title}}"
          text="{{$article->text}}"
          summary="{{$article->summary}}"
          image="{{asset($article->image)}}"
          route="{{session()->has('upload') ?
            route('post_upload_article') :
            route('post_edit_article', ['name' => $article->name])}}">
  </editor>
  <div id="author-form" class="col-md-10">
    @include('includes.author_form', ['route' => 'new_author', 'article' => $article->name])
  </div>
@endsection
