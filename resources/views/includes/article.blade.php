<div id="main-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner featured-carousel">
        <div class="item carousel-item active">
            <img src="{{asset($article->image)}}" alt="Article">
        </div>
    </div>
</div>
<div class="editable container">
    <div class="content-row row">
      <div class="col-sm-1">
        &nbsp;
      </div>
      <div class="col-sm-10">
        <div class="title-box">
            <p class="issue">Issue 1 <span class="fa fa-circle blue circle"></span> Arts and Culture</p>
            <h1 class="section">{{$article->title}}</h1>
            <p>By <a href="{{route('author', ['id' => $article->user->id])}}">{{$article->user->name}}</a></p>
        </div>

        <div class="article-text">{!! $article->text !!}</div>
        <a v-show="auth" href="{{route('edit_article', ['name' => $article->name])}}" class="edit-button btn edit-link">
          <span class="glyphicon glyphicon-pencil"></span>
        </a>
      </div>
      <div class="col-sm-1">
        &nbsp;
      </div>
    </div>
  </div>