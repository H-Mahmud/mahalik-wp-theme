<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout row" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
    <div class="col-md-9 col-sm-12">
        <main class="sections-wrapper">
            <!--  -->
            <header class="store-info">
                <div class="d-flex">
                    <div class="store-info__logo">
                        <a href="<?php echo home_url();  ?>">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo_info = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if ($logo_info) {
                                $logo_url = $logo_info[0];
                                echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" />';
                            }
                            ?>
                        </a>
                    </div>
                    <div class="store-info__detail">
                        <h1><?php _e('Well Come', 'mahalik'); ?> <?php
                                                                    $user = wp_get_current_user();
                                                                    echo $user->display_name;
                                                                    ?> </h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>" target="_blank"><?php echo bloginfo('name'); ?></a></li>
                            <li class="breadcrumb-item">
                                <a href="<?php
                                            $cart_id = wc_get_page_id('cart');
                                            echo get_the_permalink($cart_id);
                                            ?>" target="_blank">
                                    <?php _e('Cart', 'mahalik'); ?>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><?php _e('Complete the application', 'mahalik'); ?></li>
                        </ul>
                    </div>
                </div>
            </header>
            <!--  -->

            <div class="section section--payment">
                <div class="row">
                    <div class="col-md-12">
                        <div id="shipping_step" class="payment-step">
                            <div data-step="1" class="title title--step">
                                <img src="<?php echo get_theme_file_uri('/assets/images/checkout/step-shipping.svg'); ?>" />
                                <h3><?php _e('Shipping & Delivery', 'mahalik'); ?></h3>
                            </div>
                        </div>
                        <div id="shipping_method_fields">
                            <div class="form form--options-edit">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="shipping-address-redirect">
                                            <div id="addresses">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="title title--small title--smaller">
                                                            <?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

                                                                <h2><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h2>

                                                            <?php else : ?>

                                                                <h2><?php esc_html_e('Billing details', 'woocommerce'); ?></h2>

                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center alert alert-info"><?php _e('For international shipping, the shipping address must be written in English', 'mahalik'); ?></p>



                                <?php if ($checkout->get_checkout_fields()) : ?> <?php do_action('woocommerce_checkout_before_customer_details'); ?> <div class="col2-set" id="customer_details">

                                        <?php do_action('woocommerce_checkout_billing'); ?>


                                        <?php do_action('woocommerce_checkout_shipping'); ?>

                                        <?php do_action('woocommerce_checkout_after_customer_details'); ?>

                                    <?php endif; ?>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">

                        <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>

                        <h3 id="order_review_heading"><?php esc_html_e('Your order', 'woocommerce'); ?></h3>

                        <?php do_action('woocommerce_checkout_before_order_review'); ?>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <?php do_action('woocommerce_checkout_order_review'); ?>
                        </div>

                        <?php do_action('woocommerce_checkout_after_order_review'); ?>

                    </div>
                </div>

        </main>
    </div>

    <div class="col-md-3 col-sm-12">
        <div class="cart-summary-wrapper">
            <ul class="cart-summary cart-summary--top">
                <li>
                    <h4><?php _e('Cart Summary', 'mahalik'); ?></h4>
                    <span class="currency">
                        <b><?php echo WC()->cart->get_subtotal(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>
                    </span>
                </li>
                <?php if (WC()->cart->tax_display_cart === 'excl' || WC()->cart->tax_display_cart === 'incl') : ?>
                    <li>
                        <h4>Tax (%<?php echo WC()->cart->get_fee_tax(); ?>)</h4>
                        <span class="currency">
                            <b><?php echo WC()->cart->get_total_tax(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>
                        </span>
                    </li>
                <?php endif; ?>
                <?php
                if (WC()->cart->applied_coupons) : ?>
                    <li>
                        <h4><?php _e('Discount', 'mahalik'); ?></h4>
                        <span class="currency">
                            <b><?php echo WC()->cart->get_discount_total(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>
                        </span>
                    </li>
                <?php endif; ?>
                <li>
                    <h4><?php _e('Total Order', 'mahalik'); ?></h4>
                    <span class="currency">
                        <b><?php echo WC()->cart->get_total(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>
                        <!---->
                    </span>
                </li>
            </ul>
            <ul class="cart-summary cart-summary--bottom">
                <li class="column no-border">
                    <div>
                        <!-- <button class="btn btn--link btn--coupon">Do you have a discount coupon?</button> -->
                        <span class="btn btn--link btn--coupon"></span>
                    </div>
                </li>
                <li class="proceed">
                    <div>
                        <button id="submit-form-btn" type="submit" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                            <span><?php _e('Payment Confirmation', 'mahalik'); ?></span>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>