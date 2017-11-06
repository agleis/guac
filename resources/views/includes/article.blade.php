<div>
  <div class="share-article">
    Share
    <ul class="share-social">
      <li><a class="fa fa-facebook-official fa-lg" href="https://www.facebook.com/sharer/sharer.php?u=<URL>" target="_blank"></a></li>
      <li><a class="fa fa-twitter fa-lg" href="http://twitter.com/share?text=<TITLE>&url=<URL>" target="_blank"></a></li>
      <li><a class="fa fa-envelope fa-lg mail" href="mailto:?subject=Read%20This&body=<URL>"></a></li>
      <!-- Edit the links ^^^ -->
    </ul>
  </div>

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
              <h4 class="issue">{{$article->issue}} <span class="fa fa-circle gray circle"></span>{{$article->category->name}}</h4>
              <h1 class="section">{{$article->title}}</h1>
              <h4>By {{$article->user->name}}</h4>
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

    <div class="gray-author container-fluid">
      <h3 class="author-about">About {{$article->user->name}}</h3>
      <div class="row">
        <div class="col-md-3">
          <div class="image-author" style="background-image: url('{{asset($article->user->image)}}')"></div>
        </div>
        <div class="col-md-9">
          <div class="author-bio">
            <p>{{$article->user->bio}}</p>
          </div>
        </div>
      </div>
    </div>

  </div>