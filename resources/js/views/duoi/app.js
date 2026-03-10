require('@/bootstrap');

// Vue
import Vue from 'vue';
window.Vue = Vue;

// Axios, Vue-Axios
import VueAxios from 'vue-axios';
import axios from 'axios';
window.axios = require('axios');
Vue.use(VueAxios, axios);

// Axios Interceptors
require('vue-axios-interceptors');

// Filters
require('@/mixins/Filters');

// Vue-Axios defaults
Vue.axios.defaults.withCredentials = true;

// Vue-Notifications
import Notifications from 'vue-notification';
Vue.use(Notifications);

// Store
import store from '@/config/store';

// Import main component
import MainComponent from '@/views/duoi/Index.vue';

// Mount App
if (document.getElementById("duoi-app")) {
  const app = new Vue({
    store,
    render: h => h(MainComponent)
  }).$mount('#duoi-app');
}
