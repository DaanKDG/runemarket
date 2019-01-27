
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');

Vue.component('admin-quests', require('./components/AdminQuests.vue'));
Vue.component('quests', require('./components/Quests.vue'));
Vue.component('Accounts', require('./components/Accounts.vue'));
Vue.component('accountdetails', require('./components/AccountDetail.vue'));


const app = new Vue({
    el: '#app'
});
