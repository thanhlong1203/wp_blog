<?php

namespace Phoenixdigi\App\Structure;

/**
 * Registers the widget areas.
 *
 * @return void
 */
function register_widget_areas() {
	register_sidebar( array(
		'name'          => esc_html__( 'Thanh đầu trang', 'atz' ),
		'id'            => 'topbar',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị nội dung đầu trang.', 'atz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Cột bên', 'atz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị cột bên cạnh nội dung.', 'atz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebars( 4, array(
		'name'          => esc_html__( 'Chân trang cột %s', 'atz' ),
		'id'            => 'footer-column',
		'description'   => esc_html__( 'Thêm tiện ích vào đây để hiển thị các cột chân trang.', 'atz' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => 'Sidebar Shop',
		'id'            => 'sidebar-shop',
		'before_widget' => '<section id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
}
//add_action( 'widgets_init', 'Phoenixdigi\App\Structure\register_widget_areas' );
