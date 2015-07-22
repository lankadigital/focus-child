<?php $query = focus_get_slider_posts(); $i = 0; ?>

<?php if($query->have_posts()) : ?>
	<section id="home-slider" class="slider">
		<ul class="slides">
			<?php while($query->have_posts()) : $query->the_post(); ?>
				<?php if(has_post_thumbnail()) : if( $i == siteorigin_setting('slider_post_count') ) break; $i++; ?>
					<li class="slide" id="slide-post-<?php the_ID() ?>">
						<?php the_post_thumbnail('slider') ?>
						<!-- <div class="channel-box">
							<div class="channel-logo">
								<img src="http://fishing.fabulastudios.com/wp-content/themes/focus/images/fabula_fishing_logo.png" class="img-responsive" alt="Responsive image" style="width: 170px; margin: 0 auto;">
							</div>
							<div class="channel-description">
								<h1 class="site-title <?php echo siteorigin_setting('general_logo') ? 'image-logo' : 'text-logo' ?>">
									<h1 title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
										<?php focus_display_logo(); ?>
									</h1>
								</h1>
								<hr class="channel-hr">
								<p class="channel-description"><?php echo get_theme_mod( 'textarea_setting', 'default_value' ); ?></p>
							</div>
						</div> -->
						<div class="slider-wrapper">
							<div class="container">
								<a href="<?php the_permalink() ?>"><div class="slide-text">
									<div class="box-header-bg">
										<h1 class="box-header"><?php the_title() ?></h1>
									</div>	
									<!-- <hr class="slider-hr"> -->
									<div class="box-excerpt-bg">
										<span class="highlight-p"><?php if(has_excerpt()) : ?><p><?php echo excerpt(20) ?></p><?php endif; ?></span>
									</div>	
								</div></a>
								<a href="<?php the_permalink() ?>" class="play"><?php esc_html_e('Play', 'focus') ?></a>
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