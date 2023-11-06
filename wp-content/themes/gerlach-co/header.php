<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !function_exists( 'has_site_icon' ) || !has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon"/>
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
	/*
	 *  ** start THEME IMPORT - css variables **
	 * */

	include( 'assets/css/variables/theme-gerlach-co.php' );
	include( 'assets/css/variables/fonts-gerlach-co.php' );
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="full_page_sticky_container">
	<header class="site-header" role="banner">
		<div class="site-header-content-container">
			<div class="site-logo container">
				<?php
				$logo_image = get_field( 'site_logo', 'option' );
				$advanced_override = get_field( 'advanced_logo', 'option' );

				if ( '' != $advanced_override && in_array("advanced_yes", $advanced_override) ) :
					$svg_logo_code = get_field( 'svg_code_embed', 'option' );
					printf(
						'<a href="%s" title="%s home">%s</a>',
						esc_url( home_url( '/' ) ),
						get_bloginfo( 'name' ),
						$svg_logo_code
					);
				elseif ( '' != $logo_image ):
					printf(
						'<a href="%s"><img src="%s" alt="%s logo" /></a>',
						esc_url( home_url( '/' ) ),
						esc_url( $logo_image ),
						get_bloginfo( 'name' )
					);
				else:
					?>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<span class="screen-reader-text"><?php echo get_bloginfo( 'name' ); ?></span>
							<svg version="1.1" id="GERLACH__COMPANIES__INC--logo"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1220.9 598.2"  xml:space="preserve">
								<g id="tag">
									<path d="M220.9,404.4l0.2-0.4c0.5-1,1-1.8,1.5-2.2c0.5-0.4,1.2-0.7,2-0.7s1.7,0.3,2.8,0.8c1,0.5,1.8,0.7,2.4,0.7
		c0.6,0,1.1-0.1,1.3-0.4l0.7-0.8c0.2-0.2,0.3-0.3,0.5-0.3c0.3,0,0.7,0.3,1.2,0.9c-0.6,1.1-1.2,1.9-1.7,2.4c-0.6,0.5-1.3,0.7-2.1,0.7
		c-0.7,0-1.6-0.3-2.9-0.9c-1-0.4-1.7-0.6-2.3-0.6c-0.2,0-0.4,0.1-0.7,0.2s-0.4,0.2-0.5,0.3l-0.7,1c-0.1,0.2-0.3,0.3-0.4,0.3
		C221.7,405.4,221.3,405.1,220.9,404.4z"/>
									<g>
										<path d="M264.9,395l-0.3,2.4h-6.3l-0.5,4.5h6.3l-0.3,2.2h-6.3l-0.7,5.8h6.3l-0.3,2.4h-8.9L256,395H264.9z"/>
										<path d="M282.1,397.2l-1.7,1.6c-0.8-1.2-1.7-1.8-2.8-1.8c-0.8,0-1.4,0.2-1.9,0.7s-0.7,1.1-0.7,1.8c0,0.6,0.2,1.1,0.5,1.5
			c0.2,0.2,0.4,0.4,0.8,0.7c0.3,0.2,0.7,0.5,1.2,0.8c1.5,0.9,2.5,1.6,3,2.3c0.5,0.7,0.8,1.6,0.8,2.8c0,1.5-0.5,2.7-1.5,3.6
			s-2.2,1.4-3.8,1.4c-1.3,0-2.4-0.3-3.2-0.8c-0.4-0.3-0.9-0.6-1.2-1.1c-0.4-0.4-0.8-1-1.1-1.6l1.9-1.3c0.5,0.9,1,1.6,1.5,1.9
			s1.2,0.5,2,0.5c0.9,0,1.6-0.2,2.1-0.7s0.8-1.2,0.8-2c0-0.6-0.2-1.1-0.6-1.5c-0.2-0.2-0.5-0.5-0.8-0.7c-0.4-0.3-0.8-0.6-1.4-0.9
			c-1.3-0.8-2.2-1.5-2.7-2.2s-0.7-1.6-0.7-2.6c0-1.4,0.5-2.5,1.4-3.5c1-0.9,2.2-1.4,3.7-1.4c1,0,1.8,0.2,2.5,0.6
			C280.7,395.6,281.4,396.2,282.1,397.2z"/>
										<path d="M295.6,397.4l-1.8,14.8h-2.6l1.8-14.8h-4.1l0.3-2.4h10.6l-0.3,2.4H295.6z"/>
										<path d="M307.1,408.1l-2.1,4h-2.8l9.5-18.4l5.9,18.4H315l-1.2-4H307.1z M308.2,405.9h4.9l-1.8-6.1L308.2,405.9z"/>
										<path d="M326.7,395h3.2c1,0,1.8,0.1,2.4,0.3c0.6,0.2,1.1,0.6,1.5,1.1c0.7,0.8,1,1.8,1,2.9c0,1.7-0.8,3.1-2.5,4c2,0.5,3,1.8,3,3.8
			c0,0.8-0.2,1.6-0.5,2.4c-0.3,0.7-0.8,1.3-1.4,1.8c-0.5,0.4-1,0.6-1.6,0.7c-0.3,0.1-0.7,0.1-1.1,0.1s-1,0.1-1.6,0.1h-4.5L326.7,395
			z M328,404.5l-0.6,5.3h1.7c1.3,0,2.2-0.2,2.6-0.5c0.7-0.5,1.1-1.3,1.1-2.4c0-0.4-0.1-0.8-0.2-1.1s-0.3-0.5-0.6-0.7
			c-0.3-0.2-0.6-0.3-1-0.4s-0.9-0.1-1.5-0.1L328,404.5L328,404.5z M328.9,397.4l-0.6,5.1h0.7c2.2,0,3.3-1,3.3-3.1
			c0-1.4-0.8-2.1-2.5-2.1h-0.9V397.4z"/>
										<path d="M347.4,395l-1.8,14.8h4.9l-0.3,2.4h-7.4l2.1-17.2L347.4,395L347.4,395z"/>
										<path d="M362.1,395l-2.1,17.2h-2.6l2.1-17.2H362.1z"/>
										<path d="M380.2,397.2l-1.7,1.6c-0.8-1.2-1.7-1.8-2.8-1.8c-0.8,0-1.4,0.2-1.9,0.7s-0.7,1.1-0.7,1.8c0,0.6,0.2,1.1,0.5,1.5
			c0.2,0.2,0.4,0.4,0.8,0.7c0.3,0.2,0.7,0.5,1.2,0.8c1.5,0.9,2.5,1.6,3,2.3c0.5,0.7,0.8,1.6,0.8,2.8c0,1.5-0.5,2.7-1.5,3.6
			s-2.2,1.4-3.8,1.4c-1.3,0-2.4-0.3-3.2-0.8c-0.4-0.3-0.9-0.6-1.2-1.1c-0.4-0.4-0.8-1-1.1-1.6l1.9-1.3c0.5,0.9,1,1.6,1.5,1.9
			s1.2,0.5,2,0.5c0.9,0,1.6-0.2,2.1-0.7s0.8-1.2,0.8-2c0-0.6-0.2-1.1-0.6-1.5c-0.2-0.2-0.5-0.5-0.8-0.7c-0.4-0.3-0.8-0.6-1.4-0.9
			c-1.3-0.8-2.2-1.5-2.7-2.2s-0.7-1.6-0.7-2.6c0-1.4,0.5-2.5,1.4-3.5c1-0.9,2.2-1.4,3.7-1.4c1,0,1.8,0.2,2.5,0.6
			C378.7,395.6,379.5,396.2,380.2,397.2z"/>
										<path d="M401,395l-2.1,17.2h-2.6l1-8.4h-7.1l-1,8.4h-2.6l2.1-17.2h2.5l-0.8,6.7h7.1l0.8-6.7H401z"/>
										<path d="M418.9,395l-0.3,2.4h-6.3l-0.5,4.5h6.3l-0.3,2.2h-6.3l-0.7,5.8h6.3l-0.3,2.4h-8.9L410,395H418.9z"/>
										<path d="M427.1,395h3.5c1.3,0,2.3,0.1,3,0.2s1.4,0.4,2,0.7c1.1,0.6,2,1.6,2.7,2.9c0.6,1.3,1,2.7,1,4.3c0,1.7-0.4,3.3-1.1,4.7
			c-0.4,0.7-0.8,1.3-1.3,1.9c-0.5,0.5-1,1-1.7,1.4s-1.5,0.7-2.3,0.9c-0.4,0.1-0.9,0.1-1.5,0.2c-0.6,0-1.3,0.1-2.1,0.1h-4.4
			L427.1,395z M429.3,397.4l-1.5,12.5h1.9c1.4,0,2.5-0.1,3.3-0.4s1.5-0.8,2-1.5c1-1.3,1.5-2.9,1.5-4.8c0-1.2-0.2-2.2-0.7-3.1
			s-1.1-1.6-1.9-2s-1.9-0.6-3.3-0.6h-1.3V397.4z"/>
										<path d="M466.6,395l-2.1,17.2H462l1.8-14.8h-3.4l1.2-2.4L466.6,395L466.6,395z"/>
										<path d="M481.4,406.2c-0.4,0.1-0.8,0.2-1.2,0.2c-1.6,0-2.8-0.5-3.7-1.4c-0.9-0.9-1.4-2.2-1.4-3.8c0-1.8,0.6-3.3,1.8-4.6
			c1.2-1.2,2.7-1.9,4.5-1.9c1.6,0,2.9,0.5,4,1.6s1.6,2.4,1.6,4s-0.7,3.4-2.2,5.4l-5.4,7.2l-1.9-1.5L481.4,406.2z M484.5,400.3
			c0-1-0.3-1.8-0.9-2.4s-1.4-0.9-2.3-0.9c-1.1,0-2,0.4-2.7,1.2c-0.7,0.8-1.1,1.8-1.1,2.9c0,0.9,0.3,1.7,0.9,2.3
			c0.6,0.6,1.4,0.9,2.3,0.9c1.1,0,2-0.4,2.7-1.1C484.2,402.3,484.5,401.4,484.5,400.3z"/>
										<path d="M501.5,409l-0.4,3.2h-2.6l0.4-3.2h-8l12.5-15.9l-1.7,13.7h1.6L503,409L501.5,409L501.5,409z M499.2,406.8l0.7-6.1
			l-4.7,6.1H499.2z"/>
										<path d="M517.7,395l-2.1,17.2H513l1.8-14.8h-3.4l1.2-2.4L517.7,395L517.7,395z"/>
									</g>
									<path d="M541.3,404.4l0.2-0.4c0.5-1,1-1.8,1.5-2.2c0.5-0.4,1.2-0.7,2-0.7s1.7,0.3,2.8,0.8c1,0.5,1.8,0.7,2.4,0.7
		c0.6,0,1.1-0.1,1.3-0.4l0.7-0.8c0.2-0.2,0.3-0.3,0.5-0.3c0.3,0,0.7,0.3,1.2,0.9c-0.6,1.1-1.2,1.9-1.7,2.4c-0.6,0.5-1.3,0.7-2.1,0.7
		c-0.7,0-1.6-0.3-2.9-0.9c-1-0.4-1.7-0.6-2.3-0.6c-0.2,0-0.4,0.1-0.7,0.2s-0.4,0.2-0.5,0.3l-0.7,1c-0.1,0.2-0.3,0.3-0.4,0.3
		C542.1,405.4,541.7,405.1,541.3,404.4z"/>
								</g>
								<g id="logomark__image">
									<g id="FRED__GREYSCALE">
										<image style="overflow:visible; enable-background:new;" xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/fred.png" >
										</image>
									</g>
								</g>
								<g id="text__shadow">
									<g>
										<g>
											<rect x="610.9" y="356.5" class="shadow_color" width="80.2" height="5.3"/>
										</g>
										<g>
											<g>
												<path class="shadow_color" d="M109.4,258h39.9c0,4.1-0.2,7.8-0.5,11.2c-0.3,3.4-1,6.5-2.1,9.3c-1.4,4-3.4,7.6-5.9,10.7s-5.4,5.7-8.7,7.8
					c-3.3,2.1-7,3.7-10.9,4.8c-4,1.1-8.1,1.6-12.5,1.6c-6,0-11.5-1-16.5-3s-9.2-4.8-12.8-8.4c-3.6-3.6-6.3-7.9-8.3-12.9
					s-3-10.6-3-16.7c0-6,1-11.6,2.9-16.6c2-5,4.7-9.3,8.3-12.9c3.6-3.6,7.9-6.3,13-8.3s10.7-3,16.9-3c8.1,0,15.2,1.7,21.3,5.2
					c6.1,3.5,10.9,8.9,14.5,16.2l-19.1,7.9c-1.8-4.2-4.1-7.3-6.9-9.1s-6.1-2.8-9.7-2.8c-3,0-5.7,0.6-8.2,1.7s-4.6,2.7-6.3,4.8
					c-1.7,2.1-3.1,4.6-4.1,7.5s-1.5,6.2-1.5,9.9c0,3.3,0.4,6.3,1.3,9.1c0.9,2.8,2.1,5.2,3.9,7.3c1.7,2.1,3.8,3.6,6.4,4.8
					c2.5,1.1,5.5,1.7,8.8,1.7c2,0,3.9-0.2,5.7-0.7c1.8-0.4,3.5-1.2,5-2.2s2.7-2.3,3.6-3.9c1-1.6,1.6-3.5,2-5.7h-16.5
					C109.4,273.3,109.4,258,109.4,258z"/>
												<path class="shadow_color" d="M226.1,241h-23.9v12.9h22.6v17h-22.6v13.3h23.9v17h-44V224h44V241z"/>
												<path class="shadow_color" d="M327,301.4h-25l-19.2-29.8v29.8h-20.1V224H294c4.3,0,8.1,0.6,11.3,1.9c3.2,1.3,5.9,3,8,5.2s3.7,4.7,4.7,7.6
					c1.1,2.9,1.6,6,1.6,9.2c0,5.9-1.4,10.7-4.3,14.3c-2.8,3.7-7,6.1-12.6,7.4L327,301.4z M282.8,258.6h3.8c4,0,7-0.8,9.1-2.5
					c2.1-1.6,3.2-4,3.2-7.1s-1.1-5.4-3.2-7.1c-2.1-1.6-5.2-2.5-9.1-2.5h-3.8V258.6z"/>
												<path class="shadow_color" d="M375.5,224v60.4h24.1v17h-44.2V224H375.5z"/>
												<path class="shadow_color" d="M480.5,287.9h-28.7l-4.6,13.4h-21.5l29.5-77.4h22l29.5,77.4h-21.5L480.5,287.9z M475.2,272.6l-9-25.8
					l-9,25.8H475.2z"/>
												<path class="shadow_color" d="M584.2,249.8c-4.7-5.7-10.4-8.5-17.2-8.5c-3,0-5.8,0.5-8.4,1.6c-2.6,1.1-4.8,2.6-6.6,4.5s-3.3,4.1-4.4,6.7
					c-1.1,2.6-1.6,5.4-1.6,8.4c0,3.1,0.5,5.9,1.6,8.5s2.5,4.9,4.4,6.8s4.1,3.4,6.6,4.5s5.3,1.6,8.2,1.6c6.4,0,12.2-2.7,17.4-8.2
					v23.8l-2.1,0.7c-3.1,1.1-6,1.9-8.6,2.4c-2.7,0.5-5.3,0.8-7.9,0.8c-5.3,0-10.5-1-15.3-3c-4.9-2-9.2-4.9-12.9-8.5
					c-3.7-3.7-6.7-8-9-13s-3.4-10.5-3.4-16.5s1.1-11.4,3.3-16.4s5.2-9.2,8.9-12.8s8.1-6.4,13-8.4s10.1-3,15.5-3c3.1,0,6.1,0.3,9.1,1
					s6.1,1.7,9.4,3V249.8z"/>
												<path class="shadow_color" d="M640.4,253.8h29.1V224h20.1v77.4h-20.1v-31.9h-29.1v31.9h-20.1V224h20.1V253.8z"/>
											</g>
											<g>
												<path class="shadow_color" d="M110.5,335.4c-2.9-3.5-6.4-5.2-10.6-5.2c-1.9,0-3.6,0.3-5.1,1c-1.6,0.7-2.9,1.6-4.1,2.7
					c-1.1,1.2-2,2.5-2.7,4.1s-1,3.3-1,5.2c0,1.9,0.3,3.6,1,5.2s1.6,3,2.7,4.2c1.2,1.2,2.5,2.1,4.1,2.8c1.6,0.7,3.2,1,5,1
					c4,0,7.5-1.7,10.7-5V366l-1.3,0.4c-1.9,0.7-3.7,1.2-5.3,1.5c-1.6,0.3-3.3,0.5-4.9,0.5c-3.3,0-6.4-0.6-9.4-1.9
					c-3-1.2-5.7-3-8-5.2c-2.3-2.3-4.1-4.9-5.5-8s-2.1-6.5-2.1-10.1c0-3.7,0.7-7,2.1-10.1c1.4-3,3.2-5.7,5.5-7.9c2.3-2.2,5-3.9,8-5.2
					c3-1.2,6.2-1.9,9.5-1.9c1.9,0,3.8,0.2,5.6,0.6c1.8,0.4,3.8,1,5.8,1.9C110.5,320.6,110.5,335.4,110.5,335.4z"/>
												<path class="shadow_color" d="M130.5,343.3c0-3.5,0.7-6.8,2-9.9s3.1-5.7,5.4-8c2.3-2.3,5.1-4,8.3-5.3s6.8-1.9,10.6-1.9s7.4,0.6,10.6,1.9
					c3.2,1.3,6,3.1,8.4,5.3s4.2,4.9,5.5,8s2,6.3,2,9.9s-0.7,6.8-2,9.9s-3.1,5.7-5.5,8s-5.1,4.1-8.4,5.3c-3.2,1.3-6.8,1.9-10.6,1.9
					c-3.9,0-7.4-0.6-10.6-1.9c-3.2-1.3-6-3.1-8.3-5.3c-2.3-2.3-4.1-4.9-5.4-8C131.1,350.1,130.5,346.8,130.5,343.3z M143.4,343.3
					c0,1.9,0.4,3.6,1.1,5.2c0.7,1.6,1.7,3,2.9,4.2s2.6,2.1,4.3,2.7c1.6,0.7,3.3,1,5.1,1s3.5-0.3,5.1-1s3-1.6,4.3-2.7
					c1.2-1.2,2.2-2.6,2.9-4.2s1.1-3.3,1.1-5.2c0-1.9-0.4-3.6-1.1-5.2c-0.7-1.6-1.7-3-2.9-4.2s-2.7-2.1-4.3-2.7c-1.6-0.7-3.3-1-5.1-1
					s-3.5,0.3-5.1,1s-3,1.6-4.3,2.7c-1.2,1.2-2.2,2.6-2.9,4.2C143.8,339.6,143.4,341.4,143.4,343.3z"/>
												<path class="shadow_color" d="M199.9,367l8.1-47.6h12.2l9.5,25.4l9.5-25.4h12.2l8.1,47.6h-12.3l-4.1-27.4L231.9,367H227l-10.7-27.4
					l-4.1,27.4H199.9z"/>
												<path class="shadow_color" d="M292,367h-12.4v-47.6h19.7c5.3,0,9.4,1.4,12.3,4.2c2.8,2.8,4.3,6.7,4.3,11.7s-1.4,9-4.3,11.7
					c-2.8,2.8-6.9,4.2-12.3,4.2H292V367z M292,341.3h4.1c4.5,0,6.8-2,6.8-5.9c0-4-2.3-5.9-6.8-5.9H292V341.3z"/>
												<path class="shadow_color" d="M359.9,358.8h-17.7l-2.8,8.3h-13.2l18.1-47.6h13.5L376,367h-13.2L359.9,358.8z M356.6,349.4l-5.6-15.8
					l-5.6,15.8H356.6z"/>
												<path class="shadow_color" d="M391.1,367v-47.6h12.4l22.8,29.1v-29.1h12.3V367h-12.3l-22.8-29v29H391.1z"/>
												<path class="shadow_color" d="M474.5,319.5V367h-12.4v-47.6h12.4V319.5z"/>
												<path class="shadow_color" d="M525.1,329.9h-14.7v8h13.9v10.5h-13.9v8.2h14.7V367H498v-47.6h27.1V329.9z"/>
												<path class="shadow_color" d="M573.7,331.6c-1.3-1.1-2.7-1.9-4-2.4s-2.7-0.8-3.9-0.8c-1.6,0-2.9,0.4-3.9,1.1s-1.5,1.7-1.5,3
					c0,0.8,0.3,1.5,0.8,2.1c0.5,0.5,1.2,1,2,1.4s1.7,0.7,2.8,1c1,0.3,2.1,0.6,3.1,0.9c4,1.3,7,3.1,8.9,5.4s2.8,5.2,2.8,8.8
					c0,2.4-0.4,4.6-1.2,6.6s-2,3.7-3.6,5.1s-3.5,2.5-5.8,3.3s-4.9,1.2-7.8,1.2c-6,0-11.6-1.8-16.7-5.4l5.3-10
					c1.9,1.6,3.7,2.9,5.5,3.7c1.8,0.8,3.6,1.2,5.4,1.2c2,0,3.5-0.5,4.5-1.4s1.5-2,1.5-3.2c0-0.7-0.1-1.3-0.4-1.9
					c-0.3-0.5-0.7-1-1.3-1.5c-0.6-0.4-1.4-0.9-2.3-1.2c-0.9-0.4-2.1-0.8-3.4-1.3c-1.6-0.5-3.2-1.1-4.7-1.7s-2.9-1.4-4.1-2.4
					c-1.2-1-2.2-2.3-2.9-3.8s-1.1-3.5-1.1-5.8c0-2.4,0.4-4.5,1.2-6.4s1.9-3.6,3.3-4.9c1.4-1.4,3.1-2.4,5.2-3.2
					c2-0.8,4.3-1.1,6.8-1.1c2.4,0,4.8,0.3,7.4,1c2.6,0.7,5,1.6,7.4,2.9L573.7,331.6z"/>
											</g>
											<g>
												<path class="shadow_color" d="M617.9,319.3v26.9h-7v-26.9H617.9z"/>
												<path class="shadow_color" d="M631.2,346.2v-26.9h7l12.9,16.4v-16.4h7v26.9h-7l-12.9-16.4v16.4H631.2z"/>
												<path class="shadow_color" d="M691.1,328.3c-1.6-2-3.6-3-6-3c-1,0-2,0.2-2.9,0.6s-1.7,0.9-2.3,1.6s-1.1,1.4-1.5,2.3s-0.6,1.9-0.6,2.9
					c0,1.1,0.2,2.1,0.6,3c0.4,0.9,0.9,1.7,1.5,2.4c0.7,0.7,1.4,1.2,2.3,1.6c0.9,0.4,1.8,0.6,2.9,0.6c2.2,0,4.2-1,6-2.9v8.3l-0.7,0.2
					c-1.1,0.4-2.1,0.7-3,0.8c-0.9,0.2-1.8,0.3-2.7,0.3c-1.9,0-3.6-0.4-5.3-1.1s-3.2-1.7-4.5-3s-2.3-2.8-3.1-4.5s-1.2-3.7-1.2-5.7
					s0.4-4,1.2-5.7s1.8-3.2,3.1-4.5c1.3-1.2,2.8-2.2,4.5-2.9c1.7-0.7,3.5-1.1,5.4-1.1c1.1,0,2.1,0.1,3.2,0.3c1,0.2,2.1,0.6,3.3,1.1
					v8.4H691.1z"/>
											</g>
										</g>
									</g>
								</g>
								<g id="GERLACH__COMPANIES">
									<g id="GERLACH">
										<path class="main_text_color" d="M113.3,254.1h39.9c0,4.1-0.2,7.8-0.5,11.2c-0.3,3.4-1,6.5-2.1,9.3c-1.4,4-3.4,7.6-5.9,10.7s-5.4,5.7-8.7,7.8
			c-3.3,2.1-7,3.7-10.9,4.8c-4,1.1-8.1,1.6-12.5,1.6c-6,0-11.5-1-16.5-3s-9.2-4.8-12.8-8.4c-3.6-3.6-6.3-7.9-8.3-12.9
			s-3-10.6-3-16.7c0-6,1-11.6,2.9-16.6c2-5,4.7-9.3,8.3-12.9c3.6-3.6,7.9-6.3,13-8.3s10.7-3,16.9-3c8.1,0,15.2,1.7,21.3,5.2
			c6.1,3.5,10.9,8.9,14.5,16.2l-19.1,7.9c-1.8-4.2-4.1-7.3-6.9-9.1s-6.1-2.8-9.7-2.8c-3,0-5.7,0.6-8.2,1.7s-4.6,2.7-6.3,4.8
			c-1.7,2.1-3.1,4.6-4.1,7.5s-1.5,6.2-1.5,9.9c0,3.3,0.4,6.3,1.3,9.1c0.9,2.8,2.1,5.2,3.9,7.3c1.7,2.1,3.8,3.6,6.4,4.8
			c2.5,1.1,5.5,1.7,8.8,1.7c2,0,3.9-0.2,5.7-0.7c1.8-0.4,3.5-1.2,5-2.2s2.7-2.3,3.6-3.9c1-1.6,1.6-3.5,2-5.7h-16.5L113.3,254.1
			L113.3,254.1z"/>
										<path class="main_text_color" d="M230.1,237h-23.9v13h22.6v17h-22.6v13.3h23.9v17h-44V220h44V237z"/>
										<path class="main_text_color" d="M331,297.4h-25.1l-19.2-29.8v29.8h-20.1V220h31.3c4.3,0,8.1,0.6,11.3,1.9c3.2,1.3,5.9,3,8,5.2
			s3.7,4.7,4.7,7.6c1.1,2.9,1.6,6,1.6,9.2c0,5.9-1.4,10.7-4.3,14.3c-2.8,3.7-7,6.1-12.6,7.4L331,297.4z M286.7,254.6h3.8
			c4,0,7-0.8,9.1-2.5c2.1-1.6,3.2-4,3.2-7.1s-1.1-5.4-3.2-7.1c-2.1-1.6-5.2-2.5-9.1-2.5h-3.8V254.6z"/>
										<path class="main_text_color" d="M379.5,220v60.4h24.1v17h-44.2V220H379.5z"/>
										<path class="main_text_color" d="M484.5,284h-28.7l-4.6,13.4h-21.5l29.5-77.4h22l29.5,77.4h-21.5L484.5,284z M479.1,268.7l-9-25.8l-9,25.8
			H479.1z"/>
										<path class="main_text_color" d="M588.2,245.9c-4.7-5.7-10.4-8.5-17.2-8.5c-3,0-5.8,0.5-8.4,1.6c-2.6,1.1-4.8,2.6-6.6,4.5s-3.3,4.1-4.4,6.7
			c-1.1,2.6-1.6,5.4-1.6,8.4c0,3.1,0.5,5.9,1.6,8.5s2.5,4.9,4.4,6.8s4.1,3.4,6.6,4.5s5.3,1.6,8.2,1.6c6.4,0,12.2-2.7,17.4-8.2v23.8
			l-2.1,0.7c-3.1,1.1-6,1.9-8.6,2.4c-2.7,0.5-5.3,0.8-7.9,0.8c-5.3,0-10.5-1-15.3-3c-4.9-2-9.2-4.9-12.9-8.5c-3.7-3.7-6.7-8-9-13
			s-3.4-10.5-3.4-16.5s1.1-11.4,3.3-16.4s5.2-9.2,8.9-12.8s8.1-6.4,13-8.4s10.1-3,15.5-3c3.1,0,6.1,0.3,9.1,1s6.1,1.7,9.4,3V245.9z"
										/>
										<path class="main_text_color" d="M644.3,249.9h29.1V220h20.1v77.4h-20.1v-31.9h-29.1v31.9h-20.1V220h20.1V249.9z"/>
									</g>
									<g id="COMPANIES">
										<path class="main_text_color" d="M114.5,331.4c-2.9-3.5-6.4-5.2-10.6-5.2c-1.9,0-3.6,0.3-5.1,1c-1.6,0.7-2.9,1.6-4.1,2.7
			c-1.1,1.2-2,2.5-2.7,4.1s-1,3.3-1,5.2c0,1.9,0.3,3.6,1,5.2s1.6,3,2.7,4.2c1.2,1.2,2.5,2.1,4.1,2.8c1.6,0.7,3.2,1,5,1
			c4,0,7.5-1.7,10.7-5V362l-1.3,0.4c-1.9,0.7-3.7,1.2-5.3,1.5c-1.6,0.3-3.3,0.5-4.9,0.5c-3.3,0-6.4-0.6-9.4-1.9c-3-1.2-5.7-3-8-5.2
			c-2.3-2.3-4.1-4.9-5.5-8s-2.1-6.5-2.1-10.1c0-3.7,0.7-7,2.1-10.1c1.4-3,3.2-5.7,5.5-7.9c2.3-2.2,5-3.9,8-5.2
			c3-1.2,6.2-1.9,9.5-1.9c1.9,0,3.8,0.2,5.6,0.6c1.8,0.4,3.8,1,5.8,1.9C114.5,316.6,114.5,331.4,114.5,331.4z"/>
										<path class="main_text_color" d="M134.4,339.3c0-3.5,0.7-6.8,2-9.9s3.1-5.7,5.4-8c2.3-2.3,5.1-4,8.3-5.3s6.8-1.9,10.6-1.9s7.4,0.6,10.6,1.9
			c3.2,1.3,6,3.1,8.4,5.3s4.2,4.9,5.5,8s2,6.3,2,9.9s-0.7,6.8-2,9.9s-3.1,5.7-5.5,8s-5.1,4.1-8.4,5.3c-3.2,1.3-6.8,1.9-10.6,1.9
			c-3.9,0-7.4-0.6-10.6-1.9c-3.2-1.3-6-3.1-8.3-5.3c-2.3-2.3-4.1-4.9-5.4-8C135.1,346.1,134.4,342.8,134.4,339.3z M147.4,339.3
			c0,1.9,0.4,3.6,1.1,5.2c0.7,1.6,1.7,3,2.9,4.2s2.6,2.1,4.3,2.7c1.6,0.7,3.3,1,5.1,1s3.5-0.3,5.1-1s3-1.6,4.3-2.7
			c1.2-1.2,2.2-2.6,2.9-4.2s1.1-3.3,1.1-5.2c0-1.9-0.4-3.6-1.1-5.2c-0.7-1.6-1.7-3-2.9-4.2s-2.7-2.1-4.3-2.7c-1.6-0.7-3.3-1-5.1-1
			s-3.5,0.3-5.1,1s-3,1.6-4.3,2.7c-1.2,1.2-2.2,2.6-2.9,4.2C147.7,335.7,147.4,337.4,147.4,339.3z"/>
										<path class="main_text_color" d="M203.8,363.1l8.1-47.6h12.2l9.5,25.4l9.5-25.4h12.2l8.1,47.6h-12.3l-4.1-27.4l-11.2,27.4h-4.9l-10.7-27.4
			l-4.1,27.4H203.8z"/>
										<path class="main_text_color" d="M296,363.1h-12.4v-47.6h19.7c5.3,0,9.4,1.4,12.3,4.2c2.8,2.8,4.3,6.7,4.3,11.7s-1.4,9-4.3,11.7
			c-2.8,2.8-6.9,4.2-12.3,4.2H296V363.1z M296,337.3h4.1c4.5,0,6.8-2,6.8-5.9c0-4-2.3-5.9-6.8-5.9H296V337.3z"/>
										<path class="main_text_color" d="M363.9,354.8h-17.7l-2.8,8.3h-13.2l18.1-47.6h13.5l18.1,47.6h-13.2L363.9,354.8z M360.6,345.4l-5.6-15.8
			l-5.6,15.8H360.6z"/>
										<path class="main_text_color" d="M395.1,363.1v-47.6h12.4l22.8,29.1v-29.1h12.3v47.6h-12.3L407.4,334v29.1H395.1z"/>
										<path class="main_text_color" d="M478.5,315.5v47.6h-12.4v-47.6H478.5z"/>
										<path class="main_text_color" d="M529.1,326h-14.7v8h13.9v10.5h-13.9v8.2h14.7v10.5H502v-47.6h27.1V326z"/>
										<path class="main_text_color" d="M577.7,327.7c-1.3-1.1-2.7-1.9-4-2.4s-2.7-0.8-3.9-0.8c-1.6,0-2.9,0.4-3.9,1.1s-1.5,1.7-1.5,3
			c0,0.8,0.3,1.5,0.8,2.1c0.5,0.5,1.2,1,2,1.4s1.7,0.7,2.8,1c1,0.3,2.1,0.6,3.1,0.9c4,1.3,7,3.1,8.9,5.4s2.8,5.2,2.8,8.8
			c0,2.4-0.4,4.6-1.2,6.6s-2,3.7-3.6,5.1s-3.5,2.5-5.8,3.3s-4.9,1.2-7.8,1.2c-6,0-11.6-1.8-16.7-5.4l5.3-10c1.9,1.6,3.7,2.9,5.5,3.7
			c1.8,0.8,3.6,1.2,5.4,1.2c2,0,3.5-0.5,4.5-1.4s1.5-2,1.5-3.2c0-0.7-0.1-1.3-0.4-1.9c-0.3-0.5-0.7-1-1.3-1.5
			c-0.6-0.4-1.4-0.9-2.3-1.2c-0.9-0.4-2.1-0.8-3.4-1.3c-1.6-0.5-3.2-1.1-4.7-1.7s-2.9-1.4-4.1-2.4c-1.2-1-2.2-2.3-2.9-3.8
			s-1.1-3.5-1.1-5.8c0-2.4,0.4-4.5,1.2-6.4s1.9-3.6,3.3-4.9c1.4-1.4,3.1-2.4,5.2-3.2c2-0.8,4.3-1.1,6.8-1.1c2.4,0,4.8,0.3,7.4,1
			c2.6,0.7,5,1.6,7.4,2.9L577.7,327.7z"/>
									</g>
									<g id="INC">
										<path class="main_text_color" d="M621.8,315.4v26.9h-7v-26.9H621.8z"/>
										<path class="main_text_color" d="M635.2,342.3v-26.9h7l12.9,16.4v-16.4h7v26.9h-7l-12.9-16.4v16.4H635.2z"/>
										<path class="main_text_color" d="M695,324.4c-1.6-2-3.6-3-6-3c-1,0-2,0.2-2.9,0.6s-1.7,0.9-2.3,1.6s-1.1,1.4-1.5,2.3s-0.6,1.9-0.6,2.9
			c0,1.1,0.2,2.1,0.6,3c0.4,0.9,0.9,1.7,1.5,2.4c0.7,0.7,1.4,1.2,2.3,1.6c0.9,0.4,1.8,0.6,2.9,0.6c2.2,0,4.2-1,6-2.9v8.3l-0.7,0.2
			c-1.1,0.4-2.1,0.7-3,0.8c-0.9,0.2-1.8,0.3-2.7,0.3c-1.9,0-3.6-0.4-5.3-1.1s-3.2-1.7-4.5-3s-2.3-2.8-3.1-4.5s-1.2-3.7-1.2-5.7
			s0.4-4,1.2-5.7s1.8-3.2,3.1-4.5c1.3-1.2,2.8-2.2,4.5-2.9c1.7-0.7,3.5-1.1,5.4-1.1c1.1,0,2.1,0.1,3.2,0.3c1,0.2,2.1,0.6,3.3,1.1
			v8.4H695z"/>
									</g>
									<rect x="614.9" y="352.5" class="main_text_color" width="80.2" height="5.4"/>
								</g>
							</svg>

						</a></h1>

				<?php endif; ?>

			</div>
			<div class="main-navigation">
				<?php start_top_nav_no_home(); ?>
			</div>
		</div> <!-- /.site-header-content-container -->
	</header> <!-- / .site-header -->
	<div class="site-content">

