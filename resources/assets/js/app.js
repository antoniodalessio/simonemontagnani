
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

try {
    window.$ = window.jQuery = require('jquery');
    var slick = require('slick-carousel');
} catch (e) {}



//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });


$(document).ready( () => {
	
	let $btnMenu = $(".menu button");
	let $menu = $(".menu .menu__container");
	let $closeMenuBtn = $(".close-icon");

	$btnMenu.on("click", () => {
		$menu.toggleClass("open");
	});

	$closeMenuBtn.on("click", () => {
		$menu.removeClass("open");
	});

	$('.slider').slick({
		slidesToShow: 1,
	  	slidesToScroll: 1,
	  	autoplay: true,
	  	autoplaySpeed: 2000,
	});

});
