<?php
add_action('wp_ajax_mahalik_send_opt_email', 'mahalik_send_opt_email');
add_action('wp_ajax_nopriv_mahalik_send_opt_email', 'mahalik_send_opt_email');
if (!function_exists('mahalik_send_opt_email')) {
    /**
     * 
     * Send OTP to user email
     */
    function mahalik_send_opt_email()
    {
        check_ajax_referer('send_opt_email_nonce', 'nonce');

        $email = sanitize_email($_POST['email']);

        // Generate a 4-digit random number (OTP)
        $otp = sprintf('%04d', rand(0, 9999));

        // Send the OTP to the user's email
        $subject = 'Your OTP';
        $message = 'Your OTP is: ' . $otp;
        $headers = array('Content-Type: text/html; charset=UTF-8');

        $otp_data = array('otp' => $otp, 'email' => $email);
        $public_key = base64_encode(serialize($otp_data));

        $result = wp_mail($email, $subject, $message, $headers);

        if ($result) {
            echo json_encode(array(
                'status' => 'success',
                'email' => $email,
                'public_key' => $public_key
            ));
        } else {
            echo json_encode(array(
                'status' => 'error',
                'message' => __('Error sending OTP. Please try again later.', 'mahalik'),
            ));
        }

        wp_die();
    }
}

add_action('wp_ajax_mahalik_verify_opt_code', 'mahalik_verify_opt_code');
add_action('wp_ajax_nopriv_mahalik_verify_opt_code', 'mahalik_verify_opt_code');
if (!function_exists('mahalik_verify_opt_code')) {
    /**
     * 
     * Verify user requested OTP code
     */
    function mahalik_verify_opt_code()
    {
        check_ajax_referer('send_opt_email_nonce', 'nonce');

        $code = $_POST['code'];
        $publicKey = $_POST['publicKey'];

        $data = unserialize(base64_decode($publicKey));

        $session = base64_encode(serialize(array(
            'email' => $data['email'],
            'otp'   => $data['otp']
        )));

        if (intval($code) === intval($data['otp'])) {
            $email = sanitize_email($data['email']);
            $user = get_user_by('email', $email);

            if ($user) {
                wp_set_auth_cookie($user->ID);
                echo json_encode(array(
                    'status' => 'success',
                    'loggedIn' => true,
                    'session' => $session
                ));
            } else {
                echo json_encode(array(
                    'status' => 'success',
                    'loggedIn' => false,
                    'email' => $email,
                    'session' => $session
                ));
            }
        } else {
            echo json_encode(array(
                'status' => 'error',
                'message' => __('OTP verification failed. Please try again later.', 'mahalik'),
            ));
        }

        wp_die();
    }
}


add_action('wp_ajax_mahalik_register_user', 'mahalik_register_user');
add_action('wp_ajax_nopriv_mahalik_register_user', 'mahalik_register_user');
if (!function_exists('mahalik_register_user')) {
    /**
     * 
     * Verify user Register
     */
    function mahalik_register_user()
    {
        check_ajax_referer('send_opt_email_nonce', 'nonce');

        $firstName = sanitize_text_field($_POST['firstName']);
        $lastName = sanitize_text_field($_POST['lastName']);
        $phoneNumber = wc_sanitize_phone_number($_POST['phone']);
        $session = $_POST['session'];

        $data = unserialize(base64_decode($session));

        $email = $data['email'];

        $emailParts = explode('@', $email);
        // The username is the first element of the array
        $username = $emailParts[0];

        // Check if the user with the specified email already exists
        if (email_exists($email)) {
            echo json_encode(array(
                'status' => 'error',
                'message' => __('Unauthorized request.', 'mahalik'),
            ));
            die();
        }

        // Create a new user
        $user_id = wp_create_user($username, wp_generate_password(), $email);

        // Add first name, last name, and phone number
        if (!is_wp_error($user_id)) {
            // Optional: If you want to update the user's display name
            $display_name = $firstName . ' ' . $lastName;
            wp_update_user(array(
                'ID' => $user_id,
                'display_name' => $display_name,
                'first_name' => $firstName,
                'last_name' => $lastName,
            ));


            // Optionally, you can also set the user role (e.g., 'customer' for WooCommerce)
            $user = new WP_User($user_id);
            $user->set_role('customer');

            // Update user meta
            update_user_meta($user_id, 'first_name', $firstName);
            update_user_meta($user_id, 'last_name', $lastName);
            update_user_meta($user_id, 'billing_phone', $phoneNumber);



            wp_set_auth_cookie($user->ID);
            echo json_encode(array(
                'status' => 'success',
                'loggedIn' => true
            ));
        } else {

            echo json_encode(array(
                'status' => 'error',
                'message' => __('Unable create a user, Please try again later.', 'mahalik'),
            ));
        }

        wp_die();
    }
}
