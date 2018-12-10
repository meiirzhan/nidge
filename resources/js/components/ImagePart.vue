<template>
    <div class="col-md-6 col-6 main-image-wrapper">
      <img :src="src" alt="" class="main-image row" />
    </div>
</template>

<script>
    export default {
        name: "ImagePart",
        props: {
          src: {
            type: String,
            required: true,
            default: "all"
          }
        },
        mounted() {

        }
    }
</script>

<style scoped>
  .main-image-wrapper {
    overflow: hidden;
    z-index: 2;
  }
  .main-image {
    height: auto;
    width: 50wh;
  }
</style>
