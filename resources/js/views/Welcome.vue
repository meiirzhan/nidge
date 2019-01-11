<template>
    <div class="row-wo-mg main-part">
      <VideoPart />
      <TextPart
        title="Разработаем крутой <img src='/img/fire.png' style='width: 2.5rem' /><br />веб-сайт, мобильное приложение, нарисуем дизайн и снимем проморолик"
        description="Наша цель - приносить / увеличить Вам доход"
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
