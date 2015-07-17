<div class="recommend-loop">

<?php
	$recent_posts = wp_get_recent_posts( $args );
	
	$args = array( 'numberposts' => '1', 'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-aside',
				'operator' => 'NOT IN',
				'orderby' => 'random',
				'order'   => 'random',
			)
	) );
	
	$thisPostQuery = new WP_Query ($args);
	
	if($thisPostQuery->have_posts()) :
		echo '<div class="wrapper">';
        echo '<div class="category-post-lister">';
        while ($thisPostQuery->have_posts()) : $thisPostQuery->the_post(); ?>
        
	        <div class="single-category-element animated fadeInRight go"><a href="<?php the_permalink() ?>" class="thumbnail-wrapper">
	        	<!-- <div class="time"></div> -->
	        	<?php echo has_post_thumbnail() ? get_the_post_thumbnail() : focus_default_post_thumbnail();  ?>
	        </a>
	
	        <a href="<?php the_permalink(); ?>"><h2 class="entry-title-category"><span>
	        	<?php echo get_the_title() ? get_the_title() : __('Untitled', 'focus') ?>
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