<?php

/*
Template Name: Blog Posts old Archive
*/

get_header(); ?>

	<?php echo get_post_type( $articles ) ?>
	
	<div id="primary" class="content-area container">
		<div class="row">
			<div class="col-md-8">
					
					<?php $args = array( 'post_type' => 'articles', 'posts_per_page' => 10 );
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) : $query->the_post(); ?>
					
					<div id="single-header single-header-index">
						<?php if(has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('slider') ?>
							<div class="overlay"></div>
						<?php endif; ?>
					</div>
					<div class="post-heading">
						<?php if ( is_singular() ) {echo '<h1 class="custom-header">';} else {echo '<h1 class="custom-header">';} ?><a href="<?php the_permalink(); ?>" title="<?php printf( __( 'Lue %s', 'fabulatheme' ), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) {echo '</h1>';} else {echo '</h1>';} ?>
					</div>
					<div class="article-excerpt">
						<p><?php the_excerpt() ?></p>
					</div>	
					<hr class="channel-hr">
					<?php endwhile; ?>
			</div>	
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>	
		</div>	
	</div>	
		
		<div class="container main-container">
		
			<div class="content-container">	
				<?php get_template_part('posts_by_category') ?>
			</div>	
		</div>
		
		<div class="container">
			
		</div>
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>