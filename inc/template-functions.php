<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Kato
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kato_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'kato_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function kato_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'kato_pingback_header' );


/**
 * Filter the output of Yoast breadcrumbs so each item is an <li> with schema markup
 * @param $link_output
 * @param $link
 *
 * @return string
 */
function kato_filter_yoast_breadcrumb_items($link_output, $link)
{

    $new_link_output = '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
    $new_link_output .= '<a href="' . $link['url'] . '" itemprop="url">' . $link['text'] . '</a>';
    $new_link_output .= '</li>';

    return $new_link_output;
}

add_filter('wpseo_breadcrumb_single_link', 'kato_filter_yoast_breadcrumb_items', 10, 2);


/**
 * Filter the output of Yoast breadcrumbs to remove <span> tags added by the plugin
 * @param $output
 *
 * @return mixed
 */
function kato_filter_yoast_breadcrumb_output($output)
{

    $from = '<span>';
    $to = '</span>';
    $output = str_replace($from, $to, $output);

    return $output;
}

add_filter('wpseo_breadcrumb_output', 'kato_filter_yoast_breadcrumb_output');


/**
 * Shortcut function to output Yoast breadcrumbs
 * wrapped in the appropriate markup
 */
function kato_breadcrumbs()
{
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<ol class="breadcrumb">', '</ol>');
    }
}

/**
 * Get post featured image path
 * @param null $post_id
 * @param bool $resize
 * @param string $width
 * @param string $height
 * @return mixed|string
 */
function get_image_featured_path ($post_id = null, $resize = false, $width = '', $height = '') {
    if ($post_id == null) {
        global $post;
        $post_id = $post->ID;
    }

    if (has_post_thumbnail( $post_id )) {
        //$theImageSrc = get_post_meta($post_id, 'Image', true);
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
        $theImageSrc = $image[0];

        global $blog_id;
        if (isset($blog_id) && $blog_id > 0) {
            $imageParts = explode('/files/', $theImageSrc);
            if (isset($imageParts[1])) {
                $theImageSrc = WP_CONTENT_URL . '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
            }
        }

        if ($resize && $width && $height) {
            return get_template_directory_uri().'/timthumb.php?src='.$theImageSrc.'&amp;w='.$width.'&amp;h='.$height.'&amp;zc=1';
        }
        return $theImageSrc;
    }

    return 'https://via.placeholder.com/800x500&text=No+Image+Available';
}

class Kato_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

        // Check our custom has_children property.here is the points
        if(in_array('menu-item-has-children', $classes ) && $depth == 0) {
            // Your Code
            $class_names = ' class="dropdown ' . esc_attr( $class_names ) . '"';
        } else {
            $class_names = ' class="' . esc_attr( $class_names ) . '"';
        }



        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        // Check our custom has_children property.here is the points
        if(in_array('menu-item-has-children', $classes ) && $depth == 0) {
            $attributes .= ' class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"';
        }

        $item_output = $args->before;

        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        // Check our custom has_children property.here is the points
        if(in_array('menu-item-has-children', $classes ) && $depth == 0) {
            $item_output .= ' <span class="caret"></span>';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );


    }
}

function kato_home_page_banner() {

    // start by setting up the query
    $query = new WP_Query( array(
        'post_type' => 'banner',
    ));

    // now check if the query has posts and if so, output their content in a banner-box div
    if ( $query->have_posts() ) { ?>
        <div id="slides" class="section banner">
            <ul class="slides-container">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                $image = get_field('banner_image');
                ?>
                <li>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title() ?>">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="wrap-caption">
                                <div class="caption-heading">
                                    <div class="color1">
                                        <span><?php the_field('caption_1'); ?></span>
                                    </div>
                                    <div class="color2">
                                        <span><?php the_field('caption_2'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
    <?php }
    wp_reset_postdata();

}



function kato_home_page_testimonials() {

    // start by setting up the query
    $query = new WP_Query( array(
        'post_type' => 'testimonial',
    ));

    // now check if the query has posts and if so, output their content in a banner-box div
    if ( $query->have_posts() ) { ?>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div id="owl-testimony">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php
                    $image = get_field('avatar');
                    ?>
                    <div class="item">
                        <div class="item-testimony">
                            <div class="quote-box">
                                <blockquote class="quote"><?php the_content(); ?></blockquote>
                            </div>
                            <div class="people">
                                <img class="img-rounded user-pic" src="<?php echo esc_url($image['url']); ?>" alt="">
                                <p class="details"><?php the_field('name'); ?> <span><?php the_field('job_title'); ?></span></p>
                            </div>
                            <div class="icon"><span class="fa fa-quote-left"></span></div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php }
    wp_reset_postdata();

}