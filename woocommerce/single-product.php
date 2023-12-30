<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>


<div class="bg-gray-50 single-product">
    <div class="container page-container product-details ">

        <nav class="breadcrumbs w-full py-5 breadcrumbs--">
            <?php
            /**
             * woocommerce_before_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
             * @hooked woocommerce_breadcrumb - 20
             */
            do_action('woocommerce_before_main_content');
            ?>

            <?php
            /* Need to implement the markup on single page breadcrumb
            <ol class="flex items-center flex-wrap text-sm">
                <li class="whitespace-nowrap"><a href="https://lamsah.co/ar/">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Main</font>
                        </font>
                    </a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">/</font>
                        </font>
                    </span></li>
                <li class="whitespace-nowrap"><a href="https://lamsah.co/ar/العناية-بالجسم/c879093046">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">body care</font>
                        </font>
                    </a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">/</font>
                        </font>
                    </span></li>
                <li class="whitespace-nowrap"><a href="https://lamsah.co/ar/ترطيب-الجسم/c1586052630">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Moisturizing the body</font>
                        </font>
                    </a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">/</font>
                        </font>
                    </span></li>
                <li><span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Moisturizing and unifying skin tone set</font>
                        </font>
                    </span></li>
            </ol>
            */ ?>
        </nav>

        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <?php wc_get_template_part('content', 'single-product'); ?>

        <?php endwhile; // end of the loop. 
        ?>
    </div>
</div>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>
<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
