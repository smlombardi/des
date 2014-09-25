<?php
/*-------------------------------------------------------*/
/* Run Theme Blvd framework (required)
/*-------------------------------------------------------*/

require_once( get_template_directory() . '/framework/themeblvd.php' );

/*-------------------------------------------------------*/
/* Start Child Theme
/*-------------------------------------------------------*/

// Your actions and filters go here ...
// See http://dev.themeblvd.com

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( ring,
        array(
            'labels' => array(
                'name' => __( 'Rings' ),
                'singular_name' => __( 'Ring' ),
                'add_new' => _x('Add Ring', 'rings'),
                'add_new_item' => __('Add Ring'),
                'edit' => _x('Edit Rings', 'Rings'),
                'edit_item' => __('Edit Ring'),
                'new_item' => __('New Ring'),
                'view' => _x('View Rings', 'rings'),
                'view_item' => __('View Ring')
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail', 'excerpt'),
        'capability_type' => 'page',
        'map_meta_cap' => true,
        'menu_position' => 5,
        'taxonomies' => array('category'),
        )
    );


}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'product', 400, 500 );
}
