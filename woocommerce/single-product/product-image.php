<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;
?>
<div class="product-slider has-many-images  img-is-contain has-promotion-title">
    <div class="details-slider-wrapper has-less-slides">
        <salla-slider class="details-slider circle-arrows has-thumbs-grid s-slider-wrapper thumbs-slider s-slider-has-notitle s-slider-v-centered s-slider-horizontal s-slider-with-grid-thumbs hydrated">
            <div class="s-slider-block__title">
                <div class="s-slider-block__title-left">
                    <div class="s-slider-block__title-nav">
                        <button class="s-slider-prev swiper-button-prev s-slider-nav-arrow">
                            <span class="s-slider-button-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M11.438 22.479l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z"></path>
                                </svg>
                            </span>
                        </button>
                        <button class="s-slider-next swiper-button-next s-slider-nav-arrow">
                            <span class="s-slider-button-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M20.563 22.104l-1.875 1.875-8-8 8-8 1.875 1.875-6.125 6.125z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-container s-slider-container">
                <span class="promotion-badge">New</span>
                <div class="swiper-wrapper">
                    <?php
                    $product_id = get_the_ID();

                    // Get the product gallery images
                    $gallery_images = get_post_meta($product_id, '_product_image_gallery', true);

                    // Convert the gallery images string to an array
                    $gallery_images = explode(',', $gallery_images);

                    $image_id = get_post_thumbnail_id($product_id);

                    echo '<div class="woocommerce-product-gallery">';
                    $image_url = wp_get_attachment_url($image_id);
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" style="object-fit: contain" class="h-full w-full ">';

                    echo '</div>';

                    // Output the gallery
                    // if ($gallery_images) {
                    //     foreach ($gallery_images as $image_id) {

                    //         echo '<div class="woocommerce-product-gallery">';
                    //         $image_url = wp_get_attachment_url($image_id);
                    //         $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    //         echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" style="object-fit: contain" class="h-full w-full ">';

                    //         echo '</div>';
                    //     }
                    // } 

                    ?>
                </div>
            </div>

            <div class="s-slider-thumbs">
                <div class="swiper swiper-container-thumbs s-slider-thumbs-container ">
                    <div class="s-slider-swiper-wrapper swiper-wrapper s-slider-grid-thumbs" style="transform: translate3d(0px, 0px, 0px);">

                        <?php
                        // Output the gallery
                        // if ($gallery_images) {
                        //     foreach ($gallery_images as $image_id) {

                        //         echo '<div class="swiper-slide swiper-slide-visible ">';
                        //         $image_url = wp_get_attachment_url($image_id);
                        //         $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        //         echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" style="object-fit: contain" class="h-full w-full " class="w-full h-full object-cover">';

                        //         echo '</div>';
                        //     }
                        // } 

                        ?>

                    </div>
                    <div class="s-slider-thumbs-nav">
                        <button class="s-slider-thumbs-prev s-slider-nav-arrow swiper-button-disabled swiper-button-lock">
                            <span class="s-slider-button-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M11.438 22.479l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z"></path>
                                </svg>
                            </span>
                        </button>
                        <button class="s-slider-thumbs-next s-slider-nav-arrow swiper-button-disabled swiper-button-lock">
                            <span class="s-slider-button-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M20.563 22.104l-1.875 1.875-8-8 8-8 1.875 1.875-6.125 6.125z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </salla-slider>
    </div>
    <script>
        var gallerySwiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // var thumbsSwiper = new Swiper('.swiper-container-thumbs', {
        //     slidesPerView: 3,
        //     freeMode: true,
        //     watchSlidesVisibility: true,
        //     watchSlidesProgress: true,
        //     spaceBetween: 10,
        // });

        // gallerySwiper.controller.thumbs.swiper = thumbsSwiper;
        // thumbsSwiper.controller.control = gallerySwiper;
    </script>
</div>