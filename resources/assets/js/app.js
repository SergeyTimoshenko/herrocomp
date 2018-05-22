import axios from 'axios';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var VueRouter = require('vue-router');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
var Hero = require('./components/hero.vue');

Vue.use(VueRouter);
Vue.component('app', require('./components/ExampleComponent.vue'));
Vue.component('hero', require('./components/hero.vue'));

var router = new VueRouter({
    routes: [
        {path: '/hero', component: Hero}
    ]
})

const app = new Vue({
    el: '#app',
    router: router
});
const hero = new Vue({
    el: '#hero'
});



