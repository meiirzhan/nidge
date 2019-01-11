<template>
    <div class="col-md-12 col-12 text-wrapper">
      <h1>Наши услуги</h1>
      <h2>We will do our best.</h2>
      <div class="row services glitch-images">
        <div class="col-md-2  col-12">
            <a href="#">
                <div class="glitch glitch--style-1">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
                <h3 class="service-title" data-text="ДИЗАЙН / BRANDING">ДИЗАЙН / BRANDING</h3>
            </a>
          <p>
            Фирменный стиль /
            Брендинг /
            Прессматериалы /
            Ребрендинг
          </p>
          <a href="#">Подробнее</a>
        </div>
        <div class="col-md-2 col-12">
            <a href="#">
                <div class="glitch glitch--style-6">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
                <h3 class="service-title" data-text="Создание сайтов">Создание сайтов</h3>
            </a>
          <p>
            Landing Page / Корпоративный сайт / Сайт визитки  / Интеграция с AmoCRM
          </p>
          <a href="#">Подробнее</a>
        </div>
        <div class="col-md-2 col-12">
            <a href="#">
                <div class="glitch glitch--style-4">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
                <h3 class="service-title" data-text="Продвижение и поддержка сайта">Продвижение и поддержка сайта</h3>
            </a>
            <p>
              SEO оптимизация / Настройка Google и Яндекс рекламы / Техническая поддержка
            </p>
            <a href="#">Подробнее</a>
        </div>
        <div class="col-md-2 col-12">
            <a href="#">
                <div class="glitch glitch--style-2">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
              <h3 class="service-title" data-text="Создание сложных систем">Создание сложных систем</h3>
          </a>
          <p>
            Интернет-магазины / CRM системы / ERP системы
          </p>
          <a href="#">Подробнее</a>
        </div>
        <div class="col-md-2 col-12">
            <a href="#">
                <div class="glitch glitch--style-5">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
                <h3 class="service-title" data-text="Создание мобильного приложение">Создание мобильного приложение</h3>
            </a>
            <p>
            Разработка iOS / Android приложения любой сложности
            </p>
            <a href="#">Подробнее</a>
        </div>
        <div class="col-md-2 col-12">
            <a href="#">
                <div class="glitch glitch--style-3">
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    				<div class="glitch__img"></div>
    			</div>
                <h3 class="service-title" data-text="ВИДЕОСЪЕМКА">ВИДЕОСЪЕМКА</h3>
            </a>
          <p>
            Промо ролики /
            Анимационные ролики /
            Съемка мероприятии
          </p>
          <a href="#">Подробнее</a>
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
      <div>
          <h3>Нужна полная упакова для бизнеса?</h3>
          <h4>Дизайн + Сайт + Видеосъемка + Продвижение + Поддержка</h4>
          <FullServiceButton />
          <router-link tag="div" to="/" class="show-project">
            <a>Посмотреть проекты <img src="/img/arrow.png" /></a>
          </router-link>
      </div>
    </div>
</template>

<script>

    import FullServiceButton from './FullServiceButton';

    export default {
        name: "ServicePart",
        components: {
          FullServiceButton
        },
        mounted() {

        }
    }
</script>

<style scoped>
  h1 {
    margin-top: 10%;
    font-size: 2.5rem;
    font-family: 'Rubik';
    font-weight: 700;
    text-align: center;
    margin-bottom: 0rem;
  }
  h2 {
      text-align: center;
      margin-bottom: 2rem;
      color: gray;

  }
  h3 {
      font-weight: bold;
      font-family: 'Rubik';
      font-size: 2rem;
      margin-top: 2rem;
  }
  h4 {
      margin-bottom: 0;
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
  .service-title {
      text-transform: uppercase;
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
