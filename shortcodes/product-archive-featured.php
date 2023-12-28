<?php
add_shortcode('mahalik_product_featured', 'mahalik_featured_product_shortcode_callback');
if (!function_exists('mahalik_featured_product_shortcode_callback')) {

    function mahalik_featured_product_shortcode_callback()
    {
        ob_start();
?>
        <section class="s-block container s-block--fixed-products">
            <div class="s-block__title">
                <div class="s-block__title-right">
                    <h2><?php _e('Featured Products', 'mahalik'); ?></h2>
                </div>
                <div class="s-block__title-left">
                    <a href="<?php
                                $id = wc_get_page_id('shop');
                                $permalink = get_the_permalink($id);
                                echo esc_url($permalink . '?term=featured')
                                ?>" class="s-block__display-all"><?php __('View All', 'mahalik'); ?></a>
                </div>
            </div>
            <div class="box-container  ">
                <?php

                // The tax query
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                );

                $args = array(
                    'post_type'           => 'product',
                    'post_status'         => 'publish',
                    'posts_per_page'      => 4,
                    'tax_query'           => $tax_query
                );


                $featured_products = new WP_Query($args);
                if ($featured_products->have_posts()) {
                    $i = 1; // Use as slide index
                    while ($featured_products->have_posts()) {
                        $featured_products->the_post();
                ?>
                        <?php get_template_part('template-parts/product/product', 'product'); ?>

                <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo 'No products found.';
                }

                ?>
            </div>
        </section>
<?php
        $content = ob_get_contents();
        ob_clean();
        return $content;
    }
}
