<?php get_header(); ?>

<div class="container page-container mb-8 sm:mb-24">
    <div class="breadcrumbs--blog flex justify-end">
        <nav class="breadcrumbs w-full py-5 breadcrumbs--">
            <ol class="flex items-center flex-wrap text-sm">
                <li class="whitespace-nowrap"><a href="<?php echo home_url(); ?>"><?php _e('Home', 'mahalik'); ?></a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">/</span></li>
                <li><span><?php the_title(); ?></span></li>
            </ol>
        </nav>
        <?php
        /* Mobile Filter
        <div class="dropdown-toggler cat-filter lg:hidden">
            <button aria-label="Categories Trigger" type="button" class="dropdown__trigger rtl:space-x-reverse space-x-1.5 flex text-sm text-primary">
                <i class="sicon-filter text-xs pointer-events-none"></i>
                <span class="pointer-events-none">التصنيفات</span>
            </button>
            <div class="dropdown__menu dropdown__menu--filter" role="menu">
                <div class="flex items-center p-4 border-b mb-1 lg:hidden relative">
                    <h2 class="font-bold">التصنيفات</h2>
                    <button class="dropdown__close h-12 w-12 text-red-500 text-lg rounded-full absolute top-2 rtl:left-1 ltr:right-1 z-50">
                        <i class="sicon-cancel pointer-events-none"></i>
                    </button>
                </div>
                <ul class="pb-4 lg:pb-2 py-2 px-2 lg:px-0 space-y-px">
                    <li _msthidden="1">
                        <a class="p-2.5 block text-sm hover:text-primary" href="https://lamsah.co/ar/blog/عام/c-1259944362">
                            <span class="rtl:ml-auto ltr:mr-auto" >عام</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> */
        ?>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-8 gap-2.5 lg:gap-8">
        <nav aria-label="Sidebar" class="hidden self-start lg:block lg:sticky shrink-0 top-24 col-span-2" id="filters-menu">
            <h2 class="font-bold mb-3"><?php _e('classifications', 'mahalik'); ?></h2>

            <ul>
                <?php
                $years = wp_get_archives(array(
                    'type' => 'yearly',
                    'echo' => 0
                ));
                $years_array = explode("\n", strip_tags($years));

                foreach ($years_array as $year) {
                    $year = intval($year);
                    if (!$year) continue;
                ?>
                    <li>
                        <a class="py-3 block text-sm hover:text-primary" href="<?php echo get_year_link($year); ?>"> <?php echo $year; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="main-content lg:col-span-6">
            <div class="grid md:grid-cols-2 gap-2.5 lg:gap-8 hydrated">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        get_template_part('template-parts/post/content', 'content');
                    }
                } else {
                    echo '<h1>No post found</h1>';
                } ?>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>