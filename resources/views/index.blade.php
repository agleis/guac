@extends('layouts.app')

@section('content')
  <!-- <div id="green-banner">
    <h1>2017 Fall Edition is Here!</h1>
  </div> -->
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
          <a class="item carousel-item @if($loop->first) active @endif image-article" 
             style="background-image: url('{{asset($article->image)}}')"
             href="{{route('article', ['name' => $article->name])}}">
            {{--  <img src="{{$article->image}}" alt="Article">  --}}
            <div class="carousel-caption">
              <h1>{{$article->title}}</h1>
              <h3>By {{$article->user->name}}</h3>
            </div>
          </a>
      @endforeach
    </div>
  </div>
  <div class="content featured container-fluid">
    <h2 class="content-section">Stories</h2>
    {{--  First row  --}}
    <div class="row content-row">
      @foreach($articles as $article)
        @if($loop->index < 2)
            <div class="col-md-6">
              <div class="featured-article featured-2">
                <a href="{{route('article', ['name' => $article->name])}}">
                <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
                  <h4 class="issue">{{$article->issue}} <span class="fa fa-circle gray circle"></span> {{$article->category->name}}</h4>
                  <h3>{{$article->title}}</h3>
                  <h4>By {{$article->user->name}}</h4>
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
      @foreach($articles as $article)
        @if($loop->index < 2)
          @continue
        @elseif($loop->index < 5)
          <div class="col-md-4">
            <div class="featured-article featured-3">
              <a href="{{route('article', ['name' => $article->name])}}">
                <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
                <h4 class="issue">Issue 1 <span class="fa fa-circle gray circle"></span> Arts and Culture</h4>
                <h3>{{$article->title}}</h3>
                <h4>By {{$article->user->name}}</h4>
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
        <a href="{{route('articles')}}">Read More</a>
      </div>
    </div>
  </div>
  <hr />

<!--   <div class="content featured container-fluid">
    <h2 class="content-section">City Guides</h2>
    <div class="row content-row">
      @foreach($guides as $guide)
        @if($loop->index < 3)
          <div class="col-md-4">
            <div class="featured-article featured-3">
              <a href="{{route('guide', ['id' => $guide->id])}}">
                <div class="image" style="background-image: url('{{asset($guide->image)}}')"></div>
                <p class="issue">{{$guide->issue}}</p>
                <h3>{{$guide->title}}, {{$guide->country->name}}</h3>
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
        <a href="{{route('articles')}}">Read More</a>
      </div>
    </div>
  </div> -->

@endsection
@push('scripts')
    <script src="{{asset('js/new.js')}}"></script>
@endpush