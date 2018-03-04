@extends('layouts.app')

@section('content')
    <div class="author author-list container-fluid">
        @foreach($users as $user)
            <div class="row">
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10 author-list-item">
                    <a href="{{route('user', ['id' => $user->id])}}" class="list-item">
                        @include('includes.user_summary')
                    </a>
                    <hr />
                </div>
                <div class="col-md-1">
                    &nbsp;
                </div>
            </div>
        @endforeach
    </div>
@endsection