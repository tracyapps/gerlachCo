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

					echo display_current_auctions();
					wp_reset_postdata();

					echo display_past_auctions();
					wp_reset_postdata();

				endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>