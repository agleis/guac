@extends('layouts.app')

@section('content')
    <div class="content featured container-fluid">
        <h2 class="content-section" id="contribute">Contribute</h2>
        <div class="row content-section contribute">
            <div class="col-md-6 col-sm-12 col-xs-12 no-gutter">
                <h2>Join Us?</h2>
                <div class="inline-image">
                    <img id="join" src="{{asset('images/contribute.png')}}" width='550' height='320' />
                </div>
                <p>Want to deliver stories of people from around the world? Join us.</p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 no-gutter">
                <h3>Content Contributions</h3>
                <h3>Want to Join?</h3>
                <p>
                    Guac is searching for talented people to help us continue our mission of sharing stories from around the world. If this excites you, visit <a href="https://goo.gl/forms/N3vauexgU8qgkuEJ3">this link</a> to get involved!
                </p>
                <h3>City Guides Submission</h3>
                <p>
                    Have local gems to recommend? Submit your recommendations to <a href="mailto:guacmag@gmail.com">guacmag@gmail.com</a> and our team will get back to you.
                </p>
                <h3>Stories Submission</h3>
                <p>
                    Travelled to amazing places and have wonderful stories to share? Email <a href="mailto:guacmag@gmail.com">guacmag@gmail.com</a> with your story and our team will get back to you. Outstanding stories would be featured in our next print issue!
                </p>
            </div>
            <!-- <div class="row content-row">
                <div class="button apply col-md-12">
                    <a href="#">Apply</a>
                </div>
            </div> -->
            <div class="col-md-1">
                &nbsp;
            </div>
        </div>
    </div>    
@endsection
