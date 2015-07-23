<?php
/**
 * The Template for displaying posts of one series / category.
 *
 * @package focus
 * @since focus 1.0
 */

get_header(); the_post(); ?>

<a name="wrapper"></a>
<div id="primary" class="content-area">
	
	<div id="single-header">
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('slider') ?>
			<div class="overlay"></div>
		<?php endif; ?>

		<div class="container main-container">
			<div class="post-heading post-heading-child">
				<h2><?php single_cat_title(''); ?></h2>
				<hr>
				<div><?php echo category_description(); ?></div> 
			</div>
			
			<?php if(focus_post_has_video()) : ?>
				<div class="video">
					<?php focus_post_video() ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="container main-container">
		<div class="single-info-container">
			<div class="row">
				<div class="col-md-8 entry-content">
					<h2 class="single-h2"><?php single_cat_title(''); ?></h2>
					<hr>
					<h3><?php the_title() ?></h3>
					<?php the_content() ?>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="row">
						<?php if( siteorigin_setting('general_posts_nav') ) focus_content_nav('posts-nav') ?>
					</div>	
				</div>
			</div>	
		</div>
	</div>
	
	<div class="container main-container">
		<div class="container-decoration"></div>
		
		<div class="content-container">
			<div id="content" class="site-content" role="main">
				
			<?php get_template_part('posts-by-category') ?>
			
			<div class="clear"></div>
		</div>
		<?php if( siteorigin_setting('general_posts_nav') ) focus_content_nav('posts-nav') ?>
	</div>
</div><!-- #primary .content-area -->

<?php get_footer(); ?>