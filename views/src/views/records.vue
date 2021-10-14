<template>
  <panel>
    <template v-slot:actions>
      <v-btn
        color="error"
        @click="onDestroy"
      >
        清空
      </v-btn>
    </template>
    <records-dialog ref="dialog" />
    <data-table
      api-url="/api/records"
      :headers="headers"
      @click:row="(item)=>$refs.dialog.open(item)"
    >
      <template v-slot:item.location="{ item }">
        {{ item.location === 'north' ? '北部玩法' : '南部玩法' }}
      </template>
    </data-table>
  </panel>
</template>

<script>
import Panel from '@/components/panel'
import DataTable from '@/components/table/data-table'
import RecordsDialog from '@/components/dialog/records-dialog'

export default {
  components: { RecordsDialog, DataTable, Panel },
  data () {
    return {
      headers: [
        { text: '編號', value: 'id' },
        { text: '玩法', value: 'location' },
        { text: '操作位置', value: 'ip_address', align: 'right' },
        { text: '操作時間', value: 'created_at', align: 'right' }
      ]
    }
  },
  methods: {
    async  onDestroy () {
      try {
        const { message } = await this.$axios.delete('/api/records')
        this.$message.success(message)
      } catch (error) {
        this.$message.error(error.response.data.message)
      }
    }
  }
}
</script>
