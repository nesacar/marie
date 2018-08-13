window.Vue = require('vue');
import LazyImages from './components/lazy-images';

Vue.component('event-dispatcher', require('./components/EventDispatcher.vue'));
Vue.component('tab-bar', require('./components/TabBar.vue'));
Vue.component('simple-carousel', require('./components/SimpleCarousel.vue'));
Vue.component('search-widget', require('./components/SearchWidget.vue'));
Vue.component('image-slide', require('./components/ImageSlide.vue'));
Vue.component('temporary-drawer', require('./components/TemporaryDrawer.vue'));
Vue.component('modal-container', require('./components/ModalContainer.vue'));
Vue.component('collapsible-container', require('./components/CollapsibleContainer.vue'));
Vue.component('responsive-image', require('./components/ResponsiveImage.vue'));
Vue.component('gnc-gallery', require('./components/GNCGallery.vue'));

const mc = new Vue({
  el: '#app',
});

LazyImages.init();
