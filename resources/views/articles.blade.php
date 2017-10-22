@extends('layouts.app')

@section('content')
  <div class="content featured container-fluid">
    <h2 class="content-section">Stories</h2>
    {{--  First row  --}}
    <div class="row content-row">
      @foreach($articles as $article)
        {{--  2-row  --}}
        @if($loop->index % 5 < 2)
          <div class="col-md-6">
              <div class="featured-article featured-2">
                <a href="{{route('article', ['name' => $article->name])}}">
                  <img src="{{asset($article->image)}}" />
                  <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
                  <h3>{{$article->title}}</h3>
                  <h5>By {{$article->user->name}}</h5>
                </a>
              </div>
            </div>
        {{--  3-row  --}}
        @else
          <div class="col-md-4">
            <div class="featured-article featured-3">
              <a href="{{route('article', ['name' => $article->name])}}">
                <img src="{{asset($article->image)}}" />
                <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
                <h3>{{$article->title}}</h3>
                <h5>By {{$article->user->name}}</h5>
              </a>
            </div>
          </div>
        @endif
        {{--  <articlesummary route="{{route('article', ['name' => $article->name])}}"
                 image="{{asset($article->image)}}"
                 title="{{$article->title}}"
                 summary="{{$article->summary}}"
                 name="{{$article->user->name}}"
                 authorroute="{{route('author', ['id' => $article->user->id])}}"></articlesummary>  --}}
      @endforeach
    </div>
  </div>
@endsection
