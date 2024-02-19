<?php
/**
 * The template for displaying all pages
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
global $post;
?>

<?php
    $the_query = new WP_Query(array(
        // 'posts_per_page'      => 3,      
        'post_type'		      => 'new',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>
<div class="section subbanner relative h-[550px] bg-[url(https://demo2.wpopal.com/rehomes/wp-content/uploads/2019/11/background-contact.jpg)] bg-no-reapeat bg-center bg-cover" >
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center break-all w-full px-[10px]">
        <h1 class="font-semibold lg:text-3xl text-[18px] text-white font"><?php the_title() ?></h1>
        <p class="italic text-[#ced4da] lg:text-normal text-[14px]  mt-2"><?php get_breadcrumb()?></p>
    </div>
</div>
<?php if( $the_query->have_posts() ): ?>
    <section>
        <div class="max-w-[1320px] m-auto my-[50px] w-[95%] xl:w-full">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div
                            class="h-[250px] bg-cover bg-center bg-norepeat" style="background-image: url(<?php echo get_image_featured_path(get_the_ID()); ?>)">
                        </div>
                        <div class="flex items-center mt-3">
                            <div class="bg-[#bda588] text-white rounded-[5px] px-[8px] py-[2px] uppercase text-[10px] mr-2">categorry 1</div>
                            <div class="bg-[#bda588] text-white rounded-[5px] px-[8px] py-[2px] uppercase text-[10px]">categorry 1</div>
                        </div>
                        <h3 class="text-[#173E62] font-semibold text-xl my-3 hover:text-[#bda588] transition-[0.5s]  font"><?php the_title()?></h3>
                        <p class="text-[#b0b9c1] my-4">By
                            <span class="text-black">Admin</span>
                            ,
                            <?php the_time( 'd / M / Y' ) ?>
                        </p>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
get_footer();