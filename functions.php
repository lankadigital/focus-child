<?php

	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_scripts' );
	function theme_enqueue_styles_scripts() {
			wp_enqueue_script( 'bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
			wp_enqueue_script( 'mainjs', get_stylesheet_directory_uri() . '/js/main.js' );
			wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
			wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style') );
	}


/**
 * Custom template tags for this theme.
 */
require( get_stylesheet_directory() . '/inc/template-tags.php' );

/** End custom template tags **/

// Start custom post type function
/** function blog_posts_init() {
    $args = array(
      'label' => 'Blogit',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blog-posts','with_front' => false),
        'query_var' => true,
        'menu_icon' => 'f119',
        'supports' => array(
            'title',
            'editor',
            'trackbacks',
            'author',
            'page-attributes',)
        );
    register_post_type( 'blog-posts', $args );
}
add_action( 'init', 'blog_posts_init' ); **/

// Register Custom Post Type
function articles_post_type() {

	$labels = array(
		'name'                => _x( 'Articles', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Articles', 'text_domain' ),
		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'articles', 'text_domain' ),
		'description'         => __( 'Articles', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu-icon'           => 'dashicons-admin-post',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'articles', $args );

}

// Hook into the 'init' action
add_action( 'init', 'articles_post_type', 0 );


function fabula_customizer( $wp_customize ) {
	
	/*******************************************
	Color scheme
	********************************************/
	 
	// add the section to contain the settings
	$wp_customize->add_section( 'textcolors' , array(
	    'title' =>  'Kanavan värimääritykset',
	) );
	
	// main color ( h2-background )
	$txtcolors[] = array(
	    'slug'=>'color_scheme_1', 
	    'default' => '#666',
	    'label' => 'Otsikkojen taustat'
	);
	
	// secondary color ( channel-hr )
	$txtcolors[] = array(
	    'slug'=>'color_scheme_2', 
	    'default' => '#666',
	    'label' => 'Tehostenuolet'
	);
	
	// secondary color ( channel-hr )
	$txtcolors[] = array(
	    'slug'=>'color_scheme_3', 
	    'default' => '#666',
	    'label' => 'Päätehosteväri'
	);
	
	// add the settings and controls for each color
	foreach( $txtcolors as $txtcolor ) {
	 
	    // SETTINGS
	    $wp_customize->add_setting(
	        $txtcolor['slug'], array(
	            'default' => $txtcolor['default'],
	            'type' => 'option', 
	            'capability' => 
	            'edit_theme_options'
	        )
	    );
	    // CONTROLS
	    $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            $txtcolor['slug'], 
	            array('label' => $txtcolor['label'], 
	            'section' => 'textcolors',
	            'settings' => $txtcolor['slug'])
	        )
	    );
	}
	
	class Fabula_Customize_Textarea_Control extends WP_Customize_Control {
	  public $type = 'textarea';
	  public function render_content() {
	?>
	
	  <label>
	    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	  </label>
	
	<?php
	 	}
	}
	
	//* SOME LINKIT **//
	
	$wp_customize->add_setting('textarea_setting', array('default' => 'Twitter URL',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea_setting', array(
	  'label' => 'Twitter URL',
	  'section' => 'content',
	  'settings' => 'textarea_setting',
	)));
	
	$wp_customize->add_setting('textarea1_setting', array('default' => 'Facebook URL',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea1_setting', array(
	  'label' => 'Facebook URL',
	  'section' => 'content',
	  'settings' => 'textarea1_setting',
	)));
	
	$wp_customize->add_setting('textarea3_setting', array('default' => 'Youtube',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea3_setting', array(
	  'label' => 'Youtube URL',
	  'section' => 'content',
	  'settings' => 'textarea3_setting',
	)));
	
	$wp_customize->add_section('content' , array(
	  'title' => __('SOME linkit','fabula'),
	));
	
	//* Yhteystiedot **//
	
	$wp_customize->add_setting('textarea4_setting', array('default' => 'Etunimi Sukunimi',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea4_setting', array(
	  'label' => 'Nimi',
	  'section' => 'yhteystiedot',
	  'settings' => 'textarea4_setting',
	)));
	
	$wp_customize->add_setting('textarea5_setting', array('default' => 'Kanavan vetäjä',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea5_setting', array(
	  'label' => 'Titteli',
	  'section' => 'yhteystiedot',
	  'settings' => 'textarea5_setting',
	)));
	
	$wp_customize->add_setting('textarea6_setting', array('default' => 'Puhelinnumero',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea6_setting', array(
	  'label' => 'Puhelinnumero',
	  'section' => 'yhteystiedot',
	  'settings' => 'textarea6_setting',
	)));
	
	$wp_customize->add_setting('textarea7_setting', array('default' => 'Sähköposti',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea7_setting', array(
	  'label' => 'Sähköposti',
	  'section' => 'yhteystiedot',
	  'settings' => 'textarea7_setting',
	)));
	
	$wp_customize->add_section('yhteystiedot' , array(
	  'title' => __('Yhteystiedot','fabula'),
	));
	
	$wp_customize->add_setting('textarea9_setting', array('default' => 'Kanavan nimi',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea9_setting', array(
	  'label' => 'Kanavan nimi',
	  'section' => 'kanavan_nimi',
	  'settings' => 'textarea9_setting',
	)));
	
	$wp_customize->add_section('kanavan_nimi' , array(
	  'title' => __('Kanavan nimi','fabula'),
	));
	
	/** Brand hr **/
	
	$wp_customize->add_setting('textarea8_setting', array('default' => 'kalastajankanava',));
	$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'textarea8_setting', array(
	  'label' => 'Kanavaviivan määrittäminen',
	  'section' => 'textcolors',
	  'settings' => 'textarea8_setting',
	)));
	
	//** CHANGE LOGO **//
	
	$wp_customize->add_section( 'themeslug_logo_section' , array(
	    'title'       => __( 'Logo', 'themeslug' ),
	    'priority'    => 30,
	    'description' => 'Lataa kanavan logo tähän',
	) );
	
	$wp_customize->add_setting( 'themeslug_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Logo', 'themeslug' ),
	    'section'  => 'themeslug_logo_section',
	    'settings' => 'themeslug_logo',
	) ) );
	
	
	
}
add_action( 'customize_register', 'fabula_customizer' );

