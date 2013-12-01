<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE 
		if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)):
	        header('X-UA-Compatible: IE=edge,chrome=1');
		endif; ?>
		
		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header id="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div id="mobile-menu-container">
						<?php bones_mobile_nav(); ?>
					</div>
					
					<p id="logo" class="fourcol first clearfix"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

					<?php // bloginfo('description'); ?>
					
					<?php bones_top_links(); ?>
					
					<?php // determine if header image is a custom image, or pulled randomly from the header pool 
					if (is_search() OR get_post_type() == 'promotions' OR is_post_type_archive('promotions') OR !has_post_thumbnail()) { 
						$header_image = get_header_image();
					} else {
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						$header_image = $thumb_url[0];
					}
					
					?> 
					
					<img id="header-image" src="<?php echo $header_image; ?>" alt="Cascades Day Spa, Bedford NS" />
					
					<a id="book" href="<?php echo get_page_link(36); ?>"><div>Book an Appointment</div></a>
					
					<a id="giftcard" href="<?php echo get_page_link(32); ?>">Buy Instant<br>Gift Cards</a>
					
				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>
