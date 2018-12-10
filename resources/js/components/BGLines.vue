<template>
    <div class="lines-holder">
      <div class="line" />
      <div class="line" />
      <div class="line" />
      <div class="line" />
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>
<style media="screen">
  .lines-holder {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }
  .line {
    position: absolute;
    width: 1px;
    top: 0;
    bottom: 0;
    background: #e9e9e9;
  }
  .lines-holder .line:nth-child(0) {
    left: 20%
  }
  .lines-holder .line:nth-child(1) {
    left: 40%;
  }
  .lines-holder .line:nth-child(2) {
    left: 60%;
  }
  .lines-holder .line:nth-child(3) {
    left: 80%;
  }
</style>
