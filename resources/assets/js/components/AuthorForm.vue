<template>
  <div id="author-form">
    <form>
      <div class="form-group">
        <label for="author_name">Name</label>
        <input type="text" v-model="authorname" name="author_name" id="author_name" class="form-control" :value="name"/>
      </div>
      <div class="form-group">
        <label for="author_email">Email</label>
        <input type="email" v-model="authoremail" name="author_email" id="author_email" class="form-control" :value="email"/>
      </div>
    </form>
  </div>
</template>

<script>
    module.exports = {
      props: ['name', 'email'],
      data() {
        return {
          authorname: this.name,
          authoremail: this.email
        }
      }
    }
</script>
