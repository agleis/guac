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
            <select name="author" id="author" class="chosen-select" v-model="authorid">
              <option v-for="writer in authors" v-bind:value="writer.id">
                {{ writer.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="region">Region</label>
            <select name="region" id="region" class="chosen-select" v-model="regionid">
              <option v-for="area in regions" v-bind:value="area.id">
                {{ area.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="chosen-select" v-model="categoryid">
              <option v-for="item in categories" v-bind:value="item.id">
                {{ item.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" v-model="issuecontent" name="issue" id="issue" class="form-control" :value="issuecontent"/>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <div class="image-input">
                <div>
                    <input name="browse" id="browse" type="button" value="Choose Image" />
                    <input v-model="imagecontent" name="image" id="image" type="text" />
                    <input type="hidden" name="original" :value="imageurl" />
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="text">Content</label>
            <ckeditor v-model="content" :content="text" 
            :config="{
              filebrowserBrowseUrl: '/js/ckfinder/ckfinder.html',
              filebrowserUploadUrl: '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
            }" name="text" id="text"></ckeditor>
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
          :title="titlecontent"
          :image="imagecontent"
          :issue="issuecontent"
          :category="currentCategory.name">

        </articletext>
    </div>
  </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'
    export default {
      components: { Ckeditor },
      props: ['route', 'text', 'title', 'author', 'authors', 'upload', 
              'aissue', 'image', 'category', 'categories', 'region', 'regions'],
      functional: false,
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          content: this.text,
          titlecontent: this.title,
          authorid: this.author.id ? this.author.id : this.authors[0].id,
          regionid: this.region.id ? this.region.id : this.regions[0].id,
          categoryid: this.category.id ? this.category.id : this.categories[0].id,
          issuecontent: this.aissue,
          imagecontent: this.image,
          imageurl: this.image
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
        },
        currentRegion: function() {
          if(this.regionid > 0) {
            for(var i = 0; i < this.regions.length; i++) {
              if(this.regions[i].id == this.regionid) {
                return this.regions[i];
              }
            }
          }
          return this.regions[0];
        },
        currentCategory: function() {
          if(this.categoryid > 0) {
            for(var i = 0; i < this.categories.length; i++) {
              if(this.categories[i].id == this.categoryid) {
                return this.categories[i];
              }
            }
          }
          return this.categories[0];
        }
      },
      methods: {
        previewThumbnail: function(event) {
            alert('hi');
            var input = event.target;
            vm.imagecontent = input.value;
        }
      }
    }
</script>

<style scoped>

.image-input {
    display: flex;
}

.image-preview {
    flex-basis: 80%;
    flex: 2.5;
    border-radius: 1px;
    margin-right: 10px;
    overflow-y: hidden;
    border-radius: 1px;
    background: #eee;
    justify-content: center;
    align-items: center;
    display: flex;
    height: 150px;
    overflow: hidden;
}

.image-preview>.icon {
    color: #ccc;
    font-size: 50px;
    cursor: default;
}

.image {
    border-radius: 1px;
}

.image-file-div {
    overflow: hidden;
    position: relative;
    background: #eee;
    border-radius: 1px;
    float: left;
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    color: rgba(0, 0, 0, 0.2);
    transition: 0.4s background;
}

.image-file-div:hover {
    background: #e0e0e0;
}


.image-file {
    cursor: inherit;
    display: block;
    font-size: 999px;
    min-height: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    cursor: pointer;
}

</style>