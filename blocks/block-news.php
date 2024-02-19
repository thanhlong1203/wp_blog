<?php
    $the_query = new WP_Query(array(
        'post_type'		      => 'new',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>

<?php if( $the_query->have_posts() ): ?>
    <section>
        <div class="max-w-[1320px] m-auto my-[50px] w-[95%] xl:w-full">
            <div class="text-center mb-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-offse>
                <div class="text-[#bda588] text-[18px] font">TIN TỨC</div>
                <h3 class="2xl:text-[35px] text-[24px] text-[#173e62] font-semibold font">Tin tức & Sự kiện</h3>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offse>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div
                            class="h-[250px] bg-cover bg-center bg-norepeat" style="background-image: url(<?php echo get_image_featured_path(get_the_ID()); ?>)">
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