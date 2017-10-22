@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">
        &nbsp;
      </div>
      <div class="col-md-10">
        <div class="author editable container-fluid">
          @include('includes.author_summary')
          <hr class="dotted" />
          <div class="row">
            <div class="col-md-3">
              &nbsp;
            </div>
            <div class="col-md-6 bio">
              <p>{{$author->bio}}</p>
            </div>
            <div class="col-md-3">
              &nbsp;
            </div>
          </div>
          @if(Auth::id() == $author->id)
            <a href="{{route('edit_author', ['id' => $author->id])}}" class="edit-button btn edit-link">
              <span class="glyphicon glyphicon-pencil"></span>
            </a>
          @endif
        </div>
        
        <h2>Articles</h2>
        <hr />
        <div class="content featured container-fluid">
          {{--  First row  --}}
          <div class="row content-row">
            @foreach($author->articles as $article)
              {{--  2-row  --}}
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
              {{--  <articlesummary route="{{route('article', ['name' => $article->name])}}"
                      image="{{asset($article->image)}}"
                      title="{{$article->title}}"
                      summary="{{$article->summary}}"
                      name="{{$article->user->name}}"
                      authorroute="{{route('author', ['id' => $article->user->id])}}"></articlesummary>  --}}
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-1">
        &nbsp;
      </div>
    </div>
  </div>
@endsection
