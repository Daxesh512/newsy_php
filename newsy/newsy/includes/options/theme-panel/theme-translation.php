<?php

//Search
$fields[] = array(
	'heading' => 'Search',
	'id'      => 'search_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);

$fields[] = array(
	'heading' => 'Search',
	'default' => 'Search',
	'id'      => 'search',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Search...',
	'default' => 'Search...',
	'id'      => 'search_input_text',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Search for',
	'default' => 'Search for',
	'id'      => 'search_for',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading'     => 'Search Results for "%1$s" (%2$s)',
	'default'     => 'Search Results for "%1$s" (%2$s)',
	'description' => esc_html__( 'First %1$s will be replaced with search keyword and second %2$s will be replaced with search result count.', 'newsy' ),
	'id'          => 'search_page_title',
	'type'        => 'text',
	'section'     => 'translation',
);
$fields[] = array(
	'heading' => 'Nothing Found',
	'default' => 'Nothing Found',
	'id'      => 'search_nothing_found',
	'type'    => 'text',
	'section' => 'translation',
);

//comments
$fields[] = array(
	'heading' => 'Comments',
	'id'      => 'comments_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);

$fields[] = array(
	'heading' => 'Comments',
	'default' => 'Comments',
	'id'      => 'comments',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Facebook Comments',
	'default' => 'Facebook Comments',
	'id'      => 'facebook_comments',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Disqus Comments',
	'default' => 'Disqus Comments',
	'id'      => 'disqus_comments',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Read All Comment',
	'default' => 'Read All Comment',
	'id'      => 'comment_read_button',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Leave Comment',
	'default' => 'Leave Comment',
	'id'      => 'comment_leave_button',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'No Comments Title',
	'default' => 'Comments',
	'id'      => 'no_comment_title',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => '1 Comment',
	'default' => '1 Comment',
	'id'      => 'comments_1_comment',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => '%s Comments',
	'default' => '%s Comments',
	'id'      => 'comments_count_title',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Post Comment',
	'default' => 'Post Comment',
	'id'      => 'comments_post_comment',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Cancel Reply',
	'default' => 'Cancel Reply',
	'id'      => 'comments_cancel_reply',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Leave A Reply',
	'default' => 'Leave A Reply',
	'id'      => 'comments_leave_reply',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Reply To %s',
	'default' => 'Reply To %s',
	'id'      => 'comments_reply_to',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Log out?',
	'default' => 'Log out?',
	'id'      => 'comments_logout',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Your Comment',
	'default' => 'Your Comment',
	'id'      => 'comments_your_comment',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Your Name',
	'default' => 'Your Name',
	'id'      => 'comments_your_title',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Your Email',
	'default' => 'Your Email',
	'id'      => 'comments_your_email',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Your Website',
	'default' => 'Your Website',
	'id'      => 'comments_your_website',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Log out of this account',
	'default' => 'Log out of this account',
	'id'      => 'comments_logout_this',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Logged in as',
	'default' => 'Logged in as',
	'id'      => 'comments_logged_as',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Edit',
	'default' => 'Edit',
	'id'      => 'comments_edit',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Next',
	'default' => 'Next',
	'id'      => 'comment_next',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Prev',
	'default' => 'Prev',
	'id'      => 'comment_previous',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Comments %s',
	'default' => 'Comments %s',
	'id'      => 'comment_page_numbers',
	'type'    => 'text',
	'section' => 'translation',
);

/**
 * Login Form
 */
$fields[] = array(
	'heading' => 'Login & Register Form',
	'id'      => 'login_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Login',
	'id'      => 'login_heading',
	'type'    => 'heading',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Login',
	'default' => 'Login',
	'id'      => 'login_title',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Welcome, Login to your account.',
	'default' => 'Welcome, Login to your account.',
	'id'      => 'login_message',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Username or Email...',
	'default' => 'Username or Email...',
	'id'      => 'login_username_email',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Password...',
	'default' => 'Password...',
	'id'      => 'login_password',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Remember me',
	'default' => 'Remember me',
	'id'      => 'login_remember',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'No account?',
	'default' => 'No account?',
	'id'      => 'register_no_account',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Log In',
	'default' => 'Log In',
	'id'      => 'login_button',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'No account?',
	'default' => 'No account?',
	'id'      => 'login_no_account',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Register',
	'default' => 'Register',
	'id'      => 'login_signup',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Forget password?',
	'default' => 'Forget password?',
	'id'      => 'login_forget_pass_btn',
	'type'    => 'text',
	'section' => 'translation',
);


// register
$fields[] = array(
	'heading' => 'Register',
	'id'      => 'register_heading',
	'type'    => 'heading',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Register',
	'default' => 'Register',
	'id'      => 'register_title',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Welcome, Create your new account',
	'default' => 'Welcome, Create your new account',
	'id'      => 'register_message',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Username',
	'default' => 'Username',
	'id'      => 'register_username',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Email',
	'default' => 'Email',
	'id'      => 'register_email',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Password...',
	'default' => 'Password...',
	'id'      => 'register_password',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Sign Up',
	'default' => 'Sign Up',
	'id'      => 'register_button',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Go to Sign In',
	'default' => 'Go to Sign In',
	'id'      => 'login_back_text',
	'type'    => 'text',
	'section' => 'translation',
);



// other
$fields[] = array(
	'heading' => 'Other',
	'id'      => 'other_login_heading',
	'type'    => 'heading',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Logout',
	'default' => 'Logout',
	'id'      => 'logout',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Login With %s',
	'default' => 'Login With %s',
	'id'      => 'login_with',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Or',
	'default' => 'Or',
	'id'      => 'login_or',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'User or password incorrect!',
	'default' => 'User or password incorrect!',
	'id'      => 'login_incorrect',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'A user could not be found with this email address.',
	'default' => 'A user could not be found with this email address.',
	'id'      => 'email_incorrect',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Email or username incorrect!',
	'default' => 'Email or username incorrect!',
	'id'      => 'register_incorrect',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Email already exists!',
	'default' => 'Email already exists!',
	'id'      => 'register_email_exists',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Username already exists!',
	'default' => 'Username already exists!',
	'id'      => 'register_username_exists',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Invalid username',
	'default' => 'Invalid username',
	'id'      => 'invalid_username',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Invalid email',
	'default' => 'Invalid email',
	'id'      => 'invalid_email',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Success! Please check your email (index or spam folder), the password was sent there.',
	'default' => 'Success! Please check your email (index or spam folder), the password was sent there.',
	'id'      => 'register_done_send_email',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Login successful. Please wait while you are being redirected.',
	'default' => 'Login successful. Please wait while you are being redirected.',
	'id'      => 'login_success_wait_redirecting',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Register disabled!',
	'default' => 'Register disabled!',
	'id'      => 'register_disabled',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'All fields are required!',
	'default' => 'All fields are required!',
	'id'      => 'fields_required',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Password Reset Form',
	'id'      => 'pr_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Recover your password.',
	'default' => 'Recover your password.',
	'id'      => 'login_reset_title',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'A password will be e-mailed to you.',
	'default' => 'A password will be e-mailed to you.',
	'id'      => 'login_reset_message',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Username or Email',
	'default' => 'Username or Email',
	'id'      => 'login_reset_username',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Send My Password',
	'default' => 'Send My Password',
	'id'      => 'login_reset_send',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Email or username is not registered into this site',
	'default' => 'Email or username is not registered into this site',
	'id'      => 'email_username_not_registered',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Someone has requested a password reset for the following account:',
	'default' => 'Someone has requested a password reset for the following account:',
	'id'      => 'someone_request_password_reset',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Username: %s',
	'default' => 'Username: %s',
	'id'      => 'username_s',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'If this was a mistake, just ignore this email and nothing will happen.',
	'default' => 'If this was a mistake, just ignore this email and nothing will happen.',
	'id'      => 'ignore_mistake_email',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => '[%s] Password Reset',
	'default' => '[%s] Password Reset',
	'id'      => 's_password_reset',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'The e-mail could not be sent. Your host may have disabled the mail function...',
	'default' => 'The e-mail could not be sent. Your host may have disabled the mail function...',
	'id'      => 'email_not_sent_host_disable_mail_function',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Please check your e-mail for the confirmation link',
	'default' => 'Please check your e-mail for the confirmation link',
	'id'      => 'check_email_confirmation_link',
	'type'    => 'text',
	'section' => 'translation',
);
/**
 * 404
 */
$fields[] = array(
	'heading' => '404 Page',
	'id'      => '404_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Page Not Found!',
	'default' => 'Page Not Found!',
	'id'      => '404_not_found',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => "We're sorry, but we can't find the page you were looking for. It's probably some thing we've done wrong but now we know about it and we'll try to fix it. In the meantime, try to go homepage:",
	'default' => "We're sorry, but we can't find the page you were looking for. It's probably some thing we've done wrong but now we know about it and we'll try to fix it. In the meantime, try to go homepage:",
	'id'      => '404_not_found_message',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Back to Homepage',
	'default' => 'Back to Homepage',
	'id'      => '404_go_homepage',
	'type'    => 'text',
	'section' => 'translation',
);

//Post
$fields[] = array(
	'heading' => 'Single Post',
	'id'      => 'single_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Shares',
	'default' => 'Shares',
	'id'      => 'shares',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Tags:',
	'default' => 'Tags:',
	'id'      => 'tags',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => '%s ago',
	'default' => '%s ago',
	'id'      => 'readable_time_ago',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Previous Article',
	'default' => 'Previous Article',
	'id'      => 'post_prev_article',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Next Article',
	'default' => 'Next Article',
	'id'      => 'post_next_article',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Related Posts',
	'default' => 'Related Posts',
	'id'      => 'related_heading',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'What\'s your reaction?',
	'default' => 'What\'s your reaction?',
	'id'      => 'reaction_block_heading',
	'type'    => 'text',
	'section' => 'translation',
);

//Archive
$fields[] = array(
	'heading' => 'Archive',
	'id'      => 'archive_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Archives',
	'default' => 'Archives',
	'id'      => 'archives',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'All',
	'default' => 'All',
	'id'      => 'all',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Yearly Archives: %s',
	'default' => 'Yearly Archives: %s',
	'id'      => 'yearly_archives',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Monthly Archives: %s',
	'default' => 'Monthly Archives: %s',
	'id'      => 'monthly_archives',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Daily Archives: %s',
	'default' => 'Daily Archives: %s',
	'id'      => 'daily_archives',
	'type'    => 'text',
	'section' => 'translation',
);

//Mixed
$fields[] = array(
	'heading' => 'Mixed',
	'id'      => 'mix_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);


$fields[] = array(
	'heading' => '%sM',
	'default' => '%sM',
	'id'      => 'number_format_m',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => '%sk',
	'default' => '%sk',
	'id'      => 'number_format_k',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Security error!',
	'default' => 'Security error!',
	'id'      => 'security_error',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Invalid Recaptcha!',
	'default' => 'Invalid Recaptcha!',
	'id'      => 'invalid_recaptcha',
	'type'    => 'text',
	'section' => 'translation',
);

//bbPress
$fields[] = array(
	'heading' => 'bbPress',
	'id'      => 'bbpress_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Tags',
	'default' => 'Tags',
	'id'      => 'bbp_tagged',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Topics',
	'default' => 'Topics',
	'id'      => 'bbp_topics',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Topics & Freshness',
	'default' => 'Topics & Freshness',
	'id'      => 'bbp_topics_freshness',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Replies',
	'default' => 'Replies',
	'id'      => 'bbp_replies',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Last Activate',
	'default' => 'Last Activate',
	'id'      => 'bbp_last_activate',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Posts',
	'default' => 'Posts',
	'id'      => 'bbp_posts',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Freshness',
	'default' => 'Freshness',
	'id'      => 'bbp_freshness',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Posted In:',
	'default' => 'Posted In:',
	'id'      => 'bbp_posted_in',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'by',
	'default' => 'by',
	'id'      => 'bbp_by',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'On',
	'default' => 'On',
	'id'      => 'bbp_on',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'in reply to',
	'default' => 'in reply to',
	'id'      => 'bbp_in_reply_to',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Voices',
	'default' => 'Voices',
	'id'      => 'bbp_voices',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Started by:',
	'default' => 'Started by:',
	'id'      => 'bbp_started_by',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'in:',
	'default' => 'in:',
	'id'      => 'bbp_in',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Last post:',
	'default' => 'Last post:',
	'id'      => 'bbp_last_post',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Unfriend',
	'default' => 'Unfriend',
	'id'      => 'unfriend',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Confirm Request',
	'default' => 'Confirm Request',
	'id'      => 'confirm_request',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Cancel Request',
	'default' => 'Cancel Request',
	'id'      => 'cancel_request',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Follow',
	'default' => 'Follow',
	'id'      => 'follow',
	'type'    => 'text',
	'section' => 'translation',
);

$fields[] = array(
	'heading' => 'Unfollow',
	'default' => 'Unfollow',
	'id'      => 'unfollow',
	'type'    => 'text',
	'section' => 'translation',
);

//woocommerce
$fields[] = array(
	'heading' => 'Woocommerce',
	'id'      => 'woocommerce_group_start',
	'type'    => 'group_start',
	'section' => 'translation',
	'state'   => 'open',
);
$fields[] = array(
	'heading' => 'Order List',
	'default' => 'Order List',
	'id'      => 'order_list',
	'type'    => 'text',
	'section' => 'translation',
);
$fields[] = array(
	'heading' => 'Edit Account',
	'default' => 'Edit Account',
	'id'      => 'edit_account',
	'type'    => 'text',
	'section' => 'translation',
);
