import './assets/main.css'
import './assets/css/bootstrap.min.css'
import './assets/css/style.css'
import './assets/css/responsive.css'
import './assets/css/jquery.mCustomScrollbar.min.css'
import './assets/css/owl.carousel.min.css'
// import 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'
// import 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

// import axios from 'axios';

// import _ from 'lodash';
// window._ = _;

// import axios from 'axios';
// window.axios = axios;

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// window.axios.defaults.baseURL = 'http://127.0.0.1:8000/api/';

// let token = document.head.querySelector('meta[name="csrf-token"]');

// window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

const app = createApp(App)

app.use(router)

app.mount('#app')
