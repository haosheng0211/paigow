<template>
  <v-dialog
    v-model="dialog"
    max-width="350px"
    persistent
  >
    <v-card>
      <v-card-title>
        編輯牌組
      </v-card-title>
      <v-card-text>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="params.order"
              :error-messages="errors.order"
              hint="數字越小，權重越前"
              label="排序權重"
              persistent-hint
              type="number"
            />
          </v-col>
          <v-col cols="6">
            <v-text-field
              v-model="params.score_north"
              :error-messages="errors.score_north"
              label="北部比分"
            />
          </v-col>
          <v-col cols="6">
            <v-text-field
              v-model="params.score_south"
              :error-messages="errors.score_south"
              label="南部比分"
            />
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
        <v-btn
          color="primary"
          text
          @click="onSubmit"
        >
          保存
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  name: 'ComposesEditDialog',
  data () {
    return {
      dialog: false,
      params: {
        order: null,
        score_north: null,
        score_south: null
      },
      errors: {
        order: [],
        score_north: [],
        score_south: []
      }
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
    },
    async onSubmit () {
      try {
        const { message } = await this.$axios.put(`/api/composes/${this.params.id}`, this.params)
        await this.onClose()
        await this.$emit('success')
        this.$message.success(message)
      } catch (error) {
        if (error.response.data.errors) {
          this.errors = error.response.data.errors
        } else {
          this.$message.error(error.response.data.message)
        }
      }
    }
  }
}
</script>
