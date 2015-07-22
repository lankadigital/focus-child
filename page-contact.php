<?php

/*
 * Template Name: Yhteystietosivu
 * Description: Template for contact page
 */

get_header(); the_post(); ?>

<a name="wrapper"></a>
<div id="primary page-contact" class="content-area">

	<div id="single-header">
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('slider') ?>
			<div class="overlay"></div>
		<?php endif; ?>

		<div class="container index-container contact-container">
			<div class="post-heading">
				<h1 class="index-h1"> <?php echo siteorigin_setting('general_logo') ? 'image-logo' : '' ?><?php focus_display_logo(); ?></h1>
				<hr class="channel-hr">
				<h3 class="index-h3"><?php the_title() ?></h3>
				<?php if(has_excerpt()) : ?><p><?php the_excerpt() ?></p><?php endif; ?>
			</div>
		</div>
	</div>

	<div class="container front-content cat-content-container">
		<div class="container-decoration"></div>
			<div class="row">
				<div id="content" class="site-content" role="main">
					<div class="col-md-7">
						<div class="entry-content">
							<?php the_content() ?>
						</div>
					</div>	
				</div><!-- #content .site-content.content-container -->
				<div class="col-md-5">
	
					<?php get_sidebar(); ?>
				</div>
			</div>		
			
			<div class="clear"></div>
	</div>
</div><!-- #primary .content-area -->

<?php get_footer(); ?>