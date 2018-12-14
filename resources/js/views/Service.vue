<template>
    <div class="row-wo-mg main-part">
      <VideoPart  />
      <ServicePart />
    </div>
</template>

<script>
    import VideoPart from "../components/VideoPart";
    import ServicePart from "../components/ServicePart";

    export default {
        components: {
          VideoPart,
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
