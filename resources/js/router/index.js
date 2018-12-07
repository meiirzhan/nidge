import Vue from "vue";
import Router from "vue-router";
import Welcome from "./../views/Welcome";
import Service from "./../views/Service";
import Project from "./../views/Project";
import Contact from "./../views/Contact";
Vue.use(Router);

export default new Router({
  routes: [
    {
      name: "welcome",
      path: "/",
      component: Welcome,
    },
    {
      name: "services",
      path: "/services",
      component: Service,
    },
    {
      name: "projects",
      path: "/projects",
      component: Project,
    },
    {
      name: "contacts",
      path: "/contacts",
      component: Contact,
    },
  ]
});
