<?php $user = wp_get_current_user(); ?>
<div show-header="" class="hydrated">
    <div class="s-user-menu-wrapper">
        <div class="s-user-menu-trigger-slot" id="trigger-slot">
            <div class="s-user-menu-trigger">
                <div class="s-user-menu-avatar-wrap">
                    <img class="s-user-menu-trigger-avatar" src="<?php echo get_theme_file_uri(); ?>/assets/images/avatar_male.webp" alt="<?php echo $user->display_name; ?>">
                </div>
                <div class="s-user-menu-trigger-content">
                    <span class="s-user-menu-trigger-hello">
                        <?php _e('Welcome', 'mahalik'); ?>
                    </span>
                    <p class="s-user-menu-trigger-name">
                        <?php echo $user->display_name; ?>
                    </p>
                </div>
                <i class="s-user-menu-trigger-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path d="M9.875 11.104l6.125 6.125 6.125-6.125 1.875 1.875-8 8-8-8z"></path>
                    </svg>
                </i>

            </div>
        </div>

        <div class="s-user-menu-toggler">
            <div class="s-user-menu-dropdown">
                <div class="s-user-menu-dropdown-header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/avatar_male.webp" alt="Mahmudul Hasan">
                    <div class="s-user-menu-dropdown-header-content">
                        <span>
                            <?php _e('Welcome', 'mahalik'); ?>
                        </span>
                        <p>
                            <?php echo $user->display_name; ?>
                        </p>
                    </div>
                    <button class="s-user-menu-dropdown-header-close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path d="M17.885 16l7.057-7.057c0.521-0.521 0.521-1.364 0-1.885s-1.364-0.521-1.885 0l-7.057 7.057-7.057-7.057c-0.521-0.521-1.364-0.521-1.885 0s-0.521 1.364 0 1.885l7.057 7.057-7.057 7.057c-0.521 0.521-0.521 1.364 0 1.885 0.26 0.26 0.601 0.391 0.943 0.391s0.683-0.131 0.943-0.391l7.057-7.057 7.057 7.057c0.26 0.26 0.601 0.391 0.943 0.391s0.683-0.131 0.943-0.391c0.521-0.521 0.521-1.364 0-1.885z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="s-user-menu-dropdown-list">
                    <li class="s-user-menu-dropdown-item">
                        <a href="<?php echo home_url('my-account/orders/'); ?>">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M28 1.333h-24c-2.205 0-4 1.795-4 4v5.333c0 0.736 0.597 1.333 1.333 1.333v14.667c0 2.205 1.795 4 4 4h21.333c2.205 0 4-1.795 4-4v-14.667c0.736 0 1.333-0.597 1.333-1.333v-5.333c0-2.205-1.795-4-4-4zM28 26.667c0 0.735-0.599 1.333-1.333 1.333h-21.333c-0.735 0-1.333-0.599-1.333-1.333v-14.667h5.333v2.667c0 1.471 1.196 2.667 2.667 2.667h8c1.471 0 2.667-1.196 2.667-2.667v-2.667h5.333zM12 14.667v-2.667h8v2.667zM29.333 9.333h-26.667v-4c0-0.735 0.599-1.333 1.333-1.333h24c0.735 0 1.333 0.599 1.333 1.333z"></path>
                                </svg>
                            </i>
                            <span class="s-user-menu-dropdown-item-title">
                                <?php _e('Requests', 'mahalik'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="s-user-menu-dropdown-item">
                        <a href="<?php echo home_url('wishlist'); ?>">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M31.819 12.077c-0.367-0.883-1.209-1.411-2.259-1.411h-8.437l-2.681-8.871c-0.347-1.075-1.329-1.796-2.443-1.796s-2.096 0.721-2.447 1.805l-2.788 8.861h-8.275c-1.076 0-1.939 0.533-2.308 1.427-0.375 0.904-0.159 2.012 0.525 2.693 0.044 0.044 0.092 0.085 0.141 0.124l6.811 5.101-2.773 8.567c-0.344 1.063 0.019 2.228 0.899 2.899 0.459 0.351 1.001 0.527 1.544 0.527 0.528 0 1.056-0.165 1.511-0.499l7.159-5.267 7.161 5.268c0.896 0.659 2.168 0.645 3.051-0.028 0.884-0.671 1.245-1.836 0.901-2.9l-2.773-8.567 6.811-5.101c0.051-0.037 0.099-0.080 0.143-0.124 0.687-0.687 0.904-1.8 0.528-2.709zM21.976 18.448c-0.456 0.343-0.644 0.936-0.469 1.477l3.044 9.293-7.763-5.711c-0.235-0.173-0.513-0.259-0.791-0.259s-0.556 0.085-0.791 0.259l-7.713 5.676 2.997-9.257c0.175-0.541-0.013-1.136-0.469-1.477l-6.829-5.116h8.551c0.583 0 1.097-0.377 1.272-0.933l2.981-9.479 2.861 9.465c0.169 0.561 0.688 0.947 1.276 0.947h8.672z"></path>
                                </svg>
                            </i>
                            <span class="s-user-menu-dropdown-item-title">
                                <?php _e('Wishes', 'mahalik'); ?>
                            </span>
                        </a>
                    </li>
                    <li class="s-user-menu-dropdown-item">
                        <a href="<?php echo home_url('my-account'); ?>">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M16 22.964c-4.525 0-8.447 1.713-9.993 4.365-0.371 0.636-0.156 1.452 0.48 1.823s1.453 0.156 1.823-0.48c0.855-1.465 3.624-3.041 7.689-3.041s6.835 1.576 7.689 3.041c0.249 0.424 0.696 0.661 1.155 0.661 0.228 0 0.459-0.059 0.669-0.181 0.637-0.371 0.852-1.187 0.48-1.823-1.545-2.652-5.467-4.365-9.992-4.365zM22.667 13.631c0-3.676-2.991-6.667-6.667-6.667s-6.667 2.991-6.667 6.667 2.991 6.667 6.667 6.667 6.667-2.992 6.667-6.667zM12 13.631c0-2.205 1.795-4 4-4s4 1.795 4 4-1.795 4-4 4-4-1.795-4-4zM16 0.297c-8.823 0-16 7.177-16 16 0 2.941 0.821 5.831 2.373 8.357 0.252 0.411 0.689 0.636 1.137 0.636 0.239 0 0.479-0.064 0.696-0.197 0.628-0.385 0.824-1.207 0.439-1.833-1.295-2.108-1.979-4.516-1.979-6.963 0-7.352 5.981-13.333 13.333-13.333s13.333 5.981 13.333 13.333c0 2.448-0.684 4.856-1.979 6.961-0.385 0.628-0.189 1.448 0.437 1.835 0.627 0.384 1.448 0.189 1.835-0.437 1.553-2.527 2.373-5.416 2.373-8.359 0-8.823-7.177-16-16-16z"></path>
                                </svg>
                            </i>
                            <span class="s-user-menu-dropdown-item-title"><?php _e('Arithmetic', 'mahalik'); ?></span>
                        </a>
                    </li>
                    <li class="s-user-menu-dropdown-item s-user-menu-dropdown-item-logout">
                        <a href="<?php echo wp_logout_url(home_url()); ?>">
                            <i>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <path d="M16 26.667h-9.333c-0.736 0-1.333-0.597-1.333-1.333v-18.667c0-0.736 0.597-1.333 1.333-1.333h9.333c0.737 0 1.333-0.596 1.333-1.333s-0.596-1.333-1.333-1.333h-9.333c-2.205 0-4 1.795-4 4v18.667c0 2.205 1.795 4 4 4h9.333c0.737 0 1.333-0.596 1.333-1.333s-0.596-1.333-1.333-1.333zM29.231 15.491c-0.068-0.164-0.167-0.312-0.289-0.436l-5.332-5.332c-0.521-0.521-1.364-0.521-1.885 0s-0.521 1.364 0 1.885l3.057 3.059h-12.781c-0.737 0-1.333 0.596-1.333 1.333s0.596 1.333 1.333 1.333h12.781l-3.057 3.057c-0.521 0.521-0.521 1.364 0 1.885 0.26 0.26 0.601 0.391 0.943 0.391s0.683-0.131 0.943-0.391l5.332-5.332c0.124-0.123 0.221-0.271 0.289-0.435 0.135-0.325 0.135-0.693 0-1.019z"></path>
                                </svg>
                            </i>
                            <span class="s-user-menu-dropdown-item-title"><?php _e('sign out', 'mahalik'); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>