<template>
    <div class="row-wo-mg main-part">
      <VideoPart />
      <TextPart
        title="Разработаем крутой <img src='/img/fire.png' style='width: 2.5rem' /><br />веб-сайт, нарисуем дизайн и снимем проморолик"
        description="Реализуем Ваш проект с 0 до запуска :)"
         />
    </div>
</template>

<script>
    import VideoPart from "../components/VideoPart";
    import TextPart from "../components/TextPart";

    export default {
        components: {
          VideoPart,
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
