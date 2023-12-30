<?php

/**
 * Grouped product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/grouped.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product, $post;

do_action('woocommerce_before_add_to_cart_form'); ?>

<form class="cart product-options form product-form flex flex-col space-y-2.5 sm:space-y-5 grouped_form" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
    <div class="flex border bg-white space-y-2.5 sm:space-y-5 mt-2.5 sm:mt-5 flex-col p-2.5 sm:p-5 rounded ">
        <table cellspacing="0" class="woocommerce-grouped-product-list group_table">
            <tbody>
                <?php
                $quantites_required      = false;
                $previous_post           = $post;
                $grouped_product_columns = apply_filters(
                    'woocommerce_grouped_product_columns',
                    array(
                        'quantity',
                        'label',
                        'price',
                    ),
                    $product
                );
                $show_add_to_cart_button = false;

                do_action('woocommerce_grouped_product_list_before', $grouped_product_columns, $quantites_required, $product);

                foreach ($grouped_products as $grouped_product_child) {
                    $post_object        = get_post($grouped_product_child->get_id());
                    $quantites_required = $quantites_required || ($grouped_product_child->is_purchasable() && !$grouped_product_child->has_options());
                    $post               = $post_object; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                    setup_postdata($post);

                    if ($grouped_product_child->is_in_stock()) {
                        $show_add_to_cart_button = true;
                    }

                    echo '<tr id="product-' . esc_attr($grouped_product_child->get_id()) . '" class="woocommerce-grouped-product-list-item ' . esc_attr(implode(' ', wc_get_product_class('', $grouped_product_child))) . '">';

                    // Output columns for each product.
                    foreach ($grouped_product_columns as $column_id) {
                        do_action('woocommerce_grouped_product_list_before_' . $column_id, $grouped_product_child);

                        switch ($column_id) {
                            case 'quantity':
                                ob_start();

                                if (!$grouped_product_child->is_purchasable() || $grouped_product_child->has_options() || !$grouped_product_child->is_in_stock()) {
                                    woocommerce_template_loop_add_to_cart();
                                } elseif ($grouped_product_child->is_sold_individually()) {
                                    echo '<input type="checkbox" name="' . esc_attr('quantity[' . $grouped_product_child->get_id() . ']') . '" value="1" class="wc-grouped-product-add-to-cart-checkbox" id="' . esc_attr('quantity-' . $grouped_product_child->get_id()) . '" />';
                                    echo '<label for="' . esc_attr('quantity-' . $grouped_product_child->get_id()) . '" class="screen-reader-text">' . esc_html__('Buy one of this item', 'woocommerce') . '</label>';
                                } else {
                                    do_action('woocommerce_before_add_to_cart_quantity');

                                    woocommerce_quantity_input(
                                        array(
                                            'input_name'  => 'quantity[' . $grouped_product_child->get_id() . ']',
                                            'input_value' => isset($_POST['quantity'][$grouped_product_child->get_id()]) ? wc_stock_amount(wc_clean(wp_unslash($_POST['quantity'][$grouped_product_child->get_id()]))) : '', // phpcs:ignore WordPress.Security.NonceVerification.Missing
                                            'min_value'   => apply_filters('woocommerce_quantity_input_min', 0, $grouped_product_child),
                                            'max_value'   => apply_filters('woocommerce_quantity_input_max', $grouped_product_child->get_max_purchase_quantity(), $grouped_product_child),
                                            'placeholder' => '0',
                                        )
                                    );

                                    do_action('woocommerce_after_add_to_cart_quantity');
                                }

                                $value = ob_get_clean();
                                break;
                            case 'label':
                                $value  = '<label for="product-' . esc_attr($grouped_product_child->get_id()) . '">';
                                $value .= $grouped_product_child->is_visible() ? '<a href="' . esc_url(apply_filters('woocommerce_grouped_product_list_link', $grouped_product_child->get_permalink(), $grouped_product_child->get_id())) . '">' . $grouped_product_child->get_name() . '</a>' : $grouped_product_child->get_name();
                                $value .= '</label>';
                                break;
                            case 'price':
                                $value = $grouped_product_child->get_price_html() . wc_get_stock_html($grouped_product_child);
                                break;
                            default:
                                $value = '';
                                break;
                        }

                        echo '<td class="woocommerce-grouped-product-list-item__' . esc_attr($column_id) . '">' . apply_filters('woocommerce_grouped_product_list_column_' . $column_id, $value, $grouped_product_child) . '</td>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

                        do_action('woocommerce_grouped_product_list_after_' . $column_id, $grouped_product_child);
                    }

                    echo '</tr>';
                }
                $post = $previous_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                setup_postdata($post);

                do_action('woocommerce_grouped_product_list_after', $grouped_product_columns, $quantites_required, $product);
                ?>
            </tbody>
        </table>

        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" />

        <?php if ($quantites_required && $show_add_to_cart_button) : ?>

            <?php do_action('woocommerce_before_add_to_cart_button'); ?>

            <salla-add-product-button class="text-white block s-add-product-button-with-quick-buy hydrated">
                <salla-button class="s-button-wrap hydrated">

                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="undefined s-button-element s-button-btn s-button-solid s-button-wide s-button-primary s-button-loader-center single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">

                        <span class="s-button-text"><span class="flex items-center gap-2.5">
                                <i class="text-[16px] sicon-shopping"></i>
                                <?php echo esc_html($product->single_add_to_cart_text()); ?>
                            </span></span></button>
                </salla-button>
                <salla-quick-buy class="hydrated">
                    <salla-button class="s-quick-buy-button s-button-wrap hydrated" type="button">
                        <button modal-view="sign-in" class="s-quick-buy-button s-button-element s-button-btn s-button-outline s-button-wide s-button-primary-outline s-button-loader-after" type="button">
                            <span class="s-button-text">
                                <span>
                                    <!-- Generated by IcoMoon.io -->
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                        <title>full-wallet</title>
                                        <path d="M29 12h-26c-0.668-0.008-1.284-0.226-1.787-0.59l0.009 0.006c-0.744-0.552-1.222-1.428-1.222-2.416 0-1.657 1.343-3 2.999-3h6c0.552 0 1 0.448 1 1s-0.448 1-1 1v0h-6c-0.552 0-1 0.448-1 1 0 0.326 0.156 0.616 0.397 0.798l0.002 0.002c0.167 0.12 0.374 0.194 0.599 0.2l0.001 0h26c0.552 0 1 0.448 1 1s-0.448 1-1 1v0zM27 12c-0.552 0-1-0.448-1-1v0-3h-3c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h4c0.552 0 1 0.448 1 1v0 4c0 0.552-0.448 1-1 1v0zM29 30h-26c-1.657 0-3-1.343-3-3v0-18c0-0.552 0.448-1 1-1s1 0.448 1 1v0 18c0 0.552 0.448 1 1 1v0h25v-5c0-0.552 0.448-1 1-1s1 0.448 1 1v0 6c0 0.552-0.448 1-1 1v0zM29 18c-0.552 0-1-0.448-1-1v0-6c0-0.552 0.448-1 1-1s1 0.448 1 1v0 6c0 0.552-0.448 1-1 1v0zM31 24h-7c-2.209 0-4-1.791-4-4s1.791-4 4-4v0h7c0.552 0 1 0.448 1 1v0 6c0 0.552-0.448 1-1 1v0zM24 18c-1.105 0-2 0.895-2 2s0.895 2 2 2v0h6v-4zM25 12c-0.001 0-0.001 0-0.002 0-0.389 0-0.726-0.222-0.891-0.546l-0.003-0.006-3.552-7.106-2.306 1.152c-0.13 0.066-0.284 0.105-0.447 0.105-0.552 0-1-0.448-1-1 0-0.39 0.223-0.727 0.548-0.892l0.006-0.003 3.2-1.6c0.13-0.067 0.284-0.106 0.447-0.106 0.39 0 0.727 0.223 0.892 0.548l0.003 0.006 4 8c0.067 0.13 0.106 0.285 0.106 0.448 0 0.552-0.448 1-1 1v0zM21 12c-0.001 0-0.001 0-0.002 0-0.389 0-0.726-0.222-0.891-0.546l-0.003-0.006-3.552-7.106-15.104 7.552c-0.13 0.066-0.284 0.105-0.447 0.105-0.552 0-1-0.448-1-1 0-0.39 0.223-0.727 0.548-0.892l0.006-0.003 16-8c0.13-0.067 0.284-0.106 0.447-0.106 0.39 0 0.727 0.223 0.892 0.548l0.003 0.006 4 8c0.067 0.13 0.106 0.285 0.106 0.448 0 0.552-0.448 1-1 1-0.001 0-0.001 0-0.002 0h0z"></path>
                                    </svg>
                                </span>
                                <?php _e('Buy now', 'mahalik'); ?>
                            </span>
                        </button>
                    </salla-button>
                </salla-quick-buy>
            </salla-add-product-button>

            <?php do_action('woocommerce_after_add_to_cart_button'); ?>

        <?php endif; ?>
    </div>
</form>

<?php do_action('woocommerce_after_add_to_cart_form'); ?>