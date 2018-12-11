import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import { VueSlideoutPanel } from 'vue2-slideout-panel';
import Footer from './components/Footer';

import ErrorFilter from "./common/error.filter";

Vue.config.productionTip = false;
Vue.filter("error", ErrorFilter);

Vue.component('slideout-panel', VueSlideoutPanel);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
