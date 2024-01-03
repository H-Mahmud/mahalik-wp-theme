<?php

/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined('ABSPATH') || exit;
?>

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


<?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

<div id="national_address_form">
    <div id="shipping_fields_wrapper woocommerce-billing-fields__field-wrapper">
        <div>
            <?php /*
            <div id="address_options" class="tabs-head">
                <button id="map_location_toggle" type="button" class="btn btn--default btn--round btn--with-icon">
                    <i class="sicon-location-target"></i>
                    حدد عنوانك من الخريطة
                </button>
            </div> */ ?>

            <?php
            $fields = $checkout->get_checkout_fields('billing');

            foreach ($fields as $key => $field) {
                woocommerce_form_field($key, $field, $checkout->get_value($key));
            }
            ?>

            <?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
        </div>

    </div>

</div>