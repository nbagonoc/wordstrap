<?php

//add menu feature
register_nav_menus(array('main-nav'=>'wordstrap'));

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

//remove admin bar from site
add_filter('show_admin_bar', '__return_false');

//add thumbnail function
add_theme_support('post-thumbnails');

//add custom image size. add image size b4 uploading images
add_image_size('background', 720, 300, true);

//add custom image size. add image size b4 uploading images
add_image_size('custom', 720, 200, true);

// REMOVE MEDIUM SIZE IMAGE WORDPRESS GENERATING
function remove_default_image_sizes($sizes) {
    unset( $sizes['medium_large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced','remove_default_image_sizes');

//insert styles
function add_styles(){
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('dropdown', get_template_directory_uri() . '/css/bootstrap-dropdownhover.min.css');
	wp_enqueue_style('fontawesome-style', "https://use.fontawesome.com/releases/v5.3.1/css/all.css");
	wp_enqueue_style('google-font', "https://fonts.googleapis.com/css?family=Roboto|Slabo+27px");
}
add_action('wp_enqueue_scripts', 'add_styles');

//insert scripts
function add_scripts(){
	wp_deregister_script('jquery');
	// wp_enqueue_script("jquery","https://code.jquery.com/jquery-3.3.1.min.js", array(), '3.3.1', true);
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);
	wp_enqueue_script("popper","https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js", array(), '1.14.3', true);
	wp_enqueue_script("bootstrap","https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array(), '4.1.3', true);
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	// wp_enqueue_script('dropdownJS', get_template_directory_uri() . '/js/bootstrap-dropdownhover.min.js', array(), false, true);
	wp_enqueue_script('viewportchecker', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array(), false, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_scripts');

//add sidebar/widget  support
function widget() {
	//sidebar
	register_sidebar(array(
		'name'          => 'The Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="d-none">',
		'after_title'   => '</h4>',
	));
	//footer menu
	register_sidebar(array(
		'name'          => 'footer a',
		'id'            => 'footer-a',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="mb-3 text-red text-uppercase text-sm font-weight-bold">',
		'after_title'   => '</h5>',
	));
	//footer menu
	register_sidebar(array(
		'name'          => 'footer b',
		'id'            => 'footer-b',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="mb-3 text-red text-uppercase text-sm font-weight-bold">',
		'after_title'   => '</h5>',
	));
	//footer menu
	register_sidebar(array(
		'name'          => 'footer c',
		'id'            => 'footer-c',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="mb-3 text-red text-uppercase text-sm font-weight-bold">',
		'after_title'   => '</h5>',
	));
	//footer menu
	register_sidebar(array(
		'name'          => 'footer d',
		'id'            => 'footer-d',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="mb-3 text-red text-uppercase text-sm font-weight-bold">',
		'after_title'   => '</h5>',
	));
}
add_action( 'widgets_init', 'widget' );


//pagination Bootstrap
function sa_get_bootstrap_paginate_links() {
	ob_start();
	?>
		<div class="pages clearfix">
			<?php
				global $wp_query;
				$current = max( 1, absint( get_query_var( 'paged' ) ) );
				$pagination = paginate_links( array(
					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format' => '?paged=%#%',
					'current' => $current,
					'total' => $wp_query->max_num_pages,
					'type' => 'array',
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			<?php if ( ! empty( $pagination ) ) : ?>
				<ul class="pagination">
					<?php foreach ( $pagination as $key => $page_link ) : ?>
						<li class="paginated_link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
		</div>
	<?php
	$links = ob_get_clean();
	return apply_filters( 'sa_bootstap_paginate_links', $links );
}
function sa_bootstrap_paginate_links() {
	echo sa_get_bootstrap_paginate_links();
}

// REMOVE WP EMOJI
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('admin_print_styles','print_emoji_styles');

// LIMIT EXCERPT LENGTH
function limit_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length','limit_excerpt_length');

// CHANGE THE LAST PART ON THE EXCERPT
function change_excerpt_more($more) {
    return '..';
}
add_filter( 'excerpt_more', 'change_excerpt_more' );

?>