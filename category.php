<?php
/**
 * The Template for displaying posts of one series / category.
 *
 * @package focus
 * @since focus 1.0
 */

get_header(); the_post(); ?>

<a name="wrapper"></a>
<div id="primary" class="content-area category-content">
	
	<div id="single-header">
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('slider') ?>
			<div class="overlay"></div>
		<?php endif;
		
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		
		$args = array(
			'tag' => 'intro',
			'cat' => $category_id,
			'showposts' => 1,
		);
		$my_query = new WP_Query($args);
		
		$intro_post = $my_query->the_post();
		$intro_id = $intro_post->id;
		
		?>

		<div class="container main-container">
			<?php if(focus_post_has_video($intro_id)) : ?>
				<div class="video">
					<?php focus_post_video($intro_id) ?>
				</div>
			<?php endif;
		wp_reset_query();
			?>
			<div class="category-description-bg">
				<h2 class="cat-info-h2"><?php single_cat_title(''); ?></h2>
				<hr>
				<div><p class="cat-info-p"><?php echo category_description(); ?></p></div>
			</div>		
		</div>
	</div>
	
	<div class="container main-container cat-page-container">
		<div class="container-decoration"></div>
		
		<div class="content-container">
			<div id="content" class="site-content" role="main">
			
			<?php get_template_part('posts-by-category') ?>
			
			<div class="clear"></div>
		</div>
		<?php if( siteorigin_setting('general_posts_nav') ) focus_content_nav('posts-nav') ?>
	</div>
	
	<!-- <div class="container main-container">
		<div class="single-info-container">
			<div class="row">
				<div class="col-md-8 entry-content">
					<h2 class="single-h2">Tietoa sarjasta</h2>
					<hr>
					<div><p><?php echo category_description(); ?><p></div>
				</div>
				<div class="col-md-4">
					<h2 class="single-h2">Viimeisin jakso</h2>
					<hr>
					<h3><?php the_title() ?></h3>
					<?php the_excerpt() ?>
				</div>
			</div>	
		</div>
	</div> -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>