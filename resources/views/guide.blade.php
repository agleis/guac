@extends('layouts.app')

@section('content')
        <guide 
               nextroute="{{$next != '' ? route('guide', ['id' => $next]) : ''}}"
               prevroute="{{$prev != '' ? route('guide', ['id' => $prev]) : ''}}"
               summary="{{$guide->summary}}"
               :country="{{json_encode($guide->country)}}"
               :countries="{{json_encode($countries)}}"
               :categories="{{json_encode($categories)}}"
               region="{{json_encode($guide->region)}}"
               regions="{{json_encode($regions)}}"
               :items="{{json_encode($guide->guide_items)}}"
               title="{{$guide->title}}"
               image="{{asset($guide->image)}}"
               issue="{{$guide->issue}}"
               auth="{{Auth::check()}}"
               id="{{$guide->id}}"
               @auth :edit="false" @endauth
               @auth editroute="{{route('edit_guide', ['id' => $guide->id])}}" @endauth>
        </guide>
@endsection
