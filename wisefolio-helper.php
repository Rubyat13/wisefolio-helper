<?php

/*

Plugin Name: Wisefolio Helper

Plugin URI: https://wisemattic.com/wisefolio

Description: Plugin to accompany custom post plugin add various post , registers a post type.

Version: 1.0.0

Author: Wisemattic

Author URI: https://wisemattic.com

License: GPLv2 or later

Text Domain: custom-posts

*/


if(!defined('ABSPATH'))
{
    echo "What are you trying to do?";
    exit;
}

class WiseCustomPost{
   /**
     * Initialize this class
     */
    public function __construct() {
        // add_action( 'init', [$this, 'slider_post_type'] );
        add_action( 'init', [$this, 'wfolio_service_post_type'] );
        // add_action( 'init', [$this, 'wfolio_feature_post_type'] );
        add_action( 'init', [$this, 'wfolio_filter_portfolio_post_type'] );
        add_action( 'init', [$this, 'wfolio_team_post_type'] );
        add_action( 'init', [$this, 'wfolio_portfolio_category_taxonomy'] );
        add_action( 'init', [$this, 'wfolio_testimonial_post_type'] );
        add_action( 'init', [$this, 'wfolio_education_post_type'] );
        add_action( 'init', [$this, 'wfolio_skill_post_type'] );
        add_action( 'init', [$this, 'wfolio_skill_category_taxonomy'] );
        add_action( 'init', [$this, 'wfolio_experience_post_type'] );
    }

