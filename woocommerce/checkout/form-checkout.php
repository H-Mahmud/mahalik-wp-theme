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

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

    <div class="row">
        <div class="col-md-9 col-sm-12">
            <main class="sections-wrapper">

                <?php get_template_part('woocommerce/checkout/mahalik-checkout-header', 'header'); ?>
                <div class="section section--payment">
                    <?php if ($checkout->get_checkout_fields()) : ?>

                        <div class="row">
                            <div class="col-md-12">

                                <div id="shipping_step" class="payment-step">
                                    <div data-step="1" class="title title--step">
                                        <img src="<?php echo get_theme_file_uri('assets/images/checkout/step-shipping.svg'); ?>" />
                                        <h3><?php _e('Shipping &amp; Delivery', 'mahalik'); ?></h3>
                                    </div>
                                </div>
                                <?php do_action('woocommerce_checkout_before_customer_details'); ?>

                                <div class="form form--options-edit" id="customer_details">
                                    <?php do_action('woocommerce_checkout_billing'); ?>

                                    <?php do_action('woocommerce_checkout_shipping'); ?>
                                </div>

                                <?php do_action('woocommerce_checkout_after_customer_details'); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>

                    <?php do_action('woocommerce_checkout_before_order_review'); ?>

                    <?php do_action('woocommerce_checkout_order_review'); ?>

                    <?php do_action('woocommerce_checkout_after_order_review'); ?>
                </div>
            </main>
            <ul class="list list--brands">
                <li><?php _e('100% secure online shopping', 'mahalik'); ?></li>
                <li><img src="<?php echo get_theme_file_uri('assets/images/checkout/secure-payment.svg'); ?>" /></li>
                <li><img src="<?php echo get_theme_file_uri('assets/images/checkout/secure-payment-02.svg'); ?>" /></li>
                <li><img src="<?php echo get_theme_file_uri('assets/images/checkout/secure-payment-03.svg'); ?>" /></li>
            </ul>
        </div>

        <div id="cart_summary_desktop" class="col-md-3 col-sm-12">
            <?php get_template_part('woocommerce/checkout/mahalik-checkout-summary', 'summary'); ?>
        </div>
    </div>
</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>