<?php

namespace Phoenixdigi\App\Structure;

/**
 * Registers `design_cat` custom taxonomy.
 *
 * @return void
 */
function register_design_cat_taxonomy() {
    register_taxonomy( 'design_cat', 'furniture_design', [
    	'rewrite' => [
			'slug'         => 'danh-muc-thiet-ke',
			'with_front'   => true,
			'hierarchical' => true,
		],
		'hierarchical' => true,
		'public'       => true,
		'show_in_rest' => true,
		'labels'       => [
			'name'              => _x( 'Danh mục thiết kế', 'atz', 'atz' ),
			'singular_name'     => _x( 'Danh mục thiết kế', 'atz', 'atz' ),
			'search_items'      => __( 'Tìm Danh mục', 'atz' ),
			'all_items'         => __( 'Tất cả Danh mục', 'atz' ),
			'parent_item'       => __( 'Danh mục cha', 'atz' ),
			'parent_item_colon' => __( 'Danh mục cha:', 'atz' ),
			'edit_item'         => __( 'Sửa', 'atz' ),
			'update_item'       => __( 'Cập nhật', 'atz' ),
			'add_new_item'      => __( 'Thêm', 'atz' ),
			'new_item_name'     => __( 'Danh mục mới', 'atz' ),
			'menu_name'         => __( 'Danh mục thiết kế', 'atz' ),
		],
	]);
}
//add_action( 'init', 'Phoenixdigi\App\Structure\register_design_cat_taxonomy' );

