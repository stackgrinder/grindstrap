<?php

/*
 * Child Theme Options
 *
 * Uncomment the line below (the one with the add_filter function)
 * to add the new section to the theme options panel.
 * You can learn more about fields here: https://github.com/ReduxFramework/ReduxFramework/wiki/Fields
 */

function shoestrap_child_remove_filters(){
	remove_action( 'admin_init', 'shoestrap_theme_updater' );
	remove_action('admin_init', 'shoestrap_theme_activate_license');
}
add_action( 'after_setup_theme', 'shoestrap_child_remove_filters' );
