<?php

function theblog_custom_post(){

    $blogPost_label = array(
        'name' => __('Blog Post', 'textdomain'),
        'singular_name' => __('Blog Post', 'textdomain'),
        'add_new' => __(' Add Blog Post', 'textdomain'),
        'add_new_item' => __('Add New Blog', 'textdomain'),
        'edit_item' => __('Edit Blog Post', 'textdomain'),
        'all_items' => __('Blog Post', 'textdomain')

    );

    $blogPost_args = array(
        'labels'  => $blogPost_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('blogPost' , $blogPost_args);

    $latestPost_label = array(
        'name' => __('Latest Post', 'textdomain'),
        'singular_name' => __('Latest Post', 'textdomain'),
        'add_new' => __(' Add Latest Post', 'textdomain'),
        'add_new_item' => __('Add Latest Post', 'textdomain'),
        'edit_item' => __('Latest Post Post', 'textdomain'),
        'all_items' => __('Latest Post', 'textdomain')

    );



    $latestPost_args = array(
        'labels'  => $latestPost_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('latestPost' , $latestPost_args);
    
    $featurePost_label = array(
        'name' => __('Feature Post', 'textdomain'),
        'singular_name' => __('Feature Post', 'textdomain'),
        'add_new' => __(' Add Feature Post', 'textdomain'),
        'add_new_item' => __('Add Feature Post', 'textdomain'),
        'edit_item' => __('Feature Post Post', 'textdomain'),
        'all_items' => __('Feature Post', 'textdomain')

    );



    $featurePost_args = array(
        'labels'  => $featurePost_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('featurePost' , $featurePost_args);

    $daemonPost_label = array(
        'name' => __('daemon Post', 'textdomain'),
        'singular_name' => __('daemon Post', 'textdomain'),
        'add_new' => __(' Add daemon Post', 'textdomain'),
        'add_new_item' => __('Add daemon Post', 'textdomain'),
        'edit_item' => __('daemon Post Post', 'textdomain'),
        'all_items' => __('daemon Post', 'textdomain')

    );



    $daemonPost_args = array(
        'labels'  => $daemonPost_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('daemonPost' , $daemonPost_args);
}

add_action('init','theblog_custom_post');
