<div>
    <div class="image-article" style="background-image: url('{{asset($guide->image)}}')"></div>
    <div class="editable container">
        <div class="content-row row">
        <a class="sidebar" href="{{route('guide', ['id' => $prev])}}">
            <div class="col-sm-1">
                @if($prev != '')
                    <div class="vertical-text">
                        <div class="prev">
                        <a href="{{route('guide', ['id' => $prev])}}">Previous City</a>
                        </div>
                    </div>
                @endif
            </div>  
        </a>
        <div class="col-sm-10">
            <div class="title-box guide">
                <p class="issue">{{$guide->issue}} <span class="fa fa-circle blue circle"></span>{{$guide->country->name}}</p>
                <h1 class="section">{{$guide->title}}</h1>
                <p>{{$guide->summary}}</p>
                @auth
                    <div>
                        <a href="{{route('edit_guide', ['id' => $guide->id])}}">Edit this guide</a>
                    </div>
                @endauth
            </div>
        </div>
        <a class="sidebar" href="{{route('guide', ['id' => $next])}}">
            <div class="col-sm-1">
                @if($next != '')
                    <div class="vertical-text">
                        <div class="next">
                            <a href="{{route('guide', ['id' => $next])}}">Next City</a>
                        </div>
                    </div>
                @endif
            </div>
        </a>
        </div>
    </div>
</div>