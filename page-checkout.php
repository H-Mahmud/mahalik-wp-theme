<?php get_header('checkout'); ?>

<style>
    :root {
        --color-primary: #821b52;
        --main-color: #8f285f;
        --color-primary-l: #ffa7de;
        --color-primary-t: #b54e85;
        --color-primary-d: #750e45;
        ;
        --color-text-reverse: #0f0000;
        --color-title: #444;
        --color-primary-tt: #0f0000
    }
</style>


<div id="app" class="container container--margined">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();

        endwhile;
    else :
        echo '<h3>' . __('No content found') . '</h3>';
    endif;
    ?>
</div>

<?php get_footer('checkout'); ?>