<div class="ak-bar-item ak-header-user">
	<?php
	if ( is_user_logged_in() ) {
		$current_user = wp_get_current_user();

		$dropdown            = array();
		$dropdown['profile'] = array(
			'text' => esc_html( $current_user->display_name ),
			'url'  => get_author_posts_url( $current_user->ID ),
		);

		$dropdown = apply_filters( 'newsy_user_dropdown', $dropdown );

		$dropdown['logout'] = array(
			'text' => newsy_get_translation( 'Logout', 'newsy', 'logout' ),
			'url'  => wp_logout_url( home_url() ),
		);


		?>
		<ul class="ak-menu ak-menu-wide ak-user-menu">
			<li class="menu-item menu-animation-FadeIn">
				<a href="<?php echo get_author_posts_url( $current_user->ID ); ?>" class="user-avatar">
					<?php echo get_avatar( $current_user->ID, 32 ); ?>
				</a>
				<ul class="sub-menu">
					<?php
					foreach ( $dropdown as $key => $value ) {
						echo "<li><a href=\"{$value['url']}\" class=\"user-menu-item-{$key}\">{$value['text']}</a></li>";
					}
					?>
				</ul>
			</li>
		</ul>
		<?php
	} else {
		if ( defined( 'AK_FRAMEWORK_PATH' ) ) {
			?>
			<a class="ak-header-icon-btn menu-login-user-icon" href="#userModal">
				<i class="ak-icon akfi-account_circle"></i>
			</a>
			<?php
		} else {
			?>
			<a class="ak-header-icon-btn" href="<?php echo esc_url( wp_login_url() ); ?>">
				<i class="ak-icon akfi-account_circle"></i>
			</a>
			<?php
		}
	}
	?>
</div>
