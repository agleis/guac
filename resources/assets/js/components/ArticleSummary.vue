<template>
  <div class="article-summary">
    <a :href='route'
      class='list-item'>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 image-col">
            <img class="article-summary-image"
                 :src="image" width="125" height="125" />
          </div>
          <div class="col-md-10">
            <h1 class='article-summary-title'>{{title}}</h1>
            By <a :href="authorroute" class="article-summary-author">{{name}}</a>
            <p class='article-summary-p'>{{summary}}</p>
          </div>
        </div>
      </div>
    </a>
    <hr />
  </div>
</template>

<script>
  export default {
    props: ['route', 'image', 'title', 'summary', 'name', 'authorroute'],
    functional: false,
    data() {
      return {}
    }
  }
</script>

<style lang="scss" scoped>
  .article-summary {
    width: 100%;
  }

  .row {
    align-items: center;
  }

  .image-col {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
  }

  .article-summary-image {
    vertical-align: middle;
  }
</style>

