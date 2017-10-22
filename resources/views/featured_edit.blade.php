@extends('layouts.app')

@section('content')
  <form method="post" action="{{route('edit_featured')}}">
    {{ csrf_field() }}
    <div class="form-group container">
        @foreach($articles as $article)
            <div class="row match-cols">
                <div class="col-md-9">
                    <articlesummary route="{{route('article', ['name' => $article->name])}}"
                        image="{{asset($article->image)}}"
                        title="{{$article->title}}"
                        summary="{{$article->summary}}"
                        name="{{$article->user->name}}"
                        authorroute="{{route('author', ['id' => $article->user->id])}}"></articlesummary>
                </div>
                <div class="col-md-3 check__column">
                    <div class="center">
                        <label class="label">
                            <input type="checkbox" name="featured[]" class="label__checkbox" value="{{$article->name}}" @if($article->featured) checked @endif />
                            <span class="label__text">
                                <span class="label__check">
                                    <i class="fa fa-check icon"></i>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        @endforeach
        <input type="submit" value="Submit" />
    </div>
  </form>
@endsection


