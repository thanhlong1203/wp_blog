<div class="col-sm-4 col-md-4" id="service_<?php echo get_the_ID() ?>">
    <div class="blok feature-item">
        <div class="image">
            <a href="<?php the_permalink(); ?>" title=""><img src="<?php echo get_image_featured_path(get_the_ID()); ?>" alt="<?php the_title() ?>" class="img-responsive" /></a>
        </div>
        <div class="item-body">
            <div class="description">
                <h5 class="blok-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
                </h5>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</div>