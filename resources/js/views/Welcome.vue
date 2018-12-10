<template>
    <div class="row-wo-mg main-part">
      <ImagePart src="/img/main.jpg" />
      <TextPart
        title="Разработаем крутой <img src='/img/fire.png' style='width: 2.5rem' /><br />веб-сайт, нарисуем дизайн и снимем проморолик"
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
