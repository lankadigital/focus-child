jQuery(document).ready(function($) {

	$('[data-toggle="popover"]').popover();

	$('.nav-tabs li a').click(function() {
		var content = $(this).attr('href');
		if ( content ) {
			window.location.hash = content;
		}
	});
	
	$(window).bind( 'hashchange', function() {
	
		var content = location.hash.match(/^#?(.*)$/)[1];
    
    if ( content != "undefined" || content ) {
			$('.nav-tabs li a[href="#'+ content +'"]').tab('show');
			if ( !$('.nav-tabs > li > a[href="#'+ content +'"]').parent().hasClass( "active" ) ) {
				if ( $('.nav-tabs a[href="#'+ content +'"]').parent().hasClass( "xl-nav" ) ) {
					$('.nav-tabs > li > a[href="#'+ content +'"]').parent().addClass( "active" );
				}
			}
		}
		return false;
	});
		
});