<?php
    $the_query = new WP_Query(array(
        'post_type'		      => 'value',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>

<?php if( $the_query->have_posts() ): ?>
<div class="max-w-[1320px] py-[100px] mx-auto">
        <div class="max-w-[750px] mx-auto text-center">
            <h2 class="text-[40px] text-[#173e62] mb-[45px] font-serif-display font font-semibold">
                <?php _e('Giá trị cốt lõi' , 'kato')?>
            </h2>
            <p class="text-[15px] text-[#66717a] font-light">
                <?php _e('VNT INVEST GROUP hy vọng được trở thành đối tác 
                đáng tin cậy của khách hàng trong những dự án bất 
                động sản tương lai. Chúng tôi không ngừng thúc đẩy 
                để thực hiện sứ mệnh và tầm nhìn của mình, và chúng 
                tôi tin rằng sự hợp tác cùng khách hàng sẽ làm nên 
                những thành công lớn lao trong tương lai.' , 'kato') ?>
            </p>
        </div>
        <div class="mt-[80px] list-aboutus">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class=" flex items-center mb-[60px] justify-between flex-wrap p-4 lg:p-0">
                    <div class="w-full lg:w-1/2">
                        <img class="h-auto"
                            src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="">
                    </div>
                    <div class="lg:px-[50px] px-[10px] max-[1200px]:text-center w-full lg:w-1/2">
                        <span class=" text-[24px] text-[#173e62] font-serif-display ">
                            <?php the_title() ?>
                        </span>
                        <p class="text-[15px] leading-[30px] font-light text-[#66717a]">
                            <?php the_excerpt()?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>


