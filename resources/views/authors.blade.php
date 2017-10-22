@extends('layouts.app')

@section('content')
    <div class="author author-list container-fluid">
        @foreach($authors as $author)
            <div class="row">
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10 author-list-item">
                    <a href="{{route('author', ['id' => $author->id])}}" class="list-item">
                        @include('includes.author_summary')
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