@extends('layouts.app')

@section('content')
    <div class="content featured container-fluid">
        <h2 class="content-section" id="contribute">Contribute</h2>
        <div class="row content-section contribute">
            <div class="col-md-6 no-gutter">
                <h2>Join Us?</h2>
                <div class="inline-image">
                    <img id="join" src="{{asset('images/bariloche1.jpg')}}" width='550' height='320' />
                </div>
                <p>Want to deliver stories of people from around the world? Join us.</p>
                
                <h3>Content</h3>
                <p>
                    We are Guac's storytellers. The content team is responsible for gathering,
                    creating, and polishing stories. We walk our readers through the experiences
                    of people from around the world and bring them joy in expanding their 
                    perspectives about what's out there.
                </p>
                <h3>Creative</h3>
                <p>
                    We give Guac characters. The creative team is responsible for Print Design,
                    Web Design, and Marketing. We work with the content team to curate the 
                    readers' experiences. We ensure the consistent look and feel of the Guac brand
                    through setting the brand direction and crafting pixel-perfect output.
                </p>
            </div>
            <div class="col-md-4 no-gutter">
                <h3>City Gudies Submission</h3>
                <p>
                    Travelled to amazing places and want to get featured? Submit your recommendations 
                    <a href="#">here</a>, and our team will get back to you.
                </p>
                <h3>Stories Submission</h3>
                <p>
                    Travelled to amazing places and want to get featured? Submit your recommendations 
                    <a href="#">here</a>, and our team will get back to you.
                </p>
            </div>
            <div class="row content-row">
                <div class="button apply col-md-12">
                    <a href="#">Apply</a>
                </div>
            </div>
            <div class="col-md-1">
                &nbsp;
            </div>
        </div>
    </div>    
@endsection
