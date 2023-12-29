<?php
add_shortcode('mahalik_product_latest', 'mahalik_product_latest_shortcode_callback');
if (!function_exists('mahalik_product_latest_shortcode_callback')) {

    function mahalik_product_latest_shortcode_callback($attributes)
    {
        $attr = shortcode_atts(array(
            'ids'       => false,
            'category'  => false,
            'qty'   => 6
        ), $attributes);

        ob_start();
        $swiper_id = uniqid('swiper_latest_');
?>
        <section class="s-block s-block-tabs s-block--tabs-produtcs s-block--full-bg as-slider bg-gray-50 py-3 sm:py-12 tabs-initialized" id="featured-products-style2-6">
            <div class="container">
                <div class="hide-scroll-wrapper">
                    <div class="tabs hide-scroll">
                        <a href="<?php
                                    $shop_page_id = wc_get_page_id('shop');
                                    $shop_page_url = get_permalink($shop_page_id);
                                    echo esc_url($shop_page_url . '?orderby=date'); ?>" class="tab-trigger is-active s-button-wrap hydrated">
                            <button type="button" class="tab-trigger is-active s-button-element s-button-btn s-button-solid s-button-primary s-button-loader-after" data-target="featured-products-style2-6-ePOWEO_1" data-component-id="featured-products-style2-6" type="button">
                                <span class="s-button-text">
                                    <?php _e('Latest Product', 'mahalik'); ?>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="tabs-wrapper">
                    <div id="featured-products-style2-6-ePOWEO_1" class="tabs__item is-active">
                        <salla-slider type="carousel" class="circle-arrows s-slider-wrapper carousel-slider s-slider-controls-outer s-slider-has-notitle s-slider-v-centered s-slider-horizontal hydrated" controls-outer="" id="section-ePOWEO_1-slider">
                            <!---->
                            <div class="s-slider-block__title">
                                <div class="s-slider-block__title-left">
                                    <div class="s-slider-block__title-nav" dir="rtl">
                                        <button aria-label="Previous slide" class="<?php echo $swiper_id; ?>-prev s-slider-prev s-slider-nav-arrow  swiper-button-disabled" disabled="" tabindex="-1" aria-controls="swiper-wrapper-2ad0cfc82c3e8e37" aria-disabled="true">
                                            <span class="s-slider-button-icon">
                                                <!-- Generated by IcoMoon.io -->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                    <title>keyboard_arrow_right</title>
                                                    <path d="M11.438 22.479l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <button aria-label="Next slide" class="<?php echo $swiper_id; ?>-next s-slider-next s-slider-nav-arrow" tabindex="0" aria-controls="swiper-wrapper-2ad0cfc82c3e8e37" aria-disabled="false">
                                            <span class="s-slider-button-icon">
                                                <!-- Generated by IcoMoon.io -->
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                    <title>keyboard_arrow_left</title>
                                                    <path d="M20.563 22.104l-1.875 1.875-8-8 8-8 1.875 1.875-6.125 6.125z"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper <?php echo $swiper_id; ?> s-slider-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl swiper-backface-hidden" dir="rtl">
                                <div class="swiper-wrapper s-slider-swiper-wrapper" id="swiper-wrapper-2ad0cfc82c3e8e37" aria-live="polite">
                                    <?php

                                    $product_ids = explode(',', sanitize_text_field($attr['ids']));
                                    $category = sanitize_text_field($attr['category']);
                                    $args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => $attr['qty'],
                                        'orderby'        => 'date',    // Order by post date
                                        'order'          => 'DESC',    // Sort in descending order (latest first)
                                    );

                                    if (!empty($product_ids) && $attr['ids']) {

                                        $args['post__in'] = $product_ids;
                                    } elseif (!empty($category) && $attr['category']) {

                                        $args['tax_query'] = array(
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field'    => 'slug',
                                                'terms'    => $category,
                                            ),
                                        );
                                    }

                                    $latest_products = new WP_Query($args);

                                    if ($latest_products->have_posts()) {
                                        $i = 1; // Use as slide index
                                        while ($latest_products->have_posts()) {
                                            $latest_products->the_post();
                                    ?>
                                            <div class="slide--one-fourth swiper-slide" role="group">
                                                <?php get_template_part('template-parts/product/product', 'slide'); ?>
                                            </div>

                                    <?php
                                            $i++;
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo 'No products found.';
                                    }

                                    ?>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </salla-slider>
                    </div>
                </div>
            </div>
            <script>
                new Swiper('.<?php echo $swiper_id; ?>', {
                    direction: 'horizontal',
                    // reverseDirection: true,
                    slidesPerView: 4,
                    loop: false,
                    initialSlide: 0,

                    // Navigation arrows
                    navigation: {
                        nextEl: '.<?php echo $swiper_id; ?>-next',
                        prevEl: '.<?php echo $swiper_id; ?>-prev',
                    },
                });
            </script>
        </section>

<?php
        $content = ob_get_contents();
        ob_clean();
        return $content;
    }
}
