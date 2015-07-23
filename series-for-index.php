<?php
    
    $tulossa = get_category_by_slug( 'tulossa' );
    $tulossaId = $tulossa->term_id;
    $nostot = get_category_by_slug( 'nostot' );
    $nostotId = $nostot->term_id;
    
    $allcats = get_categories( array( 'child_of' => 0, 'exclude' => array( $tulossaId, $nostotId ) ) ); 

    foreach ($allcats as $cat) :
        $args = array(
            'posts_per_page' => 1, // set number of post per category here
            'category__in' => array($cat->term_id),
            'orderby' => 'modified',
            'order'   => 'DESC'
        );

        $customInCatQuery = new WP_Query($args);

        if ($customInCatQuery->have_posts()) :
            echo '<div class="wrapper series-wrapper index-wrapper">';
            while ($customInCatQuery->have_posts()) : $customInCatQuery->the_post();
            echo '<div class="row">'; ?>
            <div class="col-md-4 col-xs-12">
	            <div class="single-category-element-index animated fadeIn go"><a href="<?php the_permalink() ?>" class="thumbnail-wrapper">
	            	<!-- <div class="time"></div> -->
	            	<?php echo has_post_thumbnail() ? get_the_post_thumbnail() : focus_default_post_thumbnail();  ?>
	            	<div class="media__body">
	            		<i class="fa fa-play-circle-o fa-4x"></i>
	            	</div>
	            </a>
            

            <!-- <a href="<?php the_permalink(); ?>"><h2 class="entry-title-category"><span>
            	<?php echo get_the_title() ? get_the_title() : __('Untitled', 'focus') ?>
            </span></h2></a> --></div>
            
            </div>
            <?php echo '<div class="col-md-6 col-xs-12 category-post-lister">';
            echo '<a href="' . get_category_link( $cat->term_id ) . '"><h3 class="cat-h3-index">' . $cat->name . '</h3></a>';
            echo '<div class="cat-desc">' . word_trim( nl2br( category_description( $cat->term_id ) ), 35) . '<br><a href="' . get_permalink() . '"> Katso lisää...</a></div></div>';
            echo '<div class="col-md-2 index-more"><a href="' . get_category_link( $cat->term_id ) . '"><i class="fa fa-angle-right fa-5x"></i></a></div>';
            echo '</div>';
            ?>
            
        <?php
            endwhile; 
            echo '</div>';
            echo '<hr class="channel-hr">'; 
        ?>    

<?php
        else :
            echo 'No post published in:'.$cat->name;                
        endif; 
        wp_reset_query();
    endforeach; 
?>