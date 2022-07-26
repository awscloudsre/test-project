<?php
/**
 * Update options for the version 1.2.11
 *
 * @link       https://shapedplugin.com
 * @since      1.2.11
 *
 * @package    Location_Weather
 * @subpackage Location_Weather/Admin/updates
 */

/**
 * Update DB version.
 */
update_option( 'location_weather_db_version', '1.3.0' );
update_option( 'location_weather_version', '1.3.0' );

/**
 * Update Settings.
 */
$args     = new \WP_Query(
	array(
		'post_type'      => array( 'page' ),
		'post_status'    => 'publish',
		'posts_per_page' => '300',
	)
);
$post_ids = wp_list_pluck( $args->posts, 'ID' );

if ( count( $post_ids ) > 0 ) {
	add_filter( 'wp_revisions_to_keep', '__return_false' );
	foreach ( $post_ids as $post_key => $pid ) {
		$post_data    = get_post( $pid );
		$post_content = isset( $post_data->post_content ) ? $post_data->post_content : '';
		if ( ! empty( $post_content ) && ( strpos( $post_content, 'wp:sp-location-weather' ) !== false ) ) {
			$post_content   = preg_replace( '/wp:sp-location-weather\/shortcode/i', 'wp:sp-location-weather-pro/shortcode', $post_content );
			$gutenberg_post = array(
				'ID'           => $pid,
				'post_content' => $post_content,
			);
			// Update the post into the database.
			wp_update_post( $gutenberg_post );
		}
	}
}
