<?php
add_action('after_setup_theme', 'mahalik_setup_theme', 10);
if (!function_exists('mahalik_setup_theme')) {

    function mahalik_setup_theme()
    {
        // Add support for title tag.
        add_theme_support('title-tag');

        // automatic feed link
        add_theme_support('automatic-feed-links');

        // post thumbnail 
        add_theme_support('post-thumbnails');

        // refresh widgest 
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for wide and full alignments in the editor.
        add_theme_support('align-wide');

        // Add support for responsive embeds.
        add_theme_support('responsive-embeds');


        // Add support for custom logo.
        add_theme_support('custom-logo');

        // Add support for block templates.
        add_theme_support('block-templates');

        // Add support for block patterns.
        add_theme_support('block-patterns');

        // Add support for featured images.
        add_theme_support('post-thumbnails');

        // Add support for custom header.
        add_theme_support('custom-header');

        // post formats
        $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
        add_theme_support('post-formats', $post_formats);

        // HTML5 support 
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));


        // Navbar Register
        register_nav_menus(array(
            'top_bar_menu'  => __('TopBar Link', 'mahalik'),
            'primary_menu'  => __('Primary Menu', 'mahalik'),
            'footer_menu'   => __('Important Link', 'mahalik')
        ));






        /**
         * Editor support
         * 
    // Add support for editor styles.
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');

    // Add support for custom units in the editor.
    add_theme_support('custom-units', 'px', 'rem', 'em');

    // Add support for custom line heights in the editor.
    add_theme_support('custom-line-height');

    // Add support for custom spacing in the editor.
    add_theme_support('custom-spacing');

    // Add support for custom font sizes in the editor.
    add_theme_support('custom-font-sizes');

    // Add support for custom gradients in the editor.
    add_theme_support('custom-gradients');

    // Add support for custom gradients in the editor.
    add_theme_support('custom-gradient-presets');

    // Add support for experimental link color control in the editor.
    add_theme_support('experimental-link-color');

    // Add support for experimental typography control in the editor.
    add_theme_support('experimental-typography');

    // Add support for block styles.
    add_theme_support('block-styles');

    // Add support for editor color palette.
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => __('Primary Color', 'my-block-theme'),
            'slug'  => 'primary',
            'color' => '#3498db',
        ),
        array(
            'name'  => __('Secondary Color', 'my-block-theme'),
            'slug'  => 'secondary',
            'color' => '#2ecc71',
        ),
        // Add more colors as needed.
    ));

         */
    }
}


add_action('after_setup_theme', 'mahalik_theme_wc_support');
if (!function_exists('mahalik_theme_wc_support')) {

    function mahalik_theme_wc_support()
    {
        // Add WooCommerce default stylesheet
        add_theme_support('woocommerce');

        // Enable WooCommerce product gallery features
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        // Add support for WooCommerce customizer product settings
        add_theme_support('wc-product-gallery-slider');

        // Declare WooCommerce support for features
        add_theme_support('wc-product-attributes');

        // Add support for WooCommerce block styles
        add_theme_support('wc-block-style');


        // Add support for WooCommerce customizer options
        // add_theme_support('woocommerce', array(
        //     'thumbnail_image_width' => 150,
        //     'single_image_width'    => 300,
        //     'product_grid'          => array(
        //         'default_rows'    => 3,
        //         'min_rows'        => 2,
        //         'max_rows'        => 8,
        //         'default_columns' => 3,
        //         'min_columns'     => 2,
        //         'max_columns'     => 4,
        //     ),
        // ));

    }
}
