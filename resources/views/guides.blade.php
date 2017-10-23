@extends('layouts.app')

@section('content')
    <div class="content featured container-fluid">
    <h2 class="content-section">City Guides</h2>
    {{--  First row  --}}
    <div class="row content-row">
      @foreach($guides as $guide)
        <div class="col-md-4">
        <div class="featured-article featured-3">
            <a href="{{route('guide', ['id' => $guide->id])}}">
            <img src="{{asset($guide->image)}}" />
            <p class="issue">{{$guide->issue}}</p>
            <h3>{{$guide->title}}, {{$guide->country->name}}</h3>
            </a>
        </div>
        </div>
      @endforeach
    </div>
  </div>    
@endsection
