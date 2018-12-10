<template>
  <div>
    <Header></Header>
    <router-view></router-view>
    <BGLines />
  </div>
</template>

<script>
import Header from "./components/Header";
import BGLines from "./components/BGLines";
export default {
  name: "App",
  components: {
    Header,
    BGLines
  }
};
</script>

<style></style>
