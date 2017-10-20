window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('bootstrap-image-input', require('./components/ImageSelector.vue'));
Vue.component('selected-image', require('./components/SelectorImage.vue'));
Vue.component('selected-image-container', require('./components/SelectedImageContainer.vue'));