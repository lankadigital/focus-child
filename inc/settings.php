<?php

function focus_theme_settings(){

siteorigin_settings_add_field('general', 'posts_nav', 'checkbox',__('Display Post Navigation', 'focus'), array(
	'description' => __('Display next and previous post links on post single pages.', 'focus')
));