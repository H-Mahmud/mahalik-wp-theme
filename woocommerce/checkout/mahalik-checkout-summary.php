<div class="cart-summary-wrapper">
    <ul class="cart-summary cart-summary--top">
        <li>
            <h4><?php _e('Cart Summary', 'mahalik'); ?></h4>
            <span class="currency">
                <b><?php echo WC()->cart->get_subtotal(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>
                <!---->
            </span>
        </li>
        <!-- <li>
            <h4>Tax (%15)</h4>
            <span class="currency">
                <b>+42.95</b> <small>SAR</small>
                
            </span>
        </li> -->

        <?php if (WC()->cart->tax_display_cart === 'excl' || WC()->cart->tax_display_cart === 'incl') :
        /*
            $subtotal = WC()->cart->get_subtotal();
            $tax =  WC()->cart->get_total_tax();

            $tax_percentage = round(($tax / $subtotal) * 100);

        ?>
            <li>
                <h4>Tax (%<?php echo $tax_percentage; ?>)</h4>
                <span class="currency">
                    <b><?php echo WC()->cart->get_total_tax(); ?></b> <small><?php echo get_woocommerce_currency(); ?></small>

                </span>
            </li>
        <?php */ endif; ?>

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
            </span>
        </li>
    </ul>
    <ul class="cart-summary cart-summary--bottom">
        <?php
        /*
        <li class="column no-border">
            <div>
                <button class="btn btn--link btn--coupon">Do you have a discount coupon?</button>
                <!---->
            </div>
        </li>
        */
        ?>
        <li class="proceed">
            <div>
                <?php

                $order_submit_button_text =  __('Payment Confirmation', 'mahalik');
                echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide button alt' . esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : '') . '" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_submit_button_text) . '" data-value="' . esc_attr($order_submit_button_text) . '"><span>' . esc_html($order_submit_button_text) . '</span></button>'); // @codingStandardsIgnoreLine 
                ?>
            </div>
        </li>
    </ul>
</div>