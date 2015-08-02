define(['jquery', 'waypoints', 'global'], function ($, waypoint, global) {
	'use strict';

	var navigation = (function() {
		var $body,
			$nav,
			$navbar,
			$navbutton,
			$sections,
			$sitenav,
			$themebutton,
			$s;

		var init = function() {
			$body = $('body');
			$sitenav = $('#site-navigation .navbar');
			$navbar = $('.navbar');
			$navbutton = $('#menu-button');
			$sections = $('section');
			$themebutton = $('#theme-button');
			$s = global.getSkrollr();

//console.log(global.getSkrollr);
			
			bindUI();
		}

		var bindUI = function() {
			// Sticky navigation
			$sections.waypoint(function(direction) {
			 	$navbar.find('a').removeClass('active');
			 	$navbar.find('a[href="#' + this.element.id + '"]').addClass( 'active' );
			}, {
				offset: '80%'
			})

			$('.navbar a').on('click', function(event) {
				event.preventDefault();
				$s.animateTo($($(this).attr('href')).offset().top);
			});

			// Small screen menu button
			$navbutton.on('click', function(event) {
				$navbar.toggleClass('collapsed');
			});

			// Collapse on menu click
			$sitenav.on('click', function(event) {
				$navbar.toggleClass('collapsed');
			});
		
			// Theme color change button
			$themebutton.on('click', function(event) {
				$body.toggleClass('sunset overcast');
			});
		}

		return {
			init: init
		};
	})();

	return navigation;
});