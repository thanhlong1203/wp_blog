<?php
/**
 * Kato Widget Areas
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Kato
 */

function kato_widgets_init(){
    $sidebars = array(
        'sidebar'   => array(
            'name'        => __( 'Sidebar', 'kato' ),
            'id'          => 'sidebar-1',
            'description' => __( 'Default Sidebar', 'kato' ),
        ),
        'logo' => array(
            'name'        => __( 'Logo', 'kato' ),
            'id'          => 'Logo',
            'description' => __( 'Default Logo', 'kato' ),
        ),
        'Logo-bottom' => array(
            'name'        => __( 'Logo-bottom', 'kato' ),
            'id'          => 'featured-area',
            'description' => __( 'Add "Blossom: Image Text" widget for featured area section.', 'kato' ),
        ),
        'footer-one'=> array(
            'name'        => __( 'Footer One', 'kato' ),
            'id'          => 'footer-one',
            'description' => __( 'Add footer one widgets here.', 'kato' ),
        ),
        'footer-two'=> array(
            'name'        => __( 'Footer Two', 'kato' ),
            'id'          => 'footer-two',
            'description' => __( 'Add footer two widgets here.', 'kato' ),
        ),
        'footer-three'=> array(
            'name'        => __( 'Footer Three', 'kato' ),
            'id'          => 'footer-three',
            'description' => __( 'Add footer three widgets here.', 'kato' ),
        ),
        'hotline'=> array(
            'name'        => __( 'hotline', 'kato' ),
            'id'          => 'hotline',
            'description' => __( 'Add hotline three widgets here.', 'kato' ),
        ),
        'email'=> array(
            'name'        => __( 'email', 'kato' ),
            'id'          => 'email',
            'description' => __( 'Add hotline three widgets here.', 'kato' ),
        ),
        'Show-filter-bar'=> array(
            'name'        => __( 'Show-filter-bar', 'kato' ),
            'id'          => 'show-filter-bar',
            'description' => __( 'Add hotline three widgets here.', 'kato' ),
        ),
        'Show-result-filter'=> array(
            'name'        => __( 'Show-result-filter', 'kato' ),
            'id'          => 'show-result-filter',
            'description' => __( 'Add Show-result-filter ', 'kato' ),
        ),
        'mobile-logo'=> array(
            'name'        => __( 'mobile-logo', 'kato' ),
            'id'          => 'mobile-logo',
            'description' => __( 'Add mobile-logo ', 'kato' ),  
        ),
        'contact-image'=> array(
            'name'        => __( 'contact-image', 'kato' ),
            'id'          => 'contact-image',
            'description' => __( 'Add contact-image ', 'kato' ),
        ),
        'bottom-footer-text-left'=> array(
            'name'        => __( 'bottom-footer-text-left', 'kato' ),
            'id'          => 'bottom-footer-text-left',
            'description' => __( 'Add bottom-footer-text-left ', 'kato' ),
        ),
        'bottom-footer-text-right'=> array(
            'name'        => __( 'bottom-footer-text-right', 'kato' ),
            'id'          => 'bottom-footer-text-right',
            'description' => __( 'Add bottom-footer-text-right ', 'kato' ),
        ),
        'show-menu-language'=> array(
            'name'        => __( 'show-menu-language', 'kato' ),
            'id'          => 'show-menu-language',
            'description' => __( 'show-menu-language ', 'kato' ),
        ), 
        'place-footer'=> array(
            'name'        => __( 'place-footer', 'kato' ),
            'id'          => 'place-footer',
            'description' => __( 'Add place-footer ', 'kato' ),
        )
    );

    foreach( $sidebars as $sidebar ){
        register_sidebar( array(
            'name'          => esc_html( $sidebar['name'] ),
            'id'            => esc_attr( $sidebar['id'] ),
            'description'   => esc_html( $sidebar['description'] ),
            'before_widget' => '<div id="%1$s" class="footer-item %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="footer-title" itemprop="name"><h5>',
            'after_title'   => '</h5></div>',
        ) );
    }
}
add_action( 'widgets_init', 'kato_widgets_init' );