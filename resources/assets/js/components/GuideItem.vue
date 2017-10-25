<template>
    <div class="col-md-6">
        <div class="featured-article featured-2 city-featured">
            <img :src="image" />
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
</template>

<script>
    export default {
      props: ['image', 'issue', 'category', 'name', 'hours', 'location', 'summary', 'auth', 'editroute']
    }
</script>
