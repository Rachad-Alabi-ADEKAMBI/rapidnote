import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'jquery/src/jquery.js'
import 'bootstrap/dist/js/bootstrap.min.js'
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'




import  '../public/css/main.css';

import  '../public/js/script';

createApp(App).use(router).mount('#app')
Vue.use(VueAxios, axios)
