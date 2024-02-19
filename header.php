<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kato
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="font top-0 z-30  w-full left-1/2 -translate-x-1/2 bg-[#ffff] border">
        <div class="max-w-[1920px] m-auto">
            <div class="navbar w-full h-full flex items-center justify-between m-auto">
                <div class="lg:hidden block text-white text-xl"><i class="fas fa-bars"></i></div>
                <div class="max-w-[150px]"><a href="<?php echo get_home_url() ?>"><?php dynamic_sidebar('Logo') ?></a>
                </div>
                <div class="nav-links leading-[70px] flex items-center ">
                    <div class="sidebar-logo lg:hidden block text-black">
                        <div class="w-1/2"><?php dynamic_sidebar('Logo') ?></div>
                        <div class="text-2xl"><i class="fas fa-times"></i></div>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'container' => 'false',
                            'menu_id' => 'header-menu',
                            'menu_class' => 'menu'
                        )
                    )
                    ?>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <form method="get" id="searchform" action="<?php echo home_url(); ?>/" class="flex-item-small input-box absolute">
                            <?php
                            $search_val = get_search_query();
                            if (empty($search_val)) {
                                $search_val = __("Type keywords...", "gdlr_translate");
                            }
                            ?>

                            <input type="text" name="s" id="s" autocomplete="off" data-default="<?php echo esc_attr($search_val); ?>" placeholder="Nhập từ khóa" class="absolute top-1/2 left-1/2 rounded-[4px] h-[35px] w-[280px] outline-none px-[15px] border-none -translate-x-1/2 -translate-y-1/2" placeholder="Search Mockups, Logos..." required>
                        </form>
                    </div>
                </div>
                <div class="search-box lg:hidden block">
                    <i class="fas fa-search"></i>
                    <div class="input-box ">
                        <input class="absolute top-1/2 left-1/2 rounded-[4px] h-[35px] w-[280px] outline-none px-[15px] border-none -translate-x-1/2 -translate-y-1/2" type="text" placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
    </nav>