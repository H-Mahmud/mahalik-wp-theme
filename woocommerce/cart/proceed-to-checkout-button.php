<?php

/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
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

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>


<?php if (is_user_logged_in()) : ?>
	<div type="button">
		<a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="undefined s-button-element s-button-btn s-button-solid s-button-wide s-button-primary s-button-loader-center wc-forward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><span class="s-button-text">
				<?php esc_html_e('Proceed to checkout', 'woocommerce'); ?>
			</span></a>
		</a>
	</div>
<?php else : ?>
	<div type="button">
		<button modal-view="sign-in" class="undefined s-button-element s-button-btn s-button-solid s-button-wide s-button-primary s-button-loader-center wc-forward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"><span class="s-button-text">
				<?php esc_html_e('Proceed to checkout', 'woocommerce'); ?>
			</span></a>
		</button>
	</div>
<?php endif; ?>