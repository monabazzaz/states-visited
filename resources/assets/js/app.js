
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'
import VueRouter from 'vue-router'
import StateForm from './components/StateForm.vue'
import Tracking from './components/Tracking.vue'
import StarRating from 'vue-star-rating'
import vmodal from 'vue-js-modal';

Vue.use(vmodal)

Vue.component('Tracking', require('./components/Tracking.vue'));

const app = new Vue({
    el: '#app',
    template: '<Tracking />'
});
