<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="main-column" role="main">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


					<section class="auction_dates">
						<h4>Auction Ends</h4>
						<?php the_field( 'auction_ends' ); ?> Starting at <?php the_field( 'starting_at' ); ?>

						<h4>Inspection</h4>
						<?php if ( have_rows( 'inspection_days' ) ) : ?>
							<?php while ( have_rows( 'inspection_days' ) ) : the_row(); ?>
								<?php the_sub_field( 'day' ); ?>
								<?php the_sub_field( 'times' ); ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // No rows found ?>
						<?php endif; ?>

						<h4>Move Out</h4>
						<?php if ( have_rows( 'move_out_days' ) ) : ?>
							<?php while ( have_rows( 'move_out_days' ) ) : the_row(); ?>
								<?php the_sub_field( 'day' ); ?>
								<?php the_sub_field( 'times' ); ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // No rows found ?>
						<?php endif; ?>
					</section>

					<section class="auction_location">
						<h4>Location</h4>
						<?php if ( have_rows( 'location_details' ) ) : ?>
							<?php while ( have_rows( 'location_details' ) ) : the_row(); ?>
								<?php the_sub_field( 'location_name' ); ?>
								<?php the_sub_field( 'location_address' ); ?>
								<?php $map = get_sub_field( 'map' ); ?>
								<?php if ( $map ) : ?>
									<?php echo $map['address']; ?>
									<?php echo $map['lat']; ?>
									<?php echo $map['lng']; ?>
									<?php echo $map['zoom']; ?>
									<?php $optional_data_keys = array('street_number', 'street_name', 'city', 'state', 'post_code', 'country'); ?>
									<?php foreach ( $optional_data_keys as $key ) : ?>
										<?php if ( isset( $map[ $key ] ) ) : ?>
											<?php echo $map[ $key ]; ?>
										<?php endif; ?>
									<?php endforeach; ?>
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

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>