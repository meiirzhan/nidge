<template>
    <div class="row-wo-mg main-part">
      <MapPart />
      <TextPart
        title="Контакты"
        description="<a href='tel:87087080495'>+7 708 708 0495</a><br>г. Алматы, пр. Аль-Фараби  21, блок 5, офиc 89"
         />
    </div>
</template>

<script>
    import MapPart from "../components/MapPart";
    import TextPart from "../components/TextPart";

    export default {
        components: {
          MapPart,
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
