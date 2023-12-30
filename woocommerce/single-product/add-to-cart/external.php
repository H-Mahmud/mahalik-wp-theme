<?php

/**
 * External product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/external.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_add_to_cart_form'); ?>

<form class="cart product-options form product-form flex flex-col space-y-2.5 sm:space-y-5" action="<?php echo esc_url($product_url); ?>" method="get">

    <div class="flex border bg-white space-y-2.5 sm:space-y-5 mt-2.5 sm:mt-5 flex-col p-2.5 sm:p-5 rounded ">
        <?php do_action('woocommerce_before_add_to_cart_button'); ?>

        <div class="flex justify-between items-center">
            <div class="flex flex-col whitespace-nowrap rtl:space-x-reverse space-x-1">
                <h4 class="total-price text-black font-bold text-xl inline-block">
                    <?php echo wc_price(wc_get_product()->get_price());
                    ?>
                </h4>
            </div>
        </div>

        <salla-add-product-button class="text-white block s-add-product-button-with-quick-buy hydrated">
            <salla-button class="s-button-wrap hydrated">
                <button type="submit" name="add-to-cart" class="undefined s-button-element s-button-btn s-button-solid s-button-wide s-button-primary s-button-loader-center single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">

                    <span class="s-button-text"><span class="flex items-center gap-2.5">
                            <i class="text-[16px] sicon-shopping"></i>
                            <?php echo esc_html($button_text); ?>
                        </span></span></button>
            </salla-button>
        </salla-add-product-button>

        <?php wc_query_string_form_fields($product_url); ?>

        <?php do_action('woocommerce_after_add_to_cart_button'); ?>
    </div>
</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>