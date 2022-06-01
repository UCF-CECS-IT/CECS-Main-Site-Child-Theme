<?php
namespace CECS\Theme;

define( 'CECS_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


// Theme foundation
include_once CECS_THEME_DIR . 'includes/config.php';
include_once CECS_THEME_DIR . 'includes/meta.php';

// Add other includes to this file as needed.
include_once CECS_THEME_DIR . 'includes/CECS.php';
include_once CECS_THEME_DIR . 'includes/custom-plugin-layouts.php';
include_once CECS_THEME_DIR . 'includes/faculty.php';
include_once CECS_THEME_DIR . 'includes/faculty-showcase.php';
include_once CECS_THEME_DIR . 'includes/gallery-post-list-layout.php';
include_once CECS_THEME_DIR . 'includes/grad-defense.php';
include_once CECS_THEME_DIR . 'includes/header-functions.php';
include_once CECS_THEME_DIR . 'includes/in-the-news.php';
include_once CECS_THEME_DIR . 'includes/kmdg-translation.php';
include_once CECS_THEME_DIR . 'includes/nav-functions.php';
include_once CECS_THEME_DIR . 'includes/news.php';
include_once CECS_THEME_DIR . 'includes/post-list-functions.php';
include_once CECS_THEME_DIR . 'includes/post-types.php';
include_once CECS_THEME_DIR . 'includes/scholarship.php';
include_once CECS_THEME_DIR . 'includes/staff-spotlight-post-list-layout.php';
include_once CECS_THEME_DIR . 'includes/staff-spotlight.php';
