<template>
    <div class="container-fluid">
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
            <div class="col-12 col-md-4">
              <p>Тебе одиноко и скучно? Звони :)</p>
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
  
</style>
