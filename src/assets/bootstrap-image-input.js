window.Vue = require('vue');

/**
 * Import all the Vue components that are needed. But not creating a new Vue instance.
 * In a 'default' laravel application this is already done.
 */
Vue.component('bootstrap-image-input', require('./components/ImageSelector.vue'));
Vue.component('selected-image', require('./components/SelectorImage.vue'));
Vue.component('selected-image-container', require('./components/SelectedImageContainer.vue'));