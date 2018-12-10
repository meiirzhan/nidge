<template>
  <div>
    <Header></Header>
    <transition name="fade" mode="out-in">
      <router-view></router-view>
    </transition>
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

<style>
  .fade-enter-active, .fade-leave-active {
    transition: all 0.6s ease;
  }
  .fade-enter, .fade-leave-to {
    transform: translateY(-100%);
    opacity: 0;
  }
</style>