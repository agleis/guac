<template>
    <div class="container">
        <div id="editor-form" class="row">
        <div class="col-sm-1">
            &nbsp;
        </div>
        <div class="col-sm-10">
            <form method="post" :action="editroute" id="content-form" enctype="multipart/form-data">
            <input type="hidden" name="_token" :value="csrf">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" v-model="namecontent" name="name" id="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" v-model="biocontent" name="bio" id="bio" class="form-control" />
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <div class="image-input">
                    <div>
                        <input name="browse" id="browse" type="button" value="Choose Image" />
                        <input v-model="imagecontent" name="image" id="image" type="text" />
                        <input type="hidden" name="original" :value="imagecontent" />
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
    </div>
</template>

<script>
    export default {
      props: ['name', 'bio', 'image', 'editroute'],
      functional: false,
      data() {
        return {
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          content: this.text,
          namecontent: this.name,
          imagecontent: this.image,
          imageurl: this.image,
          biocontent: this.bio
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