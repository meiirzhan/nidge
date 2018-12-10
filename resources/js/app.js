import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import * as VueGoogleMaps from 'vue2-google-maps'

import ErrorFilter from "./common/error.filter";

Vue.config.productionTip = false;
Vue.filter("error", ErrorFilter);

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyD6tRv6Mhi6F4GctZ3jcdSYJ-g0ANvWnWs',
    libraries: 'places'
  },
  // autobindAllEvents: false,
  // installComponents: true,
})

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
