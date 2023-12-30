<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<div class="flex flex-col items-start lg:flex-row">
    <form class="woocommerce-cart-form main-content flex-1 w-full" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
        <?php do_action('woocommerce_before_cart_table'); ?>

        <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">

            <?php do_action('woocommerce_before_cart_contents'); ?>

            <?php
            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                /**
                 * Filter the product name.
                 *
                 * @since 2.1.0
                 * @param string $product_name Name of the product in the cart.
                 * @param array $cart_item The product in the cart.
                 * @param string $cart_item_key Key for the product in the cart.
                 */
                $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
            ?>
                    <div class="woocommerce-cart-form__cart-item cart_item">
                        <section class="cart-item bg-white border overflow-hidden p-5 sm:p-7 rounded mb-5 relative">
                            <div class="hydrated">

                                <div class="xl:flex rtl:space-x-reverse xl:space-x-8 items-start justify-between mb-8 last:mb-0">
                                    <div class="flex flex-1 rtl:space-x-reverse space-x-4">
                                        <a href="<?php echo get_permalink($product_id); ?>" class="shrink-0">
                                            <img src="<?php echo get_the_post_thumbnail_url($product_id); ?>" loading="lazy" width="96" height="80" data-src="" alt="<?php echo get_the_title($product_id); ?>" class="lazy flex-none w-24 h-20 border border-gray-200 bg-gray-100 rounded object-center object-cover loaded" data-ll-status="loaded">
                                        </a>
                                        <div class="space-y-1">
                                            <h3 class="text-gray-900 leading-6">
                                                <a href="<?php echo get_permalink($product_id); ?>" class="text-base"><?php echo get_the_title($product_id); ?></a>
                                            </h3>
                                            <span class="item-price text-sm text-gray-400"><?php echo wc_price($_product->get_price()); ?></span>
                                        </div>
                                        <div class="w-10 xl:hidden"></div>
                                    </div>
                                    <div class="flex-1 border-t border-b py-3 xl:p-0 xl:border-none mt-5 xl:mt-0 w-full xl:w-auto flex justify-between items-center xl:items-start">
                                        <div class="transtion transition-color duration-300 s-quantity-input hydrated product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">

                                            <?php
                                            if ($_product->is_sold_individually()) {
                                                $min_quantity = 1;
                                                $max_quantity = 1;
                                            } else {
                                                $min_quantity = 0;
                                                $max_quantity = $_product->get_max_purchase_quantity() < 0 ? 9999999 : $_product->get_max_purchase_quantity();
                                            }
                                            ?>

                                            <div class="s-quantity-input-container">
                                                <button class="cart-qty-increase-button s-quantity-input-increase-button s-quantity-input-button" type="button">
                                                    <span>
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                            <title>add</title>
                                                            <path d="M26.667 14.667h-9.333v-9.333c0-0.736-0.597-1.333-1.333-1.333s-1.333 0.597-1.333 1.333v9.333h-9.333c-0.736 0-1.333 0.597-1.333 1.333s0.597 1.333 1.333 1.333h9.333v9.333c0 0.736 0.597 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-9.333h9.333c0.736 0 1.333-0.597 1.333-1.333s-0.597-1.333-1.333-1.333z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                                <input type="number" class="s-quantity-input-input qty" max="<?php echo $max_quantity; ?>" value="<?php echo $cart_item['quantity']; ?>" name="cart[<?php echo $cart_item_key; ?>][qty]" min="<?php echo $min_quantity; ?>">
                                                <button class="cart-qty-decrease-button s-quantity-input-decrease-button s-quantity-input-button" type="button">
                                                    <span>
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                            <title>minus</title>
                                                            <path d="M26.667 14.667h-21.333c-0.736 0-1.333 0.597-1.333 1.333s0.597 1.333 1.333 1.333h21.333c0.736 0 1.333-0.597 1.333-1.333s-0.597-1.333-1.333-1.333z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>



                                        <p class="text-primary flex-none font-bold text-sm rtl:xl:pl-12 ltr:xl:pr-12">
                                            <span>المجموع:</span>
                                            <span class="inline-block item-total"><?php
                                                                                    echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                                                    ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="space-y-5">
                                    <section class="attachments">
                                        <div>
                                            <label class="form-label">
                                                <b class="block">
                                                    المرفقات
                                                </b>
                                            </label>
                                            <div class="text-end mt-4">
                                                <div class="flex flex-wrap gap-3 ">
                                                    <button class="btn-tab btn btn--collapse" type="button" data-show="note_115703026">
                                                        <i class="font-medium sicon-chat-conversation-alt rtl:ml-1 ltr:mr-1.5 "></i>
                                                        <span>إضافة ملاحظة </span>
                                                    </button>
                                                    <button class="btn-tab btn btn--collapse" data-show="file_115703026" type="button">
                                                        <i class="font-medium sicon-paperclip rtl:ml-1 ltr:mr-1.5 "></i>
                                                        <span>إرفاق ملف</span>
                                                    </button>
                                                </div>
                                                <div class="overflow-hidden h-0 opacity-0 is-closed" id="note_115703026">
                                                    <div class="pt-2.5 sm:pt-5">
                                                        <textarea class="animated animatedfadeInDown fadeInDown form-input h-16 bg-gray-50 block" placeholder="أضف ملاحظات" name="notes" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden h-0 opacity-0 is-closed" id="file_115703026">
                                                    <div class="pt-2.5 sm:pt-4 min-h-[120px]">
                                                        <salla-file-upload class="product-option-uploader s-file-upload hydrated" height="120px" files="[]" cart-item-id="115703026" name="file" accept="image/png, image/jpeg, image/jpg, image/gif">
                                                            <div class="filepond--root s-file-upload-wrapper s-file-upload-input filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false" data-style-image-edit-button-edit-item-position="bottom center" style="height: 100px;"><input class="filepond--browser" type="file" id="filepond--browser-8bxck0hof" name="file" aria-controls="filepond--assistant-8bxck0hof" aria-labelledby="filepond--drop-label-8bxck0hof" accept="image/png,image/jpeg,image/jpg,image/gif">
                                                                <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;"><label for="filepond--browser-8bxck0hof" id="filepond--drop-label-8bxck0hof" aria-hidden="true">
                                                                        <div class="product-option-uploader-placholder">
                                                                            <span class="product-option-uploader-placholder-icon">
                                                                                <i class="sicon-camera"></i>
                                                                            </span>
                                                                            <p class="profile-filepond-placholder-text">اسحب و افلت الملف هنا</p>
                                                                            <span class="filepond--label-action" tabindex="0">استعراض</span>
                                                                        </div>
                                                                    </label></div>
                                                                <div class="filepond--list-scroller" style="transform: translate3d(0px, 0px, 0px);">
                                                                    <ul class="filepond--list" role="list"></ul>
                                                                </div>
                                                                <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                                    <div class="filepond--panel-top filepond--panel-root"></div>
                                                                    <div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.84, 1);"></div>
                                                                    <div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 92px, 0px);"></div>
                                                                </div><span class="filepond--assistant" id="filepond--assistant-8bxck0hof" role="status" aria-live="polite" aria-relevant="additions"></span>
                                                                <fieldset class="filepond--data"></fieldset>
                                                                <div class="filepond--drip"></div>
                                                            </div><input class="s-hidden" name="hidden-file">
                                                        </salla-file-upload>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <span class="absolute top-1.5 rtl:left-1.5 ltr:right-1.5 sm:top-5 rtl:sm:left-5 ltr:sm:right-5 product-remove">
                                <?php
                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    'woocommerce_cart_item_remove_link',
                                    sprintf(
                                        '<a href="%s" class="remove btn--delete s-button-element s-button-icon s-button-solid s-button-small s-button-danger s-button-loader-center" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span class="s-button-text">
                                        <i class="sicon-cancel"></i>
                                    </span></a>',
                                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                                        /* translators: %s is the product name */
                                        esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
                                        esc_attr($product_id),
                                        esc_attr($_product->get_sku())
                                    ),
                                    $cart_item_key
                                );
                                ?>
                            </span>
                        </section>
                    </div>
            <?php
                }
            }
            ?>

            <?php do_action('woocommerce_cart_contents'); ?>



            <?php do_action('woocommerce_after_cart_contents'); ?>

        </div>
        <?php do_action('woocommerce_after_cart_table'); ?>
        <div style="display: none;">

            <?php if (wc_coupons_enabled()) { ?>
                <div class="coupon">
                    <label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" /> <button type="submit" class="wc-apply-coupon button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
                    <?php do_action('woocommerce_cart_coupon'); ?>
                </div>
            <?php } ?>

            <button type="submit" class="cart_submit_button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

            <?php do_action('woocommerce_cart_actions'); ?>

            <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
        </div>
    </form>

    <!-- TODO: add cart-collaterals class name -->
    <div class=" sticky top-24 w-full lg:w-[430px] rtl:lg:mr-8 ltr:lg:ml-8">
        <?php do_action('woocommerce_before_cart_collaterals'); ?>

        <?php
        /**
         * Cart collaterals hook.
         *
         * @hooked woocommerce_cross_sell_display
         * @hooked woocommerce_cart_totals - 10
         */
        do_action('woocommerce_cart_collaterals');
        ?>
    </div>


</div>
<?php do_action('woocommerce_after_cart'); ?>