@extends('layouts.app')

@section('content')
  <div id="main-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach($featured as $article)
        <li data-target="#main-carousel" data-slide-to="{{$loop->index}}" class="@if($loop->first) active @endif"></li>
      @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner featured-carousel">
      @foreach($featured as $article)
          <a class="item carousel-item @if($loop->first) active @endif" href="{{route('article', ['name' => $article->name])}}">
            <img src="{{$article->image}}" alt="Article">
            <div class="carousel-caption">
              <h1>{{$article->title}}</h1>
              <h4>By {{$article->user->name}}</h4>
            </div>
          </a>
      @endforeach
    </div>
  </div>
  <div class="content featured container-fluid">
    <h2 class="content-section">Stories</h2>
    {{--  First row  --}}
    <div class="row content-row">
      @foreach($featured as $article)
        @if($loop->index < 2)
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
        @else
          @break
        @endif
      @endforeach
    </div>
    {{--  Second row  --}}
    <div class="row content-row">
      @foreach($featured as $article)
        @if($loop->index < 2)
          @continue
        @elseif($loop->index < 5)
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
        @else
          @break
        @endif
      @endforeach
    </div>
    <div class="row content-row">
      <div class="button more col-md-12">
        <a href="{{route('articles')}}">See More</a>
      </div>
    </div>
  </div>
  <hr />
  <div class="content featured container-fluid">
    <h2 class="content-section">City Guides</h2>
    {{--  City guides would be here  --}}
    <div class="row content-row">
      <div class="button more col-md-12">
        <a href="{{route('articles')}}">See More</a>
      </div>
    </div>
  </div>

    {{--  <articlesummary route="{{route('article', ['name' => $article->name])}}"
             image="{{asset($article->image)}}"
             title="{{$article->title}}"
             summary="{{$article->summary}}"
             name="{{$article->user->name}}"
             authorroute="{{route('author', $article->user->id)}}"></articlesummary>  --}}
@endsection
