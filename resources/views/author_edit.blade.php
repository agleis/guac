@extends('layouts.app')

@section('content')
  <author-editor name="{{$author->name}}"
                 bio="{{$author->bio}}"
                 image="{{$author->image}}"
                 editroute="{{route('edit_author_post', ['id' => $author->id])}}">
  </author-editor>
@endsection