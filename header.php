<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package focus
 * @since focus 1.0
 */
 $path = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/css/animations.css">
	
	<?php wp_register_script( 'animateitjs', $path . '/js/css3-animate-it.js', array('jquery'), 'v1.0', true ); ?>
	<?php wp_enqueue_script( 'animateitjs' ); ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<section class="container">
			<div class="brand-nav">
				<?php ( get_theme_mod( 'themeslug_logo' ) ) ?>
				<div class="img-group">
			        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="header-logo" rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) );  ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
				</div>
				<hgroup>
					<h1 class="site-title <?php echo siteorigin_setting('general_logo') ? 'image-logo' : 'text-logo' ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php focus_display_logo(); ?>
						</a>
					</h1>
				</hgroup>
			</div>	
	
			<nav role="navigation" id="main-navigation" class="site-navigation primary">
				
				<h1 class="assistive-text"><?php _e( 'Menu', 'focus' ); ?></h1>
				<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'focus' ); ?>"><?php _e( 'Skip to content', 'focus' ); ?></a></div>
				
				<?php do_action('before_menu'); ?>
				<div class="menu-wrapper">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
				<?php do_action('after_menu'); ?>
				
			</nav><!-- .site-navigation .main-navigation -->
			
			<div class="clear"></div>
		</section><!-- .container -->
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
