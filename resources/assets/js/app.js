import axios from 'axios';
import VueRouter from 'vue-router';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueRouter);
var hero = require('./components/hero.vue');
var add = require('./components/add.vue');
var edit = require('./components/edit.vue');
var router = new VueRouter({
    routes: [
        { path: '/', name: 'all', component: require('./components/ExampleComponent.vue') },
        { path: '/hero/:id', name: 'hero', component: hero },
        { path: '/add', component: add },
        { path: '/hero/edit/:id', name: 'edit', component: edit }
    ]
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('hero', require('./components/hero.vue'))
Vue.component('app', require('./components/ExampleComponent.vue'));
Vue.component('add', require('./components/add.vue'));

const app = new Vue({
    el: '#app',
    router: router

});



