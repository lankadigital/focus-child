<?php
    $allcats = get_categories('child_of=0&exclude=6,7'); 

    foreach ($allcats as $cat) :
        $args = array(
            'posts_per_page' => 3, // set number of post per category here
            'category__in' => array($cat->term_id),
            'orderby' => 'title',
            'order'   => 'ASC'
        );

        $customInCatQuery = new WP_Query($args);

        if ($customInCatQuery->have_posts()) :
            echo '<div class="wrapper series-wrapper">';
            echo '<a href="' . get_category_link( $cat->term_id ) . '"><h3 class="cat-h3">' . $cat->name . '</h3></a>';
            echo '<hr class="channel-hr">';
            echo '<div class="category-post-lister">';
            while ($customInCatQuery->have_posts()) : $customInCatQuery->the_post(); ?>
            
            <div class="single-category-element animated fadeIn go"><a href="<?php the_permalink() ?>" class="thumbnail-wrapper">
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
            echo 'No post published in:'.$cat->name;                
        endif; 
        wp_reset_query();
    endforeach; 
?>