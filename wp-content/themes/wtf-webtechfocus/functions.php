<?php 
function wtf_files(){
    wp_enqueue_script( 'main-wtf-js', get_theme_file_uri( '/assets/js/bootstrap/dist/js/bootstrap.bundle.min.js' ));
    wp_enqueue_script( 'jquery-wtf-js', get_theme_file_uri( '/assets/js/jquery-3.6.1.js' ));
    wp_enqueue_script( 'form-wtf-js', get_theme_file_uri( '/assets/send-email/contact-form-wtf.js' ));
    wp_enqueue_script( 'chart-js', get_theme_file_uri( '/assets/js/chart.umd.js' ));
    wp_enqueue_script( 'line-graph-js', get_theme_file_uri( '/assets/js/line-graph.js' ));
    wp_enqueue_script( 'color-modes-js', get_theme_file_uri( '/assets/js/color-modes.js' ));
    wp_enqueue_script( 'color-modes-js', get_theme_file_uri( '/assets/js/index.js' ));
    
    wp_enqueue_style( 'wtf_main_styles', get_theme_file_uri( '/assets/css/wtf-mm.css' ));
}
add_action( 'wp_enqueue_scripts', 'wtf_files' );

function wtf_features(){
    register_nav_menu( 'onePageMenu', 'One Page Menu' );
    register_nav_menu( 'multiLanguageMenu', 'Multi Language Menu' );
    register_nav_menu( 'multiPageMenu', 'Multi PageMenu' );
    register_nav_menu( 'footerColOneMenu', 'Footer Col One Menu' );
    register_nav_menu( 'footerColTwoMenu', 'Footer Col Two Menu' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'wtf_features' );

function wtf_adjust_queries($query){
 if(!is_admin() AND is_post_type_archive('event') AND $query-> is_main_query( )){
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(array(
        'key' => 'event_date',
        'compare' => '>=',
        'key' => $today,
        'type' => 'numeric'
    )));
 }
}

add_action( 'pre_get_posts', 'wtf_adjust_queries' );
