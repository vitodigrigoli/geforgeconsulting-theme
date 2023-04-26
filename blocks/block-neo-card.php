<!-- Card -->
<div class="card neo">

    <div class="card__media">
        <?php echo wp_get_attachment_image( block_value('image'), 'full') ?>
    </div>

    <div class="card__text">
        <h3 class="text--3"><?php block_field('title') ?></h3>
        <p><?php block_field('description') ?></p>
    </div>
    
</div>