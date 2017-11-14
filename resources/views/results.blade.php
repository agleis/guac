@extends('layouts.app')

@section('content')
  @if(count($articles) > 0)
    <div class="content featured container-fluid">
        <h2 class="content-section">Stories</h2>
        {{--  First row  --}}
        <div class="row content-row">
        @foreach($articles as $article)
            {{--  2-row  --}}
            @if($loop->index % 5 < 2)
            <div class="col-md-6">
                @include("includes/summary2")
            </div>
            {{--  3-row  --}}
            @else
            <div class="col-md-4">
                @include("includes/summary3")
            </div>
            @endif
        @endforeach
        </div>
    </div>
  @endif
  {{--  @if(count($guides) > 0)
    @if(count($articles) > 0)
        <hr />
    @endif
    <div class="content featured container-fluid">
        <h2 class="content-section">Guides</h2>
        <div class="row content-row">
        @foreach($guides as $guide)
            <div class="col-md-4">
                <div class="featured-article featured-3">
                <a href="{{route('guide', ['id' => $guide->id])}}">
                <div class="image" style="background-image: url('{{asset($guide->image)}}')"></div>
                <p class="issue">{{$guide->issue}}</p>
                <h3>{{$guide->title}}, {{$guide->country->name}}</h3>
                </a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
  @endif  --}}
  @if(count($articles) == 0)
    <div class="content featured container-fluid">
        <h2 class="content=section">No Results.</h2>
    </div>
  @endif
@endsection
