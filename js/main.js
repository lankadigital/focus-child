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
		
	// Trigger a hash change in case the page loads with a hash
	if (window.location.hash) {
		$(window).trigger('hashchange');
	}
	
	 $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1400);
	        return false;
	      }
	    }
	  });
		
});