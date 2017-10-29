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
              <input type="text" v-model="titlecontent" name="title" id="title" class="form-control input-lg" :value="titlecontent"/>
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <select name="country" id="country" v-model="countryid">
                <option v-for="item in countries" v-bind:value="item.id">
                    {{item.name}}
                </option>
            </select>
          </div>
          <div class="form-group">
            <label for="region">Region</label>
            <select name="region" id="region" v-model="regionid">
              <option v-for="area in regions" v-bind:value="area.id">
                {{ area.name }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" v-model="issuecontent" name="issue" id="issue" class="form-control" :value="issuecontent"/>
          </div>
          <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" v-model="summarycontent" name="summary" id="summary" class="form-control" :value="summarycontent"/>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <div class="image-input">
                <div>
                    <input name="image" id="browse" type="button" value="Choose Image" />
                    <input v-model="imagecontent" name="image" id="image" type="text" />
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
        <guide
          :country="currentCountry.name"
          :title="titlecontent"
          :image="imagecontent"
          :issue="issuecontent"
          :summary="summarycontent">

        </guide>
    </div>
  </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2'
    export default {
      components: { Ckeditor },
      props: ['route', 'title', 'summary', 'upload', 'aissue', 'image', 'region', 'regions', 'country', 'countries'],
      functional: false,
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          content: this.text,
          titlecontent: this.title,
          regionid: this.region.id ? this.region.id : this.regions[0].id,
          countryid: this.country.id ? this.country.id : this.countries[0].id,
          issuecontent: this.aissue,
          imagecontent: this.image,
          summarycontent: this.summary,
          imageurl: this.image
        }
      },
      computed: {
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
        currentCountry: function() {
          if(this.countryid > 0) {
            for(var i = 0; i < this.countries.length; i++) {
              if(this.countries[i].id == this.countryid) {
                return this.countries[i];
              }
            }
          }
          return this.countries[0];
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