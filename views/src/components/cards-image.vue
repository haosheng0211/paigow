<template>
  <div>
    <v-img
      v-if="image"
      height="105"
      :src="image"
      style="margin:auto;"
      width="55"
    />
    <div
      v-else
      style="margin:auto;display:block;border: 1px dashed rgb(217, 217, 217); height: 105px; width: 55px;  border-radius: 10px;"
    />
  </div>
</template>

<script>
export default {
  name: 'CardsImage',
  props: {
    id: {
      type: null,
      required: true
    }
  },
  computed: {
    image () {
      if (!this.id) {
        return null
      }
      return this.$store.state.cards.items.find(item => item.value === this.id).image
    }
  }
}
</script>
