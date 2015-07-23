<?php 
	
	$tulossa = get_category_by_slug( 'tulossa' );
	$tulossaId = $tulossa->term_id;
	$nostot = get_category_by_slug( 'nostot' );
	$nostotId = $nostot->term_id;
	
	$cats = get_the_category();
	
	if ( $cats[0]->term_id == $tulossaId || $cats[0]->term_id == $nostotId ) {
		if ( $cats[1]->term_id == $tulossaId || $cats[1]->term_id == $nostotId ) {
			$category = $cats[2];
		}
		else {
			$category = $cats[1];
		}
	}
	else {
		$category = $cats[0];
	}
	
	$args = array(
		'posts_per_page' => 99,
		'category__in' => array($category->term_id),
		'orderby' => 'title',
		'order' => 'ASC'
		);
		
		$thisCategoryQuery = new WP_Query($args);
		
		if ($thisCategoryQuery->have_posts()) :
		            echo '<div class="wrapper">';
		            echo '<a href="' . get_category_link( $category->term_id ) . '"><h3 class="cat-h3">' . $category->name . ' sarjan jaksot</h3></a>';
		            echo '<hr>';
		            echo '<div class="category-post-lister">';
		            while ($thisCategoryQuery->have_posts()) : $thisCategoryQuery->the_post(); ?>
		            
		            <div class="single-category-element animated fadeIn go"><a href="<?php the_permalink() ?>" class="thumbnail-wrapper">
		            	<!-- <div class="time"></div> -->
		            	<?php echo has_post_thumbnail() ? get_the_post_thumbnail() : focus_default_post_thumbnail();  ?>
		            	
		            	<div class="media__body">
		            		<h3><?php the_title() ?></h3>
		            		<p><?php echo excerpt(17) ?></p>
		            		<i class="fa fa-play-circle-o fa-2x"></i>
		            	</div>
		            	
		            </a>
		
		            <a href="<?php the_permalink(); ?>"><h2 class="entry-title-category"><span>
		            	<?php echo get_the_title() ? get_the_title() : __('Untitled', 'focus') ?><?php get_template_part('entry', 'meta'); ?>
		            </span></h2></a></div>
		        <?php
		            endwhile; 
		            echo '</div></div>'; 
		        ?>    
		
		<?php
		        else :
		            echo 'No post published in:'.$category->name;                
		        endif; 
		        wp_reset_query();
		
		
	
?>