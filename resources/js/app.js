import Vue from 'vue'
import VueRouter from 'vue-router'
import { store } from './store/store'

require('./bootstrap')

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Login from './views/Login'
import Register from './views/Register'
import Contact from './views/Contact'
import House from './views/House'
import Piercing from './views/Piercing'
import Transformation from './views/Transformation'
import Reparation from './views/Reparation'
import Gravure from './views/Gravure'
import Entretien from './views/Entretien'
import Bijouterie from './views/Bijouterie'
import Products from './views/Products'

import NotFound from './views/NotFound'

import ProductInfo from './views/ProductInfo'

import AdminPanel from './views/admin/AdminPanel'
import AdminEvents from './views/admin/AdminEvents'
import AdminPage from './views/admin/AdminPage'
import AdminCategories from './views/admin/AdminCategories'
import AdminProducts from './views/admin/AdminProducts'
import AdminSettings from './views/admin/AdminSettings'
import AdminImages from './views/admin/AdminImages'

import Admin from './layouts/Admin'
import Guest from './layouts/Guest'

const router = new VueRouter({
    mode: 'history',
    scrollBehavior: () => {
        return { x: 0, y: 0 };
    },
    routes: [
        {
            path: '/',
            name: 'home',
            meta: {layout: "guest"},
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            meta: {layout: "guest"},
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            meta: {layout: "guest"},
            component: Register
        },
        {
            path: '/contact',
            name: 'contact',
            meta: {layout: "guest"},
            component: Contact
        },
        {
            path: '/house',
            name: 'house',
            meta: {layout: "guest"},
            component: House
        },
        {
            path: '/piercing',
            name: 'piercing',
            meta: { layout: "guest"},
            component: Piercing
        },
        {
            path: '/services/transformation',
            name: 'transformation',
            meta: { layout: "guest"},
            component: Transformation
        },
        {
            path: '/services/reparation',
            name: 'reparation',
            meta: { layout: "guest"},
            component: Reparation
        },
        {
            path: '/services/gravure',
            name: 'gravure',
            meta: { layout: "guest"},
            component: Gravure
        },
        {
            path: '/services/entretien',
            name: 'entretien',
            meta: { layout: "guest"},
            component: Entretien
        },
        {
            path: '/bijouterie',
            name: 'bijouterie',
            meta: { layout: "guest"},
            component: Bijouterie
        },
        {
            path: '/admin',
            name: 'admin',
            meta: {layout: "admin"},
            component: AdminPanel
        },
        {
            path: '/admin/events',
            name: 'admin-events',
            meta: {layout: "admin"},
            component: AdminEvents
        },
        {
            path: '/admin/pages/:id/:slug',
            name: 'admin-page',
            meta: {layout: "admin"},
            component: AdminPage,
        },
        {
            path: '/admin/categories',
            name: 'admin-categories',
            meta: {layout: "admin"},
            component: AdminCategories,
        },
        {
            path: '/admin/produits',
            name: 'admin-products',
            meta: {layout: "admin"},
            component: AdminProducts,
        },
        {
            path: '/admin/settings',
            name: 'admin-settings',
            meta: {layout: "admin"},
            component: AdminSettings
        },
        {
            path: '/admin/images',
            name: 'admin-images',
            meta: {layout: "admin"},
            component: AdminImages
        },
        {
            path: '/bijouterie/:category_slug/:product_slug',
            name: 'product-info',
            meta: { layout: "guest"},
            component: ProductInfo,
        },
        {
            path: '/bijouterie/:slug',
            name: 'category',
            meta: { layout: "guest"},
            component: Products,
        },
        {
            path: '*',
            name: '404',
            meta: {layout: "guest"},
            component: NotFound
        }
    ]
})

Vue.directive('click-outside', {
    bind: function (el, binding, vnode) {
        window.event = function (event) {
            if (!(el == event.target || el.contains(event.target))) {
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', window.event)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', window.event)
    },
});

Vue.component('guest-layout', Guest)
Vue.component('admin-layout', Admin)

const app = new Vue({
    el: '#app',
    store: store,
    components: { App },
    router,
});