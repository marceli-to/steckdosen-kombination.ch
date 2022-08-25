<template>
<div>
  <template v-if="!isRegistered">
    <form method="POST">

      <form-group :label="__('Vorname')" :required="true" :error="__(errors.firstname)">
        <input type="text" v-model="form.firstname" required @focus="removeError('firstname')" />
      </form-group>

      <form-group :label="__('Name')" :required="true" :error="__(errors.name)">
        <input type="text" v-model="form.name" required @focus="removeError('name')" />
      </form-group>

      <form-group :label="__('Firma')" :required="true" :error="__(errors.company)">
        <input type="text" v-model="form.company" required @focus="removeError('company')" />
      </form-group>

      <form-group :label="__('Telefon')" :required="true" :error="__(errors.phone)">
        <input type="text" v-model="form.phone" maxlength="30" @focus="removeError('phone')" />
      </form-group>

      <form-group :label="__('E-Mail')" :required="true" :error="__(errors.email)">
        <input type="email" v-model="form.email" required @focus="removeError('email')" />
      </form-group>

      <form-group :label="__('Anzahl Teilnehmer')" :required="true" :error="__(errors.participants)">
        <input type="number" min="10" v-model="form.participants" required @focus="removeError('participants')" />
      </form-group>

      <form-group :label="__('Gewünschtes Datum')" :required="true" :error="__(errors.date)">
        <flat-pickr v-model="form.date" :config="flatpickrConfig" required @focus="removeError('date')"></flat-pickr>
      </form-group>

      <form-group>
        <a href="" @click.prevent="submit()" :class="[isLoading ? 'is-disabled' : '', 'btn-primary']">
          {{ __('Anmelden') }}
        </a>
      </form-group>
    </form>
  </template>
  <template v-else>
    <p class="text-sucess">{{ __('Vielen Dank für Ihre Anmeldung. Wir werden uns in Kürze bei Ihnen melden.') }}</p>
  </template>
</div>
</template>
<script>
import NProgress from 'nprogress';
import Helpers from "@/mixins/Helpers";
import i18n from "@/mixins/i18n";
import FormGroup from "@/views/training/components/form/FormGroup.vue";
import FormGroupHeader from "@/views/training/components/form/FormGroupHeader.vue";
import FormError from "@/views/training/components/form/FormError.vue";
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
import 'flatpickr/dist/l10n/de.js';

export default {

  components: {
    NProgress,
    FormGroup,
    FormGroupHeader,
    FormError,
    flatPickr
  },

  mixins: [Helpers, i18n],

  data() {
    return { 

      // Form
      form: {
        firstname: 'Marcel',
        name: 'Stadelmann',
        company: 'Marceli.to',
        phone: '078 749 74 09',
        email: 'm@marceli.to',
        participants: null,
        date: null,
      },

      // Validation
      errors: {
        firstname: false,
        name: false,
        company: false,
        phone: false,
        email: false,
        participants: false,
        date: false,
      },

      // Flatpickr config
      flatpickrConfig: {
        dateFormat: 'd.m.Y',
        locale: 'de',
        minDate: 'today'
      },

      // Store
      store: {},

      // States
      isValid: false,
      isFetched: false,
      isRegistered: false,
      isLoading: false,

      // Routes
      routes: {
        register: '/api/training/register',
      },

      // Selectors
      selectors: {
        btnForm: '.js-btn-training-form',
        form: '.js-training-form'
      }

    };
  },
  
  created() {
    const btn = document.querySelector(this.selectors.btnForm);
    btn.addEventListener("click", this.showForm, false);
  },

  mounted() {
  },

  methods: {

    submit() {
      NProgress.start();
      this.isLoading = true;
      this.axios.post(`${this.routes.register}`, this.form)
        .then(response => {
          NProgress.done();
          this.isRegistered = true;
          this.isLoading = false;
        })
        .catch((error) => {
          if (error.response) {
            let errors = {};
            Object.keys(error.response.data.errors).forEach(function(key) {
              let e = error.response.data.errors[key][0];
              errors[e.field] = e.error;
            });
            this.errors = errors;
            this.isLoading = false;
            NProgress.done();
          }
        });
    },

    showForm() {
      const form = document.querySelector(this.selectors.form);
      form.style.display = 'block';
      form.scrollIntoView({ 
        behavior: 'smooth' 
      });
    }
  },
}
</script>
<style>
.flatpickr-day.selected {
  background-color:#1D8649 !important;
  border-color: #1D8649 !important;
}
</style>
