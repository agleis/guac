@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>User</h2>
        </div>
        <div class="col-md-2">
            <h3>Author</h3>
        </div>
        <div class="col-md-2">
            <h3>Designer</h3>
        </div>
        <div class="col-md-2">
            <h3>Admin</h3>
        </div>
    </div>
    @foreach($users as $user)
        <div class="row">
            <div class="col-md-6">
                <h2>{{$user->name}}</h2>
            </div>
            <div class="col-md-2">
                <h3>Author</h3>
            </div>
            <div class="col-md-2">
                <h3>Designer</h3>
            </div>
            <div class="col-md-2">
                <h3>Admin</h3>
            </div>
        </div>
    @endforeach
@endsection