<?php
/*
Plugin Name: Custom SMS Header
Plugin URI: http://example.com/
Description: This plugin enables the addition of a custom header to the URL, facilitating compliance with regulatory requirements in certain countries, such as India, for bulk SMS services. Pass "custom_header" in query param to add custom header as prefix to the generated short url
Version: 1.0
Author: Gaurav Srivastava
Author URI: https://in.linkedin.com/in/gaurav-srivastava-8310a675
*/
// Add hyphen to the allowed character set
yourls_add_filter( 'get_shorturl_charset', 'gs_slash_in_charset' );
// Unless we are crafting a random keyword
yourls_add_action('add_new_link_create_keyword', function() {yourls_remove_filter('get_shorturl_charset', 'gs_slash_in_charset');});

function gs_slash_in_charset( $in ) {
	return $in.'/';
}

yourls_add_filter('custom_keyword', 'gs_custom_header');
yourls_add_filter('random_keyword', 'gs_custom_header');

function gs_custom_header($keyword) {
    if ( isset( $_REQUEST['custom_header'] ) && $_REQUEST['custom_header'] != '' ) {
        return yourls_sanitize_keyword($_REQUEST['custom_header'].$keyword);
    }else{
        return $keyword;
    }
}