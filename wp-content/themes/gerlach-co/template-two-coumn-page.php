<?php
/*
Template Name: Two Column Page (w/sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="main-column" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post();



						get_template_part( 'parts/loop', 'page' );


				 endwhile; endif; ?>

				<?php
				// if this is the "current auctions" page, we're gonna show the list of auctions
				if( is_page( 'current-auctions' ) ) : ?>
					<section class="current_auctions_list">
						<h2>Current Auctions</h2>

						<?php
						$args = array(
							'post_type' => 'auction',
						);
						$current_auctions = new WP_Query( $args );
						?>

					</section>
					<section class="past_auctions_list">
						<h2>Past Auctions</h2>

					</section>
				<?php endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>