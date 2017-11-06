@extends('layouts.app')

@section('content')
        {{--  <guide 
               nextroute="{{$next != '' ? route('guide', ['id' => $next]) : ''}}"
               prevroute="{{$prev != '' ? route('guide', ['id' => $prev]) : ''}}"
               summary="{{$guide->summary}}"
               country="{{$guide->country->name}}"
               title="{{$guide->title}}"
               image="{{asset($guide->image)}}"
               issue="{{$guide->issue}}"
               auth="{{Auth::check()}}"
               @auth editroute="{{route('edit_guide', ['id' => $guide->id])}}" @endauth>
        </guide>  --}}
        @include('includes.guide')
        <div class="editable container">
            <div class="content-row row">
                
            </div>
        </div>
@endsection
