<?php
/**
 * Atomic Blocks layout and section registration.
 *
 * @package Navigation
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/navigation/
 */

add_action( 'init', 'navigation_atomic_blocks_layouts' );
/**
 * Adds Atomic Blocks sections and layouts.
 *
 * @since 1.0.0
 */
function navigation_atomic_blocks_layouts() {

	if ( ! function_exists( 'atomic_blocks_register_layout_component' ) ) {
		return;
	}

	$sections = genesis_get_config( 'atomic-blocks-sections' );
	$layouts  = genesis_get_config( 'atomic-blocks-layouts' );
	$combined = array_merge( $sections, $layouts );

	foreach ( $combined as $component ) {
		atomic_blocks_register_layout_component( $component );
	}

}
