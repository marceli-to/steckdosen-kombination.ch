<template>
  <configurator-wrapper>

    <configurator-filter>
      <configurator-header>
        <h1>Konfigurator für Wand-Stromverteiler</h1>
      </configurator-header>
      
      <!-- Mobile -->
      <div class="selector is-mobile">
        <div class="is-right">
          <img src="/assets/img/powerbox-right.png" width="320" height="590">
          <filter-item :attr="'fi_ls'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.fi_ls" @change="filter()">
                  <option value="null">FI/LS</option>
                  <option :value="o" v-for="(o,i) in filter_options.fi_ls" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-fi-ls />
            </template>
          </filter-item>
          <filter-item :attr="'cee_16a_3p'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.cee_16a_3p" @change="filter()">
                  <option value="null">CEE 16A 3p</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_16a_3p" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-cee16a3p />
            </template>
          </filter-item>
          <filter-item :attr="'ch_16a_t25'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.ch_16a_t25" @change="filter()">
                  <option value="null">CH 16A T25</option>
                  <option :value="o" v-for="(o,i) in filter_options.ch_16a_t25" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-ch16at25 />
            </template>
          </filter-item>
          <filter-item :attr="'data_ports'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.data_ports" @change="filter()">
                  <option value="null">Data Ports</option>
                  <option :value="o" v-for="(o,i) in filter_options.data_ports" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-after>
              <icon-data-ports />
            </template>
          </filter-item>
        </div>
        <div class="is-left">
          <img src="/assets/img/powerbox-left.png" width="320" height="590">
          <filter-item :attr="'fi_switch'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.fi_switch" @change="filter()">
                  <option value="null">FI-Schalter</option>
                  <option :value="o" v-for="(o,i) in filter_options.fi_switch" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-fi-switch />
            </template>
          </filter-item>
          <filter-item :attr="'ch_16a_t23'">
            <template v-slot:select>
              <div class="select">
                <select v-model="filter_items.ch_16a_t23" @change="filter()">
                  <option value="null">CH 16A T23</option>
                  <option :value="o" v-for="(o,i) in filter_options.ch_16a_t23" :key="i">{{o}}</option>
                </select>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-ch16at23 />
            </template>
          </filter-item>
          <filter-item :attr="'cee_63a_32a_16a_5p'">
            <template v-slot:select>
              <div>
                <div class="select">
                  <select v-model="filter_items.cee_63a_5p" @change="filter()">
                    <option value="null">CEE 63A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_63a_5p" :key="i">{{o}}</option>
                  </select>
                </div>
                <div class="select">
                  <select v-model="filter_items.cee_32a_5p" @change="filter()">
                    <option value="null">CEE 32A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_32a_5p" :key="i">{{o}}</option>
                  </select>
                </div>
                <div class="select">
                  <select v-model="filter_items.cee_16a_5p" @change="filter()">
                    <option value="null">CEE 16A 5P</option>
                    <option :value="o" v-for="(o,i) in filter_options.cee_16a_5p" :key="i">{{o}}</option>
                  </select>
                </div>
              </div>
            </template>
            <template v-slot:icon-before>
              <icon-cee63a32a16a5p />
            </template>
          </filter-item>
        </div>
      </div>

      <!-- // Mobile -->

      <!-- Tablet and Desktop -->
      <div class="selector is-tablet">
        <img src="/assets/img/powerbox.png" width="590" height="590">
        <filter-item :attr="'fi_ls'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.fi_ls" @change="filter()">
                <option value="null">FI/LS</option>
                <option :value="o" v-for="(o,i) in filter_options.fi_ls" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-fi-ls />
          </template>
        </filter-item>
        <filter-item :attr="'cee_16a_3p'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.cee_16a_3p" @change="filter()">
                <option value="null">CEE 16A 3p</option>
                <option :value="o" v-for="(o,i) in filter_options.cee_16a_3p" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-cee16a3p />
          </template>
        </filter-item>
        <filter-item :attr="'ch_16a_t25'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.ch_16a_t25" @change="filter()">
                <option value="null">CH 16A T25</option>
                <option :value="o" v-for="(o,i) in filter_options.ch_16a_t25" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-ch16at25 />
          </template>
        </filter-item>
        <filter-item :attr="'fi_switch'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.fi_switch" @change="filter()">
                <option value="null">FI-Schalter</option>
                <option :value="o" v-for="(o,i) in filter_options.fi_switch" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-fi-switch />
          </template>
        </filter-item>
        <filter-item :attr="'ch_16a_t23'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.ch_16a_t23" @change="filter()">
                <option value="null">CH 16A T23</option>
                <option :value="o" v-for="(o,i) in filter_options.ch_16a_t23" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-before>
            <icon-ch16at23 />
          </template>
        </filter-item>
        <filter-item :attr="'cee_63a_32a_16a_5p'">
          <template v-slot:select>
            <div>
              <div class="select">
                <select v-model="filter_items.cee_63a_5p" @change="filter()">
                  <option value="null">CEE 63A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_63a_5p" :key="i">{{o}}</option>
                </select>
              </div>
              <div class="select">
                <select v-model="filter_items.cee_32a_5p" @change="filter()">
                  <option value="null">CEE 32A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_32a_5p" :key="i">{{o}}</option>
                </select>
              </div>
              <div class="select">
                <select v-model="filter_items.cee_16a_5p" @change="filter()">
                  <option value="null">CEE 16A 5P</option>
                  <option :value="o" v-for="(o,i) in filter_options.cee_16a_5p" :key="i">{{o}}</option>
                </select>
              </div>
            </div>
          </template>

          <template v-slot:icon-before>
            <icon-cee63a32a16a5p />
          </template>
        </filter-item>
        <filter-item :attr="'data_ports'">
          <template v-slot:select>
            <div class="select">
              <select v-model="filter_items.data_ports" @change="filter()">
                <option value="null">Data Ports</option>
                <option :value="o" v-for="(o,i) in filter_options.data_ports" :key="i">{{o}}</option>
              </select>
            </div>
          </template>
          <template v-slot:icon-after>
            <icon-data-ports />
          </template>
        </filter-item>
      </div>
      <!-- // Tablet and Desktop -->

    </configurator-filter>

    <configurator-result>
      <configurator-header>
        <h1>Passende Produkte</h1>
      </configurator-header>
      <div v-for="result in filter_results" :key="result.id" class="product">
        <figure>
          <img src="/assets/img/products/dummy.png" width="204" height="346" :alt="result.number">
        </figure>
        <div>
          <h3>{{ result.gehaeuse}}</h3>
          <p>E-Nummer: {{ result.number}}</p>
          <div>
            <a href="" class="btn-primary">
              <span>Im Shop anzeigen</span>
            </a>
          </div>
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

      filter_options: {
        fi_ls: [0, 1, 2, 3, 5, 6],
        cee_16a_3p: [0, 1],
        ch_16a_t25: [0, 1, 2, 3, 4, 6],
        data_ports: [0, 2, 4],
        fi_switch: [0, 1, 3],
        ch_16a_t23: [0, 1, 2, 3, 4, 5, 6, 9],
        cee_63a_5p: [0, 1],
        cee_32a_5p: [0, 1, 2],
        cee_16a_5p: [0, 1, 2, 3],
      },

      // Routes
      routes: {
        filter: '/api/products/filter',
      },

      // States
      isFetched: false,

      // Messages
      messages: {
        emptyData: 'Es sind noch keine Daten vorhanden...',
      },
    };
  },

  mounted() {
    NProgress.configure({ showBar: false });
  },

  methods: {

    filter() {
      NProgress.start();
      this.axios.post(this.routes.filter, this.filter_items).then(response => {
        this.filter_results = response.data;
        NProgress.done();
        console.log(this.filter_results);
      });
    },
  },

}
</script>