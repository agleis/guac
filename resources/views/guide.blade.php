@extends('layouts.app')

@section('content')
        <guide 
               nextroute="{{$next != '' ? route('guide', ['id' => $next]) : ''}}"
               prevroute="{{$prev != '' ? route('guide', ['id' => $prev]) : ''}}"
               summary="{{$guide->summary}}"
               country="{{json_encode($guide->country)}}"
               countries="{{($countries->toJson())}}"
               region="{{json_encode($guide->region)}}"
               regions="{{($regions->toJson())}}"
               title="{{$guide->title}}"
               image="{{asset($guide->image)}}"
               issue="{{$guide->issue}}"
               auth="{{Auth::check()}}"
               @auth edit="{{false}}" @endauth
               @auth editroute="{{route('edit_guide', ['id' => $guide->id])}}" @endauth>
        </guide>
        <div class="row">
            <div class="col-sm-1">
                &nbsp;
            </div>
            <div class="col-sm-10">
                @foreach ($guide->guide_items as $item)
                    <guideitem image="{{$item->image}}"
                            issue="{{$item->issue}}"
                            category="{{$item->category->name}}"
                            name="{{$item->name}}"
                            hours="{{$item->hours}}"
                            location="{{$item->location}}"
                            summary="{{$item->summary}}"
                            auth="{{Auth::check()}}"></guideitem>
                @endforeach
            </div>
            <div class="col-sm-1">
                &nbsp;
            </div>
        </div>
        {{--  @include('includes.guide')
        <div class="editable container">
            <div class="content-row row">
                
            </div>
        </div>  --}}
@endsection
