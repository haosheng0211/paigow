<template>
  <v-select
    v-model="model"
    v-bind="$attrs"
    :items="items"
  />
</template>

<script>
import ValueMixin from '@/utils/mixins/value-mixin'

export default {
  name: 'PairsSelect',
  mixins: [ValueMixin],
  data () {
    return {
      items: [
        { text: '對子', value: 1 },
        { text: '其他', value: 0 }
      ]
    }
  }
}
</script>
