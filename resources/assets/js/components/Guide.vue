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
                <a :href="prevroute">Previous City</a>
              </div>
            </div>
          </div>
        </a>
        <div class="col-sm-10">
          <div class="title-box guide">
              <p class="issue">{{issue}} <span class="fa fa-circle blue circle"></span>{{country}}</p>
              <h1 class="section">{{title}}</h1>
              <p>{{summary}}</p>
              <div v-if="auth">
                <a :href="editroute">Edit this guide</a>
              </div>
          </div>
        </div>
        <a class="sidebar" :href="nextroute">
          <div class="col-sm-1">
            <div v-if="nextroute != ''" class="vertical-text">
              <div class="next">
                <a :href="nextroute">Next City</a>
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
      props: ['summary', 'country', 'title', 'image', 'issue', 'prevroute', 'nextroute',
              'auth', 'editroute']
    }
</script>