<?php get_header(); ?>

<!-- CAROUSEL B -->
<div id="carouselB" class="carousel slide carousel-fade" data-ride="carousel">
	<div class="carousel-inner">
		<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>				
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
			<div class="carousel-item" style="background: linear-gradient(to bottom, rgba(44,44,44,.5)0%, rgba(44,44,44,.5)100%), url('<?php echo $thumb['0'];?>') center center;">
				<div class="vertical-align">
					<div class="vertical-align-item">
						<div class="container text-center">
							<h2 class="text-capitalize display-4 text-red"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<!-- Carousel controllers -->
	<a class="carousel-control-prev" href="#carouselB" role="button" data-slide="prev">
		<span class="fas fa-chevron-left" aria-hidden="true"></span>
	</a>
	<a class="carousel-control-next" href="#carouselB" role="button" data-slide="next">
		<span class="fas fa-chevron-right" aria-hidden="true"></span>
	</a>
</div>
<!-- END CAROUSEL B -->

<!-- CARD with image and text -->
<section class="py-5 border-bottom">
	<div class="container">
		<div class="row">
			<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>				
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
				<div class="col-lg-4 mb-3 mb-lg-0 fade-in">
					<div class="card">
						<a href="<?php the_permalink(); ?>">
							<div class="card-img-top" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
						</a>
						<div class="card-body">
							<a href="<?php the_permalink(); ?>">
								<h5 class="text-capitalize text-md link-red"><?php the_title(); ?></h5>
							</a>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-outline-red btn-block">Read More</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	
		</div>
	</div>
</section>


<?php get_footer(); ?>