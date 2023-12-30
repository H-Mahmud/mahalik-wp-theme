<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$swiper_id = uniqid('related-product');
if ($related_products) : ?>
    <div class="relative z-0 suggestions">
        <div class="container">
            <section id="similar-slider" class="similar-slider mb-8 py-7 rtl:pl-0 ltr:pr-0" style="overflow: hidden;">
                <salla-slider type="carousel" id="similar-slider" class="s-slider-wrapper carousel-slider s-slider-horizontal hydrated">
                    <div class="s-slider-block__title">
                        <?php
                        $heading = apply_filters('woocommerce_product_related_products_heading', __('Related products', 'woocommerce'));

                        if ($heading) :
                        ?>
                            <div class="s-slider-block__title-right">
                                <h2><?php echo esc_html($heading); ?></h2>
                            </div>

                        <?php endif; ?>

                        <div class="s-slider-block__title-left">
                            <div class="s-slider-block__title-nav">
                                <button class="s-slider-prev s-slider-nav-arrow <?php echo $swiper_id; ?>-prev">
                                    <span class="s-slider-button-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <path d="M11.438 22.479l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z"></path>
                                        </svg>
                                    </span>
                                </button>
                                <button class="s-slider-next s-slider-nav-arrow <?php echo $swiper_id; ?>-next">
                                    <span class="s-slider-button-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                            <path d="M20.563 22.104l-1.875 1.875-8-8 8-8 1.875 1.875-6.125 6.125z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <?php // woocommerce_product_loop_start();    
                    ?>
                    <div class="swiper <?php echo $swiper_id; ?> s-slider-container">
                        <div class="swiper-wrapper s-slider-swiper-wrapper" style="display:flex">
                            <?php foreach ($related_products as $related_product) : ?>

                                <?php
                                $post_object = get_post($related_product->get_id());

                                setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
                                ?>

                                <div class="slide--one-fourth swiper-slide">
                                    <?php get_template_part('template-parts/product/product', 'product'); ?>
                                </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                    <?php //woocommerce_product_loop_end();   
                    ?>
                </salla-slider>

            </section>
        </div>
    </div>
    <script>
        new Swiper('.<?php echo $swiper_id; ?>', {
            direction: 'horizontal',
            // reverseDirection: true,
            slidesPerView: 4,
            loop: false,
            // initialSlide: 0,

            // Navigation arrows
            navigation: {
                nextEl: '.<?php echo $swiper_id; ?>-next',
                prevEl: '.<?php echo $swiper_id; ?>-prev',
            },
        });
    </script>
<?php
endif;

wp_reset_postdata();