/*************/

function fabula_customize_colors() {

/**********************
text colors
**********************/
// main color
$color_scheme_1 = get_option( 'color_scheme_1' );
$color_scheme_2 = get_option( 'color_scheme_2' );
$color_scheme_3 = get_option( 'color_scheme_3' );

/****************************************
styling
****************************************/
?>
<style>
 
 
/* color scheme */
 
/* main color */
.entry-title-category { 
    background-color:  <?php echo $color_scheme_1; ?>; 
}

.media__body {
  background: <?php echo $color_scheme_1; ?>;

}

.meta-nav .fa-angle-left, .meta-nav .fa-angle-right, .index-more .fa {
	color: <?php echo $color_scheme_2; ?>;
}

.box-excerpt-bg { 
    background-color: <?php echo $color_scheme_3; ?>; 
}

.subnav-tabs>li.active>a, .subnav-tabs>li.active>a:focus, .subnav-tabs>li.active>a:hover, .subnav-tabs>li>a:active {
	border-top: 2px solid <?php echo $color_scheme_3; ?> !important;
	border-bottom: 2px solid #1d1d1d !important;
}

.subnav-tabs>li>a:hover, .subnav-tabs>li>a:focus {
	border-top: 2px solid <?php echo $color_scheme_3; ?> !important;
	border-bottom: 2px solid #1d1d1d !important;
}

</style>

<?php }

add_action( 'wp_head', 'fabula_customize_colors' );

/**
 * @return WP_Query
 */
function focus_get_cat_slider_posts(){
	return new WP_Query(apply_filters('focus_slider_cat_posts_query', array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'cat' => '-6, -7',
		'post_per_page' => '3',
		'orderby' => 'post_date',
		'order' => 'DESC',
		'taxonomy' => 'category',
	)));
}

// Limited excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Word limited text
function word_trim($text, $limit) {
	$text = str_replace("  ", " ", $text);
	$string = explode(" ", $text);
	for ( $wordCounter = 0; $wordCounter <= $limit; $wordCounter++ ) {
		$result .= $string[$wordCounter];
		if ( $wordCounter < $limit ) {
			$result .= " ";
		}
		else {
			$result .= "...";
		}
	}
	$result = trim($result);
	
	return $result;
}

// Customize Search Results title
add_filter( 'wp_title', 'lanka_custom_search_title' );
function lanka_custom_search_title( $title ) {
	if ( is_search() ) {
		return 'Hakutulokset: '. get_search_query();
	}
	return $title;
}

?>