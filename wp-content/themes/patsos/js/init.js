// *************************************
//
//   Init.js
//   -> This is the init script file
//
// *************************************

// -------------------------------------
//   Is Desktop Logic
//   -> Checks if we are in desktop of mobile view. Returns true or false.
// -------------------------------------

// $g_is_desktop = !$("[.menu-link]").is(":visible");
// $(window).resize(function() {
// 	$g_is_desktop = !$(".menu-link").is(":visible");
// });

// -------------------------------------
//   Matches Console Log Shorthand 
// -------------------------------------

function cl(clOption){
	if($.isArray(clOption)){
		$.each(clOption,function(k,v){
			console.log(v);
		});
	}else {
		console.log(clOption);
	}
}

// -------------------------------------
//   Exists Plugin
// -------------------------------------
$.fn.exists = function(callback) {
  var args = [].slice.call(arguments, 1);
  if (this.length) {
    callback.call(this, args);
  }
  return this;
};

$(document).ready(function() {

	$('.js-scrollTrigger').scrollTrigger({
	  offset: 100,
	  active: 'is-active'
	});

	// -------------------------------------
	//   Hamburger Nav Logic
	// -------------------------------------

	// ----- vars ----- //
	var hamburger = $('.hamburger'),
		mask = $('.drawer-mask'),
		drawer = $('.drawer'),
		body = $('body');


	// ----- hamburger click event ----- //
	hamburger.on('click', function(e) {
		$(this).toggleClass('is-active');
		body.toggleClass('is-collapsed');
		e.preventDefault();
	});

	// ----- mask click event ----- //
	mask.on('click', function(e) {
		hamburger.toggleClass('is-active');
		mask.toggleClass('toggled');
		drawer.toggleClass('toggled');
		e.preventDefault();
	});

	// -------------------------------------
	//   Concern
	// -------------------------------------

	$('.concerns').exists(function() {
		var concerns = $(this),
			concern = $('.concern'),
			content = $('.concern-content'),
			current = 0;

		concern.on('click', function() {
			// First set the current concern data attr
			current = $(this).data('concern');

			// Next remove the active class
			content.removeClass('is-active');
			// content.data('concern', current).addClass('is-active');

			// Then set the current content to active
			content.each(function() {

				that = $(this);
				if(that.data('concern') === current) {
					that.addClass('is-active');
					setTimeout(function() {
						$('html,body').animate({
							scrollTop: $('#' + current).offset().top
						}, 1000);
					}, 100);

				    return false;
					
				}


			});

			// Then
			$('#form-source').val($(this).find('h3').html());




		});

	});

	// -------------------------------------
	//   Scroll To
	// -------------------------------------


	// $(function() {
	// 	$('a[href*=#]:not([href=#])').on('click', function(e) {
	// 		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	// 			var target = $(this.hash);
	// 			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	// 			if (target.length) {
	// 				$('html,body').animate({
	// 					scrollTop: target.offset().top
	// 				}, 1000);
	// 			}
	// 		}
	// 	});
	// });

	// -------------------------------------
	//   Flexslider
	// -------------------------------------

	$('.flexslider').flexslider({
		animation: "slide"
	});

	// -------------------------------------
	//   Tabs
	// -------------------------------------

	(function() {

		[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
		});

	})();

	
});