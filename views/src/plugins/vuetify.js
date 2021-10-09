import Vue from 'vue'
import Vuetify from 'vuetify/lib/framework'
import zhHant from 'vuetify/lib/locale/zh-Hant'

Vue.use(Vuetify)

export default new Vuetify({
  lang: {
    locales: { zhHant },
    current: 'zhHant'
  }
})
