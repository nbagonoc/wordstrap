<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php if(is_front_page()): ?>
			<?php bloginfo('name'); ?><?php echo " &#45; Tagline Here" ?>
		<?php elseif(is_single()): ?>
			<?php wp_title(''); ?>
		<?php else: ?>
			<?php bloginfo('name'); ?><?php echo " &#45; Tagline Here" ?><?php wp_title('&#124;'); ?>
		<?php endif; ?>
	</title>
	<!-- <meta name="keywords" content="image moderation service, image moderation, social media content moderation, software development outsourcing company, software outsourcing company, software development Vietnam, outsource software development, Moderation Outsourcing, software development, outsource QA company, mobile development outsourcing, game development testing, outsource mobile game development, Brand Moderation, Brand Moderation Outsourcing, content moderation outsourcing, content moderation, outsourcing software development trends, software development outsourcing trends, tools used in software development, automated testing benefits, android testing book, game development software for android, mobile application automation tools, cross platform browser testing"> -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>
<?php wp_head();?>
<body>
	<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark border-bottom border-secondary">
		<a class="navbar-brand text-uppercase" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="brand" alt="company logo"></a>
        <button class="navbar-toggler custom-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
		</button>
		<div class="container-fluid">
	        <?php
	            wp_nav_menu( array(
	                'menu'              => 'main-nav',
	                'theme_location'    => 'wordstrap',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'collapsibleNavId',
	                'menu_class'        => 'navbar-nav ml-auto',
	                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'            => new WP_Bootstrap_Navwalker())
	            );
	        ?>
		</div>
	</nav>