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



<div id="national_address_form">

    <div class="woocommerce-billing-fields">

        <?php /*   <div id="address_options" class="tabs-head">
            <button id="map_location_toggle" type="button" class="btn btn--default btn--round btn--with-icon">
                <i class="sicon-location-target"></i>
                حدد عنوانك من الخريطة
            </button>
        </div> */ ?>

        <?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

        <div class="woocommerce-billing-fields__field-wrapper">
            <?php
            $fields = $checkout->get_checkout_fields('billing');

            foreach ($fields as $key => $field) {
                woocommerce_form_field($key, $field, $checkout->get_value($key));
            }

            ?>
        </div>

        <?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-12"><!----></div>
</div>