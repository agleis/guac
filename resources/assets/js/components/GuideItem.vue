<template>
    <div class="row">
        <div class="col-md-6">
            <div class="image" :style="background"></div>
        </div>
        <div class="col-md-6">
            <div class="featured-article featured-2 city-featured">
                <!-- <img :src="image" /> -->
                <p class="issue">{{issue}}  <span class="blue">{{category}}</span></p>
                <h3>{{name}}</h3>
                <h5>{{hours}}</h5>
                <h5>{{location}}</h5>
                <p>{{summary}}</p>
                <div v-if="auth">
                    <a :href="editroute">Edit this item</a>
                </div>
            </div>
        </div>
        <div class="form" v-if="edit">
            <form :action="editroute" method="post">
                <input type="hidden" name="_token" :value="csrf" />
                <input type="hidden" v-model="summarycontent" name="summary" />
                <input type="hidden" v-model="titlecontent" name="title" />
                <input type="hidden" v-model="issuecontent" name="issue" />
                <input type="hidden" v-model="countryid" name="country" />
                <input type="hidden" v-model="regionid" name="region" />
                <input type="hidden" v-model="imagecontent" name="image" id="image" />
                <div class="button more right-float-button">
                    <button type="submit">Submit Guide</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
      props: ['image', 'issue', 'category', 'name', 'hours', 'location', 'summary', 'auth', 'editroute'],
      computed: {
        background: function() {
          return "background-image: url('"+this.image+"')"
        }
      }
    }
</script>
