@extends('layouts.app')

@section('content')
    <guideitemeditor name="{{$guide_item->name}}"
                     summary="{{$guide_item->summary}}"
                     upload="{{session()->has('upload')}}"
                     hours="{{$guide_item->hours}}"
                     issue="{{$guide->issue}}"
                     location="{{$guide_item->location}}"
                     image="{{asset($guide_item->image)}}"
                     :category="JSON.parse('{{$guide_item->category ? $guide_item->category->toJson() : (isset($category) ? $category : '{}')}}')"
                     :categories="JSON.parse('{{$categories->toJson()}}')"
                     route="{{session()->has('upload') ?
                        route('post_upload_guide_item', ['id' => $guide->id]) :
                        route('post_edit_guide_item', ['id' => $guide->id, 'idd' => $guide_item->id])}}">
    </guideitemeditor>    
@endsection
