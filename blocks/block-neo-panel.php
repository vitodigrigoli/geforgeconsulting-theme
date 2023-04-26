<!-- Panel -->
<section class="panel container <?php echo block_value('reverse')? 'panel--reverse' : '' ?>">

    <div class="panel__text">
        <h2 class="text--1"><?php block_field('title') ?></h2>
        <?php block_field('description') ?>

        <?php if( block_value('button-cta-primary') != '' | block_value('button-cta-secondary') != '') { ?>

            <div class="buttons">
                <?php if( block_value('button-cta-primary') != '') { ?>
                    <a href="<?php block_field('url-cta-primary') ?>" class="button"><?php block_field('button-cta-primary') ?></a>
                <?php } ?>

                <?php if( block_value('button-cta-secondary') != '') { ?>
                    <a href="<?php block_field('url-cta-secondary') ?>" class="button button--secondary"><?php block_field('button-cta-secondary') ?></a>
                <?php } ?>
            </div>

        <?php } ?>
    </div>

    <div class="panel__media neo">
        <?php echo wp_get_attachment_image( block_value('image'), 'full') ?>
    </div>

</section>
