require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import CategoriesComponent from './components/CategoriesComponent.vue';

const routes = [
  {
      name: 'Categories',
      path: '/Categories',
      component: CategoriesComponent
  }
  
];
const router = new VueRouter({ 
   routes: routes
  });
  const app = new Vue({
    el:"#app",
    router
  });