
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('articletext', require('./components/Article.vue'));

Vue.component('editor', require('./components/Editor.vue'));

Vue.component('articlesummary', require('./components/ArticleSummary.vue'));

Vue.component('featured', require('./components/Featured.vue'));

Vue.component('author-form', require('./components/AuthorForm.vue'));

Vue.component('image-upload', require('./components/ImageUpload.vue'));

const app = new Vue({
    el: '#app'
});

window.Split = require('split.js');

Split(["#editor-form", "#editor-article"], {
  direction: 'vertical'
});

CKEDITOR.stylesSet.add('my_styles', [
  // Block-level styles.
  { name: 'Quote Row', element: 'div', attributes: { class: 'row quote' } },
  { name: 'Column-4', element: 'div', attributes: { class: 'col-md-4' } },
  { name: 'Column-8', element: 'div', attributes: { class: 'col-md-8' } },

  // Inline styles.
  { name: 'Quote', element: 'blockquote', attributes: { class: 'quote_div quote' } },
  { name: 'CSS Style', element: 'span', attributes: { 'class': 'my_style' } },
  { name: 'Marker: Yellow', element: 'span', styles: { 'background-color': 'Yellow' } }
]);

CKEDITOR.config.stylesSet = 'my_styles';
CKEDITOR.config.extraPlugins = 'div';