    /**
     * slider post type
     *
     * @version 1.0.0
     */
    public function wfolio_slider_post_type() {
        register_post_type('slider', [
            'label'     => __( 'Slider', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Slider', 'wise-portfolio' ),
                'singular_name' => __( 'Slide', 'wise-portfolio' ),
                'add_new'       => __( 'Add new slide', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add new slide', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Slide', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-images-alt',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


    /**
     * service post type
     *
     * @version 1.0.0
     */
    public function wfolio_service_post_type() {
        register_post_type('service', [
            'label'     => __( 'Service', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Service', 'wise-portfolio' ),
                'singular_name' => __( 'Service', 'wise-portfolio' ),
                'add_new'       => __( 'Add new service', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add new service', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Service', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-admin-generic',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }

    
    /**
     * education post type
     *
     * @version 1.0.0
     */
    public function wfolio_education_post_type() {
        register_post_type('education', [
            'label'     => __( 'Education', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Education', 'wise-portfolio' ),
                'singular_name' => __( 'Education', 'wise-portfolio' ),
                'add_new'       => __( 'Add new education', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add new education', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Education', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-welcome-learn-more',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


    /**
     * Feature post type
     *
     * @version 1.0.0
     */
    public function wfolio_feature_post_type() {
        register_post_type('feature', [
            'label'     => __( 'Feature', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Feature', 'wise-portfolio' ),
                'singular_name' => __( 'feature', 'wise-portfolio' ),
                'all_items' => __( 'All Feature', 'wise-portfolio'),
                'add_new'       => __( 'Add New', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add New', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Feature', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-text',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }

     /**
     * Team post type
     *
     * @version 1.0.0
     */
    public function wfolio_team_post_type() {
        register_post_type('team', [
            'label'     => __( 'Team', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Team', 'wise-portfolio' ),
                'singular_name' => __( 'feature', 'wise-portfolio' ),
                'all_items' => __( 'All Team', 'wise-portfolio'),
                'add_new'       => __( 'Add New', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add New', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Team', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-groups',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


    
     /**
     * Experience post type
     *
     * @version 1.0.0
     */
    public function wfolio_experience_post_type() {
        register_post_type('experience', [
            'label'     => __( 'Experience', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Experience', 'wise-portfolio' ),
                'singular_name' => __( 'feature', 'wise-portfolio' ),
                'all_items' => __( 'All Experience', 'wise-portfolio'),
                'add_new'       => __( 'Add New', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add New', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Experience', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-image-filter',
            'public'    => true,
            'supports'  => ['title', 'editor', 'custom-fields', 'thumbnail']
        ]);
    }


 /**
     * feature post type
     *
     * @version 1.0.0
     */

    // add_action('init', 'filter_portfolio_post_type');

    function wfolio_filter_portfolio_post_type() {
        register_post_type( 'portfolio',
            array( 'labels' => array(
                'name' => __( 'Portfolio', 'wise-portfolio'),
                'all_items' => __( 'All Portfolio', 'wise-portfolio'),
                'singular_name' => __( 'Portfolio', 'wise-portfolio'),
                'add_new' => __( 'Add New', 'wise-portfolio'),
                'add_new_item' => __( 'Add New Portfolio', 'wise-portfolio'),
                'edit' => __( 'Edit', 'wise-portfolio'),
                'edit_item' => __( 'Edit Portfolio', 'wise-portfolio'),
                'new_item' => __( 'New Portfolio', 'wise-portfolio'),
                'view_item' => __( 'View Portfolio', 'wise-portfolio'),
                'search_items' => __( 'Search Portfolio', 'wise-portfolio'),
                'not_found' =>  __( 'No Portfolio found, yet!', 'wise-portfolio'),
                'not_found_in_trash' => __( 'Nothing found in Trash', 'wise-portfolio'),
                'parent_item_colon' => ''
                ),
                'description' => __( 'A place for our portfolio to live', 'wise-portfolio'),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 5,
                'menu_icon'=> 'dashicons-format-gallery',
                'rewrite'  => array( 'slug' => 'portfolio', 'with_front' => true ),
                'has_archive' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
            )
        );

  }

  function wfolio_portfolio_category_taxonomy() {
    // Define the taxonomy
      $labels = array(
        'name' => __( 'Portfolio Category', 'wise-portfolio' ),
        'singular_name' => __( 'Portfolio Category', 'wise-portfolio' ),
        'search_items' =>  __( 'Search Category', 'wise-portfolio' ),
        'all_items' => __( 'All Category', 'wise-portfolio' ),
        'parent_item' => __( 'Parent Category', 'wise-portfolio' ),
        'parent_item_colon' => __( 'Parent Category:', 'wise-portfolio' ),
        'edit_item' => __( 'Edit Category', 'wise-portfolio' ),
        'update_item' => __( 'Update Category', 'wise-portfolio' ),
        'add_new_item' => __( 'Add New Category', 'wise-portfolio' ),
        'new_item_name' => __( 'New Category Name', 'wise-portfolio' ),
        'menu_name' => __( 'Category', 'wise-portfolio' ),
      );

    // Now register the taxonomy
      register_taxonomy('portfolio_category',array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'portfolio_category' ),
      ));
    }


    /**
     * feature post type
     *
     * @version 1.0.0
     */

    // add_action('init', 'skill_post_type');

    function wfolio_skill_post_type() {
        register_post_type( 'skill',
            array( 'labels' => array(
                'name' => __( 'Skill', 'wise-portfolio'),
                'all_items' => __( 'All Skill', 'wise-portfolio'),
                'singular_name' => __( 'Skill', 'wise-portfolio'),
                'add_new' => __( 'Add New', 'wise-portfolio'),
                'add_new_item' => __( 'Add New Skill', 'wise-portfolio'),
                'edit' => __( 'Edit', 'wise-portfolio'),
                'edit_item' => __( 'Edit Skill', 'wise-portfolio'),
                'new_item' => __( 'New Skill', 'wise-portfolio'),
                'view_item' => __( 'View Skill', 'wise-portfolio'),
                'search_items' => __( 'Search Skill', 'wise-portfolio'),
                'not_found' =>  __( 'No Skill found, yet!', 'wise-portfolio'),
                'not_found_in_trash' => __( 'Nothing found in Trash', 'wise-portfolio'),
                'parent_item_colon' => ''
                ),
                'description' => __( 'A place for our portfolio to live', 'wise-portfolio'),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 5,
                'menu_icon'=> 'dashicons-hammer',
                'rewrite'  => array( 'slug' => 'portfolio', 'with_front' => true ),
                'has_archive' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
            )
        );

  }

    function wfolio_skill_category_taxonomy() {
        // Define the taxonomy
          $labels = array(
            'name' => __( 'Skill Category', 'wise-portfolio' ),
            'singular_name' => __( 'Skill Category', 'wise-portfolio' ),
            'search_items' =>  __( 'Search Category', 'wise-portfolio' ),
            'all_items' => __( 'All Category', 'wise-portfolio' ),
            'parent_item' => __( 'Parent Category', 'wise-portfolio' ),
            'parent_item_colon' => __( 'Parent Category:', 'wise-portfolio' ),
            'edit_item' => __( 'Edit Category', 'wise-portfolio' ),
            'update_item' => __( 'Update Category', 'wise-portfolio' ),
            'add_new_item' => __( 'Add New Category', 'wise-portfolio' ),
            'new_item_name' => __( 'New Category Name', 'wise-portfolio' ),
            'menu_name' => __( 'Category', 'wise-portfolio' ),
          );
    
        // Now register the taxonomy
          register_taxonomy('skill_category',array('skill'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'skill_category' ),
          ));
        }



     /**
     * Testimonial post type
     *
     * @version 1.0.0
     */
    public function wfolio_testimonial_post_type() {
        register_post_type('testimonial', [
            'label'     => __( 'Testimonial', 'wise-portfolio' ),
            'labels'    => [
                'name'  => __( 'Testimonial', 'wise-portfolio' ),
                'singular_name' => __( 'feature', 'wise-portfolio' ),
                'all_items' => __( 'All Testimonial', 'wise-portfolio'),
                'add_new'       => __( 'Add New', 'wise-portfolio' ),
                'add_new_item'  => __( 'Add New', 'wise-portfolio' ),
                'edit_item'     => __( 'Edit Testimonial', 'wise-portfolio' )
            ],
            'menu_icon' => 'dashicons-testimonial',
            'public'    => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields')
        ]);
    }

}

new WiseCustomPost;


