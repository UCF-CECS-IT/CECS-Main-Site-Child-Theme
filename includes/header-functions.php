<?php

function cecs_get_header_type( $header_type ) {
	global $wp_query;
	$query_count = count($wp_query->posts);

	if (get_post_type() == 'faculty' && is_archive()) {
		$header_type = 'faculty';
	}

	if (get_post_type() == 'faculty' && !is_archive()) {
		$header_type = 'single-faculty';
	}

	if (get_post_type() == 'gallery' && is_archive()) {
		$header_type = 'gallery';
	}

	if (get_post_type() == 'gallery' && !is_archive()) {
		$header_type = 'gallery-item';
	}

	if (get_post_type() == 'post' && $query_count = 1) {
		$header_type = 'post';
	}

	if ( ($wp_query->query['pagename'] ?? null) == 'news') {
		$header_type = 'news';
	}

	if (get_page_template_slug() == 'page-templates/page-builder.php') {
		$header_type = 'builder';
	}

	if (is_search()) {
		$header_type = 'fallback';
	}

	/**
	 * Uses the fallback header if no other header type has been set
	 */
	if ($header_type == '') {
		$header_type = 'fallback';
	}

	return $header_type;
}

add_filter( 'ucfwp_get_header_type', 'cecs_get_header_type', 10, 1 );
