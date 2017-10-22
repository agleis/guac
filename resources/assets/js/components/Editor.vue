<template>
  <div class="editor container">
    <div id="editor-form" class="split split-vertical row">
      <div class="col-sm-1">
        &nbsp;
      </div>
      <div class="col-sm-10">
        <form method="post" :action="route" id="content-form" enctype="multipart/form-data">
          <input type="hidden" name="_token" :value="csrf">
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" v-model="titlecontent" name="title" id="title" class="form-control input-lg" :value="title"/>
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <select name="author" id="author" v-model="authorid">
              <option v-for="writer in authors" v-bind:value="writer.id">
                {{ writer.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" v-model="summarycontent" name="summary" id="summary" class="form-control" :value="summarycontent"/>
          </div>
          <div class="form-group">
              <image-upload :image-src="image" :image="image"></image-upload>
          </div>
          <div class="form-group">
            <label for="text">Content</label>
            <ckeditor v-model="content" :content="text" name="text" id="text"></ckeditor>
          </div>
          <input type="submit" value="submit" />
        </form>
      </div>
      <div class="col-sm-1">
        &nbsp;
      </div>
    </div>
    <div id="editor-article" class="split split-vertical row">
        <articletext
          :article-text="content"
          :route="route"
          :author="currentAuthor"
          :title="titlecontent">

        </articletext>
    </div>
  </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'
    export default {
      components: { Ckeditor },
      props: ['route', 'text', 'title', 'author', 'authors', 'upload', 'summary', 'image'],
      functional: false,
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          content: this.text,
          titlecontent: this.title,
          authorid: this.author.id ? this.author.id : this.authors[0].id,
          summarycontent: this.summary
        }
      },
      computed: {
        currentAuthor: function() {
          if(this.authorid > 0) {
            for(var i = 0; i < this.authors.length; i++) {
              if(this.authors[i].id == this.authorid) {
                return this.authors[i];
              }
            }
          }
          return this.authors[0];
        }
      }
    }
</script>
