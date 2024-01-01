/**
 * Guest User Script
 *
 * The Script and load if isn't logged in
 */
jQuery(document).ready(function ($) {
  var emailOtpInputs = $('.email-otp-input');

  function setupOtpInputListeners(inputs) {
    inputs.each(function (index, input) {
      $(input).on('paste', function (ev) {
        var clip = ev.originalEvent.clipboardData.getData('text').trim();
        if (!/^\d{4}$/.test(clip)) {
          ev.preventDefault();
          return;
        }

        var characters = clip.split('');
        inputs.each(function (i, otpInput) {
          $(otpInput).val(characters[i] || '');
        });

        enableNextBox(inputs.eq(0), 0);
        inputs.eq(3).removeAttr('disabled');
        inputs.eq(3).focus();
        updateOTPValue(inputs);
      });

      $(input).on('input', function () {
        var currentIndex = inputs.index(this);
        var inputValue = $(this).val().trim();

        if (!/^\d$/.test(inputValue)) {
          $(this).val('');
          return;
        }

        if (inputValue && currentIndex < 3) {
          inputs.eq(currentIndex + 1).removeAttr('disabled');
          inputs.eq(currentIndex + 1).focus();
        }

        if (currentIndex === 2 && inputValue) {
          inputs.eq(3).removeAttr('disabled');
          inputs.eq(3).focus();
        }

        updateOTPValue(inputs);
      });

      $(input).on('keydown', function (ev) {
        var currentIndex = inputs.index(this);

        if (!$(this).val() && ev.key === 'Backspace' && currentIndex > 0) {
          inputs.eq(currentIndex - 1).focus();
        }
      });
    });
  }

  function enableNextBox(input, currentIndex) {
    var inputValue = input.val();

    if (inputValue === '') {
      return;
    }

    var nextIndex = currentIndex + 1;
    var nextBox = emailOtpInputs.eq(nextIndex);

    if (nextBox.length) {
      nextBox.removeAttr('disabled');
    }
  }

  function updateOTPValue(inputs) {
    var otpValue = '';

    inputs.each(function (index, input) {
      otpValue += $(input).val();
    });

    $('#emailverificationCode').val(otpValue);
  }

  setupOtpInputListeners(emailOtpInputs);

  emailOtpInputs.eq(0).focus(); // Set focus on the first email OTP input field

  emailOtpInputs.eq(3).on('input', function () {
    updateOTPValue(emailOtpInputs);
  });
});

jQuery(document).ready(function ($) {
  $modalAllTab = $('#sign-in-modal .modal-tab');

  $loginModal = $('#sign-in-modal [data-name="login-email"]');
  $otpModal = $('#sign-in-modal [data-name="otp"]');
  $registerModal = $('#sign-in-modal [data-name="registration"]');

  let timer;
  /**
   *
   * Submit Email
   */
  $loginModal.find('form').on('submit', function (event) {
    event.preventDefault();

    $('.s-login-modal-enter-button').css({ opacity: '0.5' });
    // $('.s-login-modal-enter-button').prop('disabled', true);
    $('.s-verify-resend').hide();

    let countdown = 30;
    $('.s-verify-resend-message')
      .show()
      .find('.s-verify-timer')
      .html(countdown);
    timer = setInterval(function () {
      countdown--;
      $('.s-verify-timer').html(countdown);
      if (countdown <= 0) {
        $('.s-verify-resend-message').hide();
        $('.s-verify-resend').show();
        clearInterval(timer);
      }
    }, 1000);

    // You can also convert the serialized data into an object
    var formDataObject = {};
    $(this)
      .serializeArray()
      .forEach(function (item) {
        formDataObject[item.name] = item.value;
      });

    sendOtpRequest(formDataObject.email);
  });

  /**
   *
   * Submit OTP
   */
  $otpModal.on('submit', function (event) {
    event.preventDefault();

    // You can also convert the serialized data into an object
    var formDataObject = {};
    $(this)
      .serializeArray()
      .forEach(function (item) {
        formDataObject[item.name] = item.value;
      });

    optVerificationRequest(formDataObject);
  });

  /**
   *
   * User Register form
   */
  $registerModal.on('submit', function (event) {
    event.preventDefault();

    // You can also convert the serialized data into an object
    var formDataObject = {};
    $(this)
      .serializeArray()
      .forEach(function (item) {
        formDataObject[item.name] = item.value;
      });

    userRegisterRequest(formDataObject);
  });
  /**
   *
   * OTP ajax request
   */
  function sendOtpRequest(email) {
    $.ajax({
      type: 'POST',
      url: ajax_object.ajax_url,
      data: {
        action: 'mahalik_send_opt_email',
        email: email,
        nonce: ajax_object.nonce,
      },
      success: function (response) {
        const data = JSON.parse(response);

        $('.s-login-modal-enter-button').css({ opacity: '1' });

        if (data.status === 'error') return;

        $('.s-login-modal-currentEmail').html(data.email);
        $('#publicKey').val(data.public_key);

        $modalAllTab.hide();
        $otpModal.fadeIn();
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // Handle errors
        // console.error('AJAX Error:', textStatus, errorThrown);
        $('.s-login-modal-enter-button').css({ opacity: '1' });
      },
    });
  }

  function optVerificationRequest(data) {
    $('.s-verify-submit').css({ opacity: '0.5' });
    // $('.s-login-modal-enter-button').prop('disabled', true);

    $.ajax({
      type: 'POST',
      url: ajax_object.ajax_url,
      data: {
        action: 'mahalik_verify_opt_code',
        code: data.code,
        publicKey: data.publicKey,
        nonce: ajax_object.nonce,
      },
      success: function (response) {
        const data = JSON.parse(response);

        $('.s-verify-submit').css({ opacity: '1' });
        if (data.status === 'error') {
          $('.s-verify-error-message').show().css('color', 'red');
          return;
        }

        if (data.status === 'success') {
          $('#register-session').val(data.session);

          if (data.loggedIn === true) {
            window.location.href = '';
          } else {
            $modalAllTab.hide();
            $registerModal.fadeIn();
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // Handle errors
        // console.error('AJAX Error:', textStatus, errorThrown);
        $('.s-verify-submit').css({ opacity: '1' });
      },
    });
  }

  function userRegisterRequest(data) {
    $('.user-sign-button').css({ opacity: '0.5' });
    // $('.s-login-modal-enter-button').prop('disabled', true);
    $.ajax({
      type: 'POST',
      url: ajax_object.ajax_url,
      data: {
        action: 'mahalik_register_user',
        nonce: ajax_object.nonce,
        firstName: data.firstName,
        lastName: data.lastName,
        phone: data.phone,
        session: data.session,
      },
      success: function (response) {
        const data = JSON.parse(response);

        $('.user-sign-button').css({ opacity: '1' });

        if (data.status === 'success') {
          $('#register-session').val(data.session);
          window.location.href = '';
        } else {
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        // Handle errors
        // console.error('AJAX Error:', textStatus, errorThrown);
        $('.user-sign-button').css({ opacity: '1' });
      },
    });
  }

  $('.s-verify-resend').on('click', function () {
    $loginModal.find('.s-login-modal-enter-button').click();
  });

  /**
   * Back to login
   */
  $('.s-verify-back').on('click', function () {
    $modalAllTab.hide();
    $loginModal.fadeIn();
    $modalAllTab.find('input').val('');
    $('.s-verify-error-message').hide();
    clearInterval(timer);
  });
});

function isValidEmail(email) {
  // Regular expression for a simple email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
