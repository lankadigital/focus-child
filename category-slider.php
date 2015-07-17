<?php $query = focus_get_cat_slider_posts(); $i = 0;

if($query->have_posts()) : ?>
	<section id="home-slider" class="slider category-slider">
		<ul class="slides">
			<?php while($query->have_posts()) : $query->the_post();
			$category = get_the_category();
			echo '<script>';
			echo 'console.log("' . $category[0]->cat_name . '")';
			echo 'console.log("' . $category[0]->slug . '")';
			echo '</script>';
			?>
				<?php if(has_post_thumbnail()) : if( $i == siteorigin_setting('slider_post_count') ) break; $i++; ?>
					<li class="slide" id="slide-post-<?php the_ID() ?>">
						<?php the_post_thumbnail('slider') ?>
						<div class="overlay"></div>
						<div class="slider-wrapper">
							<div class="container">
								<a href="<?php the_permalink() ?>"><div class="slide-text cat-slide-text">
									<div class="box-header-bg">
										<h1 class="box-header"><?php echo $category[0]->cat_name; ?></h1>
									</div>	
									<!-- <hr class="slider-hr"> -->
									<div class="box-excerpt-bg">
										<?php if(has_excerpt()) : ?><?php echo '<p>' . $category[0]->description . '</p>'; ?><?php endif; ?>
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