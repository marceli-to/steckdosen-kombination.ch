<template>
  <configurator-wrapper v-if="isFetched">
    <configurator-filter>
      <configurator-header>
        <h1>Konfigurator für Wand-Stromverteiler</h1>
      </configurator-header>
      <!-- Mobile -->
      <div class="selector is-mobile">
        <div class="is-right">
          <img src="/assets/img/powerbox-right.png" width="320" height="590">
          <filter-item :attr="'fi_ls'" :class="[!filter_options.fi_ls ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('fi_ls') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.fi_ls" @change="filter()">
                  <option value="null">FI/LS</option>
                  <option :value="o" v-for="(o,i) in filter_options.fi_ls" :key="i">{{o}}</option>
                </select>
                <label class="is-left">FI/LS</label>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-fi-ls />
            </template>
          </filter-item>
          <filter-item :attr="'cee_16a_3p'" :class="[!filter_options.cee_16a_3p ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('cee_16a_3p') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.cee_16a_3p" @change="filter()">
                  <option value="null">CEE 16A 3p</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_16a_3p" :key="i">{{o}}</option>
                </select>
                <label class="is-left">CEE 16A 3p</label>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-cee16a3p />
            </template>
          </filter-item>
          <filter-item :attr="'ch_16a_t25'" :class="[!filter_options.ch_16a_t25 ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('ch_16a_t25') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.ch_16a_t25" @change="filter()">
                  <option value="null">16A T25</option>
                  <option :value="o" v-for="(o,i) in filter_options.ch_16a_t25" :key="i">{{o}}</option>
                </select>
                <label class="is-left">16A T25</label>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-ch16at25 />
            </template>
          </filter-item>
          <filter-item :attr="'data_ports'" :class="[!filter_options.data_ports ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('data_ports') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.data_ports" @change="filter()">
                  <option value="null">Data Ports</option>
                  <option :value="o" v-for="(o,i) in filter_options.data_ports" :key="i">{{o}}</option>
                </select>
                <label class="is-left">Data Ports</label>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-data-ports />
            </template>
          </filter-item>
        </div>
        <div class="is-left">
          <img src="/assets/img/powerbox-left.png" width="320" height="590">
          <filter-item :attr="'fi_switch'" :class="[!filter_options.fi_switch ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('fi_switch') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.fi_switch" @change="filter()">
                  <option value="null">FI-Schalter</option>
                  <option :value="o" v-for="(o,i) in filter_options.fi_switch" :key="i">{{o}}</option>
                </select>
                <label class="is-right">FI-Schalter</label>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-fi-switch />
            </template>
          </filter-item>
          <filter-item :attr="'ch_16a_t23'" :class="[!filter_options.ch_16a_t23 ? 'is-disabled' : '']">
            <template v-slot:select>
              <div :class="[selected('ch_16a_t23') ? 'is-selected' : '', 'select']">
                <select v-model="filter_items.ch_16a_t23" @change="filter()">
                  <option value="null">16A T23</option>
                  <option :value="o" v-for="(o,i) in filter_options.ch_16a_t23" :key="i">{{o}}</option>
                </select>
                <label class="is-right">16A T23</label>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-ch16at23 />
            </template>
          </filter-item>
          <filter-item :attr="'cee_63a_32a_16a_5p'" :class="[!filter_options.cee_63a_5p && !filter_options.cee_32a_5p && !filter_options.cee_16a_5p ? 'is-disabled' : '']">
            <template v-slot:select>
              <div>
                <div :class="[{'is-selected': selected('cee_16a_5p')}, {'is-disabled': !filter_options.cee_16a_5p}, 'select']">
                  <select v-model="filter_items.cee_16a_5p" @change="filter()">
                    <option value="null">CEE 16A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_16a_5p" :key="i">{{o}}</option>
                  </select>
                  <label class="is-right">CEE 16A 5P</label>
                </div>
                <div :class="[{'is-selected': selected('cee_32a_5p')}, {'is-disabled': !filter_options.cee_32a_5p}, 'select']">
                  <select v-model="filter_items.cee_32a_5p" @change="filter()">
                    <option value="null">CEE 32A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_32a_5p" :key="i">{{o}}</option>
                  </select>
                  <label class="is-right">CEE 32A 5P</label>
                </div>
                <div :class="[{'is-selected': selected('cee_63a_5p')}, {'is-disabled': !filter_options.cee_63a_5p}, 'select']">
                  <select v-model="filter_items.cee_63a_5p" @change="filter()">
                    <option value="null">CEE 63A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_63a_5p" :key="i">{{o}}</option>
                  </select>
                  <label class="is-right">CEE 63A 5P</label>
                </div>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-cee63a32a16a5p />
            </template>
          </filter-item>
        </div>
      </div>
      <!-- Tablet and Desktop -->
      <div class="selector is-tablet">
        <img src="/assets/img/powerbox.png" width="590" height="590">
        <filter-item :attr="'fi_ls'" :class="[!filter_options.fi_ls ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('fi_ls') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.fi_ls" @change="filter()">
                <option value="null">FI/LS</option>
                <option :value="o" v-for="(o,i) in filter_options.fi_ls" :key="i">{{o}}</option>
              </select>
              <label class="is-left">FI/LS</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-fi-ls />
          </template>
        </filter-item>
        <filter-item :attr="'cee_16a_3p'" :class="[!filter_options.cee_16a_3p ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('cee_16a_3p') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.cee_16a_3p" @change="filter()">
                <option value="null">CEE 16A 3p</option>
                <option :value="o" v-for="(o,i) in filter_options.cee_16a_3p" :key="i">{{o}}</option>
              </select>
              <label class="is-left">CEE 16A 3p</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-cee16a3p />
          </template>
        </filter-item>
        <filter-item :attr="'ch_16a_t25'" :class="[!filter_options.ch_16a_t25 ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('ch_16a_t25') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.ch_16a_t25" @change="filter()">
                <option value="null">16A T25</option>
                <option :value="o" v-for="(o,i) in filter_options.ch_16a_t25" :key="i">{{o}}</option>
              </select>
              <label class="is-left">16A T25</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-ch16at25 />
          </template>
        </filter-item>
        <filter-item :attr="'fi_switch'" :class="[!filter_options.fi_switch ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('fi_switch') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.fi_switch" @change="filter()">
                <option value="null">FI-Schalter</option>
                <option :value="o" v-for="(o,i) in filter_options.fi_switch" :key="i">{{o}}</option>
              </select>
              <label class="is-right">FI-Schalter</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-fi-switch />
          </template>
        </filter-item>
        <filter-item :attr="'ch_16a_t23'" :class="[!filter_options.ch_16a_t23 ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('ch_16a_t23') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.ch_16a_t23" @change="filter()">
                <option value="null">16A T23</option>
                <option :value="o" v-for="(o,i) in filter_options.ch_16a_t23" :key="i">{{o}}</option>
              </select>
              <label class="is-right">16A T23</label>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-ch16at23 />
          </template>
        </filter-item>
        <filter-item :attr="'cee_63a_32a_16a_5p'" :class="[!filter_options.cee_63a_5p && !filter_options.cee_32a_5p && !filter_options.cee_16a_5p ? 'is-disabled' : '']">
          <template v-slot:select>
            <div>
                <div :class="[{'is-selected': selected('cee_16a_5p')}, {'is-disabled': !filter_options.cee_16a_5p}, 'select']">
                <select v-model="filter_items.cee_16a_5p" @change="filter()">
                  <option value="null">CEE 16A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_16a_5p" :key="i">{{o}}</option>
                </select>
                <label class="is-right">CEE 16A 5P</label>
              </div>
                <div :class="[{'is-selected': selected('cee_32a_5p')}, {'is-disabled': !filter_options.cee_32a_5p}, 'select']">
                <select v-model="filter_items.cee_32a_5p" @change="filter()">
                  <option value="null">CEE 32A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_32a_5p" :key="i">{{o}}</option>
                </select>
                <label class="is-right">CEE 32A 5P</label>
              </div>
                <div :class="[{'is-selected': selected('cee_63a_5p')}, {'is-disabled': !filter_options.cee_63a_5p}, 'select']">
                <select v-model="filter_items.cee_63a_5p" @change="filter()">
                  <option value="null">CEE 63A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_63a_5p" :key="i">{{o}}</option>
                </select>
                <label class="is-right">CEE 63A 5P</label>
              </div>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-cee63a32a16a5p />
          </template>
        </filter-item>
        <filter-item :attr="'data_ports'" :class="[!filter_options.data_ports ? 'is-disabled' : '']">
          <template v-slot:select>
            <div :class="[selected('data_ports') ? 'is-selected' : '', 'select']">
              <select v-model="filter_items.data_ports" @change="filter()">
                <option value="null">Data Ports</option>
                <option :value="o" v-for="(o,i) in filter_options.data_ports" :key="i">{{o}}</option>
              </select>
              <label class="is-left">Data Ports</label>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-data-ports />
          </template>
        </filter-item>
      </div>
      <div class="flex justify-center" v-if="hasSearch && filter_results.length > 0">
        <a href="" @click.prevent="reset()" class="btn-reset">Filter zurücksetzen</a>
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
        <h1>Willkommen!</h1>
        <p>In wenigen Schritten zum richtigen Verteiler! Einfach auf der linken Seite die grünen Filter verwenden und das passende Produkt wird angezeigt und kann bestellt werden.</p> 
        <h1>Benvenuti!</h1>
        <p>Basterà seguire pochi e semplici passi per trovare il distributore giusto! Usare i filtri verdi a sinistra e il prodotto adeguato verrà visualizzato e potrà essere ordinato.</p>
        <h1>Bienvenue !</h1>
        <p>Trouver le bon distributeur en quelques étapes! Il suffit d'utiliser les filtres verts sur le côté gauche pour que le produit adéquat s'affiche et puisse être commandé.</p>
      </configurator-header>
      <div v-for="result in filter_results" :key="result.id" class="product">
        <figure>
          <img 
            :src="`/assets/img/products/${result.number}.jpg`" 
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
          <template v-if="result.eldas_number">
            <h3>{{ result.description}}</h3>
            <p>E-Nummer: {{ result.number}}</p>
            <a :href="`https://www.elektro-material.ch/de/shop/search?searchTerm=${result.number}`" target="_blank" class="btn-primary">
              <span>Im Shop anzeigen</span>
            </a>
          </template>
          <template v-else>
            <h3>{{ result.gehaeuse}}</h3>
            <p>E-Nummer: {{ result.number}}</p>
            <p>Dieses Produkt ist noch nicht gelistet. Kontaktieren Sie ihren Grosshändler für eine Preisanfrage.</p>
            <a :href="`mailto:info@em.ch?subject=Preisanfrage Artikel Nr. ${result.number}, ${result.gehaeuse}`" target="_blank" class="btn-secondary">
              <span>Anfragen</span>
            </a>
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
import ConfiguratorWrapper from '@/views/configurator/components/layout/Wrapper.vue';
import ConfiguratorHeader from '@/views/configurator/components/layout/Header.vue';
import ConfiguratorFilter from '@/views/configurator/components/layout/Filter.vue';
import ConfiguratorResult from '@/views/configurator/components/layout/Result.vue';
import FilterItem from '@/views/configurator/components/form/FilterItem.vue';
import IconFiLs from '@/views/configurator/components/icons/fi_ls.vue';
import IconCee16a3p from '@/views/configurator/components/icons/cee_16a_3p.vue';
import IconCh16at25 from '@/views/configurator/components/icons/ch_16a_t25.vue';
import IconDataPorts from '@/views/configurator/components/icons/data_ports.vue';
import IconFiSwitch from '@/views/configurator/components/icons/fi_switch.vue';
import IconCh16at23 from '@/views/configurator/components/icons/ch_16a_t23.vue';
import IconCee63a32a16a5p from '@/views/configurator/components/icons/cee_63a_32a_16a_5p.vue';

