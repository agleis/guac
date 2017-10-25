@extends('layouts.app')

@section('content')
  <articletext
    nextroute="{{$next != '' ? route('article', ['name' => $next]) : ''}}"
    prevroute="{{$prev != '' ? route('article', ['name' => $prev]) : ''}}"
    article-text="{{$article->text}}"
    route="{{route('edit_article', ['name' => $article->name])}}"
    :author="JSON.parse('{{str_replace("'", "\\'", $article->user)}}')"
    title="{{$article->title}}"
    authorroute="{{route('author', ['id' => $article->user->id])}}"
    auth="{{Auth::check()}}"
    image="{{asset($article->image)}}"
    issue="{{$article->issue}}"
    category="{{$article->category->name}}"
    auth="{{Auth::check()}}"
    @auth editroute="{{route('edit_article', ['name' => $article->name])}}" @endauth>

  </articletext>
  {{--  @include('includes.article')  --}}
@endsection
