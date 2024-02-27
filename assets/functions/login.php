<?php
// Calling your own login css so you can style it
function start_login_css() {
	wp_enqueue_style( 'start_login_css', get_template_directory_uri() . '/assets/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function start_login_url() {
	return home_url();
}

// changing the alt text on the logo to show your site name
function start_login_title() {
	return get_option( 'blogname' );
}

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'start_login_css', 10 );
add_filter( 'login_headerurl', 'start_login_url' );
add_filter( 'login_headertitle', 'start_login_title' );



function start_front_end_login_fail( $username ) {
	$referrer = $_SERVER['HTTP_REFERER'];
	if ( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
		$referrer = esc_url( remove_query_arg( 'login', $referrer ) );
		wp_redirect( $referrer . '?login=failed' );
		exit;
	}
}
add_action( 'wp_login_failed', 'start_front_end_login_fail' );

function custom_authenticate_start( $user, $username, $password ) {
	if ( is_wp_error( $user ) && isset( $_SERVER[ 'HTTP_REFERER' ] ) && !strpos( $_SERVER[ 'HTTP_REFERER' ], 'wp-admin' ) && !strpos( $_SERVER[ 'HTTP_REFERER' ], 'wp-login.php' ) ) {
		$referrer = $_SERVER[ 'HTTP_REFERER' ];
		foreach ( $user->errors as $key => $error ) {
			if ( in_array( $key, array( 'empty_password', 'empty_username') ) ) {
				unset( $user->errors[ $key ] );
				$user->errors[ 'custom_'.$key ] = $error;
			}
		}
	}

	return $user;
}
add_filter( 'authenticate', 'custom_authenticate_start', 31, 3);