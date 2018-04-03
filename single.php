<?php get_header(); ?>
	<!-- content and sidebar -->
	<div class="space-sm">
		<div class="container">
			<div class="row">
				<!-- content -->
				<div class="col-md-8">
					<div class="content">
						<div class="panel panel-default">
							<div class="panel-body">
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<h2 class="text-uppercase"><?php the_title(); ?></h2>
								<p><?php echo get_the_content(); ?></p>
								<?php endwhile; ?>
								<?php else: ?>
								<?php endif; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div><!-- /content -->
				<!-- sidebar -->
				<div class="col-md-4 mobile-space">
					<div class="sidebar" data-offset-smart-dynamic>
						<?php dynamic_sidebar('sidebar'); ?>
					</div>
				</div><!-- /sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>