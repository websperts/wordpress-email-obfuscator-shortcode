<?php

/*
Plugin Name: Email Obfuscator Shortcode
Description: Shortcode to obfuscate email addresses.
Author: websperts <hello@websperts.com>
Author URI: http://websperts.com/
Plugin URI: https://github.com/websperts/wordpress-email-obfuscator-shortcode
License: MIT
Version: 0.0.1
*/

defined('ABSPATH') || exit;

function email_shortcode($attributes) {
	extract(shortcode_atts(array(
		'address' => '',
		'text' => '',
		'at' => 'AT',
		'dot' => 'DOT'
	), $attributes));
	if (empty($address)) {
		return '';
	} else {
		$address = str_replace(array('@', '.'), array(' '.$at.' ', ' '.$dot.' '), $address);
		if (empty($text)) {
			$text = $address;
		}
		return '<span class="obfuscated" data-content="'.$text.'"'.(!empty($at) ? ' data-at="'.$at.'"' : '').(!empty($dot) ? ' data-dot="'.$dot.'"' : '').'>'.$address.'</span>';
	}
}

add_shortcode('email', 'email_shortcode');

function deobfuscate_script() {
	wp_register_script('deobfuscate_script', plugins_url('deobfuscate.min.js', __FILE__), null, '1.0', true);
	wp_enqueue_script('deobfuscate_script');
}

add_action('wp_enqueue_scripts', 'deobfuscate_script');

?>
