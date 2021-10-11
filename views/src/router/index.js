import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    redirect: '/compute',
    component: () => import('@/layouts/dashboard'),
    children: [
      {
        path: '/compute',
        component: () => import('@/views/compute')
      },
      {
        path: '/composes',
        component: () => import('@/views/composes')
      },
      {
        path: '/records',
        component: () => import('@/views/records')
      }
    ]
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
