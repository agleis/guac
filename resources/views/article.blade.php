@extends('layouts.app')

@section('content')
  {{--  <articletext
    article-text="{{$article->text}}"
    route="{{route('edit_article', ['name' => $article->name])}}"
    :author="JSON.parse('{{str_replace("'", "\\'", $article->user)}}')"
    title="{{$article->title}}"
    authorroute="{{route('author', ['id' => $article->user->id])}}"
    auth="{{Auth::check()}}">

  </articletext>  --}}
  @include('includes.article')
@endsection
