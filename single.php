<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kato
 */

get_header();
global $post;
?>



<!-- BANNER -->
<div class="section subbanner relative h-[550px] bg-[url(https://demo2.wpopal.com/rehomes/wp-content/uploads/2019/11/background-contact.jpg)] bg-no-reapeat bg-center bg-cover" >
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center break-all w-full px-[10px]">
        <h1 class="font-semibold lg:text-3xl text-[18px] text-white font"><?php the_title() ?></h1>
        <p class="italic text-[#ced4da] lg:text-normal text-[14px]  mt-2"><?php get_breadcrumb()?></p>
    </div>
</div>

<div class="max-w-[1320px] w-full m-auto">
    <div class="my-[70px] flex justify-between flex-wrap ">
        <div class="lg:w-[65%] w-full p-[32px] break-all">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php
get_footer();
