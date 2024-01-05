jQuery(document).ready(function ($) {
  /**
   * Header Menu bar
   */
  $(document).on('click', '.open-mobile-menu', function () {
    $('body').addClass('menu-is-open');
  });

  $(document).on('click', '.close-mobile-menu', function () {
    $('body').removeClass('menu-is-open');
  });

  /**
   * Cart Qty and coupon update
   */
  const updateTheCart = () => {
    const $submitButton = $('.cart_submit_button');
    $submitButton.prop('disabled', false);
    $submitButton.click();
  };

  $(document).on('click', '#mahalik_coupon_apply', function () {
    couponCode = $('#coupon-input').val();
    if (!couponCode) return;
    $('#coupon_code').val(couponCode);

    $('.wc-apply-coupon').click();
  });

  $(document).on('click', '.cart-qty-decrease-button', function (e) {
    e.preventDefault();
    let qty = $(this).siblings('.qty');

    if (!parseInt(qty.val())) return;
    qty.val(parseInt(qty.val()) - 1);

    updateTheCart();
  });

  $(document).on('click', '.cart-qty-increase-button', function (e) {
    e.preventDefault();
    let qty = $(this).siblings('.qty');
    qty.val(parseInt(qty.val()) + 1);

    updateTheCart();
  });

  $(document).on('change', '.cart_item input.qty', function () {
    updateTheCart();
  });

  /**
   * User sign modal handler
   *
   */

  function hideSignInModal() {
    $('#sign-in-modal').fadeOut();
  }
  function showSignInModal() {
    $('#sign-in-modal').fadeIn();
  }

  $(document).on('click', function (event) {
    if (event.target.getAttribute('modal-view') === 'sign-in') {
      showSignInModal();
    }
  });

  $(document).on('click', '.sign-in-close', function (e) {
    hideSignInModal();
  });

  // Close the modal if clicked outside of it
  $(document).on('click', function (event) {
    if (
      !$(event.target).closest('#sign-in-modal .s-modal-body').length &&
      event.target.tagName === 'DIV'
    ) {
      hideSignInModal();
    }
  });

  /**
   * Single Product Page
   *
   */
  $(document).on('click', '.single-product .increase-qty', function (event) {
    const qty = $(this).siblings('.s-quantity-input-input');
    if (!qty.val()) return qty.val(1);
    qty.val(parseInt(qty.val()) + 1);
  });

  $(document).on('click', '.single-product .decrease-qty', function (event) {
    const qty = $(this).siblings('.s-quantity-input-input');
    if (!parseInt(qty.val())) return;
    qty.val(parseInt(qty.val()) - 1);
  });

  /**
   * Checkout page payment option
   *
   */

  $(document).on(
    'click',
    '.wc_payment_methods .wc_payment_method label',
    function (event) {
      $('.wc_payment_methods .wc_payment_method label').removeClass('active');

      $(this).addClass('active');
    }
  );
});
