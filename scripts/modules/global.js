define(['skrollr'], function (skrollr) {
	'use strict';

	var global = (function() {
		var $window,
			$dividers,
			$s;

		var getSkrollr = function() {
			return $s;
		}

		var init = function() {
			$window = $(window);
			$dividers = $('.divider');
	
			bindUI();
		}

		var initSkrollr = function() {
			$s = skrollr.init({
				smoothScrolling: false,
				forceHeight: false,
			});
		}

		var bindUI = function() {
			resizeDividers();
		}

		var splash = function() {
			var svgUrl = 'svg/';

			function append(parent, data) {
				$(parent).append( new XMLSerializer().serializeToString(data.documentElement) );
			};

			$.when(
				$.get(svgUrl + "outlook/outlook_bg-cloud_dark.svg", function(data) {
				  	append('#pl-cloud-dark', data);
				}),
				$.get(svgUrl + "outlook/outlook_bg-cloud_light.svg", function(data) {
					append('#pl-cloud-light', data);
				}),
				$.get(svgUrl + "outlook/outlook_frame-tree_right.svg", function(data) {
					append('#frame #pl-right-tree', data);
				}),
				$.get(svgUrl + "outlook/outlook_frame-tree_left.svg", function(data) {
					append('#frame #pl-left-tree', data);
				}),
				$.get(svgUrl + "outlook/outlook_frame-ground.svg", function(data) {
				  	append('#frame #pl-ground', data);
				}),

				$.get(svgUrl + "outlook/outlook_forest-l-01.svg", function(data) {
					append('#outlook #pl-2', data);
				}),
				$.get(svgUrl + "outlook/outlook_forest-l-02.svg", function(data) {
				  	append('#outlook #pl-3', data);
				}),
				$.get(svgUrl + "outlook/outlook_forest-l-03.svg", function(data) {
				  	append('#outlook #pl-4', data);
				}),
				$.get(svgUrl + "outlook/outlook_forest-l-04.svg", function(data) {
				  	append('#outlook #pl-5', data);
				}),
				$.get(svgUrl + "outlook/outlook_forest-l-05.svg", function(data) {
				  	append('#outlook #pl-6', data);
				}),
				$.get(svgUrl + "outlook/outlook_forest-l-06.svg", function(data) {
				  	append('#outlook #pl-7', data);
				}),

				$.get(svgUrl + "clearing/clearing_forest-l-01.svg", function(data) {
				  	append('#clearing #pl-1', data);
				}),
				$.get(svgUrl + "clearing/clearing_forest-l-02.svg", function(data) {
				  	append('#clearing #pl-2', data);
				}),
				$.get(svgUrl + "clearing/clearing_forest-l-03.svg", function(data) {
				  	append('#clearing #pl-3', data);
				}),
				$.get(svgUrl + "clearing/clearing_forest-l-04.svg", function(data) {
				  	append('#clearing #pl-4', data);
				}),
				$.get(svgUrl + "clearing/clearing_forest-l-05.svg", function(data) {
				  	append('#clearing #pl-5', data);
				}),
				$.get(svgUrl + "clearing/clearing_forest-l-06.svg", function(data) {
				  	append('#clearing #pl-6', data);
				}),

				$.get(svgUrl + "brook/brook_forest-l-01.svg", function(data) {
				  	append('#brook #pl-1', data);
				}),
				$.get(svgUrl + "brook/brook_forest-l-02.svg", function(data) {
				  	append('#brook #pl-2', data);
				}),
				$.get(svgUrl + "brook/brook_forest-l-03.svg", function(data) {
				  	append('#brook #pl-3', data);
				}),
				$.get(svgUrl + "brook/brook_forest-l-04.svg", function(data) {
				  	append('#brook #pl-4', data);
				}),
				$.get(svgUrl + "brook/brook_forest-l-05.svg", function(data) {
				  	append('#brook #pl-5', data);
				}),
				$.get(svgUrl + "loch-ground.svg", function(data) {
				  	append('#contact #pl-first', data);
				})
			).then(function() {
				var scrolled = false;		

				$(window).scroll(function () {
				    scrolled = true;
				});

				setTimeout(function() { 
					$('header, footer, section, .divider, .dividers').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 200);
					$('.preloader').css('display', 'none');

					if (scrolled === false) {
						$s.animateTo(window.innerHeight);  
					}
				}, 1000);
			});
		}

		var resizeDividers = function() {
			// Set dividers height from current width
			var objHeight = $dividers.width() * .35;
			$.each($dividers, function(){
			    $(this).height(objHeight + 'px');
			});

			// Center divider for small devices
			var offsetX;
			if ($window.width() <= 480) {
			    offsetX = ($dividers.width() - $window.width()) / 2;
				$.each($dividers, function() {
					$(this).css({ left: -offsetX });
				});
			} else {
				$.each($dividers, function() {
					$(this).css({ left: 0 });
				});				
			}
		}

		return {
			init: init,
			resizeDividers: resizeDividers,
			splash: splash,
			initSkrollr: initSkrollr,
			getSkrollr: getSkrollr
		};
	})();

	return global;
});