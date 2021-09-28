<?php
/**
 * Back compatibility
 *
 * Support older WordPress versions.
 *
 * @package Elara
 */

if ( ! function_exists( 'get_parent_theme_file_path' ) ) :
	/**
	 * Retrieves the path of a file in the parent theme.
	 *
	 * @since 4.7.0
	 *
	 * @param string $file Optional. File to return the path for in the template directory.
	 * @return string The path of the file.
	 */
	function get_parent_theme_file_path( $file = '' ) {
		$file = ltrim( $file, '/' );

		if ( empty( $file ) ) {
			$path = get_template_directory();
		} else {
			$path = get_template_directory() . '/' . $file;
		}

		/**
		 * Filters the path to a file in the parent theme.
		 *
		 * @since 4.7.0
		 *
		 * @param string $path The file path.
		 * @param string $file The requested file to search for.
		 */
		return apply_filters( 'parent_theme_file_path', $path, $file );
	}
endif;

if ( ! function_exists( 'get_parent_theme_file_uri' ) ) :
	/**
	 * Retrieves the URL of a file in the parent theme.
	 *
	 * @since 4.7.0
	 *
	 * @param string $file Optional. File to return the URL for in the template directory.
	 * @return string The URL of the file.
	 */
	function get_parent_theme_file_uri( $file = '' ) {
		$file = ltrim( $file, '/' );

		if ( empty( $file ) ) {
			$url = get_template_directory_uri();
		} else {
			$url = get_template_directory_uri() . '/' . $file;
		}

		/**
		 * Filters the URL to a file in the parent theme.
		 *
		 * @since 4.7.0
		 *
		 * @param string $url  The file URL.
		 * @param string $file The requested file to search for.
		 */
		return apply_filters( 'parent_theme_file_uri', $url, $file );
	}
endif;

if ( ! function_exists( 'get_theme_file_uri' ) ) :
	/**
	 * Retrieves the URL of a file in the theme.
	 *
	 * Searches in the stylesheet directory before the template directory so themes
	 * which inherit from a parent theme can just override one file.
	 *
	 * @since 4.7.0
	 *
	 * @param string $file Optional. File to search for in the stylesheet directory.
	 * @return string The URL of the file.
	 */
	function get_theme_file_uri( $file = '' ) {
		$file = ltrim( $file, '/' );

		if ( empty( $file ) ) {
			$url = get_stylesheet_directory_uri();
		} elseif ( file_exists( get_stylesheet_directory() . '/' . $file ) ) {
			$url = get_stylesheet_directory_uri() . '/' . $file;
		} else {
			$url = get_template_directory_uri() . '/' . $file;
		}

		/**
		 * Filters the URL to a file in the theme.
		 *
		 * @since 4.7.0
		 *
		 * @param string $url  The file URL.
		 * @param string $file The requested file to search for.
		 */
		return apply_filters( 'theme_file_uri', $url, $file );
	}
endif;