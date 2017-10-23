<template>
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
</template>

<script>
export default {
    props: ['imageSrc', 'image'],
    data() {
        return {
            imagecontent: this.imageSrc,
            imageurl: this.image
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