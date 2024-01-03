<?php

/**
 * The Template for displaying products in a product attribute. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-attribute.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     7.3.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="container page-container">
    <header class="flex mt-2 mb-12 md:mb-20">
        <?php
        $term_id = get_queried_object_id();
        $term_image_id = get_term_meta($term_id, 'product_attribute_image', true);
        ?>
        <img class="rounded w-40 h-24 object-contain shadow-md p-4 bg-white lazy loaded" src="<?php echo wp_get_attachment_image_url($term_image_id); ?>" width="390" height="220" alt="<?php single_term_title() ?>" />
        <div class="px-5 pt-3">
            <h1 class="text-2xl font-bold mb-1"><?php single_term_title() ?></h1>
            <p class="text-base text-gray-500"></p>
        </div>
    </header>
    <div class="flex items-start flex-col md:flex-row">
        <div class="main-content w-full">
            <div class="mb-5 md:flex justify-between items-center">
                <div class="center-between">
                    <div class="hidden items-center rtl:mr-2 ltr:ml-2 rtl:md:mr-2 ltr:md:ml-2">
                        <a href="#" data-type="grid" class="grid-trigger bg-border-color !text-primary">
                            <i class="sicon-grid"></i>
                        </a>
                        <a href="#" data-type="list" class="grid-trigger">
                            <i class="sicon-list"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="flex-1 min-w-0 overflow-auto s-products-list hydrated">
                    <div class="s-products-list-wrapper s-products-list-vertical-cards">

                        <?php if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                                <custom-salla-product-card class="product-block contain">
                                    <?php get_template_part('template-parts/product/product', 'product'); ?>
                                </custom-salla-product-card>

                        <?php endwhile;

                            woocommerce_product_loop_end();

                            /**
                             * Hook: woocommerce_after_shop_loop.
                             *
                             * @hooked woocommerce_pagination - 10
                             */
                            do_action('woocommerce_after_shop_loop');

                        else :
                            echo '<h3>' . __('No product found', 'mahalik') . '</h3>';
                        endif; ?>

                    </div>


                    <?php /* <div class="s-infinite-scroll-status">
                        <p class="s-infinite-scroll-last infinite-scroll-last s-hidden"> </p>
                        <p class="s-infinite-scroll-error infinite-scroll-error s-hidden">
                            Could not fetch more😢
                        </p>
                    </div>

                    <div class="s-products-list-loading-wrapper" style="display: none;"><span class="s-button-loader s-button-loader-center s-infinite-scroll-btn-loader"></span>
                    </div>

                    <div class="s-infinite-scroll-wrapper" style="display: block;">
                        <button class="s-infinite-scroll-btn s-button-btn s-button-primary">
                            <span class="s-button-text s-infinite-scroll-btn-text">
                                Load more
                            </span>
                            <span class="s-button-loader s-button-loader-center s-infinite-scroll-btn-loader" style="display: none;"></span>
                        </button>
                    </div> */ ?>

                </div>

            </div>
        </div>
    </div>
</div>










<?php get_footer(); ?>