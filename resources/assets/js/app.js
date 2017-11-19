
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

Vue.component('guide', require('./components/Guide.vue'));

Vue.component('guideitem', require('./components/GuideItem.vue'));

Vue.component('editor', require('./components/Editor.vue'));

Vue.component('author-editor', require('./components/AuthorEditor.vue'));

Vue.component('guideeditor', require('./components/GuideEditor.vue'));

Vue.component('guideitemeditor', require('./components/GuideItemEditor.vue'));

Vue.component('image-upload', require('./components/ImageUpload.vue'));

Vue.directive('chosen', {
  twoWay: true,
  bind: function () {
    return this.vm.$nextTick((function (_this) {
      return function () {
        return $(_this.el).chosen({
          inherit_select_classes: false,
          width: '100%'
        }).change(function (ev) {
          var i, len, option, ref, values;
          if (_this.el.hasAttribute('multiple')) {
            values = [];
            ref = _this.el.selectedOptions;
            for (i = 0, len = ref.length; i < len; i++) {
              option = ref[i];
              values.push(option.value);
            }
            return _this.set(values);
          } else {
            return _this.set(_this.el.value);
          }
        });
      };
    })(this));
  },
  update: function (nv, ov) {
    return $(this.el).trigger('chosen:updated');
  }
});

const app = new Vue({
    el: '#app'
});

// window.Split = require('split.js');

// Split(["#editor-form", "#editor-article"], {
//   direction: 'vertical'
// });

window.CKEDITOR.stylesSet.add('my_styles', [
  // Block-level styles.
  { name: 'Image Row', element: 'div', attributes: { class: 'row' } },
  { name: '1/3 Page Width', element: 'div', attributes: { class: 'col-md-4' } },
  { name: 'Half Page Width', element: 'div', attributes: { class: 'col-md-6' } },
  { name: '2/3 Page Width', element: 'div', attributes: { class: 'col-md-8' } },
  { name: 'Gray Section', element: 'div', attributes: { class: 'gray-section' } },
  { name: 'White Section', element: 'div', attributes: { class: 'white-section' } },

  // Inline styles.
  { name: 'Quote', element: 'blockquote', attributes: { class: 'quote_div quote' } },
  { name: 'CSS Style', element: 'span', attributes: { 'class': 'my_style' } },
  { name: 'Marker: Yellow', element: 'span', styles: { 'background-color': 'Yellow' } }
]);

window.CKEDITOR.config.stylesSet = 'my_styles';
window.CKEDITOR.config.extraPlugins = 'div';

window.CKEDITOR.config.allowedContent = true;

window.CKEDITOR.plugins.widget.definition.draggable = false;

window.CKEDITOR.config.filebrowserImageBrowseUrl = '/js/ckfinder/ckfinder.html';
window.CKEDITOR.config.filebrowserImageUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

function BrowseServer() {
  var finder = CKFinder.modal({
    chooseFiles: true,
    onInit: function (finder) {
      finder.on('files:choose', function (evt) {
        var file = evt.data.files.first();
        $("#image").val(file.getUrl());
      });
      finder.on('file:choose:resizedImage', function (evt) {
        $('#url').value = evt.data.resizedUrl;
      })
    }});
}
$(function () {
    $("#browse").on("click", BrowseServer); //FileBrowse is the Id of the button
});

