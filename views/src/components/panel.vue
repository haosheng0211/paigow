<template>
  <v-card class="plane">
    <v-card-title
      v-if="$slots.actions"
      class="panel-actions"
    >
      <slot name="actions" />
    </v-card-title>
    <v-card-title
      v-if="$slots.filters"
      class="panel-filters"
    >
      <slot name="filters" />
    </v-card-title>
    <slot name="default" />
  </v-card>
</template>

<script>
export default {
  name: 'Panel'
}
</script>

<style lang="scss">
.panel-actions {
  .v-btn:not(:last-child) {
    margin-right: 8px;
  }
}
</style>
