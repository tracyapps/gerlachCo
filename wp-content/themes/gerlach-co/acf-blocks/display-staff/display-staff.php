<?php
/**
 * Block template file: /acf-blocks/display-staff/display-staff.php
 *
 * Display Staff Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'display-staff-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-display-staff';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> style-<?php the_field( 'display_style' ); ?>">
	<?php $person = get_field( 'person' ); ?>
	<?php if ( $person ) :


		$person_name = $person->post_title;
		$person_id = $person->ID;

		$person_photo = get_field( 'person_photo', $person_id );
		$size = 'medium';

		$person_position = get_field( 'person_position', $person_id );
		$person_bio = get_field( 'person_short_bio', $person_id );


		if ( $person_photo ) :
			echo '<div class="person_headshot_container">' . wp_get_attachment_image( $person_photo, $size ) . '</div>';
		endif;

		?>
	<div class="person_bio_container">
		<h5>
			<?php echo esc_html( $person_name ); ?>
			<?php if( $person_position ) : ?>
				<span class="job_title"><?php esc_html_e( $person_position ); ?></span>
			<?php endif; ?>
		</h5>
		<?php if( $person_bio ) :
			echo '<p>' . wp_kses_post( $person_bio ) . '</p>';
		endif; ?>

	</div>

	<?php endif; ?>
</div>