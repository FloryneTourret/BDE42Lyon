require('./bootstrap');

import Vue from "vue";
import Vuex, {mapGetters} from 'vuex';

Vue.use(Vuex)

const store = new Vuex.Store({});
const components = require.context('./components', true, /\.vue$/i);
components.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], components(key).default));

new Vue({
    el: '#app',
    store,
    methods: {
    },
});