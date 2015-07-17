<?php
/**
 * The Template for displaying all single posts.
 *
 * @package focus
 * @since focus 1.0
 */

get_header(); the_post(); ?>

<a name="wrapper"></a>
<div id="primary" class="content-area">
	
	<div id="single-header" class="single-headerarticles">
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('slider') ?>
		<?php endif; ?>

		<div class="container main-container">
			<div class="post-heading">
				<h1></h1>
			</div>
			
			<?php if(focus_post_has_video()) : ?>
				<div class="video">
					<?php focus_post_video() ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
	<div class="container main-container">
		<div class="single-info-container single-article-container">
			<div class="row">
				<div class="col-md-12 entry-content">
					<h3 class="single-h3"><?php the_title() ?></h3>
					<hr>
					<?php the_content() ?>
				</div>
			</div>	
		</div>
	</div>
	
	<div class="container main-container">
		<h3 class="single-h3">Katsoitko jo?</h3>
		<div class="content-container">	
			<?php get_template_part('nostot') ?>
		</div>	
	</div>
	
	<div class="container">
		
	</div>
</div><!-- #primary .content-area -->

<?php get_footer(); ?>
