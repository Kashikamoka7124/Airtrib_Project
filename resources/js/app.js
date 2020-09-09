import './prototypes'
import Vue from 'vue'
import axios from './util/axios'
import VueProgressBar from 'vue-progressbar'
import VueCompositionApi from '@vue/composition-api'
import Pages from './pages'
import router from './router'

window.axios = axios

Vue.use(VueCompositionApi)

Vue.use(VueProgressBar, {
    thickness: '4px',
    color: '#AB8A56',
    failedColor: '#D81330',
    autoFinish: false
})

Vue.component('InlineSvg', require('./components/InlineSvg').default)
Vue.component('PageLayout', require('./pages/PageLayout').default)

Vue.mixin({
    methods: {
        isoToDuration(duration) {
            const result = /([0-9]+H)((?:[0-9]+M)?)/i.exec(duration)

            return result[1].replace('H', 'h') + ' ' + (result[2].replace('M', '') || '')
        }
    }
})

new Vue({
    el: '#app',
    router,
    components: {
        ...Pages
    }
})
