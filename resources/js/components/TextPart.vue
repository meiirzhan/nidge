<template>
    <div class="col-md-6 col-6 text-wrapper">
      <h1 v-html="title"></h1>
      <div class="description"  v-html="description"></div>
      <footer></footer>
      <CalculateButton />
      <router-link tag="div" to="/" class="show-project">
        <a>Посмотреть проекты <img src="/img/arrow.png" /></a>
      </router-link>
    </div>
</template>

<script>

    import CalculateButton from './CalculateButton';

    export default {
        name: "TextPart",
        components: {
          CalculateButton
        },
        props: {
          title: {
            type: String,
            required: true,
            default: "all"
          },
          description: {
            type: String,
            required: true,
            default: "all"
          }
        },
        mounted() {

        }
    }
</script>

<style scoped>
  h1 {
    margin-top: 30%;
    font-size: 2.5rem;
    font-family: 'Rubik';
    font-weight: 700;
  }
  .text-wrapper {
    padding-left: 2rem;
    z-index: 2;
  }
  .description {
    font-size: 1.2rem;
  }
  button {
    margin-top: 2rem;
  }
  a {
    display: inline-block;
    font-weight: bold;
    margin-top: 1rem;
  }
  a span {
    text-decoration: underline;
  }
  .show-project {
    position: absolute;
    bottom: 2rem;
  }
  .show-project a {
    font-size: 1.2rem;
  }
</style>
