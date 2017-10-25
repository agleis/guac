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
              <label for="name">Name</label>
              <input type="text" v-model="namecontent" name="name" id="name" class="form-control input-lg" :value="namecontent"/>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="chosen-select" v-model="categoryid">
              <option v-for="area in categories" v-bind:value="area.id">
                {{ area.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="hours">Hours</label>
            <input type="text" v-model="hourscontent" name="hours" id="hours" class="form-control" :value="hourscontent"/>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" v-model="locationcontent" name="location" id="location" class="form-control" :value="locationcontent"/>
          </div>
          <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" v-model="summarycontent" name="summary" id="summary" class="form-control" :value="summarycontent"/>
          </div>
          <div class="form-group">
              <div class="image-input">
                <div class="image-preview">
                    <i v-show="!imagecontent" class="icon fa fa-picture-o"></i>
                    <img v-show="imagecontent" class="image" :src="imagecontent" height="150" width="200" />
                </div>

                <div class="image-file-div">
                    Upload Thumbnail
                    <input @change="previewThumbnail" class="image-file" name="image" type="file" />
                    <input type="hidden" name="original" :value="imageurl" />
                </div>
              </div>
          </div>
          <input type="submit" value="submit" />
        </form>
      </div>
      <div class="col-sm-1">
        &nbsp;
      </div>
    </div>
    <div id="editor-article" class="split split-vertical row">
        <guideitem :image="imagecontent"
                   :issue="issuecontent"
                   :category="currentCategory.name"
                   :name="namecontent"
                   :hours="hourscontent"
                   :location="locationcontent"
                   :summary="summarycontent">

        </guideitem>
    </div>
  </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'
    export default {
      components: { Ckeditor },
      props: ['route', 'name', 'issue', 'summary', 'upload', 'hours', 'location', 'image', 'category', 'categories'],
      functional: false,
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          namecontent: this.name,
          categoryid: this.category.id ? this.category.id : this.categories[0].id,
          hourscontent: this.hours,
          issuecontent: this.issue,
          locationcontent: this.location,
          imagecontent: this.image,
          summarycontent: this.summary,
          imageurl: this.image
        }
      },
      computed: {
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
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var vm = this;

                reader.onload = function(e) {
                    vm.imagecontent = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
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