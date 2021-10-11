<template>
  <v-dialog
    v-model="dialog"
    max-width="95%"
    persistent
  >
    <v-card>
      <v-card-title>
        查看詳情
      </v-card-title>
      <v-card-text>
        <v-row>
          <v-col cols="6">
            <v-data-table
              disable-sort
              :headers="headers"
              :items="params.response"
            />
          </v-col>
          <v-col cols="6">
            <v-row>
              <template v-for="i in 16">
                <v-col
                  :key="i"
                  cols="3"
                >
                  <cards-image
                    v-if="dialog"
                    :id="params.cards[i-1]"
                  />
                </v-col>
              </template>
            </v-row>
          </v-col>
        </v-row>
      </v-card-text>
      <v-card-actions>
        <v-spacer />
        <v-btn
          color="error"
          text
          @click="onClose"
        >
          關閉
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
import CardsImage from '@/components/cards-image'

export default {
  name: 'RecordsDialog',
  components: { CardsImage },
  data () {
    return {
      dialog: false,
      params: {
        cards: null,
        location: null,
        response: []
      },
      headers: [
        { text: '牌型', align: 'left', value: 'label' },
        { text: '結果', align: 'center', value: 'result' },
        { text: '排序', align: 'right', value: 'order' }
      ]
    }
  },
  methods: {
    open (item) {
      this.params = { ...item }
      this.dialog = true
    },
    onClose () {
      this.dialog = false
      this.params = this.$options.data().params
      this.errors = this.$options.data().errors
    }
  }
}
</script>
