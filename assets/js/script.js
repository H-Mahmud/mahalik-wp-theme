jQuery(document).ready(function ($) {
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
});
