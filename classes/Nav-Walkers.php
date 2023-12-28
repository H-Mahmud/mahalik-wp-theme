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

if (!class_exists('Mahalik_Main_Nav_Walker')) {

    // Custom NavWalker class for Main Menu
    class Mahalik_Main_Nav_Walker extends Walker_Nav_Menu
    {

        function start_lvl(&$output, $depth = 0, $args = null)
        {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<div class=\"mobile-collapsible sub-menu lg:w-56\"><ul class=\"\">\n";
        }

        function end_lvl(&$output, $depth = 0, $args = null)
        {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</ul></div>\n";
        }

        function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0)
        {
            $indent = ($depth) ? str_repeat("\t", $depth) : '';
            $classes = empty($item->classes) ? array() : (array) $item->classes;

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

            $rootClass = !$depth ? 'root-level ' : '';



            // Check if 'menu-item-has-children' exists in the string
            if (strpos($class_names, 'menu-item-has-children') !== false && !$depth) {
                $rootClass .= 'has-children slide-toggler mobile-accordion';
            } elseif (strpos($class_names, 'menu-item-has-children') !== false) {
                $rootClass .= 'relative has-children slide-toggler mobile-accordion';
            }


            $output .= $indent . '<li id="menu-item-' . $item->ID . '" class="' . $rootClass . ' ' . esc_attr($class_names) . '">';

            $atts = array();
            $atts['title']  = !empty($item->title)  ? $item->title : '';
            $atts['target'] = !empty($item->target) ? $item->target : '';
            $atts['rel']    = !empty($item->xfn)    ? $item->xfn    : '';
            $atts['href']   = !empty($item->url)    ? $item->url    : '';

            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . '<span>' . apply_filters('the_title', $item->title, $item->ID) . '</span>' . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }

        function end_el(&$output, $item, $depth = 0, $args = null)
        {
            $output .= "</li>\n";
        }
    }
}
