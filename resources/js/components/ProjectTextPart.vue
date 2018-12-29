<template>
    <div class="col-md-6 col-12 text-wrapper">
      <h1 v-html="project.title"></h1>
      <div class="description">{{ project.subtitle }}</div>
      <a :href="'http://' + project.link"  target="_blank" class="project-link">{{ project.link }}</a>
      <div class="review">
        <ul>
          <li class="" v-for="(work, index) in project.works">
            <span class="checkmark"></span><span v-html="work"></span>
          </li>
        </ul>
        <!-- <h3>Отзыв</h3>
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
        </div> -->
      </div>
      <ProjectsSlider :projects="projects" />
      <CalculateButton />
      <div class="show-project">
        <a :href="'http://' + project.link" target="_blank">Посмотреть сайт <img src="/img/arrow.png" /></a>
      </div>
    </div>
</template>

<script>

    import ProjectsSlider from './ProjectsSlider';
    import CalculateButton from './CalculateButton';

    export default {
        name: "ProjectTextPart",
        components: {
          ProjectsSlider,
          CalculateButton
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
              },
              works: {
                type: Array,
                required: true,
                default: []
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
    min-height: 200px;
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
  ul {
    font-size: 1.2rem;
    font-weight: lighter;
    list-style: none;
    padding: 5px 0px;
    position: relative;
    border-left: 1px solid #26C281;
  }
  ul li {
    margin: 20px 0px;
    padding-left: 20px;
    position: relative;
  }
  ul li:before {
    content: ' ';
    width: 30px;
    height: 30px;
    left: -17px;
    line-height: 30px;
    text-align: center;
    font-size: 1rem;
    color: #26C281;
    border-radius: 50%;
    top: 50%;
    margin-top: -15px;
    border: 1px solid #26C281;
    background: #fff;
    position: absolute;

  }
  ul li:nth-child(1):before {
    content: '1';
  }
  ul li:nth-child(2):before {
    content: '2';
  }
  ul li:nth-child(3):before {
    content: '3';
  }
  ul li:nth-child(4):before {
    content: '4';
  }
  @media (max-width: 767px) {
    .calc {
      padding: 0.6rem 0.5rem;
    }
    h1 {
      margin-top: 10%;
    }
    .show-project {
      position: static;
      bottom: auto;
      margin-bottom: 1rem;
    }
  }
  .checkmark{
  display:inline-block;

  &:after{
    /*Add another block-level blank space*/
    content: '';
    display: block;

    /*Make it a small rectangle so the border will create an L-shape*/
    width: 3px;
    height: 6px;

    /*Add a white border on the bottom and left, creating that 'L' */
    border: solid #000;
    border-width: 0 2px 2px 0;

    /*Rotate the L 45 degrees to turn it into a checkmark*/
    transform: rotate(45deg);
  }
}
</style>
