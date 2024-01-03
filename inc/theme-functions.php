<?php
add_action('widgets_init', 'mahalik_theme_sidebar_register');
if (!function_exists('mahalik_theme_sidebar_register')) {
    /**
     * Register sidebar
     */
    function mahalik_theme_sidebar_register()
    {
        // Single post page
        register_sidebar(array(
            'name'          => __('Single Post Sidebar', 'mahalik'),
            'id'            => 'single-post-sidebar',
            // 'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'mahalik' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ));
    }
}
