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

// Vue axios defaults
Vue.axios.defaults.withCredentials = false;

import store from '@/config/store';

// Component
import TrainingForm from '@/views/training/Form.vue';

// Mount
if (document.getElementById("training-form")) {
  const app = new Vue({
    store,
    render: h => h(TrainingForm)
  }).$mount('#training-form');
}