<?php
/**
 * The template for displaying project pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kato
 */

get_header();
?>
<div class="section subbanner relative h-[550px] bg-[url(https://demo2.wpopal.com/rehomes/wp-content/uploads/2019/11/background-contact.jpg)] bg-no-reapeat bg-center bg-cover" >
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center break-all w-full px-[10px]">
        <h1 class="font-semibold lg:text-3xl text-[18px] text-white font"><?php the_title() ?></h1>
        <p class="italic text-[#ced4da] lg:text-normal text-[14px]  mt-2"><?php get_breadcrumb()?></p>
    </div>
</div>
<section>
    <div class="max-w-[1320px] m-auto my-[50px] w-[95%] xl:w-full">
        <div class="">
            <div class="filter-bar mb-[120px]">
                <?php dynamic_sidebar('show-filter-bar') ?>
            </div>

            <?php dynamic_sidebar('show-result-filter') ?>
        </div>
    </div>
</section>
<div>
    
</div>


<?php
get_footer();