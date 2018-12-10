<template>
    <div class="slider">
      <!-- swiper -->
      <div class="swiper-button-prev" slot="button-prev"></div>
      <div class="swiper-button-next" slot="button-next"></div>
      <swiper :options="swiperOption"  ref="mySwiper">
        <swiper-slide v-for="(project, index) in projects" :key="index" >
          <div class="slider-item" v-on:click="handleProjectClick(index)">
            <img :src="project.image" class="img-fluid" alt="">
          </div>
        </swiper-slide>
      </swiper>
    </div>
</template>

<script>

    import 'swiper/dist/css/swiper.css'

    import { swiper, swiperSlide } from 'vue-awesome-swiper'
    export default {
        components: {
          swiper,
          swiperSlide
        },
        props: {
          projects: {
            type: Array,
            required: true
          }
        },
        data() {
          return {
            swiperOption: {
              slidesPerView: 3,
              spaceBetween: 30,
              freeMode: true,
              pagination: {
                el: '.swiper-pagination',
                clickable: true
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
              }
            },
            slides: [
              {
                project_id: 1,
                path: '/img/projects/1.png'
              },
              {
                project_id: 2,
                path: '/img/projects/1.png'
              },
              {
                project_id: 3,
                path: '/img/projects/1.png'
              },
              {
                project_id: 4,
                path: '/img/projects/1.png'
              },
              {
                project_id: 5,
                path: '/img/projects/1.png'
              }
            ]
          }
        },
        methods: {
          handleProjectClick: function (project_id) {
            this.$router.push({ path: `/projects/${project_id}` })
          }
        },
        mounted() {

        }
    }
</script>

<style scoped>
  .slider-item {
    width: 100%;
    overflow: hidden;
    height: 150px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
    margin: 20px;
  }
  .slider {
    margin-left: -15px;
    margin-right: -15px;
    position: relative;
  }
  .swiper-button-prev,
  .swiper-button-next {
    position: absolute;
    left: -91px;
    outline: 0;
    background-color: #CE0303;
    height: 75px;
    width: 74px;
  }
  .swiper-button-prev {
    top: 42px;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDYiIGhlaWdodD0iMzkiIHZpZXdCb3g9IjAgMCA0NiAzOSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4NCjxwYXRoIGQ9Ik00NiAxOS41SDJNMiAxOS41TDIwLjUgMU0yIDE5LjVMMjAuNSAzOCIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIi8+DQo8L3N2Zz4=);
  }
  .swiper-button-next {
    top: 116px;
    background-color: #b90000;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDYiIGhlaWdodD0iMzkiIHZpZXdCb3g9IjAgMCA0NiAzOSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4NCjxwYXRoIGQ9Ik0wIDE5LjVINDRNNDQgMTkuNUwyNS41IDFNNDQgMTkuNUwyNS41IDM4IiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiLz4NCjwvc3ZnPg==);
  }
  .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
    opacity: 1;
    background-color: #C4C4C4;
  }
  @media (max-width: 767px) {
    .slider-item {
      height: auto;
    }
  }
</style>
