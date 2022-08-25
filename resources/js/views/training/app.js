require('@/bootstrap');

// Vue
window.Vue = require('vue');

// Axios Interceptors
require('vue-axios-interceptors');

// Axios, Vue-Axios
import VueAxios from 'vue-axios';
import axios from 'axios';
window.axios = require('axios');
Vue.use(VueAxios, axios);

// Vue axios defaults
Vue.axios.defaults.withCredentials = false;

// Vue-Notifications
// import Notifications from 'vue-notification';
// Vue.use(Notifications);

import store from '@/config/store';

// Component
Vue.component('training-form', require('@/views/training/Form.vue').default);

// Mount
if (document.getElementById("training-form")) {
  const app = new Vue({store}).$mount('#training-form');
}