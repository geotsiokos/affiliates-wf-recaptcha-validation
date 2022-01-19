<?php
/**
 * Plugin Name: Affiliates reCAPTCHA Wordfence Exclusion
 * Plugin URI: https://github.com/itthinx/affiliates-recaptcha
 * Description: Excludes Affiliates Registration Form from reCAPTCHA validation provided by Wordfence
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: https://www.netpad.gr
 * 
 * @author gtsiokos
 * @package affiliates-wf-recaptcha-validation
 * @since affiliates-wf-recaptcha-validation 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'affiliates_before_register_affiliate', 'example_affiliates_before_register_affiliate' );
function example_affiliates_before_register_affiliate( $userdata ) {
	add_filter( 'wordfence_ls_require_captcha', '__return_false' );
}
add_action( 'affiliates_after_register_affiliate', 'example_affiliates_after_register_affiliate' );
function example_affiliates_after_register_affiliate( $userdata ) {
	remove_filter( 'wordfence_ls_require_captcha', '__return_false' );
}
