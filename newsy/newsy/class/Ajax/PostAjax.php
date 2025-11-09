<?php

namespace Newsy\Ajax;

use Ak\Support\PostQuery;
use Newsy\Single\SinglePost;
use Newsy\Support\Comment;

/**
 * Class PostAjax.
 */
class PostAjax {

	/**
	 * Handle post ajax request.
	 *
	 * @return void
	 */
	public static function handle_autoload() {
		global $wp_query;
		$required_keys = array(
			'nonce'    => '',
			'post_id'  => '',
			'template' => '',
		);

		// checking for valid ajax params
		if ( array_diff_key( $required_keys, $_POST ) ) {
			wp_send_json(
				array(
					'success' => 0,
					'message' => 'Invalid Request!',
				)
			);
		}

		if ( empty( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'newsy_nonce' ) ) {
			wp_send_json(
				array(
					'success' => 0,
					'message' => 'Invalid Token!',
				)
			);
		}

		$post_id = filter_input( INPUT_POST, 'post_id', FILTER_SANITIZE_NUMBER_INT );

		$wp_query = PostQuery::do_query(
			array(
				'count' => 1,
				'post'  => $post_id,
			)
		);

		if ( $wp_query ) {
			$the_post = SinglePost::get_instance();
			$the_post->init( $wp_query->post );

			$inline           = false;
			$inline_enabled   = newsy_get_option( 'post_autoload_inline' );
			$inline_templates = array( 'style-1', 'style-2', 'style-3', 'style-4' );
			$prev_template    = filter_input( INPUT_POST, 'template', FILTER_SANITIZE_STRING );

			ob_start();

			if ( 'enabled' === $inline_enabled && in_array( $prev_template, $inline_templates, true ) ) {
				$inline = true;
				get_template_part( 'views/post/post-' . str_replace( 'style', 'article', $prev_template ) );
			} else {
				get_template_part( 'single', 'autoload' );
			}

			wp_send_json(
				array(
					'success' => 1,
					'inline'  => $inline,
					'html'    => ob_get_clean(),
				)
			);
		}

		wp_send_json(
			array(
				'success' => 0,
				'message' => '',
			)
		);
	}

	/**
	 * Handle ajax post count.
	 *
	 * @return mixed
	 */
	public static function handle_counter() {
		try {
			$validation_error = new \WP_Error();

			if ( $validation_error->get_error_code() ) {
				throw new \Exception( $validation_error->get_error_message() );
			}

			if ( empty( $_POST['nonce'] ) && ! wp_verify_nonce( $_POST['nonce'], 'newsy_nonce' ) ) {
				throw new \Exception( newsy_get_translation( 'Security error!', 'newsy', 'security_error' ) );
			}

			if ( empty( $_POST['post_id'] ) ) {
				throw new \Exception( 'error' );
			}

			$post_id = filter_input( INPUT_POST, 'post_id', FILTER_SANITIZE_NUMBER_INT );

			$total_comment = Comment::get_instance()->get_total( $post_id, true );

			if ( function_exists( 'newsy_get_share_counts' ) ) {
				$total_share = newsy_get_share_counts( $post_id );
				$total_share = $total_share['total'];
			} else {
				$total_share = 0;
			}

			if ( function_exists( 'newsy_get_post_view_count' ) ) {
				$total_view = newsy_get_post_view_count( $post_id, true );
			} else {
				$total_view = 0;
			}

			$counter = apply_filters(
				'newsy_post_ajax_counter', array(
					'total_view'    => apply_filters( 'newsy_number_format', $total_view ),
					'total_share'   => apply_filters( 'newsy_number_format', $total_share ),
					'total_comment' => $total_comment,
				), $post_id
			);

			wp_send_json(
				array(
					'success' => 1,
					'counter' => $counter,
				)
			);
		} catch ( \Exception $e ) {
			wp_send_json(
				array(
					'success' => 0,
					'message' => $e->getMessage(),
				)
			);
		}
	}

	/**
	 * Handle ajax post voting.
	 *
	 * @return mixed
	 */
	public static function handle_voting() {
		if ( empty( $_POST['type'] ) || empty( $_POST['post_id'] ) ) {
			wp_send_json(
				array(
					'success' => 0,
					'message' => 'Invalid Request!',
				)
			);
		}

		$post_id    = filter_input( INPUT_POST, 'post_id', FILTER_SANITIZE_NUMBER_INT );
		$type       = filter_input( INPUT_POST, 'type', FILTER_SANITIZE_STRING );
		$vote_count = ak_get_post_meta( 'post_vote_' . $type, $post_id );

		if ( empty( $vote_count ) ) {
			$vote_count = 0;
		}

		$vote_count += 1;

		ak_update_post_meta( 'post_vote_' . $type, $post_id, $vote_count );

		wp_send_json(
			array(
				'success' => 1,
				'count'   => $vote_count,
			)
		);
	}

	/**
	 * Handle ajax post comment form.
	 *
	 * @return mixed
	 */
	public static function handle_comments() {
		if ( empty( $_POST['post_id'] ) ) {
			wp_send_json(
				array(
					'success' => 0,
					'message' => 'Invalid Request!',
				)
			);
		}

		$post_id = filter_input( INPUT_POST, 'post_id', FILTER_SANITIZE_NUMBER_INT );

		// ajax comment
		query_posts(
			array(
				'p'            => $post_id,
				'withcomments' => 1,
				'feed'         => 1,
			)
		);

		while ( have_posts() ) :
			the_post();
			global $post;
			setup_postdata( $post );
			get_template_part( 'views/comments/comments' );
		endwhile;

		wp_reset_query();
	}
}
