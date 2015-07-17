<div class="content-container">
	
	<?php if ( have_posts() ) : ?>
	
		<div class="wrapper series-wrapper index-wrapper">
			<div class="row">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row">
						<div class="col-md-4">
							<a href="<?php the_permalink() ?>" class="single-category-element-index thumbnail-wrapper">
								<!-- <div class="time"></div> -->
								<?php echo has_post_thumbnail() ? get_the_post_thumbnail() : focus_default_post_thumbnail();  ?>
							</a>
						</div>	
						<div class="col-md-8 category-post-lister">
							<a href="<?php the_permalink() ?>"><h2 class="cat-h3"><span>
								<?php echo get_the_title() ? get_the_title() : __('Untitled', 'focus') ?>
							</span></h2></a>
							
							<?php if(has_excerpt()) : ?><p><?php the_excerpt() ?></p><?php endif; ?>
							<a href="<?php echo get_permalink(); ?>"> Katso lisää...</a>
						</div>	
						
					</article>
					<hr class="channel-hr">
			
				<?php endwhile; ?>
			</div>	
			
		</div>
		
	<?php else : ?>
	
		<?php get_template_part( 'no-results', 'index' ); ?>
	
	<?php endif; ?>

	<div class="clear"></div>
	
</div>

<?php focus_content_nav( 'nav-below' ); ?>