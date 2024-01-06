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
    <div id="woocommerce-billing-fields__field-wrapper">
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
                // woocommerce_form_field($key, $field, $checkout->get_value($key));
                // echo $key;
                // echo "<br/>";
            }
            // $billing_country =  $fields['billing_country'];
            // $billing_country['class'][] = 'form-group';
            // $billing_country['input_class'][] = 'form-control';
            // woocommerce_form_field('billing_country', $billing_country, $checkout->get_value('billing_country'));

            // $billing_state =  $fields['billing_state'];
            // $billing_state['class'][] = 'form-group';
            // $billing_state['input_class'][] = 'form-control';
            // woocommerce_form_field('billing_state', $billing_state, $checkout->get_value('billing_state'));

            ?>
            <div class="row">
                <?php
                $billing_country =  $fields['billing_country'];
                $billing_country['class'][] = 'col-md-6';
                $billing_country['input_class'][] = 'form-control';
                woocommerce_form_field('billing_country', $billing_country, $checkout->get_value('billing_country'));


                $billing_state =  $fields['billing_state'];
                $billing_state['class'][] = 'col-md-6';
                $billing_state['input_class'][] = 'form-control';
                woocommerce_form_field('billing_state', $billing_state, $checkout->get_value('billing_state'));
                ?>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php
                    $billing_city =  $fields['billing_city'];
                    $billing_city['class'][] = 'form-group';
                    $billing_city['input_class'][] = 'form-control';
                    woocommerce_form_field('billing_city', $billing_city, $checkout->get_value('billing_city'));
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    $billing_postcode =  $fields['billing_postcode'];
                    $billing_postcode['class'][] = 'form-group';
                    $billing_postcode['input_class'][] = 'form-control';
                    woocommerce_form_field('billing_postcode', $billing_postcode, $checkout->get_value('billing_postcode'));
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php
                    $billing_address_1 =  $fields['billing_address_1'];
                    $billing_address_1['class'][] = 'form-group';
                    $billing_address_1['input_class'][] = 'form-control';
                    woocommerce_form_field('billing_address_1', $billing_address_1, $checkout->get_value('billing_address_1'));
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    $billing_address_2 =  $fields['billing_address_2'];
                    $billing_address_2['class'][] = 'form-group';
                    $billing_address_2['input_class'][] = 'form-control';
                    woocommerce_form_field('billing_address_2', $billing_address_2, $checkout->get_value('billing_address_2'));
                    ?>
                </div>
            </div>


            <?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>
        </div>

    </div>

</div>