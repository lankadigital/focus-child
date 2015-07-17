jQuery(document).ready(function($) {

	$('[data-toggle="popover"]').popover();

	$('.nav-tabs li a').click(function() {
		var content = $(this).attr('href');
		window.location.hash = content;
		
	});
	
	$(window).bind( 'hashchange', function() {
	
		var content = location.hash.match(/^#?(.*)$/)[1];
        		
		if (content == "kanavaesittely") {
			$('.nav-tabs a[href="#kanava_esittely"').tab('show');
		}
		
		if (content == "viimeisimmat") {
			$('.nav-tabs a[href="#viimeisimmat"').tab('show');
		}
		if (content == "suosituimmat") {
			$('.nav-tabs a[href="#suosituimmat"').tab('show');
		}
		if (content == "sarjat") {
			$('.nav-tabs a[href="#sarjat"').tab('show');
		}
		if (content == "tulossa") {
			$('.nav-tabs a[href="#tulossa"').tab('show');
		}
		return false;
	});
		
	// Trigger a hash change in case the page loads with a hash
	$(window).trigger('hashchange');
		
});