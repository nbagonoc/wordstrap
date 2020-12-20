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
<body id="top">
<nav class="navbar navbar-a navbar-expand-md navbar-light bg-light py-0">
	<div class="container">
		<a class="navbar-brand text-uppercase" href="<?php echo home_url(); ?>"><div class="brand"></div></a>
        <button class="navbar-toggler hidden-lg-up my-3" type="button" data-toggle="collapse" data-target="#navbar-a"
                    aria-controls="navbar-a" aria-expanded="false" aria-label="Toggle navigation">
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
					'container_id'      => 'navbar-a',
	                'menu_class'        => 'navbar-nav ml-auto',
	                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'            => new WP_Bootstrap_Navwalker())
	            );
	        ?>
		</div>
	</div>
</nav>