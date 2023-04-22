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