<div class="col-md-6">
    <div class="featured-article featured-2 city-featured">
        <div class="image" style="background-image: url('{{asset($item->image)}}')"></div>
        <p class="issue">{{$guide->issue}}  <span class="blue">{{$item->category->name}}</span></p>
        <h3>{{$item->name}}</h3>
        <h5>{{$item->hours}}</h5>
        <h5>{{$item->location}}</h5>
        <p>{{$item->summary}}</p>
        @auth
            <div>
                <a href="{{route('edit_guide_item', ['id' => $guide->id, 'idd' => $item->id])}}">Edit this item</a>
            </div>
        @endauth
    </div>
</div>