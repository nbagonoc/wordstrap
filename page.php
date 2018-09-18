<?php get_header(); ?>
	<div class="py-4">
		<div class="container">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2 class="text-capitalize text-red"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
<?php get_footer(); ?>