<?php
if( !is_front_page() && !is_archive() ) :
	global $post;

	$page_for_posts = get_option( 'page_for_posts' ); // get the ide of the posts page for the header/title/featured image issue

	$the_ID_of_this_page = $post->ID;
	if( is_home() ) {
		$the_ID_of_this_page = $page_for_posts;
	}

	$the_page_title = get_the_title( $post->ID );
	if( true == get_field( 'override_page_title', $the_ID_of_this_page)) {
		if( '' != get_field( 'custom_page_title', $the_ID_of_this_page ) ) :
			$the_page_title = get_field( 'custom_page_title', $the_ID_of_this_page );
		endif;
	} else {
		// crickets
	}

	$the_page_tagline = '';
	if( '' != get_field( 'page_tagline', $the_ID_of_this_page ) ) {
		$the_page_tagline = '<div class="page_tagline">' . get_field( 'page_tagline', $the_ID_of_this_page ) . '</div>';
	}


	// start conditional printing of the header, first if there is a featured image....
	if( has_post_thumbnail() ) :
		$featuredimage = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	//	$alt_text = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );


		printf(
			'
				<div class="page_featured_image_container">
					<img src="%s" class="page_featured_image" alt="%s" />
					<div class="page_heading_area">
						<h1 class="page_title">%s</h1>
						%s
					</div>
				</div>
				',
			esc_url( $featuredimage ),
			"featured image",//esc_html( $alt_text ),
			esc_html( $the_page_title ),
			wp_kses_post( $the_page_tagline )
		);
	else : // or if there is no featured image then this happens
		printf(
			'
				<div class="page_heading_area no-featured-image">
					<h1 class="page_title">%s</h1>
					%s
				</div>
			',
			esc_html( $the_page_title ),
			wp_kses_post( $the_page_tagline )
		);
	endif; // end if it has a featured image or not
endif;