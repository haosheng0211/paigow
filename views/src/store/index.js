import Vue from 'vue'
import Vuex from 'vuex'
import cards from './cards.modules'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {},
  mutations: {},
  actions: {},
  modules: {
    cards: cards
  }
})
