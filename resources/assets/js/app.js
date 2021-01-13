
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

try {
    window.$ = window.jQuery = require('jquery');
    //var slick = require('slick-carousel');
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

	//add click event to menu items
	$('.menu__container nav > ul li').each(function() {
		if ($(this).find('.submenu').length > 0) {
			let $submenu = $(this).find('.submenu');
			
			$(this).find('> a').on('click', function(e) {
				e.preventDefault();
				let open = $submenu.hasClass('open');
				if (open) {
					$submenu.fadeOut().removeClass('open')
				}else{
					$submenu.fadeIn().addClass('open');
				}
			});
		}
	});


	//open submenu when active
	$('.menu__container nav .submenu li').each(function() {
		if ($(this).hasClass('active')){
			var $submenu = $(this).closest('.submenu');
			$submenu.show().addClass('open');
		}
	});

	function animateText($textAnimationContainer, index, tot) {
		$textAnimationContainer
			.delay(1000)
			.animate({
				top: -70 * index
			}, 300, function() {
				animateText($textAnimationContainer, (index + 1 + tot) % tot, tot)
			})
			
	}

	var $textAnimationContainer = $('.text-animation__container');
	var textCount = $textAnimationContainer.find('p').length;
	var index = 0;

	
	animateText($textAnimationContainer, index, textCount)
	

});
