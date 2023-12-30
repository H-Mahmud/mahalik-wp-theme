<div class="top-nav">
    <div class="container">
        <div class="top-nav-inner center-between relative">
            <ul class="right-side topnav-menu flex items-center -mx-1">
                <li>
                    <?php if (is_user_logged_in()) :
                        get_template_part('template-parts/header/menu', 'account');
                    else : ?>
                        <button class="topnav-link-item" onclick="window.location.href = '<?php echo wc_get_account_endpoint_url(''); ?>';" aria-label="Login">
                            <i class="icon sicon-user"></i>
                            <div class="hidden lg:flex flex-col leading-none text-sm text-start">
                                <span class="flex leading-none text-sm">
                                    <?php _e('sign in', 'mahalik'); ?>
                                </span>
                            </div>
                        </button>
                    <?php endif; ?>
                </li>
                <li class="hidden lg:flex">
                    <div show-cart-label="" class="hydrated">
                        <a class="s-cart-summary-wrapper" href="<?php echo wc_get_cart_url(); ?>">
                            <div id="s-cart-icon">
                                <div name="icon" hidden="">
                                    <i class="s-cart-summary-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 30 32">
                                            <title><?php _e('Cart', 'mahalik'); ?></title>
                                            <path d="M15.426 28.084c0-1.412-0.85-2.684-2.156-3.226-1.305-0.54-2.807-0.241-3.805 0.758-0.999 0.998-1.298 2.5-0.758 3.805 0.54 1.303 1.815 2.155 3.226 2.155 1.928-0.003 3.49-1.564 3.492-3.492h0.001zM10.597 28.084h0.001c0-0.54 0.326-1.027 0.825-1.235 0.498-0.206 1.074-0.091 1.455 0.29 0.383 0.382 0.497 0.957 0.29 1.456-0.208 0.5-0.695 0.825-1.235 0.825-0.355 0-0.695-0.142-0.944-0.391-0.251-0.251-0.392-0.591-0.392-0.946h-0.001l0.001 0.001zM28.23 28.084c0-1.412-0.85-2.684-2.155-3.226-1.305-0.54-2.807-0.241-3.806 0.758s-1.297 2.5-0.756 3.805c0.54 1.303 1.813 2.155 3.226 2.155 1.927-0.003 3.49-1.564 3.491-3.492zM23.401 28.084c0-0.54 0.326-1.027 0.825-1.235 0.5-0.206 1.075-0.091 1.457 0.29s0.497 0.957 0.289 1.456c-0.206 0.5-0.693 0.825-1.233 0.825-0.738 0-1.337-0.599-1.337-1.337l-0.001 0.001zM1.953 0.234l-0.342-0.059c-0.29-0.064-0.594-0.004-0.839 0.166-0.247 0.169-0.414 0.436-0.463 0.734-0.050 0.3 0.023 0.607 0.201 0.85s0.444 0.402 0.738 0.44l0.341 0.059c1.825 0.324 3.248 1.794 3.548 3.662l1.981 12.369h-0.001c0.218 1.387 0.913 2.651 1.96 3.563s2.379 1.412 3.754 1.41h14.242c0.601 0 1.088-0.498 1.088-1.112s-0.487-1.112-1.088-1.112h-14.242c-1.679-0.001-3.139-1.183-3.525-2.854h11.463c1.614 0.004 3.188-0.518 4.493-1.49 1.305-0.973 2.271-2.346 2.762-3.918l1.298-4.136c0.145-0.455 0.065-0.953-0.213-1.336-0.278-0.385-0.72-0.608-1.187-0.602h-20.467l-0.181-1.141c-0.218-1.367-0.849-2.631-1.802-3.615-0.954-0.983-2.184-1.64-3.518-1.878h-0.001zM26.946 9.096l-0.993 3.169v-0.001c-0.353 1.122-1.044 2.101-1.975 2.796s-2.056 1.067-3.208 1.067h-11.833l-1.125-7.042 19.134 0.011z"></path>
                                        </svg>
                                    </i>
                                </div>
                                <i slot="icon" class="icon sicon-shopping-bag leading-none"></i>
                            </div>
                            <span class="s-cart-summary-count">
                                <?php echo WC()->cart->get_cart_contents_count(); ?>
                            </span>
                            <p class="s-cart-summary-content"><span class="s-cart-summary-label">
                                    <?php _e('Basket', 'mahalik'); ?>
                                </span><b class="s-cart-summary-total">
                                    <?php echo wc_price(WC()->cart->get_cart_contents_total()); ?>
                                </b></p>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="left-side grow hidden lg:block">
                <?php
                wp_nav_menu(array(
                    'container'            => false,
                    'menu_class'           => 'topnav-menu',
                    'fallback_cb'          => 'wp_page_menu',
                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'         => 'preserve',
                    'depth'                => 1,
                    'walker'               => new Mahalik_TopBar_Nav_Walker(),
                    'theme_location'       => 'top_bar_menu',
                )); ?>
            </div>
        </div>
    </div>
</div>