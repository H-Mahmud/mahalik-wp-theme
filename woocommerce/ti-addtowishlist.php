<?php

/**
 * The Template for displaying add to wishlist product button.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/ti-addtowishlist.php.
 *
 * @version             2.4.3
 * @package           TInvWishlist\Template
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
wp_enqueue_script('tinvwl');
?>
<div class="btn--wishlist heart-next-add-button animated s-button-wrap hydrated is-unactive un-favorited">
    <button class="btn--wishlist heart-next-add-button animated s-button-element s-button-icon s-button-outline s-button-light-outline s-button-loader-center s-button-wrap hydrated tinv-wraper woocommerce tinv-wishlist is-unactive un-favorited <?php echo esc_attr($class_postion) ?>" data-tinvwl_product_id="<?php echo $product->get_id(); ?>">
        <?php do_action('tinvwl_wishlist_addtowishlist_button', $product, $loop); ?>
        <?php do_action('tinvwl_wishlist_addtowishlist_dialogbox', $product, $loop); ?>
        <div class="tinvwl-tooltip"><?php echo wp_kses_post(tinv_get_option('add_to_wishlist' . ($loop ? '_catalog' : ''), 'text')); ?></div>

    </button>
</div>