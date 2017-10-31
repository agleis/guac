@extends('layouts.app')

@section('content')
  <form method="post" action="{{route('edit_featured')}}">
    {{ csrf_field() }}
    <div class="form-group container">
        @foreach($articles as $article)
            <div class="row match-cols">
                <div class="col-md-9">
                    <div class="col-md-6">
                        <div class="featured-article featured-2 {{$article->region->id}} {{$article->category->id}}">
                            <a href="{{route('article', ['name' => $article->name])}}">
                            <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
                            <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
                            <h3>{{$article->title}}</h3>
                            <h5>By {{$article->user->name}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 check__column">
                    <div class="center">
                        <label class="label">
                            <input type="checkbox" name="featured[]" class="label__checkbox" value="{{$article->name}}" @if($article->featured) checked @endif />
                            <span class="label__text">
                                <span class="label__check">
                                    {{--  <i class="fa fa-check icon"></i>  --}}
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


