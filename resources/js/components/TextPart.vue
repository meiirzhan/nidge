<template>
    <div class="col-md-6 col-12 text-wrapper">
      <h1 v-html="title"></h1>
      <div class="description"  v-html="description"></div>
      <button type="button" class="btn btn-calc btn-lg-2x calc">Расссчитать стоимость проекта</button>
      <br />
      <a href="#">Есть вопросы? <span>Получите консультацию</span></a>
      <router-link tag="div" to="/" class="show-project">
        <a>Посмотреть проекты <img src="/img/arrow.png" /></a>
      </router-link>
    </div>
</template>

<script>
    export default {
        name: "TextPart",
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
  @media (max-width: 767px) {
    .calc {
      padding: 0.6rem 0.5rem;
    }
    .show-project {
      position: static;
      bottom: auto;
      margin-bottom: 1rem;
    }
  }
  
</style>
