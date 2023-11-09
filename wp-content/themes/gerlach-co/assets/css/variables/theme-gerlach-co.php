<?php
/**
 * CSS variable import: Gerlach Co. brand colors
 *
 */ ?>
<style rel="stylesheet" type="text/css">
	:root {

		--brand_color-red: #BF2026;
		--brand_color-dark: #303030;
		--brand_color-white: #fff;
		--brand_color-tan: #FAF3E3;
		--brand_color-brown: #513F35;

		--brand_color-maroon: #590F11;
			--semi_transparent-maroon: rgba( var( --brand_color-maroon ), 0.5 );
		--brand_color-light: #F1F1F1;
		--brand_color-gray: #C5C7C9;
		--brand_color-slate: #727A8F;
		--brand_color-teal: #00ADAA;

		--brand_color-black: #000;
		--brand_color-darker: #2a2a2a;
		--brand_color-mediumgray: #737575;
		--brand_color-silver: #D8D6D7;


		--body--background_color: 	var( --brand_color-light );
		--body--text_color:			var( --brand_color-dark );
		--body--link_color:			var( --brand_color-red );
		--body--link_color_hover: 	var( --brand_color-maroon );

		--header--background_color: 	var( --brand_color-white );
		--header_dark--background_color: var( --brand_color-dark );
		--header--nav_text_color:		var( --brand_color-mediumgray );

		--smaller_header--background_color: var( --brand_color-white  );
		--smaller_header--nav_text_color: var( --brand_color-mediumgray );

		--nav_item--background_color: 	transparent;
		--nav_item--text_color: 		currentColor;

		--nav_item_hover--background_color: var( --brand_color-red );
		--nav_item_hover--text_color: 	var( --brand_color-white );

		--page_header--page_title: 		var( --brand_color-white );
		--page_header--page_tagline: 	var( --brand_color-maroon );

		--button--background_color: 	var( --brand_color-red );
		--button--text_color: 			var( --brand_color-white );
		--button_hover--background_color: var( --brand_color-maroon );
		--button_hover--text_color: 	var( --brand_color-white );

		--footer--background_color:		var( --brand_color-darker );
		--footer--text_color:			var( --brand_color-light );
		--footer--link_color: 			var( --brand_color-red );
		--footer--link_color_hover:		var( --brand_color-white );

		--form--error_text: 			var( --brand_color-red );
		--form--valid_text: 			var( --brand_color-teal );
	}
</style>
