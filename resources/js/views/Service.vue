<template>
    <div class="row-wo-mg main-part">
      <ImagePart src="/img/main.jpg" />
      <TextPart
        title="Cоздадим веб сайт / мобильное приложение"
        description="от которого Ваши клиенты будут бежать своими деньгами к Вам"
         />
    </div>
</template>

<script>
    import ImagePart from "../components/ImagePart";
    import TextPart from "../components/TextPart";

    export default {
        components: {
          ImagePart,
          TextPart
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
