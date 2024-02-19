<?php

/**
 * Renders a [button] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_button_shortcode( $atts, $content ) {
	$attributes = shortcode_atts([
		'href' => '#'
	], $atts);

	ob_start();

	//template( 'shortcodes/button', compact( 'attributes', 'content' ) );

	return ob_get_clean();
}
//add_shortcode( 'button', 'render_button_shortcode' );

/**
 * Render list services shortcode
 * @param $atts
 */
function render_services_shortcode( $atts ) {
    $attributes = shortcode_atts([
        'ids'            => '',
        'href'           => '#',
        'page'           => '',
    ], $atts);
    $ids = isset( $atts['ids'] ) ? esc_attr($atts['ids']) : '';
    $page = isset( $atts['page'] ) ? esc_attr($atts['page']) : '';

    $query_args = [
        'post_type'           => 'service',
        'ignore_sticky_posts' => 1,
        'post_status'         => 'publish',
        'post_parent'         => 0,
        'orderby'             => 'menu_order',
        'order'               => 'ASC',
        //'posts_per_page'      => $atts['posts_per_page'],
        //'paged'               => $paged
    ];
    if ($ids) {
        $ids = str_replace(' ', '', $ids);
        $ids = explode(',', $ids);
        $query_args['post__in'] = $ids;
        $query_args['orderby'] = 'post__in';
        $query_args['order'] = 'ASC';
    }

    $query = new WP_Query($query_args);
    if ($query->have_posts()) {
        ob_start();

        if ($page == 'home') {
            echo '<div class="row">';
            while ($query->have_posts()) {
                $query->the_post();
                echo get_template_part('template-parts/shortcodes/services_home');
            }
            wp_reset_postdata();
            echo '</div>';
        }
        else {
            echo '<div class="section service"><div class="container"><div class="row"><div class="col-sm-12 col-md-12">';
            while ($query->have_posts()) {
                $query->the_post();
                echo get_template_part('template-parts/shortcodes/services');
            }
            wp_reset_postdata();
            echo '</div></div></div></div>';
        }
    }

    return ob_get_clean();
}

add_shortcode( 'services', 'render_services_shortcode' );