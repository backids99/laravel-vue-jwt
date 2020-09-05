import VueRouter from 'vue-router'

// Pages
import Home from './pages/Home'
import Login from './pages/Login'

// Routes
const router = new VueRouter({
  history: true,
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
      meta: {
        auth: true 
      }
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
      meta: {
        auth: false
      }
    },
  ]
})

export default router