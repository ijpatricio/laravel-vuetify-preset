require('./bootstrap');
window.Vue = require('vue');
import vuetify from './plugins/vuetify'
const app = new Vue({
    el: '#app',
    vuetify,
})
