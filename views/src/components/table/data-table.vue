<template>
  <v-data-table
    v-model="selected"
    v-bind="$attrs"
    disable-sort
    :footer-props="footer_props"
    :headers="headers"
    :items="paginate.items"
    :items-per-page.sync="paginate.limit"
    :loading="loading"
    :page.sync="paginate.page"
    :server-items-length="paginate.total"
    v-on="$listeners"
    @update:options="onUpdateOptions"
  >
    <template
      v-for="(_, name) in $scopedSlots"
      :slot="name"
      slot-scope="slotData"
    >
      <slot
        v-bind="slotData"
        :name="name"
      />
    </template>
  </v-data-table>
</template>

<script>
export default {
  name: 'DataTable',
  props: {
    value: {
      type: Array,
      default () {
        return []
      }
    },
    apiUrl: {
      type: String,
      required: true
    },
    headers: {
      type: Array,
      default () {
        return []
      }
    },
    filters: {
      type: Object,
      default () {
        return {}
      }
    }
  },
  data () {
    return {
      loading: false,
      selected: [],
      paginate: {
        page: 1,
        limit: 15,
        total: null,
        items: []
      },
      footer_props: { 'items-per-page-options': [10, 15, 30, 50] }
    }
  },
  computed: {
    params () {
      return {
        ...this.filters,
        page: this.paginate.page,
        limit: this.paginate.limit
      }
    }
  },
  watch: {
    value (value) {
      this.selected = value
    },
    selected (value) {
      this.$emit('input', value)
    }
  },
  methods: {
    async search () {
      this.paginate = this.$options.data().paginate
      await this.loadPaginate()
    },
    async loadPaginate () {
      try {
        this.loading = true
        const { total, items } = await this.$axios.get(this.apiUrl, {
          params: this.params
        })
        this.paginate.total = total
        this.paginate.items = items
      } catch (error) {
        this.$message.error(error.response.data)
      } finally {
        this.loading = false
      }
    },
    onUpdateOptions ({ page, itemsPerPage }) {
      this.paginate.page = page
      if (this.paginate.limit !== itemsPerPage) {
        this.paginate.page = page
        this.paginate.limit = itemsPerPage
      }
      this.loadPaginate()
    }
  }
}
</script>
