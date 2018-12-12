<template>
    <div class="calculator-wrapper">
      <h1>Оставьте заявку</h1>
      <p>Наш менеджер с Вами свяжеься</p>
      <div class="row">
          <div class="col-12">
            <form
              id="app"
              @submit="onSubmit"
              action="/api/form"
              method="post"
            >
              <div class="form-group">
                <label for="">Ваше имя</label>
                <input type="text" v-model="name" class="form-control" />
              </div>
              <div class="form-group">
                <label for="">Ваше телефон</label>
                <input type="text" v-model="phone" class="form-control" />
              </div>
              <button type="submit" name="button" class="btn btn-success btn-lg">
                <pulse-loader :loading="loading" :color="color" v-if="isLoading"></pulse-loader>
                <span v-else>{{ buttonText }}</span>
              </button>
              <p class="confidencial">Все данные конфедициальны</p>
            </form>
          </div>
      </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data: () => {
          return {
            color: 'white',
            isLoading: false,
            name: '',
            phone: '',
            buttonText: 'Отправить заявку'
          }
        },
        methods: {
          initialButtonText: function() {
            this.buttonText = 'Отправить заявку'
          },
          clearButton: function(text) {
            this.buttonText = text;
            this.isLoading = false;
            setTimeout(this.initialButtonText, 3000)
          },
          onSubmit: function(e) {
            e.preventDefault();
            this.isLoading = true;
            axios
              .post('/api/form', {
                name: this.name,
                phone: this.phone
              })
              .then(response => {
                if (response.data.status == 'success') {
                    this.clearButton('Успешно отправлено')
                    return
                }
                this.clearButton('Ошибка, попробуйте позже')
              })
              .catch(e => {
                this.clearButton('Ошибка, попробуйте позже')
              });
          }
        },
        computed: {

        },
        mounted() {

        }
    }
</script>

<style scoped>
  .calculator-wrapper {
    padding: 1rem 2rem;
  }
  .form-control {
    border-radius: 0;
  }
  label {
    margin-bottom: 0;
    font-weight: bold;
  }
  .calculator-wrapper > h1,   .price span,  h2 {
    font-family: 'Rubik';
    font-weight: bold;
    margin-bottom: 0;
  }
  .calculator-wrapper > p {
    color: #666;
    font-weight: 300;
  }

  .btn {
    width: 100%;
    font-size: 1rem;
    padding: 1rem 2rem;
    font-weight: lighter;
  }
  .confidencial {
    text-align: center;
    margin-top: 1rem;
    color: gray;
  }
</style>
