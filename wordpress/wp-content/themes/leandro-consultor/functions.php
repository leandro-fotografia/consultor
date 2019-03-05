<?php

function assets() {
    $asset = get_template_directory_uri();
    
    wp_enqueue_style('carousel', $asset. '/css/owl.carousel.css');
	wp_enqueue_style('bootstrap', $asset. '/css/bootstrap.css');
	wp_enqueue_style('site-style', $asset. '/css/style.css');
	wp_enqueue_style('fontawesome', $asset. '/css/fontawesome-all.css');
    wp_enqueue_style('flexslider', $asset. '/css/flexslider.css');

    wp_enqueue_script('bootstrap-js', $asset. '/js/bootstrap.js');
    wp_enqueue_script('carousel-js', $asset. '/js/owl.carousel.js');
    wp_enqueue_script('waypoints', $asset. '/js/waypoints.min.js');
    wp_enqueue_script('counterup', $asset. '/js/counterup.min.js');
    wp_enqueue_script('responsiveslides', $asset. '/js/responsiveslides.min.js');
    wp_enqueue_script('smoothscroll', $asset. '/js/SmoothScroll.min.js');
    wp_enqueue_script('moveTop', $asset. '/js/move-top.js');
    wp_enqueue_script('easing', $asset. '/js/easing.js');
}

add_action('wp_enqueue_scripts', 'assets');

function getTelefone($id) {
    $fields = '';
    if (get_fields($id) !== false || !empty(get_fields($id))) {
        $fields = get_fields($id);
        return $fields['telefone'];
    } else {
        return $fields;
    }
}