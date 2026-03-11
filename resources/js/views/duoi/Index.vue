<template>
  <configurator-wrapper v-if="isFetched">
    <configurator-filter>
      <configurator-header>
        <h1>{{ __('Konfigurator Wandsteckdose DUOi') }}</h1>
      </configurator-header>
      <!-- Mobile -->
      <div class="selector selector--duoi is-mobile">
        <img src="/assets/img/wandsteckdose-duoi.png" width="590" height="590">
        <filter-item :attr="'volt'" :class="[!filter_options.volt ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('volt') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.volt" @change="filter()">
                <option value="null">{{ __('Volt') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.volt" :key="i">{{o}}</option>
              </select>
              <label class="is-right">{{ __('Volt') }}</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-anchor-right />
          </template>
        </filter-item>
        <filter-item :attr="'ampere'" :class="[!filter_options.ampere ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('ampere') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.ampere" @change="filter()">
                <option value="null">{{ __('Ampere') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.ampere" :key="i">{{o}}</option>
              </select>
              <label class="is-right">{{ __('Ampere') }}</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-anchor-right />
          </template>
        </filter-item>
        <filter-item :attr="'pole'" :class="[!filter_options.pole ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('pole') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.pole" @change="filter()">
                <option value="null">{{ __('Pole') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.pole" :key="i">{{o}}</option>
              </select>
              <label class="is-left">{{ __('Pole') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
        <filter-item :attr="'schutzart'" :class="[!filter_options.schutzart ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('schutzart') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.schutzart" @change="filter()">
                <option value="null">{{ __('Schutzart') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.schutzart" :key="i">{{o}}</option>
              </select>
              <label class="is-left">{{ __('Schutzart') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
        <filter-item :attr="'hilfskontakt'" :class="[!filter_options.hilfskontakt ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('hilfskontakt') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.hilfskontakt" @change="filter()">
                <option value="null">{{ __('Hilfskontakt') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.hilfskontakt" :key="i">{{o}}</option>
              </select>
              <label class="is-left">{{ __('Hilfskontakt') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
      </div>
      <!-- Tablet and Desktop -->
      <div class="selector selector--duoi is-tablet">
        <img src="/assets/img/wandsteckdose-duoi.png" width="590" height="590">
        <filter-item :attr="'volt'" :class="[!filter_options.volt ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('volt') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.volt" @change="filter()">
                <option value="null">{{ __('Volt') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.volt" :key="i">{{o}}</option>
              </select>
              <label class="is-left">{{ __('Volt') }}</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-anchor-right />
          </template>
        </filter-item>
        <filter-item :attr="'ampere'" :class="[!filter_options.ampere ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('ampere') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.ampere" @change="filter()">
                <option value="null">{{ __('Ampere') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.ampere" :key="i">{{o}}</option>
              </select>
              <label class="is-left">{{ __('Ampere') }}</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-anchor-right />
          </template>
        </filter-item>
        <filter-item :attr="'pole'" :class="[!filter_options.pole ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('pole') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.pole" @change="filter()">
                <option value="null">{{ __('Pole') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.pole" :key="i">{{o}}</option>
              </select>
              <label class="is-right">{{ __('Pole') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
        <filter-item :attr="'schutzart'" :class="[!filter_options.schutzart ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('schutzart') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.schutzart" @change="filter()">
                <option value="null">{{ __('Schutzart') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.schutzart" :key="i">{{o}}</option>
              </select>
              <label class="is-right">{{ __('Schutzart') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
        <filter-item :attr="'hilfskontakt'" :class="[!filter_options.hilfskontakt ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('hilfskontakt') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.hilfskontakt" @change="filter()">
                <option value="null">{{ __('Hilfskontakt') }}</option>
                <option :value="o" v-for="(o,i) in filter_options.hilfskontakt" :key="i">{{o}}</option>
              </select>
              <label class="is-right">{{ __('Hilfskontakt') }}</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-anchor-left />
          </template>
        </filter-item>
      </div>
      <div class="flex justify-center" v-if="hasSearch && filter_results.length > 0">
        <a href="" @click.prevent="reset()" class="btn-reset">{{ __('Filter zurücksetzen') }}</a>
      </div>
    </configurator-filter>
    <configurator-result>
      <configurator-header v-if="filter_results.length || hasSearch">
        <h1>
          Produkte
          <span v-if="filter_results.length > 0">
            ({{filter_results.length}})
          </span>
        </h1>
        <p v-if="hasSearch && filter_results.length == 0">
          {{messages.noResults}} <a href="" @click.prevent="reset()">Neue Suche?</a>
        </p>
      </configurator-header>
      <configurator-header v-else>
        <h1>{{ __('Willkommen!') }}</h1>
        <p>{{ __('Filtern Sie die Wandsteckdosen DUOi nach Volt, Ampere, Pole, Schutzart und Hilfskontakt.') }}</p>
      </configurator-header>
      <div v-for="result in filter_results" :key="result.id" class="product">
        <figure>
          <img
            :src="`/assets/img/duoi-products/${result.number}.jpg`"
            width="512"
            height="512"
            :alt="result.number"
            v-if="result.has_image">
            <img
              :src="`/assets/img/products/placeholder.png`"
              width="512"
              height="512"
              :alt="result.number"
              v-else>
        </figure>
        <div>

          <template v-if="api_client == 'em'">

            <template v-if="result.eldas_number">
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}<br>{{ __('EM-Nummer') }}: {{ result.em_number }}</p>
              <template v-if="api_connection">
                <form :action="api_connection.hookurl" method="post" target="_blank" enctype="multipart/form-data" class="mb-3x">
                  <input type="hidden" name="version" :value="api_connection.version"/>
                  <input type="hidden" name="country" :value="api_connection.country"/>
                  <input type="hidden" name="language" :value="api_connection.language"/>
                  <input type="hidden" name="result" :value="result.form_data" />
                  <input type="submit" value="In den Warenkorb" class="btn-primary">
                </form>
              </template>
              <template v-else>
                <a :href="`https://www.elektro-material.ch/de/shop/search?searchTerm=${result.eldas_number}`" target="_blank" class="btn-primary">
                  <span>{{ __('Im Shop anzeigen') }}</span>
                </a>
              </template>

            </template>
            <template v-else>
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}</p>
              <p>{{ __('Dieses Produkt ist noch nicht gelistet. Kontaktieren Sie ihren Grosshändler für eine Preisanfrage.') }}</p>
              <a :href="`mailto:info@em.ch?subject=Preisanfrage Artikel Nr. ${result.number}`" target="_blank" class="btn-secondary">
                <span>{{ __('Anfragen') }}</span>
              </a>
            </template>
          </template>

          <template v-else-if="api_client == 'sonepar'">
            <template v-if="result.eldas_number">
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}</p>
              <template v-if="api_connection">
                <form :action="api_connection.hookurl" method="post" target="_blank" enctype="multipart/form-data" class="mb-3x">
                  <input type="hidden" name="version" :value="api_connection.version"/>
                  <input type="hidden" name="country" :value="api_connection.country"/>
                  <input type="hidden" name="language" :value="api_connection.language"/>
                  <input type="hidden" name="result" :value="result.form_data"/>
                  <input type="submit" value="In den Warenkorb" class="btn-primary">
                </form>
              </template>
              <template v-else>
                <div class="text-danger mt-4x">
                  {{ __('Login im Sonepar-Shop wird benötigt, um dieses Produkt bestellen zu können.') }}
                </div>
              </template>
            </template>
            <template v-else>
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}</p>
              <p>{{ __('Dieses Produkt ist noch nicht gelistet. Kontaktieren Sie ihren Grosshändler für eine Preisanfrage.') }}</p>
              <a :href="`mailto:info@sonepar.ch?subject=Preisanfrage Artikel Nr. ${result.number}`" target="_blank" class="btn-secondary">
                <span>{{ __('Anfragen') }}</span>
              </a>
            </template>
          </template>

          <template v-else-if="api_client == 'saesseli'">
            <template v-if="result.eldas_number">
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}</p>
              <template v-if="api_connection">
                <form :action="api_connection.hookurl" method="post" target="_blank" enctype="multipart/form-data" class="mb-3x">
                  <input type="hidden" name="version" :value="api_connection.version"/>
                  <input type="hidden" name="country" :value="api_connection.country"/>
                  <input type="hidden" name="language" :value="api_connection.language"/>
                  <input type="hidden" name="result" :value="result.form_data_saesseli"/>
                  <input type="submit" value="In den Warenkorb" class="btn-primary">
                </form>
              </template>
              <template v-else>
                <div class="text-danger mt-4x">
                  {{ __('Login im Sässeli-Shop wird benötigt, um dieses Produkt bestellen zu können.') }}
                </div>
              </template>
            </template>
            <template v-else>
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>{{ __('E-Nummer') }}: {{ result.eldas_number }}</p>
              <p>{{ __('Dieses Produkt ist noch nicht gelistet. Kontaktieren Sie ihren Grosshändler für eine Preisanfrage.') }}</p>
              <a :href="`mailto:info@saesseli.ch?subject=Preisanfrage Artikel Nr. ${result.number}`" target="_blank" class="btn-secondary">
                <span>{{ __('Anfragen') }}</span>
              </a>
            </template>
          </template>

          <template v-else>
            <template>
              <h3>{{ result.title[_getLocale()] }}</h3>
              <p>
                <template v-if="result.eldas_number">
                  {{ __('E-Nummer') }}: {{ result.eldas_number }}<br>
                </template>
                <template v-if="result.number">
                  {{ __('Hersteller-Artikel-Nummer') }}: {{ result.number }}
                </template>
              </p>
              <template v-if="result.ferratec_shop_url_de || result.ferratec_shop_url_fr">
                <a :href="result.ferratec_shop_url_fr" target="_blank" class="btn-primary" v-if="_getLocale() == 'fr'">
                  <span>{{ __('Im Shop anzeigen') }}</span>
                </a>
                <a :href="result.ferratec_shop_url_de" target="_blank" class="btn-primary" v-else>
                  <span>{{ __('Im Shop anzeigen') }}</span>
                </a>
              </template>
            </template>
          </template>
        </div>
      </div>
    </configurator-result>
  </configurator-wrapper>
</template>

<script>
import NProgress from 'nprogress';
import ErrorHandling from "@/mixins/ErrorHandling";
import Helpers from "@/mixins/Helpers";
import i18n from "@/mixins/i18n";
import ConfiguratorWrapper from '@/components/layout/Wrapper.vue';
import ConfiguratorHeader from '@/components/layout/Header.vue';
import ConfiguratorFilter from '@/components/layout/Filter.vue';
import ConfiguratorResult from '@/components/layout/Result.vue';
import FilterItem from '@/components/form/FilterItem.vue';
import IconAnchorRight from '@/views/duoi/components/icons/anchor-right.vue';
import IconAnchorLeft from '@/views/duoi/components/icons/anchor-left.vue';

export default {

  components: {
    NProgress,
    ConfiguratorWrapper,
    ConfiguratorHeader,
    ConfiguratorFilter,
    ConfiguratorResult,
    FilterItem,
    IconAnchorRight,
    IconAnchorLeft,
  },

  mixins: [ErrorHandling, Helpers, i18n],

  data() {
    return {

      filter_items: {
        volt: null,
        ampere: null,
        pole: null,
        schutzart: null,
        hilfskontakt: null,
      },

      // Results
      filter_results: [],

      api_connection: null,

      api_client: null,

      // Routes
      routes: {
        filter: '/api/duoi/filter',
        getFilterOptions: '/api/duoi/filter',
      },

      // States
      hasSearch: false,
      isFetched: false,

      // Messages
      messages: {
        emptyData: 'Es sind noch keine Daten vorhanden...',
        noResults: 'Ihre Suche hat keine Resultate erzeugt...'
      },
    };
  },

  mounted() {
    NProgress.configure({ showBar: false });
    this.getFilterOptions();
  },

  methods: {

    getFilterOptions() {
      this.isFetched = false;
      NProgress.start();
      this.axios.get(`${this.routes.getFilterOptions}`).then(response => {
        this.filter_options = this.setFilterOptions(response.data);
        this.default_filter_options = this.setFilterOptions(response.data);
        this.isFetched = true;
        NProgress.done();
      });
    },

    filter() {
      NProgress.start();
      this.isFetched = false;
      this.axios.post(this.routes.filter, this.filter_items).then(response => {
        this.filter_results = response.data.products;
        this.api_connection = response.data.api_connection;
        this.api_client = response.data.api_client;
        this.setFilterOptions(response.data.filter_options);
        this.hasSearch = true;
        this.isFetched = true;
        NProgress.done();
      });
    },

    reset() {
      this.hasSearch = false;
      this.filter_items = {
        volt: null,
        ampere: null,
        pole: null,
        schutzart: null,
        hilfskontakt: null,
      };
      this.filter_options = this.default_filter_options;
      this.filter_results = [];
      this.getFilterOptions();
    },

    selected(attr) {
      if (this.filter_items[attr] != null && this.filter_items[attr] != 'null') {
        return true;
      }
      return false;
    },

    setFilterOptions(options) {
      let available_options = {};
      Object.keys(options).forEach(key => {
        if (options[key].length) {
          available_options[key] = options[key].sort();
        }
      });
      this.filter_options = available_options;
    }
  },

}
</script>