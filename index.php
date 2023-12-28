<?php get_header(); ?>

<div class="container page-container mb-8 sm:mb-24">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();

        endwhile;
    else :
        echo '<h3>' . __('No content found') . '</h3>';
    endif;
    ?>
</div>

<?php get_footer(); ?>