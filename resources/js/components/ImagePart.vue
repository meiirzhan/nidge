<template>
    <div class="col-md-6 col-12 main-image-wrapper">
      <img :src="src" alt="" class="main-image row" />
      <img :src="mobsrc != null ? mobsrc : src" alt="" class="mobile-element img-fluid" />
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
          },
          mobsrc: {
            type: String,
            required: true,
            default: null
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
  .mobile-element {
    display: none;
  }
  @media (max-width: 767px) {
    .main-image {
      /* max-width: 110%; */
      display: none;
      /*max-height: 300px;*/

    }
    .mobile-element {
      display: block;
    }
  }
</style>
