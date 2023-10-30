<div class="sidebar secondary-column" role="complementary">

	<?php if ( have_rows( 'section' ) ): ?>
		<?php while ( have_rows( 'section' ) ) : the_row(); ?>
		<aside class="aside_section">


			<?php if ( get_row_layout() == 'simple_text_area' ) : ?>
				<h3><?php the_sub_field( 'section_title' ); ?></h3>
				<?php the_sub_field( 'section_content' ); ?>
			<?php endif; ?>
		</aside>
		<?php endwhile; ?>
	<?php else: ?>
		<?php // No layouts found ?>
	<?php endif; ?>

</div>