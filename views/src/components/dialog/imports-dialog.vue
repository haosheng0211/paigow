<template>
  <v-dialog
    v-model="dialog"
    max-width="350px"
    persistent
  >
    <template v-slot:activator="{ attr, on }">
      <v-btn
        color="orange"
        dark
        v-on="on"
      >
        導入
      </v-btn>
    </template>
    <v-card>
      <v-card-title>
        上傳文件
      </v-card-title>
      <v-card-text>
        <v-row>
          <v-col cols="12">
            <v-file-input
              v-model="params.file"
              accept=".xlsx"
              :error-messages="errors.file"
              placeholder="請選擇文件"
              prepend-icon=""
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
          上傳
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  name: 'UploadsDialog',
  props: {
    apiUrl: {
      type: String,
      required: true
    }
  },
  data () {
    return {
      dialog: false,
      params: {
        file: null
      },
      errors: {
        file: []
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
        const params = new FormData()
        params.append('file', this.params.file)
        const { message } = await this.$axios.post(this.apiUrl, params)
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
