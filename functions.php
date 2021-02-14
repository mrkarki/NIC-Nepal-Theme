<?php

// Setup
define( 'nk_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/custom-nav-walker.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
include( get_theme_file_path( '/includes/theme-customizer.php' ) );
include( get_theme_file_path( '/includes/customizer/social.php' ) );
include( get_theme_file_path( '/includes/customizer/misc.php' ) );
include( get_theme_file_path( '/includes/customizer/enqueue.php' ) );
include( get_theme_file_path( '/includes/utility.php' ) );
include( get_theme_file_path( '/includes/admin/author-fields.php' ) );
include( get_theme_file_path( '/includes/avatar.php' ) );
include( get_theme_file_path( '/includes/home-query.php' ) );
if ( class_exists( 'WooCommerce' ) ) {
include( get_theme_file_path( '/includes/woocommerce.php' ) );
}

// Hooks
add_action( 'wp_enqueue_scripts', 'nk_enqueue' );
add_action( 'after_setup_theme', 'nk_setup_theme' );
add_action( 'widgets_init', 'nk_widgets' );
add_action( 'customize_register', 'nk_customize_register' );
add_action( 'customize_preview_init', 'nk_customize_preview_init' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_filter( 'excerpt_more', '__return_false' );
add_action( 'show_user_profile', 'nk_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'nk_custom_user_profile_fields' );
add_action( 'personal_options_update', 'nk_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'nk_save_extra_profile_fields' );
add_action( 'avatar_defaults', 'nk_new_avatar' );
add_action( 'pre_get_posts', 'nk_modify_home_page_query' );
add_action( 'tgmpa_register', 'nk_register_required_plugins' );

// Shortcodes

// Translation Functions
// __( 'Returns a translated string', 'nic ');
// _e( 'Outputs a translated string', 'nic' );
// _x( 'Bass', 'Instrument', 'nic' );
// _n( 'Singular Form', 'Plural Form', 1, 'nic' ); // Singular
// _n( 'Singular Form', 'Plural Form', 2, 'nic' ); // Plural
// _ex( 'Bass', 'Instrument', 'nic' );
// _nx( 'Singular', 'Plural', 2, 'Instrument', 'nic' );

// // HIGHLY recommended translation functions
// esc_html__( 'Returns an escaped translated string', 'nic' );
// esc_html_e( 'Outputs an escaped translated string', 'nic' );
// esc_html_x( 'Bass (Escaped)', 'Fish', 'nic' );
// wp_kses_post( __( 'Unescaped translated string', 'nic' ) );

