import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
import Dashboard from '../views/Dashboard.vue'
import Category from '../views/Category.vue'
import CreateCategory from '../views/CreateCategory.vue'
import EditCategory from '../views/EditCategory.vue'
import CreatePost from '../views/posts/CreatePost.vue'
import Post from '../views/posts/Post.vue'
import SinglePost from '../views/posts/SinglePost.vue'
import EditPost from '../views/posts/EditPost.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/login',
      name: 'Login',
      component: Login,
      meta: {requireGuest:true}
    },
    {
      path: '/register',
      name: 'Register',
      component: Register,
      meta: {requireGuest:true}
    }
    ,
    {
      path: '/dashboard',
      name: 'Dashboard',
      component: Dashboard,
      meta: {requireAuth: true}
    }    ,
    {
      path: '/category',
      name: 'Category',
      component: Category,
      meta: {requireAuth: true}
    },
    {
      path: '/category/create',
      name: 'CreateCategory',
      component: CreateCategory,
      meta: {requireAuth: true}
    },
    {
      path: '/category/:id/edit',
      name: 'EditCategory',
      component: EditCategory,
      meta: {requireAuth: true}
    }
    ,
    {
      path: '/post/create',
      name: 'CreatePost',
      component: CreatePost,
      meta: {requireAuth: true}
    },
    {
      path: '/post',
      name: 'Post',
      component: Post,
      meta: {requireAuth: true}
    },
    {
      path: '/post/:slug',
      name: 'SinglePost',
      component: SinglePost,
      props: true,
      meta: {requireAuth: true}
    },
    {
      path: '/post/:slug',
      name: 'EditPost',
      component: EditPost,
      props: true,
      meta: {requireAuth: true}
    },
  ]
})

router.beforeEach((to, from) => {
  const authenticated = localStorage.getItem("authToken")

  if (to.meta.requireGuest && authenticated){
    return {
      name: "Dashboard"
    }
  }else if(to.meta.requireAuth && !authenticated){
    return {
      name: 'Login'
    }
  }
})

export default router
