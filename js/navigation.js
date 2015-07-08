/* global Backbone, jQuery, _ */
var wsuNavigation = wsuNavigation || {};

(function (window, Backbone, $, _, wsuNavigation) {
	'use strict';

	wsuNavigation.appView = Backbone.View.extend({
		el: '.wsu-home-navigation',

		// Setup the events used in the overall application view.
		events: {
			'click #mega-menu-labels ul li a': 'toggleNav',
			'click .close-header-drawer': 'toggleNav',
		},

		toggleNav: function(evt){
			evt.preventDefault();
			var $nav_wrapper = $('.header-drawer-wrapper');

			if ( $nav_wrapper.hasClass('header-drawer-wrapper-open') ) {
				$nav_wrapper.slideUp(400);
				$nav_wrapper.removeClass('header-drawer-wrapper-open');
			} else {
				$nav_wrapper.slideDown(400);
				$nav_wrapper.addClass('header-drawer-wrapper-open');
			}
		},
	});
})(window, Backbone, jQuery, _, wsuNavigation);