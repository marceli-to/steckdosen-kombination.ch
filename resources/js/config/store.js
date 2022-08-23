import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    filter: {
      set: false,
      state: null,
      amount: null,
      items: [],
      menu: {
        index: 1,
        current: null,
        prev: null,
        next: null
      }
    },
  },
  mutations: {
    filter(state, filter) {
      state.filter = filter;
    },
    i18n(state, i18n) {
      state.i18n = i18n;
    },
  }
});