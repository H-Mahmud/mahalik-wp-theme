<?php

// Register the product custom field
add_action('woocommerce_product_options_general_product_data', 'mahalik_theme_product_subheading');
if (!file_exists('mahalik_theme_product_subheading')) {

    function mahalik_theme_product_subheading()
    {
        $args = array(
            'label' => 'Sub Heading',
            'placeholder' => __('Product Sub Heading'),
            'id' => 'product_subheading',
            'name' => 'product_subheading',
            'desc_tip' => 'The product sub heading',
        );
        woocommerce_wp_text_input($args);
    }
}

// Save the custom field as product custom post meta
add_action('woocommerce_process_product_meta', 'mahalik_theme_save_product_subheading');
if (!function_exists('mahalik_theme_save_product_subheading')) {

    function mahalik_theme_save_product_subheading($post_id)
    {
        $product = wc_get_product($post_id);
        $title = isset($_POST['product_subheading']) ? $_POST['product_subheading'] : '';
        $product->update_meta_data('product_subheading', sanitize_text_field($title));
        $product->save();
    }
}
