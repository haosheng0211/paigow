export default {
  props: {
    value: {
      type: null,
      default: null
    }
  },
  data () {
    return {
      model: null
    }
  },
  watch: {
    value (value) {
      this.model = value
    },
    model (value) {
      this.$emit('input', value)
    }
  },
  created () {
    if (this.value) {
      this.model = this.value
    }
  }
}
