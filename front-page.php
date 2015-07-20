<?php
/**
 * The main template file.
 *
 *Home template
 *
 * @package focus
 * @since focus 1.0
 */

get_header();
?>

<?php get_template_part('slider') ?>

<div id="primary" class="content-area front-content">
	<!-- <div class="row">
		<div class="col-md-3"> -->
			<div class="nav-bg container">
				<ul class="nav nav-tabs subnav-tabs" role="tablist">
					<li role="presentation" class="active xl-nav"><a href="#kanava_esittely" aria-controls="kanavaesittely" role="tab" data-toggle="tab">Kalastajan kanava</a></li>
					<li role="presentation" class="xl-nav"><a href="#viimeisimmat" aria-controls="vimmeisimmat" role="tab" data-toggle="tab">Viimeisimmät videot</a></li>
					<li role="presentation" class="xl-nav"><a href="#sarjat" aria-controls="sarjat" role="tab" data-toggle="tab">Sarjat kanavalla</a></li>
					<li role="presentation" class="xl-nav"><a href="#suosituimmat" aria-controls="suosituimmat" role="tab" data-toggle="tab">Suosituimmat videot</a></li>
					<li role="presentation" class="xl-nav"><a href="#tulossa" aria-controls="tulossa" role="tab" data-toggle="tab">Tulossa</a></li>
					<li role="presentation" class="dropdown dropdown-subnav">
				        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				          Selaa sisältöä<span class="caret"></span>
				        </a>
				        <ul class="dropdown-menu dropdown-menu-front" role="menu">
				          <li><a href="#viimeisimmat" aria-controls="viimeisimmat" role="tab" data-toggle="tab">Viimeisimmät videot</a></li>
				          <li><a href="#suosituimmat" aria-controls="suosituimmat" role="tab" data-toggle="tab">Suosituimmat videot</a></li>
				          <li><a href="#sarjat" aria-controls="sarjat" role="tab" data-toggle="tab">Sarjat</a></li>
				          <li><a href="#tulossa" aria-controls="tulossa" role="tab" data-toggle="tab">Tulossa</a></li>
				        </ul>
				    </li>
				</ul>
			</div>
		<!-- </div> -->
		<!-- <div class="col-md-9">	-->
			<div id="content" class="site-content" role="main">
				
				<div class="main-container container">
					
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="kanava_esittely">
							<div class="content-container loop-container">
							<h3 class="cat-h3">Kanavaesittely</h3>
							<hr class="channel-hr">
								<?php while ( have_posts() ) : the_post(); ?>
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<?php the_content(); ?>
											<?php edit_post_link( 'Muokkaa', '<div class="edit-link">', '</div>' ) ?>
									</div>
								<?php endwhile;?>
							</div>	
						</div>
						<div role="tabpanel" class="tab-pane" id="viimeisimmat">
							<div class="content-container loop-container">
								<h3 class="cat-h3">Viimeeksi kanavalle lisätyt videot:</h3>
								<hr class="channel-hr">
								<?php get_template_part('latest_posts')?>
							</div>	
						</div>
						<div role="tabpanel" class="tab-pane" id="suosituimmat">
							<div class="content-container loop-container">
								<h3 class="cat-h3">Suosituimmat videot:</h3>
								<hr class="channel-hr">
								<?php get_template_part('popular_videos'); ?>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="sarjat">
							<div class="content-container loop-container">
								<h3 class="cat-h3">Kaikki sarjat:</h3>
								<hr class="channel-hr">
								<?php get_template_part('series-for-index') ?>
							</div>	
						</div>
						<div role="tabpanel" class="tab-pane" id="tulossa">
							<div id="content" class="site-content" role="main">
								<div class="content-container loop-container">
									<h3 class="cat-h3">Tulossa olevat videot:</h3>
									<hr class="channel-hr">
									<? get_template_part('coming-episodes') ?>
							</div>		
						</div>
					</div>
		
				<!-- </div> -->
			</div><!-- #content .site-content -->
		<!-- /div>	-->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>