<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action('woocommerce_before_main_content');

?>
<header class="page-header h-32 lg:h-52   has-overlay--before   has-overlay--light  has-overlay--opacity-option has-overlay--opacity-70" style="
   background-color: #21631d;
   background-image:url(<?php echo get_theme_file_uri('assets/images/shop-hero-bg.webp'); ?>);
   color: #ffffff;">
    <nav class="breadcrumbs w-full py-5 breadcrumbs--inherit-color">
        <ol class="flex items-center flex-wrap text-sm">
            <li class="whitespace-nowrap"><a href="https://lamsah.co/ar/">Main</a></li>
            <!-- <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">

                </span></li>
            <li class="whitespace-nowrap"><a href="https://lamsah.co/ar/العناية-بالجسم/c879093046">
                    body care
                </a></li>
            <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">

                </span></li>
            <li><span>
                    Moisturizing the body
                </span></li> -->
        </ol>
    </nav>
</header>


<div class="container mb-10">
    <div class="flex items-start flex-col md:flex-row">
        <div class="main-content flex-1 w-full ">
            <div class="mb-4 sm:mb-6 flex justify-between items-center">
                <h1 id="page-title" class="font-bold text-xl rtl:pl-3 ltr:pr-3">
                    Body care | Moisturizing the body
                </h1>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <div class="flex items-center">
                        <label class="hidden sm:block rtl:ml-3 ltr:mr-3 whitespace-nowrap" for="product-filter">
                            ranking
                        </label>
                        <select id="product-filter" class="form-input pt-0 pb-1 rtl:md:pl-10 ltr:md:pr-10">
                            <option value="ourSuggest">
                                Our proposals
                            </option>
                            <option value="bestSell">
                                best seller
                            </option>
                            <option value="topRated">
                                Highest rated
                            </option>
                            <option value="priceFromTopToLow">
                                Price from high to low
                            </option>
                            <option value="priceFromLowToTop">
                                Price from low to high
                            </option>
                        </select>
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
                        else :
                            echo '<h3>' . __('No product found', 'mahalik') . '</h3>';
                        endif; ?>

                    </div>

                    <div class="s-infinite-scroll-status">
                        <p class="s-infinite-scroll-last infinite-scroll-last s-hidden"> </p>
                        <p class="s-infinite-scroll-error infinite-scroll-error s-hidden">
                            Could not fetch more😢
                        </p>
                    </div>

                    <div class="s-products-list-loading-wrapper" style="display: none;"><span class="s-button-loader s-button-loader-center s-infinite-scroll-btn-loader"></span></div>

                    <div class="s-infinite-scroll-wrapper" style="display: block;"><button class="s-infinite-scroll-btn s-button-btn s-button-primary"><span class="s-button-text s-infinite-scroll-btn-text">
                                Load more
                            </span><span class="s-button-loader s-button-loader-center s-infinite-scroll-btn-loader" style="display: none;"></span></button></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>