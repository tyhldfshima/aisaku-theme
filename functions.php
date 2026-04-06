<?php
/**
 * AI-SAKU Theme functions and definitions.
 *
 * @package aisaku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AISAKU_THEME_VERSION', '1.0.0' );

function aisaku_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'aisaku_setup' );

function aisaku_enqueue_styles() {
	wp_enqueue_style(
		'aisaku-style',
		get_stylesheet_uri(),
		array(),
		AISAKU_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'aisaku_enqueue_styles' );

function aisaku_register_block_pattern_category() {
	register_block_pattern_category( 'aisaku', array(
		'label' => __( 'AI-SAKU', 'aisaku' ),
	) );
}
add_action( 'init', 'aisaku_register_block_pattern_category' );
