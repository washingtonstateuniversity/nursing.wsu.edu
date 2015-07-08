var wsuNavigation = wsuNavigation || {};

(function($, wsuNavigation){
	if ( undefined !== wsuNavigation.appView ) {
		wsuNavigation.app = new wsuNavigation.appView();
		console.log( 'test' );
	}
})(jQuery, wsuNavigation);