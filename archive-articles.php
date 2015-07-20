<?php

/*
Template Name: Blog Posts Archive
*/

get_header(); ?>
	
	<?php get_template_part('article-slider'); ?>
	
	<!-- <?php echo get_post_type( $articles ); ?> -->
	
	<div id="primary" class="content-area container articles-wrapper">
		<div class="row">
			<div class="col-md-8">
				
					<?php $args = array( 'post_type' => 'articles', 'posts_per_page' => 10 );
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="single-article">	
					<div id="single-header">
						<?php if(has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('slider'); ?>
						<?php endif; ?>
			
							<div class="post-heading post-headingindex">
								
							</div>
					</div>
					<div class="articles-header">
						<?php if ( is_singular() ) {echo '<h1 class="custom-header">';} else {echo '<h1 class="custom-header">';} ?><a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Lue %s', 'fabulatheme' ), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) {echo '</h1>';} else {echo '</h1>';} ?>
					</div>
					<div class="article-excerpt">
						<p><?php the_excerpt('&raquo; &raquo; &raquo; &raquo;'); ?></p>
						<a href="<?php echo get_permalink(); ?>"> Lue lisää...</a>
						<!-- <p><?php get_template_part('entry', 'meta'); ?></p> -->
					</div>	
				</div>	
				<hr class="channel-hr">
				<?php endwhile; ?>
			</div>	
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>	
		</div>	
	</div>	

<?php get_footer(); ?>