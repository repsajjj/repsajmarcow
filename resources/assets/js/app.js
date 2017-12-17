
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jssor.slider.min');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

jQuery(document).ready(function ($) {
    jssor_slider1_init = function (containerId) {
        var options = { $AutoPlay: 1,
                        };
        var jssor_slider1 = new $JssorSlider$(containerId, options);
    }

});
