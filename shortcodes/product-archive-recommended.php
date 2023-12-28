<?php
add_shortcode('mahalik_product_recommended', 'mahalik_product_recommended_shortcode_callback');
if (!function_exists('mahalik_product_recommended_shortcode_callback')) {

    function mahalik_product_recommended_shortcode_callback($attributes)
    {
        $attr = shortcode_atts(array(
            'category' => false,
            'tags'  => false,
            'ids'   => false,
            'title' => __('Recommended for you', 'mahalik'),
            'qty'   => 8
        ), $attributes);

        ob_start();
?>
        <section class="s-block container s-block--fixed-products">
            <div class="s-block__title">
                <div class="s-block__title-right">
                    <h2><?php echo $attr['title']; ?></h2>
                </div>
            </div>
            <div class="box-container  ">
                <?php

                // Validate and sanitize input
                $product_ids = explode(',', sanitize_text_field($attr['ids']));
                $category = sanitize_text_field($attr['category']);
                $tags = explode(',', sanitize_text_field($attr['tags']));

                // Build the query arguments based on priority
                $query_args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => $attr['qty'],
                    'post_status'    => 'publish',
                );

                if (!empty($product_ids) && $attr['ids']) {
                    $query_args['post__in'] = $product_ids;
                } elseif (!empty($tags) && $attr['tags']) {
                    $query_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'product_tag',
                            'field'    => 'slug',
                            'terms'    => $tags,
                        ),
                    );
                } elseif (!empty($category) && $attr['category']) {
                    $query_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $category,
                        ),
                    );
                }

                $recommended_products = new WP_Query($query_args);

                if ($recommended_products->have_posts()) {
                    while ($recommended_products->have_posts()) {
                        $recommended_products->the_post();
                ?>
                        <?php get_template_part('template-parts/product/product', 'product'); ?>

                <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo 'No product found.';
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
