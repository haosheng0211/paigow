import axios from '@/plugins/axios'
import { Message } from 'element-ui'

export default {
  namespaced: true,
  state: {
    items: []
  },
  mutations: {
    setCards (state, items) {
      state.items = items
    }
  },
  actions: {
    async loadCards ({ state, commit }) {
      if (state.items.length) {
        return
      }
      try {
        const items = await axios.get('/api/cards/options')
        commit('setCards', items)
      } catch (error) {
        Message.error(error.response.data.message)
      }
    }
  }
}
