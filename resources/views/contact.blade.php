@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <h1>Say Hello</h1>
            </div>
        </div>
        <div class="row content-row">
            <div class="col-md-10 col-md-offset-1">
                <p>We'd love to hear from you! submit the form below with anything you want to let us know,
                and our team will get back to you.</p>
                <form action="{{route('contact_us')}}">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="name" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="email" name="email" id="email" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="msg" id="msg" class="form-control" placeholder="What's good?">
                                    </textarea>
                                </div>
                            </div>
                            <div class="row content-row">
                                <div class="button">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection