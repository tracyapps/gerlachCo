<?php
$auction_link = get_field( 'auction_link' );

if( $auction_link ) :

	date_default_timezone_set('America/Chicago');
	$today = (int) date('Ymd', strtotime("now"));
	$button_disabled = false;
	$moveout_days_and_times_array = get_field( 'move_out_days', get_the_ID(), false );

	foreach( $moveout_days_and_times_array as $day ) :
		$day_unformatted = (int) $day['field_653f7e980a226'];
		$this_week = ( $today + 07 );

		if ( $this_week > $day_unformatted ) {
			$button_disabled = true;
		} else {
			$button_disabled = false;
		}
	endforeach;

	if( $button_disabled == 1 ) :
		echo '<a class="online_auction_link_button primary_button full disabled">Sorry, this auction has ended</a>';
	else :
		echo '<a class="online_auction_link_button primary_button full" href="' . esc_url( $auction_link ) . '">Bid online for this auction &raquo;</a>';
	endif;

endif;
