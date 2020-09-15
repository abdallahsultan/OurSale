require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
Vue.use(VueRouter);

import CategoriesComponent from './components/CategoriesComponent.vue';
import AllCategoriesComponent from './components/AllCategoriesComponent.vue';
import DashboardComponent from './components/DashboardComponent.vue';

const routes = [
  {
      name: 'Categories',
      path: '/Categories',
      component: CategoriesComponent
  },{
    name: 'AllCategories',
    path: '/AllCategories',
    component: AllCategoriesComponent
},
{
  name: 'Dashboard',
  path: '/Dashboard',
  component: DashboardComponent
},
  
];
const router = new VueRouter({ 
   routes: routes
  });
  const app = new Vue({
    el:"#app",
    router,
  });