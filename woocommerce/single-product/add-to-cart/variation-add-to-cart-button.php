<?php

/**
 * Single variation cart button
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button flex border bg-white space-y-2.5 sm:space-y-5 mt-2.5 sm:mt-5 flex-col p-2.5 sm:p-5 rounded">
	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<div class="flex justify-between items-center">
		<div class="flex flex-col whitespace-nowrap rtl:space-x-reverse space-x-1">
			<h4 class="total-price text-black font-bold text-xl inline-block">
				<?php echo wc_price($product->get_price());
				?>
			</h4>
		</div>
		<?php
		do_action('woocommerce_before_add_to_cart_quantity');

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
				'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
				'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action('woocommerce_after_add_to_cart_quantity');
		?>
	</div>

	<salla-add-product-button class="text-white block s-add-product-button-with-quick-buy hydrated">
		<salla-button class="s-button-wrap hydrated">

			<button type="submit" name="add-to-cart" class="undefined s-button-element s-button-btn s-button-solid s-button-wide s-button-primary s-button-loader-center single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
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

	<input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>