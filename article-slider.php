<?php $query = focus_get_slider_posts(); $i = 0; ?>

<?php if($query->have_posts()) : ?>
	<section id="home-slider" class="slider category-slider">
		<ul class="slides">
			<?php while($query->have_posts()) : $query->the_post(); ?>
				<?php if(has_post_thumbnail()) : if( $i == siteorigin_setting('slider_post_count') ) break; $i++; ?>
					<li class="slide" id="slide-post-<?php the_ID() ?>">
						<?php the_post_thumbnail('slider') ?>
						<div class="overlay"></div>
						<div class="slider-wrapper">
							<div class="container index-container">
								<h1 class="index-h1 <?php echo siteorigin_setting('general_logo') ? 'image-logo' : '' ?>"> <?php focus_display_logo(); ?></h1>
								<hr class="channel-hr">
								<h3 class="index-h3">Blogi</h3>
							</div>	
						</div>	
					</li>
				<?php endif; ?>
			<?php endwhile ?>
		</ul>
		
		<div class="slider-decoration"></div>
	</section>
	
	<?php wp_reset_postdata(); ?>
<?php endif; ?>