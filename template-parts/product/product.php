<?php $product = wc_get_product(get_the_ID()); ?>
<div class="slide--one-fourth swiper-slide" role="group" aria-label="1 / 6">
    <div id="product-<?php the_ID(); ?>" class="product-entry product-entry--vertical product-entry--fit-type product-product ">
        <div class="product-entry__image relative">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'medium_large', ['class' => 'h-full w-full transition-opacity hover:opacity-90 object-contain lazy loaded']); ?>
            </a>
            <div class="promotion-badge  max-w-[calc(100%-60px)]">صابونية عرق السوس مجاناً </div>
        </div>
        <div class="content-wrap donating-wrap ">
            <div class="product-entry__content">
                <?php
                if ($product->is_on_sale()) : ?>
                    <div class="product-entry__price flex justify-center flex-wrap items-center space-x-2 rtl:space-x-reverse whitespace-nowrap">
                        <h4 class="sale-price"><?php echo wc_price($product->get_price()); ?></h4>
                        <span class="regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                    </div>
                <?php else : ?>
                    <h4 class="text-gray-800 font-bold text-lg"><?php echo wc_price($product->get_price()); ?></h4>
                <?php endif; ?>
                <div class="flex flex-col gap-1">
                    <?php the_title('<a class="product-ent
                     ry__title mt-0" href="' . get_the_permalink() . '">', '</a>'); ?>
                    <p class="product-entry__subtitle text-sm text-gray-500 leading-6 max-h-[3rem] overflow-hidden"><?php echo get_post_meta(get_the_ID(), 'product_subheading', true); ?></p>

                </div>
            </div>
            <div class="add-to-cart-conatiner flex items-center mt-auto min-h-[50px] xs:pt-5  text-gray-600 gap-2.5 lg:gap-4">
                <div class="btn--add-to-cart hydrated">
                    <?php echo do_shortcode('[add_to_cart id="' . get_the_ID() . '" show_price="false" style="" class="s-button-wrap hydrated"]');
                    ?>
                </div>
                <salla-button shape="icon" fill="outline" color="light" aria-label="Add or remove to wishlist" class="btn--wishlist heart-next-add-button animated s-button-wrap hydrated" size="medium" width="normal" type="button">
                    <!----><button shape="icon" aria-label="Add or remove to wishlist" class="btn--wishlist heart-next-add-button animated s-button-element s-button-icon s-button-outline s-button-light-outline s-button-loader-center" data-id="1558219261" type="button"><span class="s-button-text">
                            <i class="sicon-heart"></i>
                        </span></button>
                </salla-button>
            </div>
        </div>
    </div>
</div>