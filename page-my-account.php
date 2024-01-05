<?php get_header(); ?>
<div class="profile-header gradient-bg">
    <div class="container relative flex justify-between h-full items-center">
        <div class="self-start">
            <nav class="breadcrumbs w-full py-5 breadcrumbs--reverse-color">
                <ol class="flex items-center flex-wrap text-sm">
                    <li class="whitespace-nowrap">
                        <a href="<?php echo home_url(); ?>">
                            <?php _e('Main', 'mahalik'); ?>
                        </a>
                    </li>
                    <li>
                        <span class="arrow ltr:-scale-x-100 inline-block mx-2"> </span>
                    </li>
                    <?php if (!is_page('my-account')) : ?>
                        <li class="whitespace-nowrap">
                            <a href="<?php echo home_url('my-account'); ?>">
                                My Account
                            </a>
                        </li>

                    <?php endif; ?>
                    <li>
                        <span class="arrow ltr:-scale-x-100 inline-block mx-2">

                        </span>
                    </li>
                    <li>
                        <span>
                            <?php the_title(); ?>
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container mb-4 sm:mb-12">
    <div class="flex items-start flex-col lg:flex-row">

        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();

            endwhile;
        else :
            echo '<h3>' . __('No content found') . '</h3>';
        endif;
        ?>

    </div>
</div>





<?php get_footer(); ?>