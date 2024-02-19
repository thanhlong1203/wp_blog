<?php
    $the_query = new WP_Query(array(
        'post_type'		      => 'partner',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>
<?php if( $the_query->have_posts() ): ?>
<section class="bg-[url(https://demo2.wpopal.com/rehomes/wp-content/uploads/2019/10/bg1-h1.jpg)] bg-center bg-no-repeat bg-cover py-[140px]">
    <div class="text-center mb-[70px] wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-offse>
        <div class="custom-title-yellow text-[18px] mb-4">ĐỐI TÁC</div>
        <h3 class="font text-white 2xl:text-[35px] text-[24px] lg:w-1/2 lg:m-auto">Mối quan hệ đối tác chiến lược dựa trên sự tin tưởng, chia sẻ và cùng nhau phát triển.</h3>
    </div>
    <div class="max-w-[1320px] m-auto wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s" data-wow-offse>
        <div class=" swiper mySwiper">
        <div class="swiper-wrapper items-center">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="text-center swiper-slide p-[10px] h-[150px] rounded-md">
                    <img class="strong-img" src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt=""/>       
                </div>
            <?php endwhile; ?>
        </div>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 50,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    speed: 2000
    });
</script>