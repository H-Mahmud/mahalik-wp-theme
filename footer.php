<footer class="store-footer">
    <div aria-label="footer" class="store-footer__inner pt-11 lg:pt-22">
        <div class="container space-y-5 lg:space-y-8">
            <div class="space-y-8 sm:space-y-0 sm:grid grid-cols-12 gap-8 lg:gap-6">
                <div class="about-store col-span-12 sm:col-span-6 lg:col-span-3 flex flex-col flex-1 space-y-6">
                    <a href="<?php echo home_url(); ?>" class="footer-logo">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo_info = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if ($logo_info) {
                            $logo_url = $logo_info[0];
                            $logo_width = $logo_info[1];
                            $logo_height = $logo_info[2];

                            echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" width="' . esc_attr($logo_width) . '" height="' . esc_attr($logo_height) . '" class="w-auto max-h-[70px]" />';
                        }
                        ?>
                    </a>
                    <p class="max-w-[75%] leading-6 mb-4">
                        <?php _e(' A Saudi store interested in cosmetics and care products, supervised by a Saudi team specialized in importing the latest and finest cosmetics and care products at prices that suit all categories. We guarantee the highest standards of quality and effectiveness, 100% original.', 'mahalik'); ?>
                    </p>
                    <div>
                        <ul class="social-media-icons flex -mx-1 mt-4 lg:mt-0 justify-center">
                            <li class="mx-1">
                                <a href="https://www.instagram.com/lamsah_co/" rel="noopener" target="_blank" title="Instagram" aria-label="Instagram" class="social-link">
                                    <i class="sicon-instagram"></i>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="https://twitter.com/lamsah_co" rel="noopener" target="_blank" title="Twitter" aria-label="Twitter" class="social-link">
                                    <i class="sicon-twitter"></i>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="https://www.snapchat.com/add/https://www.snapchat.com/add/lamsah_store?share_id=jCI6fWG03BA&amp;locale=en-US" rel="noopener" target="_blank" title="snap chat" aria-label="snap chat" class="social-link">
                                    <i class="sicon-snapchat"></i>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="https://www.tiktok.com/@lamsah_co" rel="noopener" target="_blank" title="Tik Tok" aria-label="Tik Tok" class="social-link">
                                    <i class="sicon-tiktok"></i>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="https://www.facebook.com/lamsah.co?_rdc=1&amp;_rdr" rel="noopener" target="_blank" title="Facebook" aria-label="Facebook" class="social-link">
                                    <i class="sicon-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                    <h3 class="footer-title">
                        <?php _e('Important links', 'mahalik'); ?>
                    </h3>
                    <?php wp_nav_menu(
                        array(
                            'container'            => 'div',
                            'container_class'      => 'footer-list',
                            'menu_class'           => false,
                            'menu_id'              => false,
                            'echo'                 => true,
                            'items_wrap'           => '<ul>%3$s</ul>',
                            'depth'                => 1,
                            'walker'               => '',
                            'theme_location'       => 'footer_menu',
                        )
                    ); ?>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3">
                    <h3 class="footer-title">
                        <?php _e('Connect with us', 'mahalik'); ?>
                    </h3>
                    <a href="https://lamsah.co/ar/whatsapp/send" class="mb-2.5 last:mb-0 py-1 flex items-center text-sm leading-none hover:opacity-70 transition-all duration-300">
                        <i class="contact-icon sicon-whatsapp2"></i>
                        <span class="text-unicode unicode break-words overflow-hidden">
                            +966538094154
                        </span>
                    </a>
                    <a href="tel:920017811" class="mb-2.5 last:mb-0 py-1 flex items-center text-sm leading-none hover:opacity-70 transition-all duration-300">
                        <i class="contact-icon sicon-phone"></i>
                        <span class="text-unicode unicode break-words overflow-hidden">
                            920017811
                        </span>
                    </a>
                    <a href="mailto:info@lamsah.co" class="mb-2.5 last:mb-0 py-1 flex items-center text-sm leading-none hover:opacity-70 transition-all duration-300">
                        <i class="contact-icon sicon-mail"></i>
                        <span class="text-unicode unicode break-words overflow-hidden">
                            info@lamsah.co
                        </span>
                    </a>
                </div>
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 space-y-8"></div>
            </div>
            <div></div>
        </div>
    </div>
    <div class="store-footer__info-bar">
        <div class="container flex flex-col-reverse lg:flex-row items-center justify-between py-4 text-center">
            <div class="text-sm">
                <p class="text-gray-400 mb-2.5 md:mb-0">
                    <?php _e('All rights reserved', 'mahalik');
                    echo number_format_i18n(date('Y')); ?>
                    <a href="<?php echo home_url(); ?>" class="hover:text-primary" target="_blank" rel="noreferrer">
                        <?php bloginfo('name'); ?>
                    </a>
                </p>
            </div>
            <div class="flex flex-col-reverse lg:flex-row lg:gap-2.5">
                <ul class="payment-methods-list flex justify-center items-stretch flex-wrap mb-2.5 lg:mb-0 -mx-1">
                    <li class="payment-item">
                        <img class="object-contain max-h-6" src="<?php echo get_theme_file_uri() . '/assets/images/payment/mada_mini.png'; ?>" loading="lazy" width="36" height="24" alt="mada">
                    </li>
                    <li class="payment-item">
                        <img class="object-contain max-h-6" src="<?php echo get_theme_file_uri() . '/assets/images/payment/credit_card_mini.png'; ?>" loading="lazy" width="36" height="24" alt="credit_card">
                    </li>
                    <li class="payment-item">
                        <img class="object-contain max-h-6" src="<?php echo get_theme_file_uri() . '/assets/images/payment/apple_pay_mini.webp'; ?>" loading="lazy" width="36" height="24" alt="apple_pay">
                    </li>
                    <li class="payment-item">
                        <img class="object-contain max-h-6" src="<?php echo get_theme_file_uri() . '/assets/images/payment/tabby_installment_mini.webp'; ?>" loading="lazy" width="36" height="24" alt="tabby_installment">
                    </li>
                    <li class="payment-item">
                        <img class="object-contain max-h-6" src="<?php echo get_theme_file_uri() . '/assets/images/payment/cod_mini.webp'; ?>" loading="lazy" width="36" height="24" alt="cod">
                    </li>
                    <li class="w-12 bg-white rounded p-1 flex-center">
                        <a target="_blank" href="https://eauthenticate.saudibusiness.gov.sa/certificate-details/0000015724" alt="0000015724">
                            <img width="100%" height="100%" src="<?php echo get_theme_file_uri() . '/assets/images/payment/sbc.webp'; ?>" class="lazy rounded-sm hover:opacity-80 transition-opacity h-6 loaded" alt="value added tax" loading="lazy" data-ll-status="loaded">
                        </a>
                    </li>
                </ul>
                <div class="flex items-center justify-center mb-5 lg:mb-0">
                    <p class="text-sm">
                        Tax number: 311035551400003
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>