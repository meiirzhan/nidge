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
        data: function() {
          return {
            calcModal: null,
            formModal: null,
          };
        },
        mounted() {

        },
        methods: {
          openModalCalculation: function() {
            this.calcModal = vueSlideoutPanelService.show({
              component: CalculationForm,
              props: {
                close: this.closeModalCalculation
              },
              width: '500px' //customize the width
            });
          },
          openModalForm: function() {
            this.formModal = vueSlideoutPanelService.show({
              component: ContactForm,
              props: {
                close: this.closeModalForm
              },
              width: '500px' //customize the width
            });
          },
          closeModalCalculation: function() {
            if (this.calcModal != null) this.calcModal.hide();
          },
          closeModalForm: function() {
            if (this.formModal != null) this.formModal.hide();
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
