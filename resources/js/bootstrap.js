import axios from 'axios';

window._ = require('lodash');

try {
    window.Popper = require('@popperjs/core');
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (error) {
    console.log(e)
}

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
