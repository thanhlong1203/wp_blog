<?php
if (!function_exists('akatsuki_enqueue')) {
    function akatsuki_enqueue()
    {
        // font
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet');
        wp_enqueue_style('icon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

        // css
        wp_enqueue_style('main', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('main', 'rtl', 'replace');
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
        wp_enqueue_style('wow-css', 'https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css');
        wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array('main'), _S_VERSION);
        
        // js
        wp_enqueue_script('flowbite-js', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js');
        wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
        wp_deregister_script('jquery');
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);
        wp_enqueue_script('wow-js', 'https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js');

    };
}
add_action('wp_enqueue_scripts', 'akatsuki_enqueue');
