<template>
    <div class="row-wo-mg main-part">
      <ImagePart src="/img/service_2.jpg" mobsrc="/img/service.jpg" />
      <ServicePart />
    </div>
</template>

<script>
    import ImagePart from "../components/ImagePart";
    import ServicePart from "../components/ServicePart";

    export default {
        components: {
          ImagePart,
          ServicePart
        },
        mounted() {

        }
    }
</script>

<style scoped>
  .main-part {
    height: 100vh;
  }
</style>
