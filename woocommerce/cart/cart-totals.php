<div class="bg-white border p-5 sm:p-7 rounded mb-5 relative transition-all duration-1000 cart_totals <?php echo (WC()->customer->has_calculated_shipping()) ? 'calculated_shipping' : ''; ?>">


    <?php do_action('woocommerce_before_cart_totals'); ?>

    <h4 class="font-bold text-sm mb-5"><?php esc_html_e('Cart totals', 'woocommerce'); ?></h4>

    <div class="flex justify-between text-sm mb-5 cart-subtotal">
        <span class="text-gray-400"><?php esc_html_e('Subtotal', 'woocommerce'); ?></span>
        <b data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>" id="sub-total"><?php wc_cart_totals_subtotal_html(); ?></b>
    </div>


    <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
        <div class="flex justify-between text-sm mb-5 cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
            <span class="text-gray-400"><?php wc_cart_totals_coupon_label($coupon); ?></span>
            <b data-title="<?php echo esc_attr(wc_cart_totals_coupon_label($coupon, false)); ?>"><?php wc_cart_totals_coupon_html($coupon); ?></b>
        </div>
    <?php endforeach; ?>


    <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>

        <?php do_action('woocommerce_cart_totals_before_shipping'); ?>

        <?php wc_cart_totals_shipping_html(); ?>

        <?php do_action('woocommerce_cart_totals_after_shipping'); ?>

    <?php elseif (WC()->cart->needs_shipping() && 'yes' === get_option('woocommerce_enable_shipping_calc')) : ?>

        <div class="flex justify-between text-sm mb-5 shipping">
            <span class="text-gray-400"><?php esc_html_e('Shipping', 'woocommerce'); ?></span>
            <b data-title="<?php esc_attr_e('Shipping', 'woocommerce'); ?>"><?php woocommerce_shipping_calculator(); ?></b>
        </div>

    <?php endif; ?>


    <?php foreach (WC()->cart->get_fees() as $fee) : ?>
        <div class="flex justify-between text-sm mb-5 shipping fee">
            <span class="text-gray-400"><?php echo esc_html($fee->name); ?></span>
            <b data-title="<?php echo esc_attr($fee->name); ?>"><?php wc_cart_totals_fee_html($fee); ?></b>
        </div>
    <?php endforeach; ?>



    <?php if (wc_coupons_enabled()) { ?>
        <div class="border-t border-gray-200 border-b py-5 mb-5">
            <label for="coupon" class="block text-sm "><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
            <div class="mt-2.5 relative">
                <input placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" class="rtl:pl-24 ltr:pr-24 form-input" value="" id="coupon-input" name="coupon" type="text">
                <salla-button class="btn--coupon has-not-coupon btn--default s-button-wrap hydrated">
                    <button class="btn--coupon has-not-coupon btn--default s-button-element s-button-btn s-button-solid s-button-primary s-button-loader-center" id="mahalik_coupon_apply" type="button"><span class="s-button-text">
                            <span class="coupon-text"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></span>
                            <i class="sicon-cancel icon text-xl w-8"></i>
                        </span></button>
                </salla-button>
            </div>
            <?php do_action('woocommerce_cart_coupon'); ?>
        </div>
    <?php } ?>


    <?php
    if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) {
        $taxable_address = WC()->customer->get_taxable_address();
        $estimated_text  = '';

        if (WC()->customer->is_customer_outside_base() && !WC()->customer->has_calculated_shipping()) {
            /* translators: %s location. */
            $estimated_text = sprintf(' <div class="flex justify-between text-sm mb-5"><small  class="text-gray-400">' . esc_html__('(estimated for %s)', 'woocommerce') . '</small></div>', WC()->countries->estimated_for_prefix($taxable_address[0]) . WC()->countries->countries[$taxable_address[0]]);
        }

        if ('itemized' === get_option('woocommerce_tax_total_display')) {
            foreach (WC()->cart->get_tax_totals() as $code => $tax) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
    ?>
                <div class="flex justify-between text-sm mb-5 tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
                    <span class="text-gray-400"><?php echo esc_html($tax->label) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                ?></span>
                    <b data-title="<?php echo esc_attr($tax->label); ?>"><?php echo wp_kses_post($tax->formatted_amount); ?></b>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="flex justify-between text-sm mb-5 tax-total">
                <span class="text-gray-400"><?php echo esc_html(WC()->countries->tax_or_vat()) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                            ?></span>
                <b data-title="<?php echo esc_attr(WC()->countries->tax_or_vat()); ?>"><?php wc_cart_totals_taxes_total_html(); ?></b>
            </div>
    <?php
        }
    }
    ?>

    <?php do_action('woocommerce_cart_totals_before_order_total'); ?>

    <div class="flex justify-between text-sm mb-5 order-total">
        <span class="text-gray-400"><?php esc_html_e('Total', 'woocommerce'); ?></span>
        <b data-title="<?php esc_attr_e('Total', 'woocommerce'); ?>" id="final-total"><?php wc_cart_totals_order_total_html(); ?></b>
    </div>

    <?php do_action('woocommerce_cart_totals_after_order_total'); ?>

    <div class="cart-submit-wrap wc-proceed-to-checkout">
        <?php do_action('woocommerce_proceed_to_checkout'); ?>
    </div>

    <?php do_action('woocommerce_after_cart_totals'); ?>

</div>