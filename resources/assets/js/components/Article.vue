<template>
<div>

  <div class="share-article">
    Share
    <ul class="share-social">
      <li><a class="fa fa-facebook-official fa-lg" :href="facebook" target="_blank"></a></li>
      <li><a class="fa fa-twitter fa-lg" :href="twitter" target="_blank"></a></li>
      <li><a class="fa fa-envelope fa-lg mail" :href="mail"></a></li>
      <!-- Edit the links ^^^ -->
    </ul>
  </div>

  <div class="image-article" :style="background">

  </div>


  <div class="editable container">

    <div class="col-md-10 col-sm-12 col-xs-12">
      <div class="title-box">
          <h4 class="issue">{{issue}} &nbsp; &nbsp;
            <span class="arts-culture">{{category}}</span>
          </h4>
          <h1 class="section">{{title}}</h1>
          <h4>By {{author.name}}</h4>
          <a v-if="auth" :href="editroute">Edit this article</a>
      </div>
    </div>

    <div class="col-sm-12 col-xs-12 article-text" v-html="articleText">
      
    </div>

    <a class="sidebar" :href="prevroute">
      <div class="col-md-1 hidden-xs hidden-sm">
        <div v-if="prevroute != ''" class="vertical-text">
          <div class="prev">
            <a :href="prevroute">Previous Story</a>
          </div>
        </div>
      </div>
    </a>
    <a class="sidebar" :href="nextroute">
      <div class="col-md-1 hidden-xs hidden-sm">
        <div v-if="nextroute != ''" class="vertical-text fixme">
          <div class="next">
            <a :href="nextroute">Next Story</a>
          </div>
        </div>
      </div>
    </a>

  </div>
<!--   end of main article section -->

  <div class="gray-author container-fluid">
    <h3 class="author-about">About {{author.name}}</h3>
    <div class="row">
      <div class="col-md-3">
        <div class="image-author" :style="authorBackground"></div>
      </div>
      <div class="col-md-9">
        <div class="author-bio">
          <p>{{author.bio}}</p>
        </div>
      </div>
    </div>
  </div>

</div>
</template>

<script>
    export default {
      props: ['articleText', 'route', 'author', 'title', 'authorroute', 'auth', 'image',
              'issue', 'category', 'nextroute', 'prevroute', 'auth', 'editroute', 'url'],
      computed: {
        background: function() {
          return "background-image: url('"+this.image+"')";
        },
        twitter: function() {
          return "http://twitter.com/share?text="+this.title+"&url="+this.url;
        },
        facebook: function() {
          return "https://www.facebook.com/sharer/sharer.php?u="+this.url;
        },
        mail: function() {
          return "mailto:?subject=Read%20This&body="+this.url;
        },
        authorBackground: function() {
          return "background-image: url('"+this.author.image+"')";
        }
      }
    }
</script>
