<header class="store-info">
    <div class="d-flex">
        <div class="store-info__logo">
            <a href="<?php echo home_url();  ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_info = wp_get_attachment_image_src($custom_logo_id, 'full');
                if ($logo_info) {
                    $logo_url = $logo_info[0];
                    echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" />';
                }
                ?>
            </a>
        </div>
        <div class="store-info__detail">
            <h1><?php _e('Well Come', 'mahalik'); ?> <?php
                                                        $user = wp_get_current_user();
                                                        echo $user->display_name;
                                                        ?> </h1>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>" target="_blank"><?php echo bloginfo('name'); ?></a></li>
                <li class="breadcrumb-item">
                    <a href="<?php
                                $cart_id = wc_get_page_id('cart');
                                echo get_the_permalink($cart_id);
                                ?>" target="_blank">
                        <?php _e('Cart', 'mahalik'); ?>
                    </a>
                </li>
                <li class="breadcrumb-item"><?php _e('Complete the application', 'mahalik'); ?></li>
            </ul>
        </div>
    </div>
    <?php /*
    <div id="message_modal" class="ui modal failed">
        <div class="ui active inverted dimmer failed">
            <i class="sicon-cancel-circle"></i>
            <div class="message">
                <b>حصل خطأ غير متوقع، يرجى إعادة المحاولة</b>
                <p>جاري تحديث الصفحة ...</p>
            </div>
        </div>
    </div> */ ?>
</header>