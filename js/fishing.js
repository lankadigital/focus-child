jQuery(document).ready(function($) {

	$('[data-toggle="popover"]').popover();

	$('.nav-tabs li a').click(function() {
		var content = $(this).attr('href');
		window.location.hash = content;
	});
	
	window.addEventListener( 'hashchange', function() {
	
		var content = location.hash.match(/^#?(.*)$/)[1];
        		
		if (content == "kanavaesittely") {
			$('.nav-tabs a[href="#kanavaesittely"').tab('show');
//			if ( !$('.nav-tabs a[href="#kanavaesittely"').parent().hasClass( "active" ) ) {
//				$('.nav-tabs a[href="#kanavaesittely"').parent().addClass( "active" );
//			}
		}
		
		if (content == "viimeisimmat") {
			$('.nav-tabs a[href="#viimeisimmat"').tab('show');
//			if ( !$('.nav-tabs a[href="#viimeisimmat"').parent().hasClass( "active" ) ) {
//				$('.nav-tabs a[href="#viimeisimmat"').parent().addClass( "active" );
//			}
		}
		if (content == "suosituimmat") {
			$('.nav-tabs a[href="#suosituimmat"').tab('show');
//			if ( !$('.nav-tabs a[href="#suosituimmat"').parent().hasClass( "active" ) ) {
//				$('.nav-tabs a[href="#suosituimmat"').parent().addClass( "active" );
//			}
		}
		if (content == "sarjat") {
			$('.nav-tabs a[href="#sarjat"').tab('show');
//			if ( !$('.nav-tabs a[href="#sarjat"').parent().hasClass( "active" ) ) {
//				$('.nav-tabs a[href="#sarjat"').parent().addClass( "active" );
//			}
		}
		if (content == "tulossa") {
			$('.nav-tabs a[href="#tulossa"').tab('show');
//			if ( !$('.nav-tabs a[href="#tulossa"').parent().hasClass( "active" ) ) {
//				$('.nav-tabs a[href="#tulossa"').parent().addClass( "active" );
//			}
		}
		return false;
	});
		
	// Trigger a hash change in case the page loads with a hash
	$(window).trigger('hashchange');
		
});