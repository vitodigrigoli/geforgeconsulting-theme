<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_theme_file_uri('./assets/css/neumorphism.css') ?>">
    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


    <!-- Floating -->
    <a class="floating button" href="https://wa.me/09221757680">
        <i class="fa-brands fa-whatsapp"></i> Scrivi a Sofia 😉
    </a>
    
    <!-- Panel -->
    <header class="panel container">

        <div class="panel__text">
            <h1 class="text--1"><?php the_title() ?></h1>
            <p><?php the_excerpt() ?></p>

            <div class="buttons">
                <a href="" class="button">Button cta</a>
                <a href="" class="button button--secondary">Button cta</a>
            </div>
        </div>

        <div class="panel__media neo">
            <?php the_post_thumbnail() ?>
        </div>

    </header>
    
</body>
</html>