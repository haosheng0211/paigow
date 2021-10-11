<template>
  <panel>
    <template v-slot:actions>
      <v-radio-group
        v-model="params.location"
        row
      >
        <v-radio
          label="北部玩法"
          value="north"
        />
        <v-radio
          label="南部玩法"
          value="south"
        />
      </v-radio-group>
      <v-spacer />
      <v-btn
        color="primary"
        dark
        @click="onSubmit"
      >
        提交
      </v-btn>
      <v-btn
        color="error"
        dark
        @click="onReset"
      >
        清空
      </v-btn>
    </template>
    <v-card-text>
      <v-row>
        <template v-for="i in 16">
          <v-col
            :key="i"
            cols="3"
          >
            <cards-select
              v-model="params.cards[i-1]"
              dense
              :filters="params.cards"
              placeholder="請選擇"
            />
          </v-col>
        </template>
      </v-row>
      <v-row>
        <v-col cols="6">
          <v-data-table
            disable-sort
            :headers="headers"
            :items="items"
          >
            <template v-slot:item.order="{ item }">
              <v-chip
                v-for="order in item.order"
                :key="order"
                color="primary"
                style="margin-left: 8px;"
              >
                <b>{{ order }}</b>
              </v-chip>
            </template>
          </v-data-table>
        </v-col>
        <v-col cols="6">
          <v-row>
            <template v-for="i in 16">
              <v-col
                :key="i"
                cols="3"
              >
                <cards-image :id="params.cards[i-1]" />
              </v-col>
            </template>
          </v-row>
        </v-col>
      </v-row>
    </v-card-text>
  </panel>
</template>

<script>
import Panel from '@/components/panel'
import CardsSelect from '@/components/select/cards-select'
import CardsImage from '@/components/cards-image'

export default {
  components: { CardsImage, CardsSelect, Panel },
  data () {
    return {
      items: [],
      params: {
        cards: [],
        location: 'north'
      },
      headers: [
        { text: '牌型', align: 'left', value: 'label' },
        { text: '結果', align: 'center', value: 'result' },
        { text: '排序', align: 'right', value: 'order' }
      ]
    }
  },
  methods: {
    onReset () {
      this.items = this.$options.data().items
      this.params = this.$options.data().params
    },
    async onSubmit () {
      try {
        this.items.length = 0
        this.items = await this.$axios.post('/api/compute', this.params)
      } catch (error) {
        this.$message.error(error.response.data.message)
      }
    }
  }
}
</script>
