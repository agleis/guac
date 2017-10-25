@extends('layouts.app')

@section('content')
        <guide 
               nextroute="{{$next != '' ? route('guide', ['id' => $next]) : ''}}"
               prevroute="{{$prev != '' ? route('guide', ['id' => $prev]) : ''}}"
               summary="{{$guide->summary}}"
               country="{{$guide->country->name}}"
               title="{{$guide->title}}"
               image="{{asset($guide->image)}}"
               issue="{{$guide->issue}}"
               auth="{{Auth::check()}}"
               @auth editroute="{{route('edit_guide', ['id' => $guide->id])}}" @endauth>
        </guide>
        <div class="editable container">
            <div class="content-row row">
                @foreach($guide->guide_items as $item)
                    <guideitem image="{{asset($item->image)}}"
                            issue="{{$guide->issue}}"
                            category="{{$item->category->name}}"
                            name="{{$item->name}}"
                            hours="{{$item->hours}}"
                            location="{{$item->location}}"
                            summary="{{$item->summary}}"
                            auth="{{Auth::check()}}"
                            @auth editroute="{{route('edit_guide_item', ['id' => $guide->id, 'idd' => $item->id])}}" @endauth>

                    </guideitem>
                @endforeach
                @auth
                    <div class="col-md-6">
                        <div class="featured-article featured-2 plus-featured">
                            <a class="center" href="{{route('upload_guide_item', ['id' => $guide->id])}}">
                                <div class="plus">+</div>
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
@endsection
