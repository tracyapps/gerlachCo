jQuery(document).ready( function($) {

	var $nav = $('div.main-navigation');
	var $btn = $('div.main-navigation button');
	var $vlinks = $('div.main-navigation .links');
	var $hlinks = $('div.main-navigation .hidden-links');

	var numOfItems = 0;
	var totalSpace = 0;
	var breakWidths = [];

	// Get initial state
	$vlinks.children().outerWidth(function(i, w) {
		totalSpace += w;
		numOfItems += 1;
		breakWidths.push(totalSpace);
	});

	var availableSpace, numOfVisibleItems, requiredSpace;

	function check() {

		// Get instant state
		availableSpace = $vlinks.width() - 10;
		numOfVisibleItems = $vlinks.children().length;
		requiredSpace = breakWidths[numOfVisibleItems - 1];

		// There is not enough space
		if (requiredSpace > availableSpace) {
			$vlinks.children().last().prependTo($hlinks);
			numOfVisibleItems -= 2;
			check();
			// There is more than enough space
		} else if (availableSpace > breakWidths[numOfVisibleItems]) {
			$hlinks.children().first().appendTo($vlinks);
			numOfVisibleItems += 1;
		}
		// Update the button accordingly
		$btn.attr("count", numOfItems - numOfVisibleItems);
		if (numOfVisibleItems === numOfItems) {
			$btn.addClass('hidden');
		} else $btn.removeClass('hidden');
	}

	// Window listeners
	$(window).resize(function() {
		check();
	});

	$btn.on('click', function() {
		$hlinks.toggleClass('hidden');
	});

	check();
});