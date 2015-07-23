<?php
	
	$tulossa = get_category_by_slug( 'tulossa' );
	$tulossaId = $tulossa->term_id;
	$nostot = get_category_by_slug( 'nostot' );
	$nostotId = $nostot->term_id;
	
	$args = array( 'numberposts' => '1',
			'orderby' => 'date',
			'order'   => 'DESC',
			'posts_per_page' => 30,
			'category__not_in' => array($tulossaId,$nostotId)
	);
	
	$thisPostQuery = new WP_Query ($args);
	
	if($thisPostQuery->have_posts()) :
		echo '<div class="wrapper">';
        echo '<div class="category-post-lister">';
        while ($thisPostQuery->have_posts()) : $thisPostQuery->the_post(); ?>
        
        
        <div class="single-category-element animated fadeIn go media"><a href="<?php the_permalink() ?>" class="thumbnail-wrapper">
        	<!-- <div class="time"></div> -->
        	<?php echo has_post_thumbnail() ? get_the_post_thumbnail() : focus_default_post_thumbnail();  ?>
        	<div class="media__body">
        		<h3><?php the_title() ?></h3>
        		<p><?php echo excerpt(20) ?></p>
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
	        echo 'No post published in:';                
	    endif; 
	    wp_reset_query();

?>