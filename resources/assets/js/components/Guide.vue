<template>
    <div>
  <!-- <div id="main-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner featured-carousel">
        <div class="item carousel-item active">
            <img :src="image" alt="Article">
        </div>
    </div>
  </div> -->
  <div v-show="editing" v-on:click="browseServer" class="image-article edit-image" :style="background">

  </div>
  <div v-show="!editing" class="image-article" :style="background">

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
                <span v-show="editing" contentEditable=true placeholder="Issue..." v-on:keyup="issueEdit" v-on:blur="issueEdit" v-on:paste="issueEdit" v-on:delete="issueEdit" v-on:focus="issueEdit">{{issue}}</span> 
                <span v-show="!editing">{{issue}}</span> 
                <span class="fa fa-circle gray circle"></span>
                <span class="edit-drop" v-on:mouseover="countryDrop" v-show="!countryDropped">
                  <span class="country">{{currentCountry.name}}</span>
                  <span v-show="editing" class="fa fa-caret-down gray"></span>
                </span>
                <span v-show="editing && countryDropped">
                  <select name="country" id="country" v-model="countryid" v-on:change="countryUp">
                    <option v-for="place in countries" v-bind:value="place.id" v-bind:key="place.id">
                      {{ place.name }}
                    </option>
                  </select>
                </span>
              </h4>
              <h1 class="section" v-show="editing" contentEditable=true placeholder="Title..." v-on:keyup="titleEdit" v-on:blur="titleEdit" v-on:paste="titleEdit" v-on:delete="titleEdit" v-on:focus="titleEdit">{{title}}</h1>
              <h1 class="section" v-show="!editing">{{title}}</h1>
              <p v-show="editing" contentEditable=true placeholder="Summary..." v-on:keyup="summaryEdit" v-on:blur="summaryEdit" v-on:paste="summaryEdit" v-on:delete="summaryEdit" v-on:focus="summaryEdit">{{summary}}</p>
              <p v-show="!editing">{{summary}}</p>
              <div v-if="auth && !editing">
                <a v-on:click="editing=true">Edit this guide</a>
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
        <div class="row">
          <div class="col-sm-1">
              &nbsp;
          </div>
          <div class="col-sm-10">
            <div class="ref-container" ref="container">
              <div v-for="item in items"  v-bind:value="item" v-bind:key="item.id">
                  <guideitem :image="item.image"
                          :id="item.id"
                          :issue="item.issue"
                          :category="categories[item.category_id - 1]"
                          :categories="categories"
                          :name="item.name"
                          :hours="item.hours"
                          :location="item.location"
                          :summary="item.summary"
                          :auth="auth"
                          :edit="editing"
                          :editroute="'/guides/'+id+'/'+item.id+'/edit'"
                          :guide="id"></guideitem>
              </div>
            </div>
            <a v-if="editing" class="add-item" v-on:click="addItem">
              <div class="add-item-div"><img src="/images/plus.jpg" /></div>
            </a>
          </div>
          <div class="col-sm-1">
              &nbsp;
          </div>
      </div>
    </div>
    <div class="form" v-show="editing">
      <form :action="editroute" method="post" id="guide-form">
        <input type="hidden" name="_token" :value="csrf" />
        <input type="hidden" v-model="summarycontent" name="summary" />
        <input type="hidden" v-model="titlecontent" name="title" />
        <input type="hidden" v-model="issuecontent" name="issue" />
        <input type="hidden" v-model="countryid" name="country" />
        <input type="hidden" v-model="regionid" name="region" />
        <input type="hidden" v-model="imagecontent" name="image" id="image" />
       </form>
       <div class="button more right-float-button">
          <button type="submit" v-on:click="submitForms">Submit Guide</button>
        </div>
    </div>
  </div>
</template>

<script>
    import GuideItem from './GuideItem.vue'
    import Vue from 'vue'
    export default {
      props: ['summary', 'country', 'countries', 'title', 'image', 'issue', 'prevroute', 'nextroute',
              'auth', 'editroute', 'edit', 'region', 'regions', 'items', 'categories', 'id'],
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          summarycontent: this.summary,
          titlecontent: this.title,
          imagecontent: this.image,
          issuecontent: this.issue,
          countryDropped: false,
          editing: this.edit,
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
          addItem: function() {
            var ComponentClass = Vue.extend(GuideItem)
            var instance = new ComponentClass({
                propsData: { 
                  image: "",
                  issue: "",
                  category: this.categories[0],
                  categories: this.categories,
                  name: "",
                  hours: "",
                  location: "",
                  summary: "",
                  auth: this.auth,
                  edit: true,
                  editroute: "/guides/"+this.id+"/upload",
                  guide: this.id,
                  id: null
                }
            })
            instance.$mount() // pass nothing
            console.log(this.$refs.container)
            this.$refs.container.appendChild(instance.$el)
          },
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
            if(this.editing)
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
          },
          submitForms: function() {
            $(".guide-item-form").each(function() {
              var url = $(this).attr('action');
              $.post(url, $(this).serialize());
            });
            $("#guide-form").submit();
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

  .add-item-div {
    width: 100%;
    height: 100%;
    text-align: center;
    cursor: pointer;
  }
</style>