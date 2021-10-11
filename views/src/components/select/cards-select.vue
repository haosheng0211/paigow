<template>
  <v-select
    v-model="model"
    v-bind="$attrs"
    :items="items"
  />
</template>

<script>
import ValueMixin from '@/utils/mixins/value-mixin'
import { mapState } from 'vuex'
import _ from 'lodash'

export default {
  name: 'CardsSelect',
  mixins: [ValueMixin],
  props: {
    filters: {
      type: Array,
      default () {
        return []
      }
    },
    default: {
      type: Object,
      default () {
        return {}
      }
    }
  },
  computed: {
    ...mapState({
      cards: state => state.cards.items
    }),
    items () {
      const cards = this.cards.map(item => {
        const using = this.filters.filter(id => {
          return item.value === id
        })

        item.disabled = item.cards_count <= using.length

        return item
      })

      if (!_.isEmpty(this.default)) {
        cards.unshift(this.default)
      }

      return cards
    }
  }
}
</script>
