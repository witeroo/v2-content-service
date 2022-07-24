<?php 

    // enqueue javascript
    function witeroo_scripts_with_jquery(){
        wp_register_script( 'main.js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
        wp_enqueue_script( 'main.js' );
    }

    add_action( 'wp_enqueue_scripts', 'witeroo_scripts_with_jquery' );


    
    // // post excerpt
    // function witeroo_custom_excerpt_length( $length ) {
    //     return 17;
    // }

    // add_filter( 'excerpt_length', 'witeroo_custom_excerpt_length', 999 );


    // function witeroo_excerpt_more( $more ) {
    //     return '';
    // }
    // add_filter( 'excerpt_more', 'witeroo_excerpt_more' );
    


    // post thumbnails
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 384, 216, true ); // default Post Thumbnail dimensions (cropped)
    
        // additional image sizes
        add_image_size( 'witeroo-large', 996, 558, 9999 );
        add_image_size( 'witeroo-medium', 792, 444, 9999 );
    }

?>