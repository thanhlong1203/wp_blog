<?php
    $the_query = new WP_Query(array(
        'posts_per_page'      => 3,
        'post_type'		      => 'heroslider',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>
<?php if( $the_query->have_posts() ): ?>
<section>
    <div class="relative">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div
                    style="background-image: url(<?php echo get_image_featured_path(get_the_ID()); ?>)"
                    class="swiper-slide  overflow-hidden bg-center bg-cover bg-no-repeat relative h-screen ">
                    <div
                        class=" w-[95%] lg:w-full lg:text-left text-center m-auto top-1/2 -translate-y-1/2 lg:left-[15%] absolute left-1/2 lg:translate-x-0 -translate-x-1/2">
                        <h1 class="text-white font 2xl:text-[50px] text-[27px] lg:w-1/2 font-bold mb-8"><?php the_title()?></h1>
                        
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="absolute z-[100] top-1/2 left-[5%] text-white -translate-y-1/2 hidden lg:block">
            <div class="felx items-center">
                <div class="w-[1px] bg-white h-[250px] m-auto"></div>
                <br />
                <div><i class="fab fa-facebook-f"></i></div>
                <br />
                <div><i class="fab fa-youtube"></i></div>
                <br />
                <div><i class="fab fa-twitter"></i></div>
            </div>
        </div>
        <div class="absolute z-[100] text-white bottom-[5%] right-[5%]">
            <div class="flex items-center">
                <div class="swiper-pagination2"></div>
                <div class="w-[100px] bg-white h-[1px] m-auto"></div>
                <div></div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<script>
    var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination2",
        clickable: true,
        renderBullet: function (index, className) {
        return '<span class="' + className + '">'+ '0' + (index + 1) + "</span>";
        }
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    speed: 3000
    });
</script>