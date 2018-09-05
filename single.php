<?php get_header(); ?>
	<!-- content and sidebar -->
	<div class="py-4">
		<div class="container">
			<div class="row">
				<!-- content -->
				<div class="col-md-8 mb-3 pr-md-1">
					<div class="card">
						<div class="card-body">
							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<h2 class="text-uppercase"><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div><!-- /content -->
				<!-- sidebar -->
				<div class="col-md-4">
					<div class="sidebar sticky-top" data-offset-smart-dynamic>
						<?php dynamic_sidebar('sidebar'); ?>
					</div>
				</div><!-- /sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>