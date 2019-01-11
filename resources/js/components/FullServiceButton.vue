<template>
  <div>
    <button type="button" v-on:click="openModalCalculation" class="btn btn-calc btn-lg-2x">Оставить заявку</button>
  </div>
</template>

<script>
    import { vueSlideoutPanelService } from 'vue2-slideout-panel';
    import ContactForm from './ContactForm';
    export default {
        data: function() {
          return {
            formModal: null,
          };
        },
        mounted() {

        },
        methods: {
          openModalForm: function() {
            this.formModal = vueSlideoutPanelService.show({
              component: ContactForm,
              props: {
                close: this.closeModalForm
              },
              width: '500px' //customize the width
            });
          },
          closeModalForm: function() {
            if (this.formModal != null) this.formModal.hide();
          }
        }
    }
</script>

<style scoped>
  button {
    margin-top: 1rem;

  }
  button:focus {
    outline: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-appearance: none;
  }
</style>
