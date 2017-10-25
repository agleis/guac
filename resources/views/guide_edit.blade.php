@extends('layouts.app')

@section('content')
    <guideeditor title="{{$guide->title}}"
                 upload="{{session()->has('upload')}}"
                 summary="{{$guide->summary}}"
                 aissue="{{$guide->issue}}"
                 image="{{asset($guide->image)}}"
                 :region="JSON.parse('{{$guide->region ? $guide->region->toJson() : (isset($region) ? $region : '{}')}}')"
                 :regions="JSON.parse('{{$regions->toJson()}}')"
                 :country="JSON.parse('{{$guide->country ? $guide->country->toJson() : (isset($country) ? $country : '{}')}}')"
                 :countries="JSON.parse('{{$countries->toJson()}}')"
                 route="{{session()->has('upload') ?
                        route('post_upload_guide') :
                        route('post_edit_guide', ['id' => $guide->id])}}">
    </guideeditor>
@endsection