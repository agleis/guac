<template>
  <div class="editable container">
    <div class="row">
      <div class="col-sm-2">
        &nbsp;
      </div>
      <div class="col-sm-8">
        <h1 class='article-title'>{{title}}</h1>

        <p>By <a :href="authorroute">{{author.name}}</a></p>

        <div class="article-text" v-html="articleText"></div>
        <a v-show="auth" :href="route" class="edit-button btn edit-link">
          <span class="glyphicon glyphicon-pencil"></span>
        </a>
      </div>
      <div class="col-sm-2">
        &nbsp;
      </div>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['articleText', 'route', 'author', 'title', 'authorroute', 'auth']
    }
</script>

<style lang="scss" scoped>
  img {
    max-width: 100%;
    width: 100%; 
    height: auto;
  }
</style>
