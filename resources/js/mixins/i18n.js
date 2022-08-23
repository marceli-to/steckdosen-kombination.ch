export default {
  
  data() {
    return {
      translations: {
        de: {
          'Willkommen!': 'Willkommen!',
        },
        en: {
          'Willkommen!': 'Welcome!',
        },
      },
    }
  },

  mounted() {

  },

  methods: {

    __(key) {
      if (this.translations[this._getLocale()][key]) {
        return this.translations[this._getLocale()][key];
      }
      return key;
    },

    _getLocale() {
      let ll = document.documentElement.lang ? document.documentElement.lang : 'de';
      return ll;
    },

  }
};