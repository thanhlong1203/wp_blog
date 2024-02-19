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
?>

<?php
kato_home_page_banner();
?>
<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content', 'page'); ?>
    <?php endwhile; ?>
    <div>
        <?php echo do_shortcode('[searchandfilter fields="search,genre"]'); ?>
    </div>
    <div class="w-full">
        <?php
        $query = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'movie',
        ));
        if ($query->have_posts()) {
        ?>
            <div class="grid grid-cols-2 gap-4">

                <?php
                while ($query->have_posts()) {
                    $query->the_post();

                ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class=" mt-8">
                            <p class="text-gray-800">
                                Tên: <?php echo the_field('ten') ?>
                            </p>
                            <img src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="">

                            <p class="text-gray-800">
                                Thể loại: <?php echo the_field('the_loai') ?>
                            </p>
                            <p class="text-gray-800">
                                Điểm: <?php echo the_field('diem') ?>
                            </p>
                            <p class="text-gray-800">
                                Nội dung: <br> <?php echo the_field('noi_dung') ?>
                            </p>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>

            <div class="pagination-project">
                <?php
                wp_reset_postdata();
                pmc_pagination($query);
                ?>
            </div>
        <?php
        } else {
            echo 'No Results Found';
        }
        ?>
    </div>
</main>
</div>
<?php
get_footer();
