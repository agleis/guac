
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

var item_constructor = Vue.component('guideitem', require('./components/GuideItem.vue'));

Vue.component('editor', require('./components/Editor.vue'));

Vue.component('author-editor', require('./components/AuthorEditor.vue'));

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
window.CKEDITOR.config.extraPlugins = 'div,confighelper,image2';

window.CKEDITOR.config.allowedContent = true;

// window.CKEDITOR.config.scayt_autoStartup = true;

window.CKEDITOR.config.filebrowserImageBrowseUrl = '/js/ckfinder/ckfinder.html';
window.CKEDITOR.config.filebrowserImageUploadUrl = '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

// If you want inserted images in a CKEditor to be responsive
// you can use the following code. It creates a htmlfilter for the
// image tag that replaces inline "width" and "style" definitions with
// their corresponding attributes and add's (in this example) the
// Bootstrap "img-responsive" class.
window.CKEDITOR.on('instanceReady', function (ev) {
  ev.editor.dataProcessor.htmlFilter.addRules({
    elements: {
      img: function (el) {
        // Add bootstrap "img-responsive" class to each inserted image
        el.addClass('img-responsive');
 
        // Remove inline "height" and "width" styles and
        // replace them with their attribute counterparts.
        // This ensures that the 'img-responsive' class works
        var style = el.attributes.style;

        if (style) {
          // Get the width from the style.
          var match = /(?:^|\s)width\s*:\s*(\d+)px/i.exec(style),
            width = match && match[1];

          // Get the height from the style.
          match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec(style);
          var height = match && match[1];

          // Replace the width
          if (width) {
            el.attributes.style = el.attributes.style.replace(/(?:^|\s)width\s*:\s*(\d+)px;?/i, '');
            el.attributes.width = width;
          }

          // Replace the height
          if (height) {
            el.attributes.style = el.attributes.style.replace(/(?:^|\s)height\s*:\s*(\d+)px;?/i, '');
            el.attributes.height = height;
          }
        }

        // Remove the style tag if it is empty
        if (!el.attributes.style)
          delete el.attributes.style;
      }
    }
  });
});

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

