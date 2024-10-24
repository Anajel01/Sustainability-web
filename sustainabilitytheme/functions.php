<?php function my_portfolio_enqueue_styles() {
    wp_enqueue_style('Inter', "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");

    wp_enqueue_style('my_portfolio_enqueue_styles', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css");
}

add_action("wp_enqueue_scripts", "my_portfolio_enqueue_styles");

function acf_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}

add_action("init", "acf_remove_gutenberg");

function theme_name_scripts() {
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function plp_register_strings() {
    pll_register_string("Polylang Playground","Want to become a part of the team? Great, find us at these locations!");
    pll_register_string("Polylang Playground","No locations near you? - Help us expand!");
    pll_register_string("Polylang Playground","Our team can be wherever you are!");
    pll_register_string("Polylang Playground","Once you have the video, send it by filling out the form below. Our team will review it and send you the t-shirts within 2 weeks. Each of your friends has to fill out the form seperatelly.");
    pll_register_string("Polylang Playground","Present");
    pll_register_string("Polylang Playground","Read more");
    pll_register_string("Polylang Playground","Join our team now!");
    pll_register_string("Polylang Playground","Close Form");
    pll_register_string("Polylang Playground","Sign me up");
    pll_register_string("Polylang Playground","Company");
    pll_register_string("Polylang Playground","About us");
    pll_register_string("Polylang Playground","Careers");
    pll_register_string("Polylang Playground","Privacy policy");
    pll_register_string("Polylang Playground","Contact us");
    pll_register_string("Polylang Playground","Locations");
    pll_register_string("Polylang Playground","Marine watchdogs");
    pll_register_string("Polylang Playground","Let's go!");
    

}



add_action("init", "plp_register_strings");