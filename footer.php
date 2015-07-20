<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package focus
 * @since focus 1.0
 */
?>

	</div><!-- #main .site-main -->
	<?php do_action('before_footer'); ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<hr class="<?php echo get_theme_mod( 'textarea8_setting', 'default_value' ); ?>-hr">
			<div class="row footer-row">
				<div class="col-md-4">
					<h2>Olemme myös Somessa</h2>
						<ul class="some ul-footer">
							<li><a href="<?php echo get_theme_mod( 'textarea_setting', 'default_value' ); ?>" target="_blank" <i class="fa fa-some fa-twitter-square fa-1x"></i>Twitter</li></a>
							<li><a href="<?php echo get_theme_mod( 'textarea1_setting', 'default_value' ); ?>" target="_blank" <i class="fa fa-facebook-square fa-some fa-1x"></i>Facebook</li></a>
							<li><a href="<?php echo get_theme_mod( 'textarea3_setting', 'default_value' ); ?>" target="_blank" <i class="fa fa-some fa-youtube-square fa-1x"></i>Youtube</li></a>
						</ul>
						
				</div>
				<div class="col-md-4 recent-series">
					<h2>Viimeisimmät sarjat</h2>
					<ul class="some ul-footer">
					<?php
					    $allcats = get_categories('child_of=0&exclude=6,7&number=4');
					
					    foreach ($allcats as $cat) :
					        $args = array(
					            'posts_per_page' => 0, // set number of post per category here
					            'category__in' => array($cat->term_id),
					            'orderby' => 'date',
					            'order'   => 'ASC'
					        );
					
					        $customInCatQuery = new WP_Query($args);
					
					        if ($customInCatQuery->have_posts()) :
					            echo '<li><a href="' . get_category_link( $cat->term_id ) . '"><p>' . $cat->name . '<p></a></li>';
					            while ($customInCatQuery->have_posts()) : $customInCatQuery->the_post(); ?>
					        <?php
					            endwhile; 
					        ?>    
					
					<?php
					        else :
					            echo 'No post published in:'.$cat->name;                
					        endif; 
					        wp_reset_query();
					    endforeach; 
					?>
				</ul>	
				</div>
				<div class="col-md-4">
					<h2>Ota yhteyttä</h2>
					<ul class="contact ul-footer">
					<p><?php echo get_theme_mod( 'textarea4_setting', 'default_value' ); ?><br><?php echo get_theme_mod( 'textarea5_setting', 'default_value' ); ?></p>
						<button type="button" class="btn btn-phone-2 btn-md btn-default" data-toggle="popover" title="<?php echo get_theme_mod( 'textarea4_setting', 'default_value' ); ?>" data-content="<?php echo get_theme_mod( 'textarea6_setting', 'default_value' ); ?>"><i class="fa fa-phone fa-2x"></i></button>
						<li><a href="mailto:<?php echo get_theme_mod( 'textarea7_setting', 'default_value' ); ?>"><i class="fa fa-envelope-square fa-4x"></i></a></li>
					</ul>	
				</div>
			</div>
			<div class="clear"></div>
			
			<div class="site-info">
			</div><!-- .site-info -->
			
		</div><!-- .container -->
	</footer><!-- #colophon .site-footer -->

	<?php do_action('after_footer'); ?>

</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>