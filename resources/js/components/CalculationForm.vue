<template>
    <div class="calculator-wrapper">
      <h1>Калькулятор</h1>
      <p>Выберите ваши требования и мы посчитаем примерную цену</p>
      <div class="row">
          <div class="col-12">
            <form
              id="app"
              @submit="onSubmit"
              action="/api/form"
              method="post">
              <div class="form-group">
                <label for="">Продукт</label>
                <b-form-select :options="productOptions" v-model="productSelected" v-on:change="productChanged" />
              </div>
              <div class="form-group">
                <label for="">Категория</label>
                <b-form-select :options="typeOptions" v-model="typeSelected" v-on:change="typeChanged" />
              </div>
              <div class="form-group">
                <label for="">Дизайн</label>
                <b-form-select :options="designOptions" v-model="designSelected" v-on:change="designChanged"/>
              </div>
              <div class="form-group">
                <b-form-checkbox id="checkbox1"
                       value=1
                       v-model="has_tz"
                       v-on:change="tzChanged"
                       unchecked-value=0>
                  Есть ли техническое задание
                </b-form-checkbox>
              </div>
              <div class="text-right price">
                <p class="mb-0">Приблизительная цена:</p>
                <h3 class="mb-0"><span>{{ priceMF }}</span> тенге</h3>
                <a href="#">Дорого?</a>
              </div>
              <hr>
              <div class="text-center">
                <h2>Оставьте заявку</h2>
                <p>Мы Вам объясним более подробнее</p>
              </div>
              <div class="form-group">
                <label for="">Ваше имя</label>
                <input v-model="name" type="text" class="form-control" required />
              </div>
              <div class="form-group">
                <label for="">Ваше телефон</label>
                <input v-model="phone" type="text" class="form-control" required />
              </div>
              <button :disabled="isLoading" type="submit" name="button" class="btn btn-success btn-lg">
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
            productOptions: [
              { value: 0, text: 'Выберите', disabled: true },
              { value: 1, text: 'Сайт / Web приложение' },
              { value: 2, text: 'Мобильное приложение' }
            ],
            typeOptions: [
              { value: 0, text: 'Выберите', disabled: true },
              { value: 110000, text: 'Landing' },
              { value: 1200000, text: 'Интернет магазин' },
              { value: 4000000, text: 'CRM' },
              { value: 500000, text: 'Корпоративный сайт' },
              { value: 800000, text: 'Сайт каталог' },
              { value: 1500000, text: 'Нестандартный проект' }
            ],
            designOptions: [
              { value: 0, text: 'Индивидуальный' },
              { value: 20, text: 'Шаблоный' }
            ],
            price: 0,
            has_tz: 1,
            typeSelected: 0,
            phone: '',
            name: '',
            productSelected: 0,
            designSelected: 0,
            color: 'white',
            isLoading: false,
            buttonText: 'Отправить заявку'
          }
        },
        methods: {
          productChanged: function(e) {
            this.calculate(e, this.typeSelected, this.designSelected, this.has_tz);
          },
          typeChanged: function(e) {
            this.calculate(this.productSelected, e, this.designSelected, this.has_tz);
          },
          designChanged: function(e) {
            this.calculate(this.productSelected, this.typeSelected, e, this.has_tz);
          },
          tzChanged: function(e) {
              this.calculate(this.productSelected, this.typeSelected, this.designSelected, e);
          },
          calculate: function(product, type, design, tz) {
            console.log(type);
            let res = product * type;


            res -= res * (design / 100);

            res += (1 - parseInt(tz)) * 40000;

            this.price = res;
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
          },
          initialButtonText: function() {
            this.buttonText = 'Отправить заявку'
          },
          clearButton: function(text) {
            this.buttonText = text;
            this.isLoading = false;
            setTimeout(this.initialButtonText, 3000)
          }
        },
        computed: {
          priceMF: function() {
            return this.price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
          }
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
  .price a {
    font-style: italic;
    color: gray;
  }
  .price a:hover {
    color: red;
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
