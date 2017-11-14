<div class="featured-article featured-2">
    <a href="{{route('article', ['name' => $article->name])}}">
        <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
        <h4 class="issue">
            {{$article->issue}} 
            <span class="fa fa-circle gray circle"></span>
            <span class="region">{{$article->region->name}}</span>
        </h4>
        <h3>{{$article->title}}</h3>
        <h4>By {{$article->user->name}}</h4>
    </a>
</div>