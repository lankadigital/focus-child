<!-- <div class="container-decoration"></div> -->
		
		<!--  <div class="content-container">
			<div id="content" class="site-content" role="main">
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true );
				?>
			</div> --> <!-- #content .site-content.content-container 

			<?php get_sidebar(); ?> -->
			
			<!-- <div class="clear"></div>
		</div> -->
	
		
<!--		
		
class Fabula_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
  
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="2" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
 	}
}

$wp_customize->add_setting('youtube_setting', array('default' => 'http://youtube.com',));

$wp_customize->add_setting('twitter_setting', array('default' => 'http://twitter.com',));

$wp_customize->add_setting('facebook_setting', array('default' => 'http://facebook.com/',));

$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'twitter_setting', array(
  'label' => 'Twitter URL',
  'section' => 'content',
  'settings' => 'twitter_setting',
)));

$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'youtube_setting', array(
  'label' => 'Youtube URL',
  'section' => 'content',
  'settings' => 'youtube_setting',
)));

$wp_customize->add_control(new Fabula_Customize_Textarea_Control($wp_customize, 'facebook_setting', array(
  'label' => 'Facebook URL',
  'section' => 'content',
  'settings' => 'facebook_setting',
)));


$wp_customize->add_section('content' , array(
  'title' => __('Some linkit','Fabula'),
));

-->



?>

<?php

class Facebook_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'facebook';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
 	}
}
$wp_customize->add_setting('facebook_setting', array('default' => 'Facebook',));
$wp_customize->add_control(new Facebook_Customize_Textarea_Control($wp_customize, 'facebook_setting', array(
  'label' => 'Facebook',
  'section' => 'content',
  'settings' => 'Facebook_setting',
)));
$wp_customize->add_section('content' , array(
  'title' => __('Facebook','fabula'),
));