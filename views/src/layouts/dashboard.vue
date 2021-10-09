<template>
  <v-app>
    <v-navigation-drawer
      v-model="drawer"
      app
      :clipped="$vuetify.breakpoint.lgAndUp"
    >
      <v-list
        dense
        nav
      >
        <v-list-item
          v-for="item in items"
          :key="item.text"
          link
          :to="item.path"
        >
          <v-list-item-action>
            <v-icon v-text="item.icon" />
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.text" />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      :clipped-left="$vuetify.breakpoint.lgAndUp"
      color="blue darken-3"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title
        class="ml-0 pl-4"
        style="width: 300px"
      >
        管理平台
      </v-toolbar-title>
      <v-spacer />
    </v-app-bar>
    <v-main style="background: #f2f3f5;">
      <v-container fluid>
        <router-view />
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: 'Dashboard',
  data () {
    return {
      drawer: null,
      items: [
        { icon: 'mdi-cards', text: '牌組', path: '/composes' }
      ]
    }
  }
}
</script>
