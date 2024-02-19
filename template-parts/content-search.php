<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kato
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="w-[95%] xl:w-full m-auto rounded-sm overflow-hidden bg-white">
		<a href="<?php the_permalink(); ?>">
			<div class="w-full bg-no-repeat bg-cover h-[200px]" style="background-image: url(<?php echo get_image_featured_path(get_the_ID());?>)">
			</div>
			<div class="p-[21px]">
				<h5 class="text-[14px] xl:text-[18px] font-semibold mb-3 truncate">
					<?php the_title() ?>
				</h5>
				<p class="mb-2 text-[14px] text-[#1665f8]">
					<?php the_time( 'd - Y M' ) ?>
				</p>
				<p class="line-clamp-3">
					<?php the_excerpt()?>
				</p>
			</div>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
