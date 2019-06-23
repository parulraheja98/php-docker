import Vue from "vue";
import Router from "vue-router";
import Home from "./views/Home.vue";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "home",
      component: () =>
        import(/* webpackChunkName: "about" */ "./views/Home.vue")
    },
    {
      path: "/profile/del/:id",
      name: "deleteprofile",
      component: () =>
        import(/* webpackChunkName: "about" */ "./views/DeleteProfile.vue")
    },
    {
      path: "/profile/:id",
      name: "profile",
      // route level code-splitting
      // this generates a s/eparate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () =>
        import(/* webpackChunkName: "about" */ "./views/UserProfile.vue")
    },
    {
      path: "/createplayer",
      name: "createplayer",
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () =>
        import(/* webpackChunkName: "about" */ "./views/CreatePlayer.vue")
    }
  ]
});
