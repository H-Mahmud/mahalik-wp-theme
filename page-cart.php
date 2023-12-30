<?php get_header(); ?>

<div class="container page-container">
    <nav class="breadcrumbs w-full py-5 breadcrumbs--">
        <ol class="flex items-center flex-wrap text-sm">
            <li class="whitespace-nowrap"><a href="<?php echo home_url(); ?>"><?php _e('shopping basket', 'mahalik'); ?></a></li>
            <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">/</span></li>
            <li><span><?php _e('Main', 'mahalik'); ?></span></li>
        </ol>
    </nav>
    <h1 class="sr-only"><?php the_title(); ?></h1>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>