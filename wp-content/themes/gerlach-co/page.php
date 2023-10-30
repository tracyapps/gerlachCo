<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="full" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post();

					get_template_part( 'parts/loop', 'page' );

					endwhile; endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
