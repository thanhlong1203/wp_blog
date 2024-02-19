<?php
    $the_query = new WP_Query(array(
        'posts_per_page'      => 5,
        'post_type'		      => 'projects',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>
<?php if( $the_query->have_posts() ): ?>
    <section>
        <div class="max-w-[1320px] m-auto flex items-end justify-between mb-[50px] w-[95%] lg:w-full">
            <div class="">
                <div class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-offse>    
                    <div class="custom-title-yellow text-[18px]">DỰ ÁN XUẤT SẮC</div>
                    <h3 class="custom-title-blue 2xl:text-[35px] text-[24px]">Trải rộng trên khắp Việt Nam</h3>
                </div>
            </div>
            <div class="text-[#bda588] wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offse><button><a href="http://vntinvestgroup.com/duan/" class="underline underline-offset-4">Xem tất cả</a></button></div>
        </div>
        <div class="max-w-[1320px] m-auto grid lg:grid-cols-3 grid-cols-1 grid-row-2 gap-8 mb-[50px] w-[95%] lg:w-full list-project text-[#bda588] wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s" data-wow-offse>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <a href="<?php the_permalink() ?>" class="col-span-1 mb-[30px] group rounded-sm relative overflow-hidden min-h-[330px] before:absolute before:inset-0 before:z-[1] before:block before:bg-[#173e62] before:opacity-0 before:content-[''] before:bg-[#173e62] before:opacity-[0.5]">
                    <div class="p-[10px] rounded-sm">
                        <div class="absolute top-0 left-0 right-0 bottom-0 w-full transition-all group-hover:scale-105 bg-center bg-cover" style="background-image: url(<?php echo get_image_featured_path(get_the_ID()); ?>)"></div>
                        <div class="text-white absolute bottom-9 left-8 font-semibold z-[10]">
                            <h3 class="text-2xl  text-white font w-[70%]"><?php the_title()?></h3>
                        </div>
                        <div class="text-white absolute bottom-5 right-8 text-[70px] font-semibold z-[10] opacity-30 group-hover:opacity-100 transition-[0.5s] font" ></div>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
