<?php get_header(); ?>
<div class="container page-container">
    <div class="center-between">
        <nav class="breadcrumbs w-full py-5 breadcrumbs--">
            <ol class="flex items-center flex-wrap text-sm">
                <li class="whitespace-nowrap""><a href=" <?php echo home_url(); ?>"><?php _e('Home', 'mahalik'); ?></a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">/</span></li>
                <li class="whitespace-nowrap""><a href=" <?php echo home_url('blog'); ?>"><?php _e('Blog', 'mahalik'); ?></a></li>
                <li><span class="arrow ltr:-scale-x-100 inline-block mx-2">/</span></li>
                <li"><span><?php the_title(); ?></span></li>
            </ol>
        </nav>
    </div>
    <div class="lg:flex items-start">
        <div class="main-content blog-category lg:w-2/3 flex-1 bg-white lg:border lg:p-8 rounded mb-10 md:mb-0">
            <?php the_title('<h1 class="font-bold text-lg lg:text-3xl lg:leading-10 mb-2.5 lg:mb-5">', '</h1>'); ?>
            <div class="mb-2.5 lg:mb-10 text-gray-500 rounded inline-flex text-sm rtl:space-x-reverse space-x-5">
                <div class="flex items-center">
                    <i class="sicon-calendar-date rtl:ml-1 ltr:mr-1"></i>
                    <span class="" _msttexthash="90805" _msthash="92"><?php echo date('M d, Y'); ?></span>
                </div>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="flex items-center hover:text-dark">
                    <i class="sicon-user rtl:ml-1 ltr:mr-1"></i>
                    <span class=""><?php echo get_the_author_meta('display_name'); ?></span>
                </a>
            </div>
            <?php the_post_thumbnail('large', array('class' => 'h-48 lg:h-80 mb-2.5 lg:mb-10 w-full object-cover rounded')); ?>
            <article class="leading-7 text-sm mb-2.5 lg:mb-10">
                <?php the_content(); ?>
            </article>
        </div>
        <aside aria-label="Sidebar" class="sticky shrink-0 top-24 lg:w-1/3 rtl:lg:mr-8 ltr:lg:ml-8">
            <?php dynamic_sidebar('single-post-sidebar'); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>