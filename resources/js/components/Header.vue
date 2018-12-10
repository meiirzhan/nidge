<template>
    <div class="container-fluid" id="header">
      <div class="row mt-3">
        <div class="col-lg-6 col-4">
          <img src="/img/logo.png" alt="" class="logo-mb">
        </div>
        <div class="col-8 d-block d-lg-none text-right">
          <p class="mb-0">Есть вопросы? Звони :)</p>
          <div class="phone-number">
          +7 708 708 0495
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-12 col-lg-8">
              <ul class="nav">
                <router-link tag="li" to="/">
                  <a>Главная</a>
                </router-link>
                <router-link tag="li" to="/services">
                  <a>Услуги</a>
                </router-link>
                <router-link tag="li" to="/projects">
                  <a>Проекты</a>
                </router-link>
                <router-link tag="li" to="/contacts">
                  <a>Контакты</a>
                </router-link>
              </ul>
            </div>
            <div class="col-lg-4 phone-number-wrapper d-none d-lg-block">
              <p>Есть вопросы? Звони :)</p>
              <div class="phone-number">
              +7 708 708 0495
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>

<style scoped>
  #header {
    position: absolute;
    z-index: 3;
  }
  .logo-mb {
    width: 150px;
  }
  .nav li {
    padding: 30px 15px;
  }
  .nav li a {
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: lighter;
  }
  .nav li.router-link-exact-active.router-link-active a {
    font-weight: bold;
    position: relative;
  }
  .nav li.router-link-exact-active.router-link-active a:after {
    content: ' ';
    width: 20px;
    height: 1px;
    background: #e74c3c;
    position: absolute;
    bottom: -5px;
    left: 50%;
    margin-left: -10px;
  }
  .phone-number-wrapper p {
    margin-bottom: 0;
    font-size: 0.8rem;
    margin-top: 10px;
  }
  .phone-number-wrapper .phone-number {
    font-weight: bold;
    font-family: 'Rubik';
    font-size: 1.5rem;
  }
  .phone-number {
    font-weight: bold;
    font-family: 'Rubik';
    font-size: 1rem;
  }
  @media (max-width: 1023px) {
    #header {
      position: static;
    }
    .nav li {
      padding: 15px 7.5px;
    }
    .nav li a {
      font-size: 0.9rem;
    }
    .nav {
      justify-content: space-around;   
    }
  }
</style>
