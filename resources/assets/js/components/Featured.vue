<template>
  <div class="featured">
    <div v-for="article in featured">
      {{article}}
      <articlesummary
               :route="'/articles/'+article.name"
               :image="'images/'+article.image"
               :title="article.title"
               :summary="article.summary"
               :name="article.user.name"
               :authorroute="'/authors/'+article.user.id"></articlesummary>
     </div>
   </div>
</template>

<script>
  export default {
    props: ['featured']
  }
</script>
