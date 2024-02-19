<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Kato
 */

get_header();
?>

<!-- BANNER -->
<div class="section subbanner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="caption"><?php //echo $post->title; 
                                        ?></div>
                <?php
                if (function_exists('kato_breadcrumbs')) {
                    kato_breadcrumbs();
                }
                ?>
            </div>
        </div>
    </div>
</div>

<main id="primary" class="site-main">
    <div class="section 404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <div class="wrap404 text-center">
                        <h1 class="color-1">404:PAGE NOT FOUND</h1>
                        <p>We're sorry but we can't seem to find the page you request. This might be because you have typed the web address incorrecly.</p>
                        <?php get_search_form(); ?>
                        <a href="#" title="" class="btn btn-default btn-view-all">CONTACT US</a>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
