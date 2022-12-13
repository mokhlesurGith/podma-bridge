<?php
	// wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-boot', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'script-name', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', true );

    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_sidebar(array(
        'name'=>'Top Right Logo',
        'id'=>'bdlogo',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Hero Bottom Image',
        'id'=>'hbimg',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Hero Bottom body',
        'id'=>'hbbody',
        'before_widget'=> '',
		'after_widget'=> '',
    ));

    register_sidebar(array(
        'name'=>'Hero Bottom body 2',
        'id'=>'hbbody2',
        'before_widget'=> '',
		'after_widget'=> '',
    ));

    register_sidebar(array(
        'name'=>'Hero Bottom body 3',
        'id'=>'hbbody3',
        'before_widget'=> '',
		'after_widget'=> '',
    ));

    //
    register_sidebar(array(
        'name'=>'Photo Image-1',
        'id'=>'p_img1',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo body-1',
        'id'=>'p_body_1',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo Image-2',
        'id'=>'p_img2',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo body-2',
        'id'=>'p_body_2',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo Image-3',
        'id'=>'p_img3',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo body-3',
        'id'=>'p_body_3',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo Image-4',
        'id'=>'p_img4',
        'before_widget'=> '',
		'after_widget'=> '',
    ));
    register_sidebar(array(
        'name'=>'Photo body-4',
        'id'=>'p_body_4',
        'before_widget'=> '',
		'after_widget'=> '',
    ));


    register_nav_menus(array(
        'TM'=> 'primary'
    ));
?>