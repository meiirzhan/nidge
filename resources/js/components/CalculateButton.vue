<template>
  <div>
    <button type="button" v-on:click="openModalCalculation" class="btn btn-calc btn-lg-2x">Расссчитать стоимость проекта</button>
    <br />
    <a class="any-question" v-on:click="openModalForm">Есть вопросы? <span>Получите консультацию</span></a>
  </div>
</template>

<script>
    import { vueSlideoutPanelService } from 'vue2-slideout-panel';
    import CalculationForm from './CalculationForm';
    import ContactForm from './ContactForm';
    export default {
        mounted() {

        },
        methods: {
          openModalCalculation: function() {
            vueSlideoutPanelService.show({
              component: CalculationForm,
              width: '500px' //customize the width
            });
          },
          openModalForm: function() {
            vueSlideoutPanelService.show({
              component: ContactForm,
              width: '500px' //customize the width
            });
          }
        }
    }
</script>

<style scoped>
  button {
    margin-top: 2rem;

  }
  button:focus {
    outline: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-appearance: none;
  }
  a.any-question {
    display: inline-block;
    font-weight: bold;
    margin-top: 1rem;
    cursor: pointer;
  }
  a.any-question span {
    text-decoration: underline;
  }
</style>
