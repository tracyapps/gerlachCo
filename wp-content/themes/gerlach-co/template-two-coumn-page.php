<?php
/*
Template Name: Two Column Page (w/sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row two-column">

			<main id="main" class="main-column" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post();



						get_template_part( 'parts/loop', 'page' );


				 endwhile; endif; ?>

				<?php
				// if this is the "current auctions" page, we're gonna show the list of auctions
				if( is_page( 'auctions' ) ) :
					//echo display_current_auctions();

					date_default_timezone_set('America/Chicago');
					$today = date('Ymd', strtotime("now"));

					$args = array(
						'post_type' => 'auction',
						'post_status' => 'publish',
						'posts_per_page' => '999',
						'meta_query' => array(
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
							),
						),
						'meta_key'          => 'auction_ends',
						'orderby'           => 'meta_value',
						'order'             => 'ASC'
					);
					$current_auctions = new WP_Query( $args );
					?>
					<section class="auctions_list current_auctions">
						<h2 class="section_title">Current Auctions</h2>

						<?php
						if ( $current_auctions->have_posts() ) :
							while ( $current_auctions->have_posts() ) :
								$current_auctions->the_post(); ?>

								<?php if( has_post_thumbnail() ) {
									$featuredimage = get_the_post_thumbnail_url( get_the_ID(), 'full' );
								} else {
									$featuredimage = get_stylesheet_directory_uri() . '/assets/images/sign-header.jpg';
								} ?>

								<article class="auction_listing">
									<header class="auction_listing_header">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
									</header>
									<main class="auction_listing_main">
										<div class="auction_dates">
											<div class="auction_end">
												<h6>Auction ends:</h6>
												<p><?php the_field( 'auction_ends' ); ?> <br />
													Starting at <?php the_field( 'starting_at' ); ?></p>
											</div>
											<div class="inspection_dates">
												<h6>Inspection:</h6>
												<?php if ( have_rows( 'inspection_days' ) ) : ?>
												<ul>
													<?php while ( have_rows( 'inspection_days' ) ) : the_row(); ?>
														<li><?php the_sub_field( 'day' ); ?>: <?php the_sub_field( 'times' ); ?></li>
													<?php endwhile; ?>
												</ul>
												<?php endif; ?>
											</div>
											<div class="move_out_dates">
												<h6>Move out:</h6>
												<?php if ( have_rows( 'move_out_days' ) ) : ?>
												<ul>
													<?php while ( have_rows( 'move_out_days' ) ) : the_row(); ?>
														<li><?php the_sub_field( 'day' ); ?>: <?php the_sub_field( 'times' ); ?></li>
													<?php endwhile; ?>
												</ul>
												<?php endif; ?>

											</div>

										</div>
										<div class="featured_image_container">
											<img src="<?php echo esc_url( $featuredimage ) ?>" />
										</div>
								</main>




								<div class="flex-row">
									<div>
										<h6>auction ends:</h6>
										<?php the_field( 'auction_ends' ); ?>
									</div>
									<div>
										<h6>move out:</h6>
										<?php if ( have_rows( 'move_out_days' ) ) : ?>
											<ul>
												<?php while ( have_rows( 'move_out_days' ) ) : the_row(); ?>
													<li><?php the_sub_field( 'day' ); ?></li>
												<?php endwhile; ?>
											</ul>
										<?php else : ?>
											<?php // No rows found ?>
										<?php endif; ?>
									</div>
								</div>
							</article>

							<?php
							endwhile;
							endif;


						wp_reset_postdata(); ?>



				<?php
					$args = array(
						'post_type' => 'auction',
						'post_status' => 'publish',
						'posts_per_page' => '999',
						'meta_query' => array(
							'relation'	=> 'AND',
							// move out days
							array(
								'key'		=> 'move_out_days_$_day',
								'compare'	=> '<',
								'type'		=> 'NUMERIC',
								'value'		=> $today,
							),
							// auction end date
							/*array(
								'key'		=> 'auction_ends',
								'compare'	=> '<',
								'type'		=> 'NUMERIC',
								'value'		=> $today,
							),*/
						),
						'meta_key'          => 'auction_ends',
						'orderby'           => 'meta_value',
						'order'             => 'DESC'
						);
						$past_auctions = new WP_Query( $args );
						?>
						<section class="auctions_list past_auctions">
							<h2 class="section_title">Past Auctions</h2>

							<?php
							if ( $past_auctions->have_posts() ) :
								while ( $past_auctions->have_posts() ) :
									$past_auctions->the_post(); ?>

									<h6><?php the_title() ?></h6>


								<?php
								endwhile;
							endif;

							wp_reset_postdata();?>

				<?php endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>