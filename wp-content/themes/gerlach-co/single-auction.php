<?php get_header(); ?>

	<div id="content" class="auction_detail_page">

		<div id="inner-content" class="row">

			<main id="main" class="main-column" role="main">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<section class="auction_dates">
						<div class="auction_end">
							<h4>Auction Ends</h4>
							<?php the_field( 'auction_ends' ); ?> <br />Starting at <?php the_field( 'starting_at' ); ?>
						</div>

						<div class="inspection_days">
							<h4>Inspection</h4>
							<?php if ( have_rows( 'inspection_days' ) ) : ?>
								<?php while ( have_rows( 'inspection_days' ) ) : the_row(); ?>
									<?php the_sub_field( 'day' ); ?>
									<?php the_sub_field( 'times' ); ?>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // No rows found ?>
							<?php endif; ?>
						</div>
						<div class="move_out">
							<h4>Move Out</h4>
							<?php if ( have_rows( 'move_out_days' ) ) : ?>
								<?php while ( have_rows( 'move_out_days' ) ) : the_row(); ?>
								<div>
									<?php the_sub_field( 'day' ); ?>
									<?php the_sub_field( 'times' ); ?>
								</div>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // No rows found ?>
							<?php endif; ?>
						</div>


					</section>

					<section class="auction_location">
						<h4>Location</h4>
						<?php if ( have_rows( 'location_details' ) ) : ?>
							<?php while ( have_rows( 'location_details' ) ) : the_row(); ?>
								<h6><?php the_sub_field( 'location_name' ); ?></h6>
								<address><?php the_sub_field( 'location_address' ); ?></address>
								<?php
								$map = get_sub_field( 'map' );
								$googleAPIkey = get_field( 'google_maps_api_key', 'option' );
								?>
								<?php if ( $map &&  $googleAPIkey ) :

									printf(
											'<iframe 
												class="google_map_embed"
												frameborder="0" style="border:0"
												referrerpolicy="no-referrer-when-downgrade" 
												src="https://www.google.com/maps/embed/v1/%s?key=%s&q=%s&center=%s&zoom=%s"
												allowfullscreen>
											</iframe> ',
										'place',
										esc_html( $googleAPIkey ),
										str_replace( ' ', '+', esc_html( $map['address'] ) ),
										esc_html( $map['lat'] ) . ',' . esc_html( $map['lng'] ),
										esc_html( $map['zoom'] )
									) ?>

								<?php endif; ?>
								<?php the_sub_field( 'notes_instructions' ); ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // No rows found ?>
						<?php endif; ?>
					</section>


				<?php endwhile;
				endif; ?>

			</main> <!-- end #main -->

			<aside class="sidebar secondary-column" role="complementary">

				<?php if ( have_rows( 'item_groups' ) ) : ?>
					<?php while ( have_rows( 'item_groups' ) ) : the_row(); ?>
					<div class="item_group">
						<h6><?php the_sub_field( 'item_group_title' ); ?></h6>
						<?php the_sub_field( 'item_list' ); ?>
					</div>

					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
			</aside>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>