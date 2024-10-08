<?php
// classes
require(get_theme_file_path('classes/Nav-Walkers.php'));


// Theme Functions
require(get_theme_file_path('inc/setup-theme.php'));
require(get_theme_file_path('inc/theme-resources.php'));
require(get_theme_file_path('inc/custom-fields.php'));
require(get_theme_file_path('inc/theme-functions.php'));

// WooCommerce Customize
require(get_theme_file_path('inc/wc-customize.php'));
require(get_theme_file_path('inc/user-auth-ajax.php'));
require(get_theme_file_path('inc/checkout-customize.php'));

// shortcodes
require(get_theme_file_path('shortcodes/product-archive.php'));
require(get_theme_file_path('shortcodes/product-archive-latest.php'));
require(get_theme_file_path('shortcodes/product-archive-recommended.php'));
require(get_theme_file_path('shortcodes/product-archive-featured.php'));
