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
                
                    @foreach($guide->guide_items as $item)
                        {{--  <guideitem image="{{asset($item->image)}}"
                                issue="{{$guide->issue}}"
                                category="{{$item->category->name}}"
                                name="{{$item->name}}"
                                hours="{{$item->hours}}"
                                location="{{$item->location}}"
                                summary="{{$item->summary}}"
                                auth="{{Auth::check()}}"
                                @auth editroute="{{route('edit_guide_item', ['id' => $guide->id, 'idd' => $item->id])}}" @endauth>

                        </guideitem>  --}}
                        @include('includes.guide_item')
                    @endforeach
                    @auth
                        <div class="col-md-6">
                            <div class="featured-article featured-2 plus-featured">
                                <a class="center" href="{{route('upload_guide_item', ['id' => $guide->id])}}">
                                    <div class="plus">+</div>
                                </a>
                            </div>
                        </div>
                    @endauth
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