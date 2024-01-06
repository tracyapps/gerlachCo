<?php
/*
 * Block template file: /acf-blocks/display-auction/display-auction.php
 *
 * Display Auction Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'display-auction-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-display-auction';
if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
	/* Add styles that use ACF values here */
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> style-<?php the_field( 'style' ); ?>">
	<?php if ( get_field( 'manually_select_auction' ) == 1 ) :
		// display manually selected auctions
		$auctions = get_field( 'auction' );
		foreach( $auctions as $auction ) :
			$auction_id = $auction->ID;

			$auction_ends_day = get_field( 'auction_ends', $auction_id );
			$auction_ends_time = get_field( 'starting_at', $auction_id );

			if( has_post_thumbnail() ) {
				$featuredimage = get_the_post_thumbnail_url( $auction_id, 'full' );
			} else {
				$featuredimage = get_stylesheet_directory_uri() . '/assets/images/sign-header.jpg';
			}

			if ( have_rows( 'inspection_days', $auction_id ) ) :
				$inspection_days_code = '<ul>';
				while ( have_rows( 'inspection_days', $auction_id ) ) : the_row();
					$inspection_days_code .= '<li>' . get_sub_field( 'day' ) . ': ' . get_sub_field( 'times' ) . '</li>';
				endwhile;
				$inspection_days_code .= '</ul>';
			endif;

			if ( have_rows( 'move_out_days', $auction_id ) ) :
				$move_out_days_code = '<ul>';
				while ( have_rows( 'move_out_days', $auction_id ) ) : the_row();
					$move_out_days_code .= '<li>' . get_sub_field( 'day' ) . ': ' . get_sub_field( 'times' ) . '</li>';
				endwhile;
				$move_out_days_code .= '</ul>';
			endif;

			printf(
					'
					<article class="auction_listing">
						<header class="auction_listing_header">
							<h3><a href="%s">%s</a></h3>
						</header>
						<main class="auction_listing_main">
							<div class="auction_dates">
								<div class="auction_end">
									<h6>Auction ends:</h6>
									<p>%s<br />Starting at %s</p>
								</div>
								<div class="inspection_dates">
									<h6>Inspection:</h6>
									%s
								</div>
								<div class="move_out_dates">
									<h6>Move out:</h6>
									%s
								</div>
							</div>
							<div class="featured_image_container">
								<img src="%s">
							</div>
						</main>
					</article>
					',
				get_the_permalink( $auction_id ),
				get_the_title( $auction_id ),
				esc_html( $auction_ends_day ),
				esc_html( $auction_ends_time ),
				wp_kses_post( $inspection_days_code ),
				wp_kses_post( $move_out_days_code ),
				esc_url( $featuredimage )
			);


		endforeach;
	else :
		// query for automatic display
		if ( have_rows( 'auto_display_settings' ) ) :
			while ( have_rows( 'auto_display_settings' ) ) : the_row();
				$heading_text = get_sub_field( 'heading_text' );
				$display_max = (int) get_sub_field( 'maximum_to_display' );
				date_default_timezone_set('America/Chicago');
				$today = date('Ymd', strtotime("now"));

				if ( get_sub_field( 'display_past_auctions' ) == 0 ) :
					// additional meta query to hide auctions in the past
					$meta_query = array(
						'relation'	=> 'OR',
						// move out days
						array(
							'key'		=> 'move_out_days_$_day',
							'compare'	=> '>=',
							'type'		=> 'NUMERIC',
							'value'		=> $today,
						),
						// auction end date
						array(
							'key'		=> 'auction_ends',
							'compare'	=> '>=',
							'type'		=> 'NUMERIC',
							'value'		=> $today,
						)
					);
				else :
					$meta_query = '';
				endif;

				$args = array(
					'post_type' => 'auction',
					'post_status' => 'publish',
					'posts_per_page' => $display_max,
					'meta_query' => $meta_query,
					'meta_key'          => 'auction_ends',
					'orderby'           => 'meta_value',
					'order'             => 'DESC'
				);

				$auction_query = new WP_Query( $args );

				if( $heading_text ) {
					echo '<h3>' . esc_html( $heading_text ) . '</h3>';
				}

				// start auction display from query
				if ( $auction_query->have_posts() ) :
					echo '<section class="auctions_list ' . get_field( 'style' ) . '_container">';
					while ( $auction_query->have_posts() ) :
						$auction_query->the_post();

						$auction_ends_day = get_field( 'auction_ends', get_the_ID() );
						$auction_ends_time = get_field( 'starting_at', get_the_ID() );
						 ?>
						<article class="auction_listing">

							<header class="auction_listing_header">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							</header>

							<?php if ( get_sub_field( 'show_featured_image' ) == 1 ) :
								// if "show featured image" is true

								if( has_post_thumbnail() ) {
									$featuredimage = get_the_post_thumbnail_url( get_the_ID(), 'full' );
								} else {
									$featuredimage = get_stylesheet_directory_uri() . '/assets/images/sign-header.jpg';
								}

								printf(
										'
										<div class="featured_image_container">
											<a href="%s"><img src="%s"></a>
										</div>
										',
									get_the_permalink(),
									esc_url( $featuredimage )
								);
								// END if "show featured image" is true
							endif;?>
							<div class="auction_details">
								<div class="auction_dates">
									<div class="auction_end">
										<h6>Auction ends:</h6>
										<p><?php esc_html_e( $auction_ends_day ) ?><br />Starting at <?php esc_html_e( $auction_ends_time ); ?></p>
									</div>
								<?php if ( get_sub_field( 'show_inspection_dates' ) == 1 ) :
									// if "show inspection dates" is true ?>
									<div class="inspection_dates">
										<h6>Inspection:</h6>
										<?php if ( have_rows( 'inspection_days', get_the_ID() ) ) :
											echo '<ul>';
											while ( have_rows( 'inspection_days', get_the_ID() ) ) : the_row();
												echo  '<li>' . get_sub_field( 'day' ) . ': ' . get_sub_field( 'times' ) . '</li>';
											endwhile;
											echo '</ul>';
										endif; ?>
									</div>

									<?php // END if "show inspection dates" is true
								endif; ?>

								<?php if ( get_sub_field( 'show_move_out_dates' ) == 1 ) :
									// if "show move out dates" is true ?>
									<div class="move_out_dates">
										<h6>Move out:</h6>
										<?php if ( have_rows( 'move_out_days', get_the_ID() ) ) :
											echo '<ul>';
											while ( have_rows( 'move_out_days', get_the_ID() ) ) : the_row();
												echo  '<li>' . get_sub_field( 'day' ) . ': ' . get_sub_field( 'times' ) . '</li>';
											endwhile;
											echo '</ul>';
										endif; ?>
									</div>

									<?php // END if "show move out dates" is true
								endif; ?>
							</div>

						</article>
					<?php endwhile;
					echo '</section>';
				endif;
				// query, the end.

			endwhile; // end if the ACF group have_rows()
		endif;

	// now we end auto display extravaganza
	endif; ?>
</div>