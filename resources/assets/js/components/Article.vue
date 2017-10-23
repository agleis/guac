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
        <div class="col-sm-1">
          &nbsp;
        </div>
        <div class="col-sm-10">
          <div class="title-box">
              <p class="issue">{{issue}} <span class="fa fa-circle blue circle"></span>{{category}}</p>
              <h1 class="section">{{title}}</h1>
              <p>By <a :href="authorroute">{{author.name}}</a></p>
          </div>

          <div class="article-text" v-html='articleText'></div>
        </div>
        <div class="col-sm-1">
          &nbsp;
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['articleText', 'route', 'author', 'title', 'authorroute', 'auth', 'image',
              'issue', 'category']
    }
</script>
