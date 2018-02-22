<template>
    <div>
  <!-- <div id="main-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner featured-carousel">
        <div class="item carousel-item active">
            <img :src="image" alt="Article">
        </div>
    </div>
  </div> -->
  <div v-if="edit" v-on:click="browseServer" class="image-article edit-image" :style="background">

  </div>
  <div v-if="!edit" class="image-article" :style="background">

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
              <h4 class="issue">
                <span v-if="edit" contentEditable=true placeholder="Issue..." v-on:keyup="issueEdit" v-on:blur="issueEdit" v-on:paste="issueEdit" v-on:delete="issueEdit" v-on:focus="issueEdit">{{issue}}</span> 
                <span v-if="!edit">{{issue}}</span> 
                <span class="fa fa-circle gray circle"></span>
                <span class="edit-drop" v-on:mouseover="countryDrop" v-show="!countryDropped">
                  <span class="country">{{currentCountry.name}}</span>
                  <span v-if="edit" class="fa fa-caret-down gray"></span>
                </span>
                <span v-if="edit" v-show="countryDropped">
                  <select name="country" id="country" v-model="countryid" v-on:change="countryUp">
                    <option v-for="place in countries" v-bind:value="place.id">
                      {{ place.name }}
                    </option>
                  </select>
                </span>
              </h4>
              <h1 class="section" v-if="edit" contentEditable=true placeholder="Title..." v-on:keyup="titleEdit" v-on:blur="titleEdit" v-on:paste="titleEdit" v-on:delete="titleEdit" v-on:focus="titleEdit">{{title}}</h1>
              <h1 class="section" v-if="!edit">{{title}}</h1>
              <p v-if="edit" contentEditable=true placeholder="Summary..." v-on:keyup="summaryEdit" v-on:blur="summaryEdit" v-on:paste="summaryEdit" v-on:delete="summaryEdit" v-on:focus="summaryEdit">{{summary}}</p>
              <p v-if="!edit">{{summary}}</p>
              <div v-if="auth && !edit">
                <a v-on:click="edit=true">Edit this guide</a>
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
    <div class="form" v-if="edit">
      <form :action="editroute" method="post">
        <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" v-model="summarycontent" :value="summarycontent" name="summary" />
        <input type="hidden" v-model="titlecontent" :value="titlecontent" name="title" />
        <input type="hidden" v-model="issuecontent" :value="issuecontent" name="issue" />
        <input type="hidden" v-model="countryid" :value="countryid" name="country" />
        <input type="hidden" v-model="regionid" :value="regionid" name="region" />
        <input type="hidden" v-model="imagecontent" :value="imagecontent" name="image" id="image" />
        <div class="button more right-float-button">
          <button type="submit">Submit Guide</button>
        </div>
       </form>
    </div>
  </div>
</template>

<script>
    export default {
      props: ['summary', 'country', 'countries', 'title', 'image', 'issue', 'prevroute', 'nextroute',
              'auth', 'editroute', 'edit', 'region', 'regions', 'items'],
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          summarycontent: this.summary,
          titlecontent: this.title,
          imagecontent: this.image,
          issuecontent: this.issue,
          countryDropped: false,
          countryid: this.country.id ? this.country.id : this.countries[0].id,
          regionid: this.region.id ? this.region.id : this.regions[0].id,
        }
      },
      computed: {
        background: function() {
          return "background-image: url('"+this.imagecontent+"')";
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
        },
      },
      methods: {
          titleEdit: function(event) {
              this.titlecontent = $(event.target).html().trim();
          },
          summaryEdit: function(event) {
            this.summarycontent = $(event.target).html().trim();
          },
          issueEdit: function(event) {
            this.issuecontent = $(event.target).html().trim();
          },
          countryDrop: function(event) {
            if(this.edit)
              this.countryDropped = true;
          },
          countryUp: function(event) {
            this.countryDropped = false;
          },
          browseServer: function(event) {
            var vm = this;
            var finder = CKFinder.modal({
              chooseFiles: true,
              onInit: function (finder) {
                finder.on('files:choose', function (evt) {
                  var file = evt.data.files.first();
                  vm.imagecontent = file.getUrl();
                });
              }});
          }
      }
    }
</script>

<style lang="css" scoped>
  [contentEditable=true]:empty:before {
    content: attr(placeholder);
    cursor: text;
  }
  .edit-drop {
    cursor: pointer;
  }
</style>