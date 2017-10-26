<template>
<div>
  <div id="main-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner featured-carousel">
        <div class="item carousel-item active">
            <img :src="image" alt="Article">
        </div>
    </div>
  </div>
  <div class="editable container">
      <div class="content-row row">
        <a class="sidebar" :href="prevroute">
          <div class="col-sm-1">
            <div v-if="prevroute != ''" class="vertical-text">
              <div class="prev">
                <a :href="prevroute">Previous Story</a>
              </div>
            </div>
          </div>
        </a>
        <div class="col-sm-10">
          <div class="title-box">
              <p class="issue">{{issue}} <span class="fa fa-circle blue circle"></span>{{category}}</p>
              <h1 class="section">{{title}}</h1>
              <p>By {{author.name}}</p>
              <div v-if="auth">
                <a :href="editroute">Edit this article</a>
              </div>
          </div>

          <div class="article-text" v-html='articleText'></div>
        </div>
        <a class="sidebar" :href="nextroute">
          <div class="col-sm-1">
            <div v-if="nextroute != ''" class="vertical-text">
              <div class="next">
                <a :href="nextroute">Next Story</a>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['articleText', 'route', 'author', 'title', 'authorroute', 'auth', 'image',
              'issue', 'category', 'nextroute', 'prevroute', 'auth', 'editroute']
    }
</script>
