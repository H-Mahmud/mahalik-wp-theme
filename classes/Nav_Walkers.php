<?php
if (!class_exists('Mahalik_TopBar_Nav_Walker')) {

    // Custom NavWalker class for top bar menu
    class Mahalik_TopBar_Nav_Walker extends Walker_Nav_Menu
    {
        public function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0)
        {
            // Add 'topnav-link-item' class to the menu link
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'topnav-link-item';

            $output .= '<li id="menu-item-' . $item->ID . '" class="' . esc_attr(implode(' ', $classes)) . '">';

            $output .= '<a href="' . esc_url($item->url) . '" class="topnav-link-item">' . esc_html($item->title) . '</a>';

            $output .= '</li>';
        }
    }
}
