<template>
<div>

  <div class="share-article">
    Share
    <ul class="share-social">
      <li><a class="fa fa-facebook-official fa-lg" :href="facebook" target="_blank"></a></li>
      <li><a class="fa fa-twitter fa-lg" :href="twitter" target="_blank"></a></li>
      <li><a class="fa fa-envelope fa-lg mail" :href="mail"></a></li>
      <!-- Edit the links ^^^ -->
    </ul>
  </div>

  <div v-if="edit" v-on:click="browseServer" class="image-article edit-image" :style="background">

  </div>
  <div v-if="!edit" class="image-article" :style="background">

  </div>
  <div class="editable container">

    <div class="col-md-10 col-sm-12 col-xs-12">
      <div class="title-box">
          <h4 class="issue">
            <span v-if="edit" contentEditable=true placeholder="Issue..." v-on:keyup="issueEdit" v-on:blur="issueEdit" v-on:paste="issueEdit" v-on:delete="issueEdit" v-on:focus="issueEdit">{{issue}}</span> 
            <span v-if="!edit">{{issue}}</span> 
            <span class="fa fa-circle gray circle"></span>
            <span v-bind:class="{edit: edit-drop}" v-on:mouseover="regionDrop" v-show="!regionDropped">
              <span class="region">{{currentRegion.name}}</span>
              <span v-if="edit" class="fa fa-caret-down gray"></span>
            </span>
            <span v-if="edit" v-show="regionDropped" v-on:mouseleave="regionUp">
              <select name="region" id="region" v-model="regionid" v-on:change="regionUp">
                <option v-for="area in regions" v-bind:value="area.id" v-bind:key="area.id">
                  {{ area.name }}
                </option>
              </select>
            </span>
          </h4>
          <h1 class="section" v-if="edit" contentEditable=true placeholder="Title..." v-on:keyup="titleEdit" v-on:blur="titleEdit" v-on:paste="titleEdit" v-on:delete="titleEdit" v-on:focus="titleEdit">{{title}}</h1>
          <h1 class="section" v-if="!edit">{{title}}</h1>
          <h4>By 
            <span v-bind:class="{edit: edit-drop}" v-on:mouseover="authorDrop" v-show="!authorDropped">
              <span>{{currentAuthor.name}}</span>
              <span v-if="edit" class="fa fa-caret-down gray"></span>
            </span>
            <span v-if="edit" v-show="authorDropped" v-on:mouseleave="authorUp">
              <select name="author" id="author" v-model="authorid" v-on:change="authorUp">
                <option v-for="area in authors" v-bind:value="area.id" v-bind:key="area.id">
                  {{ area.name }}
                </option>
              </select>
            </span>
          </h4>
          <span v-if="auth && !edit"><a :href="editroute">Edit this article</a> | <a :href="deleteroute">Remove this article</a></span>
      </div>
    </div>


  <!-- <div id="editor" > -->
    <div v-if="edit" class="col-sm-12 col-xs-12 article-text" v-html="articleText" contentEditable=true placeholder="Article content..." v-on:keyup="textEdit" v-on:blur="textEdit" v-on:paste="textEdit" v-on:delete="textEdit" v-on:focus="textEdit">
      
    </div>
    <div v-if="!edit" class="col-sm-12 col-xs-12 article-text" v-html="articleText">
      
    </div>
  <!-- </div> -->

    <a class="sidebar" :href="prevroute">
      <div class="col-md-1 hidden-xs hidden-sm">
        <div v-if="prevroute != ''" class="vertical-text">
          <div class="prev">
            <a :href="prevroute">Previous Story</a>
          </div>
        </div>
      </div>
    </a>
    <a class="sidebar" :href="nextroute">
      <div class="col-md-1 hidden-xs hidden-sm">
        <div v-if="nextroute != ''" class="vertical-text fixme">
          <div class="next">
            <a :href="nextroute">Next Story</a>
          </div>
        </div>
      </div>
    </a>

  </div>
<!--   end of main article section -->

  <div class="gray-author container-fluid">
    <h3 class="author-about">About {{currentAuthor.name}}</h3>
    <div class="row">
      <div class="col-md-3">
        <div class="image-author" :style="authorBackground"></div>
      </div>
      <div class="col-md-9">
        <div class="author-bio">
          <p>{{currentAuthor.bio}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="form" v-if="edit">
    <form :action="editroute" method="post">
      <input type="hidden" name="_token" :value="csrf" />
      <input type="hidden" v-model="text" name="text" />
      <input type="hidden" v-model="titlecontent" name="title" />
      <input type="hidden" v-model="issuecontent" name="issue" />
      <input type="hidden" v-model="regionid" name="region" />
      <input type="hidden" v-model="authorid" name="author" />
      <input type="hidden" v-model="imagecontent" name="image" id="image" />
      <div class="button more right-float-button">
        <div class="form-group" v-if="admin">
          <label for="verify">Verify</label>
          <input type="checkbox" v-model="verifiedbool" name="verify" id="verify">
        </div>
        <button type="submit">Submit Article</button>
      </div>
    </form>
  </div>
</div>
</template>

<script>
    export default {
      props: ['articleText', 'route', 'author', 'title', 'authorroute', 'admin', 'image', 'edit',
              'issue', 'category', 'nextroute', 'prevroute', 'auth', 'editroute', 'url', 'region',
              'regions', 'authors', 'verified', 'deleteroute'],
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          text: this.articleText,
          titlecontent: this.title,
          issuecontent: this.issue,
          regionDropped: false,
          authorDropped: false,
          regionid: this.region.id ? this.region.id : this.regions[0].id,
          authorid: this.author.id ? this.author.id : this.authors[0].id,
          imagecontent: this.image,
          verifiedbool: this.verified ? true : false
        }
      },
      computed: {
        background: function() {
          return "background-image: url('"+this.imagecontent+"')";
        },
        twitter: function() {
          return "http://twitter.com/share?text="+this.title+"&url="+this.url;
        },
        facebook: function() {
          return "https://www.facebook.com/sharer/sharer.php?u="+this.url;
        },
        mail: function() {
          return "mailto:?subject=Read%20This&body="+this.url;
        },
        authorBackground: function() {
          return "background-image: url('"+this.currentAuthor.image+"')";
        },
        currentRegion: function() {
          if(this.regions == null) {
            return this.region;
          }
          if(this.regionid > 0) {
            for(var i = 0; i < this.regions.length; i++) {
              if(this.regions[i].id == this.regionid) {
                return this.regions[i];
              }
            }
          }
          return this.regions[0];
        },
        currentAuthor: function() {
          if(this.authors == null) {
            return this.author;
          }
          if(this.authorid > 0) {
            for(var i = 0; i < this.authors.length; i++) {
              if(this.authors[i].id == this.authorid) {
                return this.authors[i];
              }
            }
          }
          return this.authors[0];
        },
      },
      methods: {
          titleEdit: function(event) {
              this.titlecontent = $(event.target).html().trim();
          },
          textEdit: function(event) {
            this.text = $(event.target).html().trim();
          },
          issueEdit: function(event) {
            this.issuecontent = $(event.target).html().trim();
          },
          regionDrop: function(event) {
            if(edit)
              this.regionDropped = true;
          },
          regionUp: function(event) {
            this.regionDropped = false;
          },
          authorDrop: function(event) {
            if(edit)
              this.authorDropped = true;
          },
          authorUp: function(event) {
            this.authorDropped = false;
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
