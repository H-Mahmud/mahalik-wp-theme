<?php

/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;

$string = '
<a href="%s" data-quantity="%s" class="%s undefined s-button-element s-button-btn s-button-outline s-button-wide s-button-primary-outline s-button-loader-center" %s>
    <span class="s-button-text">
        <span class="flex items-center gap-2.5">
            <i class="text-[16px] sicon-shopping"></i>
            %s
        </span>
        <span class="s-button-loader add-to-cart-loader s-button-loader-center s-infinite-scroll-btn-loader"></span>
    </span>
</a>
';



echo apply_filters(
    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
    sprintf(
        $string,
        esc_url($product->add_to_cart_url()),
        esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
        esc_attr(isset($args['class']) ? $args['class'] : 'button'),
        isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
        esc_html($product->add_to_cart_text())
    ),
    $product,
    $args
);
