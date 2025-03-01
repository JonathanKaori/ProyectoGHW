<?php
/**
 * Admin functions - Functions that add some functionality to WordPress admin panel
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register menus
 */
if ( ! function_exists( 'astra_register_menu_locations' ) ) {

	/**
	 * Register menus
	 *
	 * @since 1.0.0
	 */
	function astra_register_menu_locations() {

		/**
		 * Primary Menus
		 */
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'astra' ),
			)
		);

		if ( true === Astra_Builder_Helper::$is_header_footer_builder_active ) {

			/**
			 * Register the Secondary & Mobile menus.
			 */
			register_nav_menus(
				array(
					'secondary_menu' => __( 'Secondary Menu', 'astra' ),
					'mobile_menu'    => __( 'Off-Canvas Menu', 'astra' ),
				)
			);


			$component_limit = defined( 'ASTRA_EXT_VER' ) ? Astra_Builder_Helper::$component_limit : Astra_Builder_Helper::$num_of_header_menu;

			for ( $index = 3; $index <= $component_limit; $index++ ) {

				if ( ! is_customize_preview() && ! Astra_Builder_Helper::is_component_loaded( 'menu-' . $index ) ) {
					continue;
				}

				register_nav_menus(
					array(
						'menu_' . $index => __( 'Menu ', 'astra' ) . $index,
					)
				);
			}

			/**
			 * Register the Account menus.
			 */
			register_nav_menus(
				array(
					'loggedin_account_menu' => __( 'Logged In Account Menu', 'astra' ),
				)
			);

		}

		/**
		 * Footer Menus
		 */
		register_nav_menus(
			array(
				'footer_menu' => __( 'Footer Menu', 'astra' ),
			)
		);

	}
}

add_action( 'init', 'astra_register_menu_locations' );


add_filter( 'wp_nav_menu_items', 'dcms_items_login_logout', 10, 2 );

function dcms_items_login_logout( $items, $args ) {

  if ( $args->theme_location == 'primary' ) {
    $login_logout_text = is_user_logged_in() ? 'Log Out' : 'Login';
    $login_logout_url  = is_user_logged_in() ? wp_logout_url( home_url() ) : wp_login_url(); // Use home_url() for consistent behavior

    $items .= "<li class='menu-item btn-menu btn-logout'>
                <a href='$login_logout_url'>$login_logout_text</a>
              </li>";
  }

  return $items;
}
