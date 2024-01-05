<?php
add_filter('woocommerce_shipping_fields', 'mahalik_add_shipping_phone_field');
if (!function_exists('mahalik_add_shipping_phone_field')) {
    /**
     * Add phone field to WooCommerce shipping address
     */
    function mahalik_add_shipping_phone_field($fields)
    {
        $fields['shipping_phone'] = array(
            'label' => __('Phone', 'woocommerce'),
            'required' => true,
            'class' => array('form-row-wide'),
            'clear' => true,
        );

        return $fields;
    }
}

add_action('woocommerce_checkout_update_order_meta', 'mahalik_save_shipping_phone_field');
if (!function_exists('mahalik_save_shipping_phone_field')) {
    /**
     * Save the phone field value
     */
    function mahalik_save_shipping_phone_field($order_id)
    {
        if (!empty($_POST['shipping_phone'])) {
            update_post_meta($order_id, '_shipping_phone', sanitize_text_field($_POST['shipping_phone']));
        }
    }
}


add_filter('woocommerce_shipping_fields', 'mahalik_add_shipping_email_field');
if (!function_exists('mahalik_add_shipping_email_field')) {
    /**
     * Add email field to WooCommerce shipping address
     */
    function mahalik_add_shipping_email_field($fields)
    {
        $fields['shipping_email'] = array(
            'label' => __('Email', 'woocommerce'),
            'required' => false,
            'class' => array('form-row-wide'),
            'clear' => true,
        );

        return $fields;
    }
}


add_action('woocommerce_checkout_update_order_meta', 'mahalik_save_shipping_email_field');
if (!function_exists('mahalik_save_shipping_email_field')) {
    /**
     * Save the email field value
     */
    function mahalik_save_shipping_email_field($order_id)
    {
        if (!empty($_POST['shipping_email'])) {
            update_post_meta($order_id, '_shipping_email', sanitize_email($_POST['shipping_email']));
        }
    }
}

add_filter('woocommerce_checkout_fields', 'mahalik_remove_checkout_fields');
if (!function_exists('mahalik_remove_checkout_fields')) {
    /**
     * Remove shipping & billing fields from WooCommerce checkout
     */
    function mahalik_remove_checkout_fields($fields)
    {
        unset($fields['shipping']['shipping_last_name']);
        unset($fields['shipping']['shipping_company']);
        unset($fields['shipping']['shipping_country']);
        unset($fields['shipping']['shipping_address_1']);
        unset($fields['shipping']['shipping_address_2']);
        unset($fields['shipping']['shipping_city']);
        unset($fields['shipping']['shipping_state']);
        unset($fields['shipping']['shipping_postcode']);


        unset($fields['billing']['billing_first_name']);
        unset($fields['billing']['billing_last_name']);
        unset($fields['billing']['billing_company']);
        unset($fields['billing']['billing_phone']);
        unset($fields['billing']['billing_email']);

        return $fields;
    }
}
