<template>
    <div class="container-fluid" id="header">
      <div class="row">
        <div class="col-md-6 col-6">
          <img src="/img/logo.png" alt="">
        </div>
        <div class="col-md-6 col-6">
          <div class="row">
            <div class="col-8 col-md-8">
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
            <div class="col-12 col-md-4 phone-number-wrapper">
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
</style>
