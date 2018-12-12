import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import { VueSlideoutPanel } from 'vue2-slideout-panel';
import BootstrapVue from 'bootstrap-vue'
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'
import ErrorFilter from "./common/error.filter";

Vue.config.productionTip = false;
Vue.filter("error", ErrorFilter);

Vue.component('slideout-panel', VueSlideoutPanel);
Vue.component('pulse-loader', PulseLoader);
Vue.use(BootstrapVue);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
