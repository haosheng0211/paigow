import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { axios, element, vuetify } from './plugins'

Vue.use(element)
Vue.prototype.$axios = axios
Vue.config.productionTip = false

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App)
}).$mount('#app')
