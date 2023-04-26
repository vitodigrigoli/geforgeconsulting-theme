<?php
use function Genesis\CustomBlocks\add_block;
use function Genesis\CustomBlocks\add_field;

/*
-----------------------------------
Example Custom Block
-----------------------------------

function register_prefix_name_block() {

  add_block( 'prefix-name', array( 
    'title'    => 'PREFIX NAME', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'prefix-name', 'title' );

  add_field( 'prefix-name', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'prefix-name', 'isValue', array(
    'control' => 'toggle'
  ) );

  add_field( 'prefix-name', 'button-cta', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'prefix-name', 'image', array(
    'control' => 'image'
  ) );

  add_field( 'prefix-name', 'inner blocks', array(
    'control' => 'inner_blocks'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_prefix_name_block' );
*/


/*
-----------------------------------
NEO PANEL
-----------------------------------
*/

function register_neo_panel_block() {

  add_block( 'neo-panel', array( 
    'title'    => 'NEO PANEL', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-panel', 'title' );

  add_field( 'neo-panel', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'neo-panel', 'image', array(
    'control' => 'image'
  ) );

  add_field( 'neo-panel', 'button-cta-primary', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'neo-panel', 'url-cta-primary', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'neo-panel', 'button-cta-secondary', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'neo-panel', 'url-cta-secondary', array(
    'control' => 'text',
    'width' => '50'
  ) );

  add_field( 'neo-panel', 'reverse', array(
    'control' => 'toggle'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_panel_block' );



/*
-----------------------------------
NEO HERO
-----------------------------------
*/

function register_neo_hero_block() {

  add_block( 'neo-hero', array( 
    'title'    => 'NEO HERO', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-hero', 'title' );

  add_field( 'neo-hero', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'neo-hero', 'neo-inset', array(
    'control' => 'toggle'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_hero_block' );


/*
-----------------------------------
NEO CARDS
-----------------------------------
*/

function register_neo_cards_block() {

  add_block( 'neo-cards', array( 
    'title'    => 'NEO CARDS', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-cards', 'inner blocks', array(
    'control' => 'inner_blocks'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_cards_block' );


/*
-----------------------------------
NEO CARD
-----------------------------------
*/

function register_neo_card_block() {

  add_block( 'neo-card', array( 
    'title'    => 'NEO CARD', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-card', 'title' );

  add_field( 'neo-card', 'description');

  add_field( 'neo-card', 'image', array(
    'control' => 'image'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_card_block' );



/*
-----------------------------------
NEO TESTIMONIALS
-----------------------------------
*/

function register_neo_testimonials_block() {

  add_block( 'neo-testimonials', array( 
    'title'    => 'NEO TESTIMONIALS', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-testimonials', 'image', array(
    'control' => 'image'
  ) );

  add_field( 'neo-testimonials', 'inner blocks', array(
    'control' => 'inner_blocks'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_testimonials_block' );


/*
-----------------------------------
NEO TESTIMONIAL
-----------------------------------
*/

function register_neo_testimonial_block() {

  add_block( 'neo-testimonial', array( 
    'title'    => 'NEO TESTIMONIAL', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-testimonial', 'title' );

  add_field( 'neo-testimonial', 'description', array(
    'control' => 'textarea'
  ) );

  add_field( 'neo-testimonial', 'neo-inset', array(
    'control' => 'toggle'
  ) );

}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_testimonial_block' );



/*
-----------------------------------
NEO FORM
-----------------------------------
*/

function register_neo_form_block() {

  add_block( 'neo-form', array( 
    'title'    => 'NEO FORM', 
    'category' => 'common', 
    'icon'     => 'whatshot',  
  ));

  add_field( 'neo-form', 'title' );

  add_field( 'neo-form', 'description', array(
    'control' => 'textarea'
  ) );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_neo_form_block' );