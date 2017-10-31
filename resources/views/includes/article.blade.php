<div>
  <div class="image-article" style="background-image: url('{{asset($article->image)}}')">

  </div>
  <div class="editable container">
      <div class="content-row row">
        <a class="sidebar" href="route('article', ['name' => $prev])">
          <div class="col-md-1 hidden-xs hidden-sm">
            @if($prev != '')
              <div class="vertical-text">
                <div class="prev">
                  <a href="{{route('article', ['name' => $prev])}}">Previous Story</a>
                </div>
              </div>
            @endif
          </div>
        </a>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="title-box">
              <p class="issue">{{$article->issue}} <span class="fa fa-circle blue circle"></span>{{$article->category->name}}</p>
              <h1 class="section">{{$article->title}}</h1>
              <p>By {{$article->user->name}}</p>
              @auth
                <a href="{{route('edit_article', ['name' => $article->name])}}">Edit this article</a>
              @endauth
          </div>

          <div class="article-text">{!!$article->text!!}</div>
        </div>
        <a class="sidebar" href="{{route('article', ['name' => $next])}}">
          <div class="col-md-1 hidden-xs hidden-sm">
            @if($next != '')
              <div class="vertical-text">
                <div class="next">
                  <a href="{{route('article', ['name' => $next])}}">Next Story</a>
                </div>
              </div>
            @endif
          </div>
        </a>
      </div>
    </div>
  </div>