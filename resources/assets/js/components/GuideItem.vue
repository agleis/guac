<template>
    <div class="row">
        <div class="col-md-6">
            <div v-show="edit" v-on:click="browseServer" class="image edit-image" :style="background">

            </div>
            <div v-show="!edit" class="image" :style="background"></div>
        </div>
        <div class="col-md-6">
            <div class="featured-article featured-2 city-featured">
                <!-- <img :src="image" /> -->
                <h5 class="issue">
                    <span v-if="edit" class="edit-drop" v-on:mouseover="categoryDrop" v-show="!categoryDropped">
                        <span class="category">{{currentCategory.name}}</span>
                        <span v-show="edit" class="fa fa-caret-down gray"></span>
                        </span>
                        <span v-show="edit && categoryDropped">
                        <select name="category" id="category" v-model="categoryid" v-on:change="categoryUp">
                            <option v-for="cat in categories" v-bind:value="cat.id" v-bind:key="cat.id">
                                {{ cat.name }}
                            </option>
                        </select>
                    </span>
                </h5>
                <h3 class="section" v-show="edit" contentEditable=true data-placeholder="Name..." v-on:keyup="nameEdit" v-on:blur="nameEdit" v-on:paste="nameEdit" v-on:delete="nameEdit" v-on:focus="nameEdit">{{name}}</h3>
                <h3 class="section" v-show="!edit">{{name}}</h3>
                <h5 class="section" v-show="edit" contentEditable=true data-placeholder="Hours..." v-on:keyup="hoursEdit" v-on:blur="hoursEdit" v-on:paste="hoursEdit" v-on:delete="hoursEdit" v-on:focus="hoursEdit">{{hours}}</h5>
                <h5 class="section" v-show="!edit">{{hours}}</h5>
                <h5 class="section" v-show="edit" contentEditable=true data-placeholder="Location..." v-on:keyup="locationEdit" v-on:blur="locationEdit" v-on:paste="locationEdit" v-on:delete="locationEdit" v-on:focus="locationEdit">{{location}}</h5>
                <h5 class="section" v-show="!edit">{{location}}</h5>
                <p v-show="edit" contentEditable=true data-placeholder="Summary..." v-on:keyup="summaryEdit" v-on:blur="summaryEdit" v-on:paste="summaryEdit" v-on:delete="summaryEdit" v-on:focus="summaryEdit">{{summary}}</p>
                <p v-show="!edit">{{summary}}</p>
            </div>
        </div>
        <div class="form" v-if="edit">
            <form :action="editroute" method="post" class="guide-item-form">
                <input type="hidden" name="_token" :value="csrf" />
                <input type="hidden" v-model="summarycontent" name="summary" />
                <input type="hidden" v-model="namecontent" name="name" />
                <input type="hidden" v-model="issuecontent" name="issue" />
                <input type="hidden" v-model="hourscontent" name="hours" />
                <input type="hidden" v-model="locationcontent" name="location" />
                <input type="hidden" v-model="categoryid" name="category" />
                <input type="hidden" v-model="imagecontent" name="image" id="image" />
                <input type="hidden" :value="guide" name="guide" />
            </form>
        </div>
    </div>
</template>

<script>
    export default {
      props: ['image', 'issue', 'category', 'categories', 'name', 'hours', 
              'location', 'summary', 'auth', 'editroute', 'edit', 'guide'],
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          imagecontent: this.image,
          issuecontent: this.issue,
          namecontent: this.name,
          hourscontent: this.hours,
          locationcontent: this.location,
          summarycontent: this.summary,
          categoryDropped: false,
          categoryid: this.category.id ? this.category.id : this.categories[0].id,
        }
      },
      computed: {
        background: function() {
          return "background-image: url('"+this.imagecontent+"')"
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
        },
      },
      methods: {
          nameEdit: function(event) {
              this.namecontent = $(event.target).html().trim();
          },
          summaryEdit: function(event) {
            this.summarycontent = $(event.target).html().trim();
          },
          issueEdit: function(event) {
            this.issuecontent = $(event.target).html().trim();
          },
          locationEdit: function(event) {
            this.locationcontent = $(event.target).html().trim();
          },
          hoursEdit: function(event) {
            this.hourscontent = $(event.target).html().trim();
          },
          categoryDrop: function(event) {
            if(this.edit)
              this.categoryDropped = true;
          },
          categoryUp: function(event) {
            this.categoryDropped = false;
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
      }
    }
</script>

<style lang="scss" scoped>
    [contenteditable]:empty:before {
        content: attr(data-placeholder);
        color: grey;
        cursor: text;
    }
</style>

