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
  name: 'OrderSelect',
  mixins: [ValueMixin],
  data () {
    return {
      items: [
        { text: '南部比分高到低', value: 'score_south,desc' },
        { text: '南部比分低到高', value: 'score_south,asc' },
        { text: '北部比分高到低', value: 'score_north,desc' },
        { text: '北部比分低到高', value: 'score_north,asc' },
        { text: '排序權重高到低', value: 'order,asc' },
        { text: '排序權重低到高', value: 'order,desc' }
      ]
    }
  }
}
</script>
