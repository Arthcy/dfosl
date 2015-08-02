(function() {
	'use strict';

	require.config({
		baseUrl: "scripts",
		paths: {
			"jquery": "lib/jquery.min",
			"waypoints": "lib/jquery.waypoints.min",
			"skrollr": "lib/skrollr.min",

			"domReady": "modules/domready",
			"global": "modules/global",
			"navigation": "modules/navigation"
		},
		shim: {
			// Libs
			"jquery": {
				exports: "$"
			},
			"waypoints": {
				deps: ["jquery"]
			},

			// Modules
			"global": {
				deps: ["jquery", "skrollr"]
			},
			"navigation": {
				deps: ["jquery", "waypoints"]
			}
		}
	});

	require(['domReady', 'global', 'navigation'], 
		function(domReady, global, navigation) {
		
		$(function() {
			$(window).on("resize", function(event) {
				global.resizeDividers();
			});
		});

    	domReady(function() {
    		global.init();

			var frame = $('#frame #pl-ground');
			var framePos = $('#frame #pl-ground').offset().top + frame.height();
			var windowH = window.innerHeight;
			var splash = $('#splash');

			splash.css({ height: (window.innerHeight - $('#outlook-anchor').height()) + window.innerHeight});
    		
    		global.initSkrollr();
    		navigation.init();			
			global.splash();
    	});
	});
})();