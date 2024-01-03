<div class="list-block post-entry relative h-full transition-shadow duration-500 bg-white border rounded justify-around overflow-hidden flex flex-col">
    <a href="<?php the_permalink(); ?>" class="post-entry__image bg-gray-50 relative overflow-hidden hover:opacity-90 w-full h-40 sm:h-56 bg-border-color flex items-center justify-center">
        <?php the_post_thumbnail('large', array('class' => 'h-full w-full object-cover')); ?>
    </a>
    <div class="flex-1 p-2.5 lg:p-5">
        <div class="mb-2.5 text-gray-500 rounded inline-flex text-sm rtl:space-x-reverse space-x-5">
            <div class="flex items-center">
                <i class="sicon-calendar-date rtl:ml-1 ltr:mr-1"></i>
                <span><?php echo date('M d, Y'); ?></span>
            </div>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="flex items-center hover:text-dark">
                <i class="sicon-user rtl:ml-1 ltr:mr-1"></i>
                <span class=""><?php echo get_the_author_meta('display_name'); ?></span>
            </a>
        </div>
        <?php the_title('<h3 class="post-entry__title text-base font-bold text-gray-800 leading-6 mb-2.5">
            <a href="' . get_the_permalink() . '">', '</a></h3>'); ?>
        <p class="text-sm text-gray-500 leading-6 mb-2.5"><?php the_excerpt(); ?></p>
    </div>
</div>