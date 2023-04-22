<?php

	/* Dependecies
	------------------------------------------------------------------------- */
	require_once('blocks/actions-create-blocks.php');


	/* Setup theme
	--------------------------------------------------------------------------*/
	function ge_setup(){

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Enable custom logo
		add_theme_support( 'custom-logo' );

		// Enable excerpt page
		add_post_type_support( 'page', 'excerpt' );

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'ge' )
		));
	}

	add_action( 'after_setup_theme', 'ge_setup' );


	/* Enqueue CSS
	--------------------------------------------------------------------------*/
	function ge_styles(){
		wp_enqueue_style( 'ge-style', get_template_directory_uri().'/style.css' );
		wp_enqueue_style( 'ge-google-font','//fonts.googleapis.com/css?family=Lato:300,400,700');
	}

	add_action( 'wp_enqueue_scripts', 'ge_styles' );


	/* Enqueue JS
	--------------------------------------------------------------------------*/
  	function ge_scripts(){
		wp_enqueue_script( 'ge-jquery',get_template_directory_uri() .'/jquery-3.6.3.js', null, '', true );
		wp_enqueue_script( 'ge-scrollify','//cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'ge-email-js','//cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js', null, '', true );
		wp_enqueue_script( 'ge-scripts-js', get_template_directory_uri() .'/assets/js/scripts.js', array( 'jquery', 'ge-scrollify' ), '', true );
	}

	add_action( 'wp_enqueue_scripts', 'ge_scripts' );


	/* Add Font Awesome
  	------------------------------------------------------------------------- */
	  function ge_fontawesome_kit() {

		wp_enqueue_script( 'fa-kit', '//kit.fontawesome.com/3352ada0d1.js', null, true  );
	}
	
	add_action( 'wp_enqueue_scripts', 'ge_fontawesome_kit' );
	

	/* Enable Custom Blocks preview on Gutemberg
	--------------------------------------------------------------------------*/
	function ge_gutenberg_preview() {
		wp_enqueue_style( 'ge-gutemberg-preview', get_theme_file_uri( '/blocks/preview.css' ), false );
	}

	add_action( 'enqueue_block_editor_assets', 'ge_gutenberg_preview' );
?>
