<?php 

    // enqueue javascript
    function witeroo_scripts_with_jquery(){
        wp_register_script( 'main.js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
        wp_enqueue_script( 'main.js' );
        wp_localize_script("main.js", "serverVars", array(
            "ajaxUrl" => admin_url("admin-ajax.php"),
          )
        );
    }

    add_action( 'wp_enqueue_scripts', 'witeroo_scripts_with_jquery' );

    

    // post thumbnails
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 384, 216, true ); // default Post Thumbnail dimensions (cropped)
    
        // additional image sizes
        add_image_size( 'witeroo-large', 996, 558, 9999 );
        add_image_size( 'witeroo-medium', 792, 444, 9999 );
    }


    // state cities dropdown
    add_action("wp_ajax_nopriv_state_cities", "ajax_state_cities");
    add_action("wp_ajax_state_cities", "ajax_state_cities");
    
    function ajax_state_cities() {
        header('Content-Type: application/json'); 

        echo file_get_contents(get_template_directory_uri().'/states-cities/'.$_GET['countryCode'].'.json');

        die();

    }

?>