<?php

namespace Newsy\Support;

/**
 * Newsy Ads Class.
 */
class Ads {

	/**
	 * @var Ads
	 */
	private static $instance;

	/**
	 * @return Ads
	 */
	public static function get_instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
			static::$instance->init();
		}

		return static::$instance;
	}

	/**
	 * Fire up newsy.
	 */
	private function init() {
		// main_top
		add_action( 'newsy_main_before', array( $this, 'background_ads' ) );

		add_action( 'newsy_header_before', array( $this, 'header_top_ad' ), 15 );

		add_action( 'newsy_header_after', array( $this, 'header_bottom_ad' ), 15 );

		add_action( 'newsy_content_after', array( $this, 'footer_top_ad' ) );

		// single_post_before
		add_action( 'newsy_single_before', array( $this, 'single_post_before_ad' ) );

		// archive grid before
		add_action( 'newsy_archive_content_before', array( $this, 'archive_grid_before' ), 19 );

		// archive grid after
		add_action( 'newsy_archive_content_before', array( $this, 'archive_grid_after' ), 21 );

		// single_post_content_before
		add_action( 'newsy_single_post_content_before', array( $this, 'single_post_article_before_ad' ) );

		// single_post_content_after
		add_action( 'newsy_single_post_content_after', array( $this, 'single_post_article_after_ad' ) );
	}

	public function background_ads() {
		$url    = esc_url( newsy_get_option( 'background_ads_url' ) );
		$output = '';

		if ( ! empty( $url ) ) {
			$new_tab = newsy_get_option( 'background_ads_open_tab' ) !== 'no' ? '_blank' : '';
			$output  = "<div class=\"bgads\"><a href=\"$url\" target='{$new_tab}'></a></div>";
		}
		newsy_sanitize_echo( $output );
	}

	public function header_top_ad() {
		newsy_get_ad( 'header_top_ad' );
	}

	public function header_bottom_ad() {
		newsy_get_ad( 'header_bottom_ad' );
	}

	public function footer_top_ad() {
		newsy_get_ad( 'footer_top_ad' );
	}

	public function single_post_before_ad() {
		newsy_get_ad( 'single_post_top_ad' );
	}

	public function archive_grid_before() {
		newsy_get_ad( 'archive_grid_before_ad' );
	}

	public function archive_grid_after() {
		newsy_get_ad( 'archive_grid_after_ad' );
	}

	public function single_post_article_before_ad() {
		newsy_get_ad( 'single_post_article_top_ad' );
	}

	public function single_post_article_after_ad() {
		newsy_get_ad( 'single_post_article_bottom_ad' );
	}
}
