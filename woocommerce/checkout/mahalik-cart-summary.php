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
                <button id="submit-form-btn" type="submit" class="btn btn--primary btn--wide btn--round btn--submit btn--fixed wide">
                    <span><?php _e('Payment Confirmation', 'mahalik'); ?></span>
                </button>
            </div>
        </li>
    </ul>
</div>