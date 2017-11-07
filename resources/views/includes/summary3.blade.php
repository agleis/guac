<div class="featured-article featured-3">
    <a href="{{route('article', ['name' => $article->name])}}">
        <div class="image" style="background-image: url('{{asset($article->image)}}')"></div>
        <h4 class="issue">{{$article->issue}} 
            <span class="fa fa-circle gray circle"></span>
            <span @if($article->category_id == 1) class="arts-culture" @endif>{{$article->category->name}}</span>
        </h4>
        <h3>{{$article->title}}</h3>
        <h4>By {{$article->user->name}}</h4>
    </a>
</div>