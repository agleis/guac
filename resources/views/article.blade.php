@extends('layouts.app')

@section('content')
  <articletext
    article-text="{{$article->text}}"
    route="{{route('edit_article', ['name' => $article->name])}}"
    :author="JSON.parse('{{str_replace("'", "\\'", $article->user ? $article->user : '{}')}}')"
    :region="JSON.parse('{{str_replace("'", "\\'", $article->region ? $article->region : '{}')}}')"
    {{--  :authors="JSON.parse('{{str_replace("'", "\\'", $authors->toJson())}}')"
    :regions="JSON.parse('{{$regions->toJson()}}')"  --}}
    title="{{$article->title}}"
    auth="{{Auth::check()}}"
    image="{{asset($article->image)}}"
    issue="{{$article->issue}}"
    category="{{$article->category ? $article->category->name : '{}'}}"
    auth="{{Auth::check()}}"
    admin="{{Auth::user()->admin}}"
    verified="{{$article->verified ? true : false}}"
    @auth 
    editroute="{{session()->has('upload') ?
            route('post_upload_article') :
            route('post_edit_article', ['name' => $article->name])}}" 
    deleteroute="{{route('delete_article', ['name' => $article->name])}}" 
    @endauth
    @auth edit="{{false}}" @endauth>

  </articletext>
  {{--  @include('includes.article')  --}}
@endsection
