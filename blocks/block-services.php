<?php
    $the_query = new WP_Query(array(
        'post_type'		      => 'services',
        'ignore_sticky_posts' => 1,
        //'nopaging'            => true,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
    ));
?>

<?php if( $the_query->have_posts() ): ?>
<div class="px-4 max-w-[1320px] m-auto my-[50px] w-[95%] xl:w-full">
	<div class="mt-[150px] mb-[60px]">
		<h2 class="text-center text-4xl mb-[50px] text-[#173e62] font">
			<?php _e('NGHIỆP VỤ', 'kato')?>
		</h2>
		<p class="text-center text-base opacity-80">
			<?php _e('VNT INVEST GROUP giúp các doanh nghiệp, nhà đầu tư tối ưu hóa hiệu quả và 
			chi phí hoạt động của danh mục bất động sản của mình. <br />
			Chúng tôi cung cấp một loạt các dịch vụ bất động sản chất lượng cao, chuyên sâu 
			đáng tin cậy' , 'kato') ?>
		</p>
	</div>
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-5 lg:gap-7 mb-[110px]">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="flex flex-col group shadow-xl rounded-lg transition-[0.5s]">
				<div class="relative">
					<div
                    style="background-image: url(<?php echo get_image_featured_path(get_the_ID()); ?>)"
                    class="swiper-slide  overflow-hidden bg-center bg-cover bg-no-repeat relative h-[250px] ">
                    
                </div>
					<div class="bg-[#173e62] w-full h-full opacity-0 absolute top-0 group-hover:opacity-60 transition-[0.5s]"></div>
					<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:block hidden transition-[0.5s]">
						<img src="http://vntinvestgroup.com/wp-content/uploads/2023/10/logo.png" alt="" />
					</div>
				</div>
				<div class="p-[30px] py-[40px]">
					<span class="text-[#bda588] font-bold text-center block mb-1">
					2023
					</span>
					<h5 class="block text-center text-[#173e62] font-bold text-xl mb-3 font">
					<?php the_title()?>
					</h5>
					<div class="text-center mb-5 text-[#66717a] line-clamp-2 ">
					<?php the_excerpt()?>
					</div>
				</div>
			</a>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
