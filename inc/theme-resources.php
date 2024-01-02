<?php
add_action('wp_enqueue_scripts', 'mahalik_theme_enqueue_scripts', 10);
if (!function_exists('mahalik_theme_enqueue_scripts')) {

  /**
   * Add Styles and scripts
   */
  function mahalik_theme_enqueue_scripts()
  {

    wp_enqueue_style('app', get_theme_file_uri() . '/assets/salla.network/app.css', [], false, 'all');
    wp_enqueue_style('amazon_ember',  get_theme_file_uri() . '/assets/salla.network/amazon_ember.css', [], false, 'all');
    wp_enqueue_style('sallaicons',  get_theme_file_uri() . '/assets/salla.network/sallaicons.css', [], false, 'all');

    wp_enqueue_style('style', get_stylesheet_uri(), [], time(), 'all'); // TODO: add a static version by removing time()

    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', [], false, false);
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/js/script.js', [], time(), true);

    if (!is_user_logged_in()) {
      wp_enqueue_script('guest-user', get_stylesheet_directory_uri() . '/assets/js/guest-user.js', [], time(), true);
      wp_localize_script('guest-user', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('send_opt_email_nonce')));
    }

    if (is_page('checkout')) {
      wp_enqueue_style('bootstrap',  get_theme_file_uri() . '/assets/salla.network/bootstrap.css', [], false, 'all');
      wp_enqueue_style('checkout',  get_theme_file_uri() . '/assets/salla.network/checkout.css', [], false, 'all');
      wp_enqueue_style('pingarlt',  get_theme_file_uri() . '/assets/salla.network/pingarlt.css', [], false, 'all');

      wp_deregister_style('app');
      wp_deregister_style('amazon_ember');
      wp_deregister_style('sallaicons');
      wp_deregister_style('style');
      wp_deregister_style('swiper');
      wp_deregister_style('script');
    }
  }
}

add_action('wp_enqueue_scripts', 'mahalik_theme_inline_style', 10);
if (!function_exists('mahalik_theme_inline_style')) {
  /**
   * Add Theme Fonts and Icons
   */
  function mahalik_theme_inline_style()
  {
    $font_url_rg_wff2 = get_theme_file_uri() . '/assets/fonts/AmazonEmberArabic_Rg.woff2';
    $font_url_rg_wff = get_theme_file_uri() . '/assets/fonts/AmazonEmberArabic_Rg.woff';

    $font_url_bd_wff2 = get_theme_file_uri() . '/assets/fonts/AmazonEmberArabic_Bd.woff2';
    $font_url_bd_wff = get_theme_file_uri() . '/assets/fonts/AAmazonEmberArabic_Bd.woff';

    $amazon_ember_css = "
    @font-face {
        font-family: Amazon-Ember;
        src: url($font_url_rg_wff2) format('woff2'),
          url($font_url_rg_wff) format('woff');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      
      @font-face {
        font-family: Amazon-Ember-Medium;
        src: url($font_url_rg_wff2) format('woff2'),
          url($font_url_rg_wff) format('woff');
        font-weight: 300;
        font-style: normal;
        font-display: swap;
      }
      
      @font-face {
        font-family: Amazon-Ember-Bold;
        src: url($font_url_bd_wff2) format('woff2'),
          url($font_url_bd_wff) format('woff');
        font-weight: 700;
        font-style: normal;
        font-display: swap;
      }
    ";


    $url_icon_eot = get_theme_file_uri() . '/assets/fonts/sallaicons.eot';
    $url_icon_eot_iefix = get_theme_file_uri() . '/assets/fonts/sallaicons.eot?bd897m-2#iefix';
    $url_icon_ttf = get_theme_file_uri() . '/assets/fonts/sallaicons.ttf';
    $url_icon_woff = get_theme_file_uri() . '/assets/fonts/sallaicons.woff';
    $url_icon_svg = get_theme_file_uri() . '/assets/fonts/sallaicons.svg';

    $sallaicons_css = "
    @font-face {
        font-family: sallaicons;
        src: url($url_icon_eot);
        src: url($url_icon_eot_iefix)
            format('embedded-opentype'),
          url($url_icon_ttf) format('truetype'),
          url($url_icon_woff) format('woff'),
          url($url_icon_svg) format('svg');
        font-weight: 400;
        font-style: normal;
        font-display: block;
      }
    ";
    wp_add_inline_style('style', $amazon_ember_css . $sallaicons_css);
  }
}


/**
 * Disable WooCommerce default style
 */
// if (class_exists('Woocommerce')) {
//   add_filter('woocommerce_enqueue_styles', '__return_empty_array');
// }
