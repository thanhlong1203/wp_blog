<div class="box-service" id="service_<?php echo get_the_ID() ?>">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="box">
                <img src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="<?php the_title() ?>" class="img-responsive" />
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="description">
                <h5 class="blok-title"><?php the_title() ?></h5>
                <div class="summary"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" title="" class="btn btn-default btn-view-all"><?php _e('View detail', 'kato'); ?></a>
            </div>
        </div>
    </div>
</div>
