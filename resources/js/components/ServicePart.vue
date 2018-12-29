<template>
    <div class="col-md-6 col-12 text-wrapper">
      <h1>We will do our best.</h1>
      <div class="row services">
        <div class="col-md-4 col-12">
          <img src="/img/service_item_1.png" class="img-fluid" alt="">
          <h3>ДИЗАЙН / BRANDING</h3>
          <p>
            Фирменный стиль<br />
            Брендинг<br />
            Прессматериалы<br />
            Ребрендинг
          </p>
        </div>
        <div class="col-md-4 col-12">
          <img src="/img/service_item_2.png" class="img-fluid" alt="">
          <h3>DEVELOPING / РАЗРАБОТКА</h3>
          <p>
            Веб сайты<br />
            Мобильные приложения<br />
            Програмные обеспечения<br />
            CRM системы<br />
            Outsourcing
          </p>
        </div>
        <div class="col-md-4 col-12">
          <img src="/img/service_item_3.png" class="img-fluid" alt="">
          <h3>ВИДЕОСЪЕМКА</h3>
          <p>
            Промо ролики<br />
            Анимационные ролики<br />
            Love Story
          </p>
        </div>
      </div>
      <!-- <ul>
        <li>
          Разработка веб - сайтов и приложении
        </li>
        <li>
          Разработа мобильных приложении
        </li>
        <li>
          Съемка промо-роликов
        </li>
      </ul> -->
      <CalculateButton />
      <router-link tag="div" to="/" class="show-project">
        <a>Посмотреть проекты <img src="/img/arrow.png" /></a>
      </router-link>
    </div>
</template>

<script>

    import CalculateButton from './CalculateButton';

    export default {
        name: "ServicePart",
        components: {
          CalculateButton
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
    text-align: center;
    margin-bottom: 2rem;
  }
  .services > div {
    text-align: center;
  }
  .services h3 {
    font-weight: bold;
    margin-top: 1rem;
    font-size: 1.2rem;
  }
  .services p {
    color: #828282;
  }
  ul {
    font-size: 1.5rem;
    font-weight: lighter;
    list-style: none;
    padding: 5px 0px;
    display: none;
    position: relative;
    border-left: 2px solid #26C281;
  }
  ul li {
    margin: 40px 0px;
    padding-left: 20px;
    position: relative;
  }
  ul li:before {
    content: ' ';
    width: 30px;
    height: 30px;
    left: -17px;
    text-align: center;
    font-size: 1rem;
    color: #26C281;
    border-radius: 50%;
    top: 50%;
    margin-top: -15px;
    border: 2px solid #26C281;
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
  ul li img {
    width: 80px;
    margin-right: 20px;
    display: none;
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
