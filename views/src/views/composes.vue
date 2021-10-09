<template>
  <panel>
    <template v-slot:actions>
      <v-btn
        color="primary"
        @click="$refs.table.search()"
      >
        搜尋
      </v-btn>
    </template>
    <template v-slot:filters>
      <v-select
        v-model="filters.pairs"
        :items="options.pairs"
        label="選擇類型"
      />
      <v-select
        v-model="filters.order"
        :items="options.order"
        label="顯示排序"
      />
      <v-select
        v-model="filters.card"
        :items="options.card"
        label="選擇卡牌"
      />
    </template>
    <composes-edit-dialog
      ref="dialog"
      @success="$refs.table.search()"
    />
    <data-table
      ref="table"
      api-url="/api/composes"
      :filters="filters"
      :headers="headers"
      @click:row="onClickRow"
    />
  </panel>
</template>

<script>
import Panel from '@/components/panel'
import DataTable from '@/components/table/data-table'
import ComposesEditDialog from '@/components/dialog/composes-edit-dialog'

export default {
  components: { ComposesEditDialog, DataTable, Panel },
  data () {
    return {
      headers: [
        { text: '名稱', value: 'label' },
        { text: '卡牌', value: 'cards' },
        { text: '排序權重', value: 'order' },
        { text: '北部比分', value: 'score_north' },
        { text: '南部比分', value: 'score_south' }
      ],
      filters: {
        pairs: 1,
        order: 'score_south,desc',
        card: null
      },
      options: {
        pairs: [
          { text: '對子', value: 1 },
          { text: '其他', value: 0 }
        ],
        order: [
          { text: '南部比分高到低', value: 'score_south,desc' },
          { text: '南部比分低到高', value: 'score_south,asc' },
          { text: '北部比分高到低', value: 'score_north,desc' },
          { text: '北部比分低到高', value: 'score_north,asc' },
          { text: '排序權重高到低', value: 'order,asc' },
          { text: '排序權重低到高', value: 'order,desc' }
        ],
        card: [
          { text: '全部', value: null }
        ]
      }
    }
  },
  created () {
    this.loadCards()
  },
  methods: {
    onClickRow (item) {
      this.$refs.dialog.open(item)
    },
    async loadCards () {
      try {
        const cards = await this.$axios.get('/api/card/options')
        cards.forEach(item => {
          this.options.card.push(item)
        })
      } catch (error) {
        this.$message.error(error.response.data.message)
      }
    }
  }
}
</script>
