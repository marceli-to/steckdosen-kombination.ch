export default {
  
  data() {
    return {
      translations: {
        en: {
          'Willkommen!': 'Welcome!',
          'Vorname': 'Firstname',
          'Name': 'Name',
          'Firma': 'Company',
          'Telefon': 'Phone',
          'E-Mail': 'Email',
          'Anzahl Teilnehmer': 'Number of participants',
          'Gewünschtes Datum': 'Desired date',
          'Anmelden': 'Register',
          'E-Mail wird benötigt': 'Email is required',
          'E-Mail ist nicht gültig': 'Email is invalid',
          'E-Mail darf nicht länger als 255 Zeichen sein': 'Email can not be longer than 255 characters',
          'Name wird benötigt': 'Name is required',
          'Vorname wird benötigt': 'Firstname is required',
          'Firma wird benötigt': 'Company is required',
          'Telefon wird benötigt': 'Phone is required',
          'Datum wird benötigt': 'Date is required',
          'Anzahl Teilnehmer wird benötigt': 'Number of participants is required',
          'Mind. 10 Teilnehmer': 'Min. 10 participants',
          'Vielen Dank für Ihre Anmeldung. Wir werden uns in Kürze bei Ihnen melden.': 'Thank you for your registration. We will get back to you shortly.'
        },
        fr: {
          'Willkommen!': 'Bienvenue!',
          'Vorname': 'Prénom',
          'Name': 'Nom',
          'Firma': 'Société',
          'Telefon': 'Téléphone',
          'E-Mail': 'E-mail',
          'Anzahl Teilnehmer': 'Nombre de participants',
          'Gewünschtes Datum': 'Date souhaitée',
          'Anmelden': 'Enregistrer'
        },
        it: {
          'Willkommen!': 'Benvenuto!',
          'Vorname': 'Nome',
          'Name': 'Cognome',
          'Firma': 'Azienda',
          'Telefon': 'Telefono',
          'E-Mail': 'E-mail',
          'Anzahl Teilnehmer': 'Numero di partecipanti',
          'Gewünschtes Datum': 'Data desiderata',
          'Anmelden': 'Registro'
        },
      },

      fallback_locale: 'de',
    }
  },

  mounted() {

  },

  methods: {

    __(key) {
      if (this._getLocale() == this.fallback_locale) {
        return key;
      }
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