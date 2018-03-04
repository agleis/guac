@extends('layouts.app')

@section('content')
  <author-editor name="{{$user->name}}"
                 bio="{{$user->bio}}"
                 image="{{$user->image}}"
                 editroute="{{route('edit_user_post', ['id' => $user->id])}}">
  </author-editor>
@endsection