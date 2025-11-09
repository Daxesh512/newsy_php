<?php
namespace Newsy\Page;

use Newsy\TemplateAbstract;

/**
 * Shop template class.
 */
class Shop extends TemplateAbstract {

	public $template_id = 'woocommerce';

	public $post;

	public function __construct() {
		parent::__construct();

		$this->hook();
	}

	public function hook() {
		$this->post = get_post();

		if ( $this->post ) {
			$this->id = $this->post->ID;
		}
	}

	public function get_header() {
		// If Term header is not Active
		if ( $this->get_option( 'hide_term_header' ) === 'hide' ) {
			return '';
		}

		$archive_header_style = $this->get_option( 'header_style', '1' );

		// Custom title
		$title = woocommerce_page_title( false );

		$archive_title = '<h1 class="ak-archive-name"><span class="ak-archive-name-text">' . $title . '</span></h1>';
		$breadcrumb    = $this->get_breadcrumb( false, false );

		return "<div class=\"ak-archive-header ak-archive-header-style-{$archive_header_style}\">
                    <div class=\"container\">
                        {$breadcrumb}
                        <div class=\"ak-archive-header-inner\">
                            <div class=\"ak-archive-head clearfix\">
                                <div class=\"ak-archive-head-inner\">
                                      {$archive_title}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
	}

	public function get_title() {
		// If Term header is not Active
		if ( $this->get_option( 'show_title' ) === 'hide' ) {
			return;
		}

		echo '<h1 class="page-title">' . get_the_title( $this->id ) . '</h1>';
	}
}
