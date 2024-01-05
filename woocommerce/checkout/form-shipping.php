<?php

/**
 * Checkout shipping information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-shipping.php.
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
<?php if (true === WC()->cart->needs_shipping_address()) : ?>

    <div class="woocommerce-shipping-fields">

        <div id="ship-to-different-address" class="ui toggle checkbox checkbox--extra-space">
            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" <?php checked(apply_filters('woocommerce_ship_to_different_address_checked', 'shipping' === get_option('woocommerce_ship_to_destination') ? 1 : 0), 1); ?> type="checkbox" name="ship_to_different_address" value="1" />

            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                <?php _e('Receiving the order through someone else?', 'mahalik'); ?>
            </label>
        </div>


        <div class="shipping_address panel-block">
            <div class="row">
                <div class="col-sm-12">
                    <label class="section-title payment-section-title">
                        <?php _e('Add recipient contact details', 'mahalik'); ?>
                    </label>
                </div>
            </div>
            <?php do_action('woocommerce_before_checkout_shipping_form', $checkout); ?>

            <div class="shipping-address">

                <?php
                $fields = $checkout->get_checkout_fields('shipping');

                foreach ($fields as $key => $field) {
                    // woocommerce_form_field($key, $field, $checkout->get_value($key));
                    // echo $key;
                    // echo '<br/>';
                }
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <span>
                            <?php
                            $shipping_first_name =  $fields['shipping_first_name'];
                            $shipping_first_name['class'][] = 'form-group';
                            $shipping_first_name['input_class'][] = 'form-control';
                            woocommerce_form_field('shipping_first_name', $shipping_first_name, $checkout->get_value('shipping_first_name'));
                            ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <span>
                            <?php
                            $shipping_phone =  $fields['shipping_phone'];
                            $shipping_phone['class'][] = 'form-group';
                            $shipping_phone['input_class'][] = 'form-control';
                            woocommerce_form_field('shipping_phone', $shipping_phone, $checkout->get_value('shipping_phone'));
                            ?>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <span>
                            <?php
                            $shipping_email =  $fields['shipping_email'];
                            $shipping_email['class'][] = 'form-group';
                            $shipping_email['input_class'][] = 'form-control';
                            woocommerce_form_field('shipping_email', $shipping_email, $checkout->get_value('shipping_email'));
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php do_action('woocommerce_after_checkout_shipping_form', $checkout); ?>

        </div>

    </div>
<?php endif; ?>