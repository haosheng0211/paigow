<template>
  <panel>
    <template v-slot:actions>
      <v-btn
        color="primary"
        dark
        @click="$refs.table.search()"
      >
        搜尋
      </v-btn>
      <v-btn
        color="success"
        dark
        @click="onExportData"
      >
        導出
      </v-btn>
      <imports-dialog
        api-url="/api/composes/import"
        @success="$refs.table.search()"
      />
    </template>
    <template v-slot:filters>
      <pairs-select
        v-model="filters.pairs"
        label="選擇類型"
      />
      <order-select
        v-model="filters.order"
        label="顯示排序"
      />
      <cards-select
        v-model="filters.cards"
        :default="{ text:'全部',value:null }"
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
      @click:row="(item)=>$refs.dialog.open(item)"
    />
  </panel>
</template>

<script>
import Panel from '@/components/panel'
import DataTable from '@/components/table/data-table'
import ComposesEditDialog from '@/components/dialog/composes-edit-dialog'
import PairsSelect from '@/components/select/pairs-select'
import OrderSelect from '@/components/select/order-select'
import CardsSelect from '@/components/select/cards-select'
import ImportsDialog from '@/components/dialog/imports-dialog'

export default {
  components: { ImportsDialog, CardsSelect, OrderSelect, PairsSelect, ComposesEditDialog, DataTable, Panel },
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
        cards: null
      }
    }
  },
  methods: {
    async onExportData () {
      try {
        const { url } = await this.$axios.post('/api/composes/export')
        window.open(url)
      } catch (error) {
        this.$message.error(error.response.data.message)
      }
    }
  }
}
</script>
