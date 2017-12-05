( function( $ ) {
	var slide_titles = [];

	$( document ).ready( function( ) {
		var slides = $( ".builder-banner-slide:not(.cycle-sentinel) .builder-banner-slide-title" );

		// We don't have slides, just a slide.
		if ( slides.length < 2 ) {
			return;
		}

		slides.each( function( ) {
			slide_titles.push( $( this ).clone() );
		} );

		// We have a different number of slides and slide titles.
		if ( slides.length !== slide_titles.length ) {
			return;
		}

		slide_titles.push( slide_titles.shift() );
		$( ".builder-banner-slide:not(.cycle-sentinel)" ).each( function() {
			$( this ).find( ".builder-banner-inner-content" ).append( "<span class='slide-title-next-container'><span class='slide-title-next'>Next</span> / </span>" );
			$( this ).find( ".builder-banner-inner-content .slide-title-next-container" ).append( slide_titles.shift() );
		} );

		$( ".builder-banner-slide-title" ).on( "click", function() {
			$( ".cycle-slideshow" ).cycle( "next" );
		} );

	} );
}( jQuery, document ) );
