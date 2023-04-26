<!-- Testimonials -->
<section class="testimonials container">

    <div class="testimonials__media">
        <?php echo wp_get_attachment_image( block_value('image'), 'full') ?>

        <div class="testimonials__media__icons">
        
            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/heart.png') ?>" alt="">
            </div>
    
            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/like.png') ?>" alt="">
            </div>

            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/star.png') ?>" alt="">
            </div>
    
            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/heart.png') ?>" alt="">
            </div>

            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/star.png') ?>" alt="">
            </div>
    
            <div class="testimonials__icon">
                <img src="<?php echo get_theme_file_uri('/assets/img/like.png') ?>" alt="">
            </div>
    
        </div>
    </div>

    <div class="testimonials__reviews">
        <?php block_field('inner-blocks') ?>
    </div>

</section>