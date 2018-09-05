<?php get_header(); ?>

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- carousel items -->
	<div class="carousel-inner">
		<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>				
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
		<div class="carousel-item">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
			<div class="banner-slider" style="background-image: url('<?php echo $thumb['0'];?>');">
				<div class="vertical-align">
					<div class="vertical-align-element">
						<div class="container">
							<h1 class="text-center text-uppercase text-white"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<!-- carousel controls -->
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
  	</a>
</div>

<!-- banner -->
<!-- <div class="banner">
	<?php //$query = new WP_Query('p=7'); ?>				
	<?php //if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
	<?php //$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
	<div class="banner" style="background-image: url('<?php //echo $thumb['0'];?>');">
		<div class="vertical-align">
			<div class="vertical-align-element">
				<div class="container">
					<h1 class="text-center text-uppercase color-white"><?php //the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<?php //endwhile; ?>
	<?php //else: ?>
	<?php //endif; ?>
	<?php //wp_reset_postdata(); ?>
</div> -->
<!--- /banner -->

<!-- feature headings-->
<div class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<?php $query = new WP_Query('cat=1&posts_per_page=3'); ?>				
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
				<div class="col-md-4 mb-3 mb-md-0">
					<div class="card">
						<div class="card-body">
							<a href="<?php the_permalink(); ?>"><h3 class="text-center text-uppercase text-dark"><?php the_title(); ?></h3></a>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn bg-dark text-uppercase text-light btn-block">text goes here</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div><!-- /feature headings-->

<!-- content and sidebar-->
	<div class="container my-5">
		<div class="row">
			<!-- content -->
			<div class="col-md-8 pr-md-1 mb-3">
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
			<div class="col-md-4 mb-3">
				<div class="sidebar sticky-top" data-offset-smart-dynamic>
					<?php dynamic_sidebar('sidebar'); ?>
				</div>
			</div><!-- /sidebar -->
		</div>
</div><!-- content and sidebar -->

<?php get_footer(); ?>