<template>
    <div class="col-md-6 col-6 text-wrapper">
      <h1 v-html="project.title"></h1>
      <div class="description">{{ project.subtitle }}</div>
      <a :href="'http://' + project.link"  target="_blank" class="project-link">{{ project.link }}</a>
      <div class="review">
        <h3>Отзыв</h3>
        <p class="review-text">
          «{{ project.reviewText }}»
        </p>
        <div class="author">
          <div class="author-image-wrapper">
            <img :src="project.authorAvatar" alt="" class="img-fluid" />
          </div>
          <div class="author-name">
            <h4>{{ project.authorName }}</h4>
            <p>{{ project.authorCompany }}</p>
          </div>
        </div>
      </div>
      <!-- TODO PROJECTS -->
      <ProjectsSlider :projects="projects" />
      <button type="button" class="btn btn-calc btn-lg-2x">Расссчитать стоимость проекта</button>
      <br />
      <a href="#" class="any-question">Есть вопросы? <span>Получите консультацию</span></a>
      <div class="show-project">
        <a :href="'http://' + project.link">Посмотреть сайт <img src="/img/arrow.png" /></a>
      </div>
    </div>
</template>

<script>
    import ProjectsSlider from './ProjectsSlider';
    export default {
        name: "ProjectTextPart",
        components: {
          ProjectsSlider
        },
        props: {
          projects: {
            type: Array,
            required: true,
            default: []
          },
          project: {
              title: {
                type: String,
                required: true,
                default: "Здесь будет Тайтл"
              },
              subtitle: {
                type: String,
                required: true,
                default: "Здесь будет сабтайтл"
              },
              authorAvatar: {
                type: String,
                required: true,
                default: "Аватар"
              },
              authorName: {
                type: String,
                required: true,
                default: "ФИО Автора"
              },
              authorCompany: {
                type: String,
                required: true,
                default: "Компания автора"
              },
              reviewText: {
                type: String,
                required: true,
                default: "Его текст о нас"
              },
              link: {
                type: String,
                required: true,
                default: "ссылка"
              }
          }
        },
        mounted() {

        }
    }
</script>

<style scoped>
  h1 {
    margin-top: 5rem;
    margin-bottom: 0;
    font-size: 2.5rem;
    font-family: 'Rubik';
    font-weight: 700;
  }
  .text-wrapper {
    padding-left: 2rem;
    z-index: 2;
  }
  .description, .project-link {
    font-size: 1.2rem;
  }
  button {
    margin-top: 2rem;
  }
  a.any-question {
    display: inline-block;
    font-weight: bold;
    margin-top: 1rem;
  }
  a.any-question span {
    text-decoration: underline;
  }
  .show-project {
    position: absolute;
    bottom: 2rem;
  }
  .show-project a {
    font-size: 1.2rem;
  }
  .project-link {
    color: #E65040;
    text-decoration: underline;
  }
  .review {
    margin-top: 2rem;
  }
  .review h3 {
    /* font-weight: bold; */
    color: #C4C4C4;
    font-size: 2rem;
  }
  .review-text {
    font-size: 1.2rem;
    font-style: italic;
    font-weight: 300;
  }
  .review .author {
    margin-top: 2rem;
    display: flex;
  }
  .review .author .author-image-wrapper {
    width: 4rem;
  }
  .review .author .author-name {
    margin-left: 1rem;
  }
  .review .author .author-name h4 {
    margin-top: 0.5rem;
    margin-bottom: 0;
    font-weight: bold;
  }
  .review .author .author-name p {
    font-weight: lighter;
  }
</style>