export default {

  components: {
    NProgress,
    ConfiguratorWrapper,
    ConfiguratorHeader,
    ConfiguratorFilter,
    ConfiguratorResult,
    FilterItem,
    IconFiLs,
    IconCee16a3p,
    IconCh16at25,
    IconDataPorts,
    IconFiSwitch,
    IconCh16at23,
    IconCee63a32a16a5p
  },
  
  mixins: [ErrorHandling, Helpers],

  data() {
    return {

      filter_items: {
        fi_ls: null,
        cee_16a_3p: null,
        ch_16a_t25: null,
        data_ports: null,
        fi_switch: null,
        ch_16a_t23: null,
        cee_63a_5p: null,
        cee_32a_5p: null,
        cee_16a_5p: null,
      },

      // Results
      filter_results: [],

      // Options
      filter_options: {
        // fi_ls: [1, 2, 3, 5, 6],
        // cee_16a_3p: [1],
        // ch_16a_t25: [1, 2, 3, 4, 6],
        // data_ports: [2, 4],
        // fi_switch: [1, 3],
        // ch_16a_t23: [1, 2, 3, 4, 5, 6, 9],
        // cee_63a_5p: [1],
        // cee_32a_5p: [1, 2],
        // cee_16a_5p: [1, 2, 3],
      },

      // Default options
      default_filter_options: {
        // fi_ls: [1, 2, 3, 5, 6],
        // cee_16a_3p: [1],
        // ch_16a_t25: [1, 2, 3, 4, 6],
        // data_ports: [2, 4],
        // fi_switch: [1, 3],
        // ch_16a_t23: [1, 2, 3, 4, 5, 6, 9],
        // cee_63a_5p: [1],
        // cee_32a_5p: [1, 2],
        // cee_16a_5p: [1, 2, 3],
      },

      // Routes
      routes: {
        filter: '/api/products/filter',
        getFilterOptions: '/api/products/filter',
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
      this.axios.post(this.routes.filter, this.filter_items).then(response => {
        this.filter_results = response.data.products;
        this.setFilterOptions(response.data.filter_options);
        this.hasSearch = true;
        NProgress.done();
      });
    },

    reset() {
      this.hasSearch = false;
      // this.filter_items = {
      //   fi_ls: null,
      //   cee_16a_3p: null,
      //   ch_16a_t25: null,
      //   data_ports: null,
      //   fi_switch: null,
      //   ch_16a_t23: null,
      //   cee_63a_5p: null,
      //   cee_32a_5p: null,
      //   cee_16a_5p: null,
      // };
      this.filter_options = this.default_filter_options;
      this.filter_results = [];
      this.getFilterOptions();
    },

    selected(attr) {
      if (this.filter_items[attr] >= 0 && this.filter_items[attr] != null) {
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