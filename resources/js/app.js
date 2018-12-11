import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

import ErrorFilter from "./common/error.filter";

Vue.config.productionTip = false;
Vue.filter("error", ErrorFilter);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
