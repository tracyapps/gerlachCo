/**
 * scripts for the simple mobile menu
 */

jQuery(document).ready( function($) {
	$('#toggle').click( function() {
		//click.preventDefault();
		$("#menu-main-mobile-navigation-animate").toggleClass("open");
	});
});