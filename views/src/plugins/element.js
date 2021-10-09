import { Message } from 'element-ui'
import lang from 'element-ui/lib/locale/lang/zh-TW'
import locale from 'element-ui/lib/locale'

locale.use(lang)

export default {
  install (Vue) {
    Vue.prototype.$message = Message
  }
}
