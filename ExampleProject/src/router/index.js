// Composables
import { createRouter, createWebHistory } from 'vue-router'

const routes = [

  {
    path: '/',
    name: 'default',
    component: () => import('@/layouts/default/Default.vue'),
    children:[

  {
    path: '/',
    name: 'home',
    component: () => import('@/views/Home.vue'),
    // children: [
    //   {
    //     path: '',
    //     name: 'Home',
    //     // route level code-splitting
    //     // this generates a separate chunk (about.[hash].js) for this route
    //     // which is lazy-loaded when the route is visited.
    //     component: () => import(/* webpackChunkName: "home" */ '@/views/Home.vue'),
    //   },
    // ],
  },
  {
    path: '/page1',
    name: 'page1',
    component: () => import('@/views/Page1.vue'),
    // children: [
    //   {
    //     path: '',
    //     name: 'Home',
    //     // route level code-splitting
    //     // this generates a separate chunk (about.[hash].js) for this route
    //     // which is lazy-loaded when the route is visited.
    //     component: () => import(/* webpackChunkName: "home" */ '@/views/Home.vue'),
    //   },
    // ],
  },
  {
    path: '/index',
    name: 'index',
    component: ()=> import('@/views/Index.vue'),
  }
]
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),///histry eka broser eke store wenawa
  routes,
})

export default router
