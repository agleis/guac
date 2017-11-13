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
                
                <h3>Content</h3>
                <p>
                    We deliver Guac’s stories. The Content team is responsible for gathering, creating and polishing stories. We walk our readers through the experiences of people from around the world and bring them joy in expanding their perspectives about what’s out there.
                </p>
                <h3>Design</h3>
                <p>
                    We give Guac characters. The Design team is responsible for Print and Web Design. We work with the Content team to curate the reader's’ experiences and the Marketing team to produce graphic materials. We ensure the consistent look and feel of Guac brand through setting the brand direction and crafting pixel-perfect output.
                </p>
                <h3>Marketing</h3>
                <p>
                    We are Guac’s storytellers. The Marketing team engages our audience with what we do. We bring inspirations to our audience and are responsible for communicating our values through events and social media. Examples of our projects include strategizing social media engagement and organizing the launch and magazine distribution events.
                </p>
                <h3>Technical Operations</h3>
                <p>
                    We sustain Guac’s digital platforms. We develop and maintain the digital platforms to make sure they run smoothly. We use data to strategize ways to use lines of codes to innovate new and exciting avenues to engage our readers. 
                </p>
                <h3>Finance and Operations</h3>
                <p>
                    We not only maintain Guac’s financials, but also make sure operations are running soomthly. We search for funding opportunities from various sources and make sure that each department is staying within budget. We are the backbone of Guac’s Magazine! 
                </p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 no-gutter">
                <h3>Content Contributions</h3>
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
