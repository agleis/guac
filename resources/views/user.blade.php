@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1">
        &nbsp;
      </div>
      <div class="col-md-10">
        <div class="author editable container-fluid">
          @include('includes.user_summary')
          <hr class="dotted" />
          <div class="row">
            <div class="col-md-3">
              &nbsp;
            </div>
            <div class="col-md-6 bio">
              <p>{{$user->bio}}</p>
            </div>
            <div class="col-md-3">
              &nbsp;
            </div>
          </div>
          @if(Auth::id() == $user->id)
            <a href="{{route('edit_user', ['id' => $user->id])}}" class="edit-button btn edit-link">
              <span class="glyphicon glyphicon-pencil"></span>
            </a>
          @endif
        </div>
        
        <h2>Articles</h2>
        <hr />
        <div class="content featured container-fluid">
          {{--  First row  --}}
          <div class="row content-row">
            @foreach($user->articles as $article)
              {{--  2-row  --}}
                <div class="col-md-6">
                    @include('includes.summary2', ['article' => $article])
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
